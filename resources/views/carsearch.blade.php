    <h2 class="flex text-4xl font-bold text-white justify-center mt-6">Car Search</h2> 
    <div class="flex justify-between mx-10 py-6 flex-wrap"> 
        <div class="w-full p-6 bg-white border border-gray-200 rounded-xl shadow-sm bg-opacity-15"> 
            <form action="{{ route('browse') }}" method="GET" id="carSearchForm">
                <ul class="mt-4 text-lg text-black">
                    <li class="flex justify-between text-white font-bold mb-3">
                        <label><input type="radio" name="build" value="stock" {{ request('build') == 'stock' ? 'checked' : '' }}> Stock</label>
                        <label><input type="radio" name="build" value="modified" {{ request('build') == 'modified' ? 'checked' : '' }}> Modified</label>
                    </li>
                    
                    <li>
                        <select id="brand" name="brand" class="w-full p-2 border border-gray-300 rounded-2xl my-3">
                            <option value="">All Brands</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand }}" {{ request('brand') == $brand ? 'selected' : '' }}>{{ $brand }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="model" name="model" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">All Models</option>
                            @foreach($models as $model)
                                <option value="{{ $model }}" {{ request('model') == $model ? 'selected' : '' }}>{{ $model }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="from_year" name="from_year" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">Year (From)</option>
                            @foreach($years as $year)
                                <option value="{{ $year }}" {{ request('from_year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="to_year" name="to_year" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">Year (To)</option>
                            @foreach($years as $year)
                                <option value="{{ $year }}" {{ request('to_year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>    
                        <select id="city" name="city" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">All Cities</option>
                            @foreach($cities as $city)
                                <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="transmission" name="transmission" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">All Transmissions</option>
                            @foreach($transmissions as $transmission)
                                <option value="{{ $transmission }}" {{ request('transmission') == $transmission ? 'selected' : '' }}>{{ $transmission }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="color" name="color" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">All Colors</option>
                            @foreach($colors as $color)
                                <option value="{{ $color }}" {{ request('color') == $color ? 'selected' : '' }}>{{ $color }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li>
                        <select id="body_type" name="body_type" class="w-full p-2 border border-gray-300 rounded-2xl my-2">
                            <option value="">All Body Types</option>
                            @foreach($bodyTypes as $bodyType)
                                <option value="{{ $bodyType }}" {{ request('body_type') == $bodyType ? 'selected' : '' }}>{{ $bodyType }}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    <li class="flex gap-2 my-2">
                        <div class="flex-1">
                            <input type="number" name="min_price" placeholder="Min Price" class="w-full p-2 border border-gray-300 rounded-2xl" value="{{ request('min_price') }}">
                        </div>
                        <div class="flex-1">
                            <input type="number" name="max_price" placeholder="Max Price" class="w-full p-2 border border-gray-300 rounded-2xl" value="{{ request('max_price') }}">
                        </div>
                    </li>
                    
                    <li>
                        <button type="submit" class="bg-green-400 text-black p-2 rounded-2xl hover:bg-green-700 w-full mt-4">Search</button> 
                    </li>
                    
                    @if(count(request()->all()) > 0)
                        <li>
                            <a href="{{ route('browse') }}" class="block text-center bg-red-400 text-black p-2 rounded-2xl hover:bg-red-700 w-full mt-2">Clear Filters</a>
                        </li>
                    @endif
                </ul>
            </form>
        </div>
    </div>

    <h2 class="text-4xl font-bold text-white justify-center flex mt-8 col-span-12">Popular Brands</h2> 
    <div class="flex justify-between mx-10 py-6 flex-wrap col-span-12"> 
        <div class="w-full p-3 bg-white border border-gray-200 shadow-sm"> 
            <ul class="mt-4 text-lg text-black">
                @foreach($brands->take(8) as $brand)
                    <li class="my-2"> 
                        <a href="{{ route('browse', ['brand' => $brand]) }}" class="hover:text-blue-600">{{ $brand }}</a>
                    </li>
                @endforeach
                @if($brands->count() > 8)
                    <hr>
                    <li>
                        <button id="showMoreBrands" class="flex text-[#2070D2] p-2 rounded w-full mt-0 justify-end">
                            Show More <i class="fa-solid fa-circle-arrow-right ml-2 mt-1"></i>
                        </button>
                    </li>
                @endif
            </ul>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Brand-dependent model filter
    const brandSelect = document.getElementById('brand');
    const modelSelect = document.getElementById('model');
    
    if (brandSelect && modelSelect) {
        brandSelect.addEventListener('change', function() {
            const selectedBrand = this.value;
            
            if (selectedBrand) {
                // You can implement AJAX to fetch models for the selected brand
                fetch(`/api/models?brand=${selectedBrand}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear existing options except the first one
                        while (modelSelect.options.length > 1) {
                            modelSelect.remove(1);
                        }
                        
                        // Add new options
                        data.forEach(model => {
                            const option = new Option(model, model);
                            modelSelect.add(option);
                        });
                    })
                    .catch(error => console.error('Error fetching models:', error));
            }
        });
    }
    
    // Show more brands functionality
    const showMoreBtn = document.getElementById('showMoreBrands');
    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', function() {
            window.location.href = "{{ route('browse') }}?show_all_brands=1";
        });
    }
});
</script>