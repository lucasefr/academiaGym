<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    //

    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'alunos';

	protected $fillable = array('id', 'nome', 'identidade', 'cpf', 'logradouro', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'mensalidade', 'plano', 'updated_at', 'created_at');

    /**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
    public $timestamps = true;
    
    public static function createAlunos($nome, $identidade, $cpf, $logradouro, $numero, $bairro, $cidade, $estado, $cep, $mensalidade = null, $plano = null){
		
		$aluno = new Alunos();

				
		$aluno->nome = $nome;
		$aluno->identidade = $identidade;
		$aluno->cpf = $cpf;
		$aluno->logradouro = $logradouro;
		$aluno->numero = $numero;
		$aluno->bairro = $bairro;
		$aluno->cidade = $cidade;
		$aluno->estado = $estado;
		$aluno->cep = $cep;
		$aluno->mensalidade = $mensalidade;
		$aluno->plano = $plano;

		
		$aluno->save();

		return $aluno;	
    }
    
    public static function getAlunos(){
        
        $alunos = Alunos::all();

        return $alunos;
    }
}
