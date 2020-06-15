<?php

namespace Ecole\Etudiant;

class Personne
{
	
	private $nom;	
	private $prenom;	
	public $naissance;
	public $age;

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

	const MAJEUR = 8;

	public function bientotlapause()
	{
		echo "c'est la pause ???";
	}

	public function courir($prenom)
	{
		echo $prenom ." court vite que Bolt";
	}

	public function majeur($prenom)
	{
		if (Personne::MAJEUR < 18){
			echo $prenom. " est mineur";
		}else{
			echo $prenom. " est majeur";
		}
	}
}
