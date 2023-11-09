<x-app-layout>
    <div class="container py-2">
        <h1>{{ $product->product_name }}</h1>
        <div>
            {{ $product->product_extract }}
        </div>
        <div class="row">
            {{-- Contenido Princiapl --}}
            <div class="col-lg-8 col-md-8 col-sm-12">
                <figure class="figure" style="width: 100%">
                    <img src="{{ Storage::url($product->image->url) }}" width="100%" class="figure-img img-fluid rounded"
                        alt="...">
                    <figcaption class="figure-caption text-end">{{ $product->product_body }}</figcaption>
                </figure>
            </div>
            {{-- Contenido Relacionado --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h1> Más en {{ $product->category->category_name }}</h1>
                @foreach ($similars as $similar)
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <img src="{{ Storage::url($similar->image->url) }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="card-body">
                                    <a class="nav-link card-title"
                                        href="{{ route('products.show', $similar) }}">{{ $similar->product_name }}</a>
                                    <p class="card-text"><small class="text-body-secondary">Materiales</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
