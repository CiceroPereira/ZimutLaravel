<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller 
{

	public function index()
    {
        $all = Pessoa::paginate(10);
        return view('listar', compact('all'));
       
    }
    
	public function store(PessoaRequest $request)
    {
        
        $pessoa = new Pessoa;
        $pessoa->name = $request->name;
        $pessoa->data = $request->data;
        $pessoa->cpf = $request->cpf;
        $pessoa->cep = $request->cep;
        $pessoa->endereco = $request->endereco;
        $pessoa->numero = $request->numero;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->estado = $request->estado;
        $pessoa->complemento = $request->complemento;
       
        $pessoa->save();
       // dd($request->all());
        return redirect()->back()->with('message', 'Pessoa inserida com sucesso');

    }

      public function destroy($id)
    {
        $dado = Pessoa::findOrFail($id);
        $dado->delete();
        return back()->with(['success' => 'Dado deletado com sucesso']);
    }

    public function edit($id)
    {

        $dado = Pessoa::findOrFail($id);
        return view('editar', compact('dado'));
    }
  
    public function update(PessoaRequest $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->name = $request->name;
        $pessoa->data = $request->data;
        $pessoa->cpf = $request->cpf;
        $pessoa->cep = $request->cep;
        $pessoa->endereco = $request->endereco;
        $pessoa->numero = $request->numero;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->estado = $request->estado;
        $pessoa->complemento = $request->complemento;
        $pessoa->update(); 
        return redirect('/index');
    }
      



}
