<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;

class ControllerShop extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $products = Product::where('title', 'LIKE', "%$request->search%")->get();
        }
        else{
            $products = Product::all();
        }        
        return view('index', compact(['products']));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact(['product']));
    }

    public function getCart($id){
        return Product::findOrFail($id);
    }

    public function checkout(){
        return view('checkout');
    }

    public function payment(){
        return view('payment');
    }

    public function store(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'rua_numero' => 'required',
            'bairro' => 'required',
            'cidade_municipio' => 'required',
            'estado_provincia' => 'required',
            'cep' => 'required',
            'pais' => 'required',
            'nome_destinatario' => 'required',
            'produtos' => 'required',
        ]);

        // Crie uma instância do modelo Endereco e preencha os campos com os dados do formulário
        $pedido = new Pedido();
        $pedido->rua_numero = $request->input('rua_numero');
        $pedido->complemento = $request->input('complemento');
        $pedido->bairro = $request->input('bairro');
        $pedido->cidade_municipio = $request->input('cidade_municipio');
        $pedido->estado_provincia = $request->input('estado_provincia');
        $pedido->cep = $request->input('cep');
        $pedido->pais = $request->input('pais');
        $pedido->instrucoes_entrega = $request->input('instrucoes_entrega');
        $pedido->nome_destinatario = $request->input('nome_destinatario');
        $pedido->telefone_destinatario = $request->input('telefone_destinatario');
        $pedido->produtos = $request->input('produtos');

        // Salve o endereço no banco de dados
        $pedido->save();

        // Redirecione para a página de sucesso ou faça outra ação após o salvamento
        return redirect()->route('concluido');
    }

    public function concluido(){
        return view('concluded'); // O nome da view que você vai criar
    }
}