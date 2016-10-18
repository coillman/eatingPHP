<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;

class PlayersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', "Un nom d'utilisateur est nécessaire")
            ->notEmpty('password', 'Un mot de passe est nécessaire');
    }
	
	public function beforeSave($event,$entity){
		if ($entity->isNew()){
			$entity->id=$this->generateId();
		}
	}
	
	public function generateId(){
		return "aa";
	}
}