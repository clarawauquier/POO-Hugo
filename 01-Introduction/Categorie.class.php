<?php



class Categorie{
   
    private $Libelle,
            $CollectionArticles = [];
            
    
    
    
    public function __construct($Libelle) {
        
    
        $this->Libelle  =$Libelle;
        
    } //Fin de mon constructeur
    
    /**
    *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations
    * Nous aurons une fonction par propriété de notre classe.
    */
    
    public function getLibelle(){
        return $this->Libelle;
    }
    
    public function getCollectionArticles(){
        return $this->CollectionArticles;
    }
    /**
    *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre Class.
    
    */
    
    public function setLibelle($MonNouveauLibelle){
        $this->Libelle = $MonNouveauLibelle;
    }
    
    /**
    *Permet d'ajouter un Objet Article à notre tableau (Collection) d'Articles
    */
    
    public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles[] = $Article;
    }
    
}//Fin de ma Classe Categorie

