@extends('template')
@section('title', 'Produtos')
@section('body')

    <div id="produto" class="container my-5">
        <div class="card">
            <h5 class="card-header">{{$product->title}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <img class="img-fluid" src="{{asset('images/produtos/').'/'.$product->image}}">
                    </div>
                    <div class="col-md-8 col-12">
                        <h5 class="card-title text-success"><small>R${{$product->price}}</small></h5>
                        <div class="card-text">{{$product->description}}</div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center align-items-center text-center">
                <a href="#" data-id="{{$product->id}}" class="btn btn-success add-cart">Adicionar ao Carrinho</a>
            </div>
        </div>
    </div>

@endsection