@extends('template')
@section('title', 'Endereço de entrega')
@section('body')

    <div id="produtos" class="container my-5">

        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-3">Endereço de entrega</h1>
                

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                <form action="/finalizar-pedido" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="rua_numero">Rua e Número*:</label>
                        <input type="text" class="form-control" id="rua_numero" name="rua_numero" required>
                    </div>
                    <div class="mb-3">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                    <div class="mb-3">
                        <label for="bairro">Bairro*:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                    </div>
                    <div class="mb-3">
                        <label for="cidade_municipio">Cidade ou Município*:</label>
                        <input type="text" class="form-control" id="cidade_municipio" name="cidade_municipio" required>
                    </div>
                    <div class="mb-3">
                        <label for="estado_provincia">Estado ou Província*:</label>
                        <input type="text" class="form-control" id="estado_provincia" name="estado_provincia" required>
                    </div>
                    <div class="mb-3">
                        <label for="cep">CEP (Código Postal)*:</label>
                        <input type="text" class="form-control" id="cep" name="cep" required>
                    </div>
                    <div class="mb-3">
                        <label for="pais">País*:</label>
                        <input type="text" class="form-control" id="pais" name="pais" required>
                    </div>
                    <div class="mb-3">
                        <label for="instrucoes_entrega">Instruções de Entrega:</label>
                        <textarea class="form-control" id="instrucoes_entrega" name="instrucoes_entrega" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nome_destinatario">Nome do Destinatário*:</label>
                        <input type="text" class="form-control" id="nome_destinatario" name="nome_destinatario" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone_destinatario">Telefone do Destinatário:</label>
                        <input type="text" class="form-control" id="telefone_destinatario" name="telefone_destinatario">
                    </div>
                    
                    <input type="hidden" id="produtosInput" name="produtos" value="">

                    <button type="submit" class="btn btn-primary">Fazer pedido</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        const input = document.getElementById('produtosInput');
        input.value = localStorage.getItem('cart');
    </script>

@endsection