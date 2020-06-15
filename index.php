<?php

class Article
{
	//Attributs
	private $titre;
	private $auteur ;
	private $resume ;

    public function __construct($titre, $auteur, $resume) //SIEMPRE DEBE SER PUBLICO PORQUE LO VOY A LLAMAR DESDE
                                                          // AFUERA DE LA CLASS
	{
		
		$this->titre = $titre;
		$this->auteur = $auteur;
		$this->resume = $resume;
	}

	//CONSTANTE
	const NBRE_PAGE = 200;

	//Methodes
	public function lire()
	{
		echo "Je lis des livres";
	}

	// public function getTitre()
	// {
	// 	return $this->titre;
	// }

	// public function setTitre($titre)
	// {
	// 	return $this->titre = $titre;
	// }

}

$test = new Article("Mon titre", "Mousssa", "Ceci est un test ");
// $test->setTitre("Mon Titre");  USAR CONSTRUCTOR ES IGUAL QUE USAR GET Y SET PERO GANAS TIEMPO... ENTONCES NO ES NECESARIO
// USAR LA FUNCION GET Y SET. pero usar get y set permite en un futuro retornar y llamar $test->setTitre("steph") para modirifcarlo
// no tengo que ir a buscar $test = new article 
// $test->setAuteur("MOussa");

$wf = new Article("webforce", "POO", "mon resume");

$wf3 = new Article("test", "POO", "mon resume");$wf = new Article("webforce", "POO", "mon resume");



var_dump($test, $wf);


