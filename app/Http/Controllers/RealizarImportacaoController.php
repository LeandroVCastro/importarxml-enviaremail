<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sabre\Xml\Reader;
use App\Models\Pessoa as PessoaModel;

class RealizarImportacaoController extends Controller
{
    public function realizarImportacao(Request $request)
    {
        try {
            $result = $this->transformaXmlEmArray($request->xml_textarea);
    
            foreach ($result['value'] as $torcedor) {
                $this->importarTorcedor($torcedor);
            }
    
            $request->session()->flash('sucesso', 'Importação realizada com sucesso');
        } catch (\Throwable $th) {
            $request->session()->flash('erro', 'Importação realizada com sucesso');
        }

        return redirect('/importarxml');
    }

    private function importarTorcedor($torcedor)
    {
        $torcedor = (object) $torcedor['attributes'];
        PessoaModel::updateOrCreate(
            [
                'documento' => $torcedor->documento
            ],
            [
                'nome' => $torcedor->nome,
                'cep' => $torcedor->cep,
                'endereco' => $torcedor->endereco,
                'bairro' => $torcedor->bairro,
                'cidade' => $torcedor->cidade,
                'uf' => $torcedor->uf,
                'telefone' => $torcedor->telefone,
                'email' => $torcedor->email,
                'ativo' => $torcedor->ativo === '1' ? true : false,
            ]
        );
    }

    private function transformaXmlEmArray($xml)
    {
        $reader = new Reader();
        $reader->xml($xml);
        return $reader->parse();
    }
}