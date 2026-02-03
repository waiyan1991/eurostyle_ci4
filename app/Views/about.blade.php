{{-- <div class="container mt-5">
    
    <h2 class="mb-4">Our Services</h2>
    <div class="row mb-5">
        @foreach($services as $service)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ $service['service_image_url'] }}" class="card-img-top" alt="{{ $service['service_name'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $service['service_name'] }}</h5>
                    <p class="card-text text-muted">{{ $service['service_description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h2 class="mb-4 mt-5">Our Products</h2>
    <div class="row mb-5">
        @foreach($products as $product)
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <img src="{{ $product['product_image_url'] }}" class="card-img-top rounded" alt="{{ $product['product_name'] ?? 'Product' }}" style="height: 180px; object-fit: contain; background: #f8f9fa;">
                <div class="card-body text-center">
                    <h6 class="card-title">{{ $product['product_name'] ?? 'Unnamed Product' }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h2 class="mb-4 mt-5">CSR Activities</h2>
    <div class="row">
        @foreach($activities as $activity)
        <div class="col-md-6 mb-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">{{ $activity['activity_name'] ?? 'Activity Title' }}</h3>
                    <p class="card-text mb-auto">{{ $activity['description'] ?? '' }}</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ $activity['activity_image_url'] }}" width="200" height="250" style="object-fit: cover;" alt="CSR">
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div> --}}


<div class="container mt-5">
    
    <h2 class="mb-4">Products Test</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ $product['product_image_url'] }}" class="card-img-top" alt="Product" style="height:150px; object-fit:contain;">
                <div class="card-body">
                    <h6 class="card-title">{{ $product['product_name'] ?? 'No Name Found' }}</h6>
                          <p class="card-text mb-auto">{{ $product['description'] ?? '' }}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h2 class="mb-4">Activities Test</h2>
    <div class="row">
        @foreach($activities as $activity)
        <div class="col-md-6 mb-4">
            <div class="row g-0 border rounded">
                <div class="col p-4">
                    <h4 class="mb-0">{{ $activity['activity_name'] ?? $activity['title'] ?? 'No Activity Name' }}</h4>
                    <p class="mt-2">{{ $activity['activity_description'] ?? $activity['description'] ?? 'No Description Found' }}</p>
                </div>
                <div class="col-auto">
                    <img src="{{ $activity['activity_image_url'] }}" width="150" height="150" style="object-fit: cover;">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>