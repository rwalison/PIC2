@extends('template')
@section('title', 'Produtos')
@section('body')

    <div id="produtos" class="container my-5">
        <div class="row">
            <div class="col-12">
                @if ( count($products) > 0)      
                    <h1 class="text-center mb-3">Produtos</h1>
                @else
                    <h2 class="text-danger text-center">Nenhum produto encontrado!</h2>
                @endif
            </div>
                 
            @foreach ($products as $product)
                <div class="col-12 col-md-3">
                    <div class="card my-4 d-flex justify-content-center text-center">
                        <div class="center-cropped" style="background-image: url({{asset('images/produtos/').'/'.$product->image}})" ></div>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text"><small>R$</small>{{number_format($product->price, 2, ',', '.')}}</p>
                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                <a href="/{{$product->id}}" class="btn btn-secondary">Ver mais</a>
                                <a href="#" data-id="{{$product->id}}" class="btn btn-success add-cart">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach                   

        </div>
    </div>

@endsection