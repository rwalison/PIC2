<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-4 col-12 logo my-2">
                    <a href="/"><img src="{{asset('images/logo.png')}}"></a>
                </div>
                <div class="col-md-8 col-12 my-2" id="search">
                    <form action="/" method="get">
                        <input name="search" type="search" class="form-control" id="exampleDataList" placeholder="Pesquisar produto...">
                    </form>
                    <div class="d-flex justify-content-end align-items-center mt-4">
                        <a href="/checkout" class="btn btn-success text-right mx-4">checkout</a>
                        <a href="#" id="openButton" class="btn btn-success text-right">Carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('body')
    @include('sidebar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('custom.js')}}" async></script>
</body>
</html>