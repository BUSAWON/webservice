<?php

namespace Application\Models;



class Ingredient extends \Library\Model\Model{

	protected $table 	= 'ingredients';
	protected $primary 	= 'id_ingredient';


	public function __construct($connexionName){
		parent::__construct($connexionName);
	}




    /**
     *  Méthode post($params)
     *
     *  Crée une recette avec les paramètres de la requête POST       
     *  @param      array       $params     [données de requête]
     *  @return     array
     *
     */
    public function getIngredients() {         //ajouter une recette
    	return $this->fetchAll();

    }

        
    public function insertIngredients(){
        $modelIngredient  = new \Application\Models\Ingredient('localhost');
        //var_dump($params);
        
        $res=$modelIngredient->InsertIngredients();
            
        if( !empty( $res ) ) {
            return $this->setApiResult( $res);
        }else{
            return $this->setApiResult(false, true, "erreur pendant la recuperation des ingredients");
        }
    }

}