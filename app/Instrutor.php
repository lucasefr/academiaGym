<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model
{
    //
    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'alunos';

	protected $fillable = array('id', 'nome', 'identidade', 'updated_at', 'created_at');

    /**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
    public $timestamps = true;

    public static function createInstrutor($nome, $identidade, $cpf){
		
		$aluno = new Alunos();

				
		$aluno->nome = $nome;
		$aluno->identidade = $identidade;
		$aluno->cpf = $cpf;
		
		$aluno->save();

		return $aluno;	
    }
}
