<x-app-layout>
    <!-- Hero Section -->
    <div class="container-fluid p-0">
        <div class="hero-section text-center text-white">
            <div class="container">
                <h1 class="display-4 fw-bold">Nuestros Trabajos Realizados</h1>
                <p class="lead fw-semibold">Donde la elegancia y el diseño se encuentran.</p>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ Storage::url($product->image->url) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="nav-link" href="{{ route('products.show', $product) }}">
                                    {{ $product->product_name }}
                                </a>
                            </h5>
                            <p class="card-text">Leer más...</p>
                        </div>
                        <div class="card-footer">
                            @foreach ($product->materials as $material)
                                <div class="d-inline">
                                    <a href="{{ route('products.material', $material) }}"
                                        class="nav-link badge text-bg-{{ $material->material_color }}">
                                        {{ $material->material_name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="pagination justify-content-end">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
