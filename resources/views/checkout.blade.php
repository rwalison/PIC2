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

                <div id="">
                    <a href="/entrega-e-pagamento" class="btn btn-success">Entrega e Pagamento</a>
                </div>
            </div>
        </div>
    </div>

@endsection