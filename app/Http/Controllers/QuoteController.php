<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Mail\QuoteSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * Handle quote form submission
     */
    public function submit(Request $request, Car $car)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'offer_price' => 'required|numeric|min:1',
            'message' => 'nullable|string|max:1000',
        ]);
        
        try {
            // Send email to car owner
            Mail::to($car->user->email)
                ->send(new QuoteSubmitted($car, $validated));
                
            // Flash success message that will be available after redirect
            return redirect()->back()->with('success', 'Your offer has been submitted successfully! The seller will contact you soon.');
            
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Failed to send quote: ' . $e->getMessage());
            
            // Flash error message
            return redirect()->back()->withErrors(['error' => 'Failed to send your offer. Please try again later.'])->withInput();
        }
    }
}
