<x-app-layout>
    <div class="container">
        <h1>Categoría: {{ $category->category_name }}</h1>
        @foreach ($products as $product)
            <div class="card mb-3">
                <figure style="width: 100%; height: 250px; overflow: hidden;">
                    <img src="{{ Storage::url($product->image->url) }}"
                        style="width: 100%; height: 100%; object-fit: cover;" class="card-img-top" alt="...">
                </figure>
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="nav-link"
                            href="{{ route('products.show', $product) }}">{{ $product->product_name }}</a>
                    </h5>
                    <p class="card-text">{{ $product->product_extract }}</p>
                    <p class="card-text">
                        @foreach ($product->materials as $material)
                            <div class="d-inline">
                                <a href="{{ route('products.material', $material) }}"
                                    class="nav-link badge text-bg-{{ $material->material_color }}">
                                    {{ $material->material_name }}
                                </a>
                            </div>
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach
        <hr>
        <div class="row">
            <div class="pagination justify-content-end">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
