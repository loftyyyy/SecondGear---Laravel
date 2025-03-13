<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of cars.
     */
    public function index(Request $request)
    {
        $query = Car::where('is_approved', true)->where('is_sold', false);

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
    
            $query->where(function ($q) use ($searchTerm) {
                $q->where('brand', 'LIKE', $searchTerm)
                  ->orWhere('model', 'LIKE', $searchTerm)
                  ->orWhere('body_type', 'LIKE', $searchTerm)
                  ->orWhere('city', 'LIKE', $searchTerm)
                  ->orWhere('transmission', 'LIKE', $searchTerm)
                  ->orWhere('color', 'LIKE', $searchTerm)
                  ->orWhere('build', 'LIKE', $searchTerm)
                  ->orWhere('year', 'LIKE', $searchTerm)
                  ->orWhere('price', 'LIKE', $searchTerm);
            });
        }
    

        // Handle filtering
        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }
        
        if ($request->filled('model')) {
            $query->where('model', $request->model);
        }
        
        if ($request->filled('body_type')) {
            $query->where('body_type', $request->body_type);
        }
        
        if ($request->filled('from_year')) {
            $query->where('year', '>=', $request->from_year);
        }
        
        if ($request->filled('to_year')) {
            $query->where('year', '<=', $request->to_year);
        }
        
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }
        
        if ($request->filled('transmission')) {
            $query->where('transmission', $request->transmission);
        }
        
        if ($request->filled('color')) {
            $query->where('color', $request->color);
        }
        
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
        
        if ($request->filled('build')) {
            $query->where('build', $request->build);
        }
    
        $cars = $query->latest()->paginate(12);
        
        // Get unique values for dropdowns
        $brands = Car::distinct()->pluck('brand')->sort();
        $models = Car::distinct()->pluck('model')->sort();
        $years = Car::distinct()->pluck('year')->sort()->reverse();
        $cities = Car::distinct()->pluck('city')->sort();
        $transmissions = Car::distinct()->pluck('transmission')->sort();
        $colors = Car::distinct()->pluck('color')->sort();
        $bodyTypes = Car::distinct()->pluck('body_type')->sort();
        
        return view('browse', compact('cars', 'brands', 'models', 'years', 'cities', 'transmissions', 'colors', 'bodyTypes'));
    }

        /**
     * Get models for a specific brand (used by the search form)
     */
    public function getModelsByBrand(Request $request)
    {
        if ($request->has('brand')) {
            $models = Car::where('brand', $request->brand)
                        ->distinct()
                        ->pluck('model')
                        ->sort()
                        ->values();
            return response()->json($models);
        }
        
        return response()->json([]);
    }

    /**
     * Display a listing of all brands (for the "Show More" functionality)
     */
    public function allBrands()
    {
        $brands = Car::distinct()->pluck('brand')->sort();
        return view('brands.index', compact('brands'));
    }
    /**
     * Show the form for creating a new car listing.
     */
    public function create()
    {
        return view('sell/sellmain');
    }

    /**
     * Store a newly created car listing in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric|min:0',
                'brand' => 'required|string|max:255',
                'brand_other' => 'nullable|required_if:brand,Other|string|max:255',
                'model' => 'required|string|max:255',
                'model_other' => 'nullable|required_if:model,Other|string|max:255',
                'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
                'color' => 'required|string|max:255',
                'color_other' => 'nullable|required_if:color,Other|string|max:255',
                'body_type' => 'required|string|max:255',
                'body_type_other' => 'nullable|required_if:body_type,Other|string|max:255',
                'transmission' => 'required|string|max:255',
                'transmission_other' => 'nullable|required_if:transmission,Other|string|max:255',
                'mileage' => 'required|integer|min:0',
                'build' => 'nullable|string|max:255',
                'fuel_type' => 'nullable|string|max:255',
                'engine_capacity' => 'nullable|string|max:255',
                'city' => 'required|string|max:255',
                'contact_name' => 'nullable|string|max:255',
                'contact_email' => 'nullable|email|max:255',
                'contact_phone' => 'nullable|string|max:255',
                'car_images.*' => 'nullable|image|max:5120',
                'document_images.*' => 'nullable|image|max:5120',
                'driver_airbag' => 'nullable|boolean',
                'passenger_airbag' => 'nullable|boolean',
                'brake_assist' => 'nullable|boolean',
                'security_alarm' => 'nullable|boolean',
                'traction_control' => 'nullable|boolean',
                'central_locking' => 'nullable|boolean',
                'immobilizer' => 'nullable|boolean',
            ]);
            
            // Handle "Other" options
            $brand = $validated['brand'] === 'Other' ? $validated['brand_other'] : $validated['brand'];
            $model = $validated['model'] === 'Other' ? $validated['model_other'] : $validated['model'];
            $color = $validated['color'] === 'Other' ? $validated['color_other'] : $validated['color'];
            $bodyType = $validated['body_type'] === 'Other' ? $validated['body_type_other'] : $validated['body_type'];
            $transmission = $validated['transmission'] === 'Other' ? $validated['transmission_other'] : $validated['transmission'];

            // Create car
            $car = Car::create([
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
                'price' => $validated['price'],
                'brand' => $brand,
                'model' => $model,
                'year' => $validated['year'],
                'color' => $color,
                'body_type' => $bodyType,
                'transmission' => $transmission,
                'mileage' => $validated['mileage'],
                'build' => $validated['build'] ?? null,
                'fuel_type' => $validated['fuel_type'] ?? null,
                'engine_capacity' => $validated['engine_capacity'] ?? null,
                'city' => $validated['city'],
                'contact_name' => $validated['contact_name'] ?? Auth::user()->name,
                'contact_email' => $validated['contact_email'] ?? Auth::user()->email,
                'contact_phone' => $validated['contact_phone'] ?? null,
                'is_approved' => true, // Auto-approve for now
            ]);
            
            // Create car features
            CarFeature::create([
                'car_id' => $car->id,
                'driver_airbag' => $request->has('driver_airbag'),
                'passenger_airbag' => $request->has('passenger_airbag'),
                'brake_assist' => $request->has('brake_assist'),
                'security_alarm' => $request->has('security_alarm'),
                'traction_control' => $request->has('traction_control'),
                'central_locking' => $request->has('central_locking'),
                'immobilizer' => $request->has('immobilizer'),
            ]);
            
            // Handle car images
            if ($request->hasFile('car_images')) {
                try {
                    foreach ($request->file('car_images') as $index => $image) {
                        $path = $image->store('car-images', 'public');
                        
                        CarImage::create([
                            'car_id' => $car->id,
                            'image_path' => $path,
                            'type' => 'exterior',
                            'is_primary' => $index === 0, // First image is primary
                        ]);
                    }
                } catch (\Exception $e) {
                    // Log the error but continue processing
                    \Log::error('Failed to upload car images: ' . $e->getMessage());
                    session()->flash('warning', 'Car listing created, but there was an issue with uploading images.');
                }
            } else {
                // Log that no images were provided
                \Log::info('No car images provided for listing ID: ' . $car->id);
                session()->flash('warning', 'Car listing created, but no car images were provided.');
            }
            
            // Handle document images
            if ($request->hasFile('document_images')) {
                try {
                    foreach ($request->file('document_images') as $image) {
                        $path = $image->store('car-documents', 'public');
                        
                        CarImage::create([
                            'car_id' => $car->id,
                            'image_path' => $path,
                            'type' => 'document',
                        ]);
                    }
                } catch (\Exception $e) {
                    // Log the error but continue processing
                    \Log::error('Failed to upload document images: ' . $e->getMessage());
                    session()->flash('warning', 'There was an issue with uploading document images.');
                }
            }
            
            return redirect()->route('browse')
                ->with('success', 'Your car listing has been created successfully!');
                
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Enhanced validation error handling
            \Log::debug('Validation failed: ' . json_encode($e->validator->errors()->toArray()));
            
            return back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Please correct the errors in the form: ' . implode(', ', $e->validator->errors()->all()));     
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database errors
            \Log::error('Database error when creating car listing: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'There was a problem saving your listing to the database. Please try again.');
                
        } catch (\Exception $e) {
            // Handle any other exceptions
            \Log::error('Error creating car listing: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again or contact support if the problem persists.');
        }
    }

    /**
     * Display the specified car listing.
     */
    public function show(Car $car)
    {
        // Load relationships
        $car->load(['images', 'features', 'user']);
        
        return view('carselect', compact('car'));
    }

    /**
     * Show the form for editing the specified car listing.
     */
    public function edit(Car $car)
    {
        // Check if user owns this car
        if ($car->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified car listing in storage.
     */
    public function update(Request $request, Car $car)
    {
        // Check if user owns this car
        if ($car->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        
        // Similar validation as store method
        $validated = $request->validate([
            // Same validation rules as store
        ]);
        
        // Update car details
        $car->update([
            // Updated fields
        ]);
        
        // Update features
        $car->features->update([
            'driver_airbag' => $request->has('driver_airbag'),
            'passenger_airbag' => $request->has('passenger_airbag'),
            'brake_assist' => $request->has('brake_assist'),
            'security_alarm' => $request->has('security_alarm'),
            'traction_control' => $request->has('traction_control'),
            'central_locking' => $request->has('central_locking'),
            'immobilizer' => $request->has('immobilizer'),
        ]);
        
        // Handle new images if any
        
        return redirect()->route('cars.show', $car)
            ->with('success', 'Car listing updated successfully!');
    }

    /**
     * Remove the specified car listing from storage.
     */
    public function destroy(Car $car)
    {
        // Check if user owns this car
        if ($car->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        
        // Delete images from storage
        foreach ($car->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }
        
        $car->delete();
        
        return redirect()->route('show.profile')
            ->with('success', 'Car listing deleted successfully!');
    }

    /**
     * Display the current user's car listings.
     */
    public function myListings()
    {
        $cars = Car::where('user_id', Auth::id())
                   ->latest()
                   ->paginate(10);
                   
        return view('cars.my-listings', compact('cars'));
    }

    /**
     * Mark a car as sold.
     */
    public function markAsSold(Car $car)
    {
        // Check if user owns this car
        if ($car->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $car->update(['is_sold' => true]);
        
        return back()->with('success', 'Car marked as sold!');
    }
}
