<?php

namespace Ecole\Direction;

class Personne
{
	
	private $nom;	
	private $prenom;
	private $etablissement;

	public function donneMoiLeNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getNom()
	{
		return $this->nom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getPrenom()
	{
		return $this->prenom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setPrenom($prenom)
	{
		return $this->prenom = $prenom;
	}

	const MAJEUR = 18;

	public function bientotlapause()
	{
		echo "c'est la pause ???";
	}

	public function courir($prenom)
	{
		echo $prenom ." court vite que Bolt";
	}
}


// $moussa = new Personne();
// $jean = new Personne ();

// //echo $moussa->donneMoiLeNom("test");

// echo $moussa->getPrenom();
// /* var_dump($moussa->getPrenom); ==>permite ver los errores, en este caso como no estaba definido va a returnar un valor NULL*/
// /*echo no diria nada*/

// $moussa->setPrenom("Moussa");
// echo $moussa->getPrenom();
// echo "<br>";
// echo "<br>";
// echo $moussa->courrir($moussa->getPrenom());//porque modifico elnombre y el nuevo nombre es el que esta entre parentesis 
// echo "<br>";
// echo "<br>";

// var_dump($jean);

// echo $jean->bientotlapause();
// echo "<br>";
// echo "<br>";
// echo $jean->majeur($moussa->getPrenom());
