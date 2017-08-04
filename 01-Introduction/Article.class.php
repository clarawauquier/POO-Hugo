<?php

/*--
*Création d'une Classe Article
*Une Classe est une entité regroupant des variables/ propriétés et des fonctions
*/

class Article{
    //-- Déclaration des propriétés de notre Class "Article"
    private $Titre,
            $Accroche,
            $Description,
            $FeaturedImage,
            $DateCreationArticle,
            $Auteur;
    
    /**
    * Afin de pouvoir attribuer une valeur à mes différentes variables,
    * Je vais mettre en place un constructeur
    */
    
    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle) {
        
    //-- Ici, nous allons attribuer à chaque propriété de notre classe,
    //-- La valeur qui a été passée au constructeur.
        
        $this->Titre                            =$Titre;
        $this->Accroche                         =$Accroche;
        $this->Description                      =$Description;
        $this->FeaturedImage                    =$FeaturedImage;
        $this->DateCreationArticle              =$DateCreationArticle;
        
    } //Fin de mon constructeur
    
    /**
    *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informationd
    * Nous aurons une fonction par propriété de notre classe.
    */
    
    public function getTitre(){
        return $this->Titre;
    }
    
    public function getAccroche(){
        return $this->Accroche;
    }
    
    public function getDescription(){
        return $this->Description;
    }
    
    public function getFeaturedImage(){
        return $this->FeaturedImage;
    }
    
    public function getDateCreationArticle(){
        return $this->DateCreationArticle;
    }
    
    public function getAuteur(){
        return $this->DateCreationArticle;
    }
    /**
    *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre Class.
    
    */
    
    public function setTitre($MonNouveauTitre){
        $this->Titre = $MonNouveauTitre;
    }
    
    public function setAuteur(Auteur $Auteur){
        $this->Auteur = $Auteur;
    }
}//Fin de me Classe Article