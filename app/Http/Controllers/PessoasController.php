<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sabre\Xml\Reader;
use App\Models\Pessoa as PessoaModel;

class PessoasController extends Controller
{
    public function index(Request $request)
    {
        $pessoas = PessoaModel::orderBy('id', 'DESC')->get();
        return view('pessoas', ['pessoas' => $pessoas]);
    }

    public function editarPessoa(Request $request)
    {
        $pessoa = PessoaModel::find($request->id);
        return view('cadastroPessoa', ['pessoa' => $pessoa]);
    }

    public function salvarPessoa(Request $request)
    {
        try {
            if ($request->id) {
                $pessoa = PessoaModel::find($request->id);
            } else {
                $pessoa = new PessoaModel();
            }
            $pessoa->nome = $request->nome;
            $pessoa->documento = $request->documento;
            $pessoa->cep = $request->cep;
            $pessoa->endereco = $request->endereco;
            $pessoa->bairro = $request->bairro;
            $pessoa->cidade = $request->cidade;
            $pessoa->uf = $request->uf;
            $pessoa->telefone = $request->telefone;
            $pessoa->email = $request->email;
            $pessoa->ativo = isset($request->ativo) ? true : false;
            $pessoa->save();
            $request->session()->flash('sucesso', 'Dados da pessoa salvo com sucesso');
        } catch (\Throwable $th) {
            $request->session()->flash('erro', 'Erro ao salvar pessoa');
        }

        return redirect('/');
    }

    public function excluirPessoa(Request $request)
    {
        try {
            PessoaModel::where('id', $request->id)->delete();
            $request->session()->flash('sucesso', 'Pessoa excluída com sucesso');
        } catch (\Throwable $th) {
            $request->session()->flash('erro', 'Erro ao excluir pessoa');
        }
        return redirect('/');
    }

    public function enviaEmailEmMassa(Request $request)
    {
        $request->session()->flash('sucesso', 'E-mail enviado com sucesso');
        return redirect('/emailemmassa');
    }
}