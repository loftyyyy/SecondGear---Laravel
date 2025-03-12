<?php
Route::get('/models', function(\Illuminate\Http\Request $request) {
    if ($request->has('brand')) {
        $models = \App\Models\Car::where('brand', $request->brand)
                                  ->distinct()
                                  ->pluck('model')
                                  ->sort()
                                  ->values();
        return response()->json($models);
    }
    
    return response()->json([]);
});