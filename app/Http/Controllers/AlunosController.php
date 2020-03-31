<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Alunos;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alunos = Alunos::all();

        return $alunos;
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $aluno = new Alunos();

				
		$aluno->nome = $request->nome;
		$aluno->identidade = $request->identidade;
		$aluno->cpf = $request->cpf;
		$aluno->logradouro = $request->logradouro;
		$aluno->numero = $request->numero;
		$aluno->bairro = $request->bairro;
		$aluno->cidade = $request->cidade;
		$aluno->estado = $request->estado;
		$aluno->cep = $request->cep;
		$aluno->mensalidade = $request->mensalidade;
        $aluno->plano = $request->plano;
        
        $aluno->save();

        $response = array('success' => true, 'aluno' => $aluno);
        return $response;
    }
}
