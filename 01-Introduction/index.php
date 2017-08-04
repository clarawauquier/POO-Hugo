<?php

include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $Unarticle est un Objet de la classe Article.
*En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
*/
$Auteur = new Auteur('WAUQUIER', 'Clara', 'clara@gmail.com');

$UnArticle = new Article ("La Formation WF3", "Une Formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");
$UnArticle->setAuteur($Auteur);
// --Afficher l'Objet Article

echo '<pre>';
print_r($UnArticle);
echo '</pre>';

$Article2 = new Article ("Bienvenue dans le Beaujolais", "De jolis paysages !", "Venez nombreux ! ", "beaujolais.jpg", "04/08/2017");
$Article2->setAuteur($Auteur);
// --Afficher l'Objet Article

echo '<pre>';
print_r($Article2);
echo '</pre>';

//--Je veux afficher le Titre de mon Premier Article
//echo $UnArticle->Titre;
# : Cannot access private property Article::$Titre
echo $UnArticle->getTitre();
echo '<br>';
echo $UnArticle->getAccroche();
echo '<br>';
echo $UnArticle->getDescription();
echo '<br>';
echo $UnArticle->getFeaturedImage();
echo '<br>';
echo $UnArticle->getDateCreationArticle();
echo '<br>';

//--Ici, je vais modifier le titre de mon article
echo '<br><br>';

echo $UnArticle->setTitre('La formation WebForce3');
echo $UnArticle->getTitre();
echo '<pre>';
print_r($UnArticle);
echo '</pre>';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $Unarticle est un Objet de la classe Article.
*En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
*/

//$UnAuteur = new Auteur ("Dumas", "Alexandre", "alexandre.dumas@gmail.com");

// --Afficher l'Objet Auteur

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

echo $UnAuteur->getNom();
echo '<br>';
echo $UnAuteur->getPrenom();
echo '<br>';
echo $UnAuteur->getEmail();
echo '<br>';

echo $UnAuteur->setPrenom('Alexandre Fils');
echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

////////////////////////////////////////////
$UneCategorie = new Categorie ("Légumes");
echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo $UneCategorie->setLibelle('Fruits');
echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

$Article3 = new Article ("Titre3", "Accroche3", "Description3", "photo3.jpg", "04/08/2017");
$Article3->setAuteur($Auteur);
$Article4 = new Article ("Titre4", "Accroche4", "Description4", "photo4.jpg", "04/08/2017");
$Article4->setAuteur($Auteur);

$UneCategorie = new Categorie('Formation Informatique');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($Article2);

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

$Categorie2 = new Categorie('Blabla');
$Categorie2->AjouterUnArticle($Article3);
$Categorie2->AjouterUnArticle($Article4);

echo '<pre>';
print_r($Categorie2);
echo '</pre>';

echo '<hr>';

echo '<ol>';
    echo'<li>';
        echo $UneCategorie->getLibelle();
    echo'</li>';
    echo'<ul>';
        $articles = $UneCategorie->getCollectionArticles();
        foreach ($articles as $article) :
            echo "<li>".$article->getTitre()."-".$article->getAuteur()->getNomComplet()."</li>";
        endforeach;
    echo'</ul>';
echo '</ol>';
/////////////////////////////////////////////////////
echo '<hr>';

