<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Instrutor;

class InstrutorsController extends Controller
{
       

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $instrutor = new Instrutor();

				
		$instrutor->nome = $request->nome;
		$instrutor->identidade = $request->identidade;
		$instrutor->cpf = $request->cpf;
        
        $instrutor->save();

        $response = array('success' => true, 'instrutor' => $instrutor);
        return $response;
    }

    
}
