@extends('template')
@section('title', 'Checkout')
@section('body')

    <div id="produtos" class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-3">Checkout</h1>
                
                <ul id="checkoutList">
                </ul>
                <p id="totalCheckout" class="text-right"></p>

                <div id="voltarLoja">
                    <h1 class="text-danger text-center">Nenhum produto foi adicionado ao carrinho!</h1>
                    <a href="/" class="btn btn-success mx-auto d-table my-4">Voltar a loja</a>
                </div>
                <div id="continuarCheckout">
                    <a href="/entrega-e-pagamento" class="btn btn-success">Entrega e Pagamento</a>
                </div>
            </div>
        </div>
    </div>

@endsection