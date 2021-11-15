<?php


class Hippopotamus{

	public $name;
	public $weight;
	public $tuskSize;

	function __construct($name,$weight,$tuskSize)
	{
		$this->name=$name;
		$this->weight=$weight;
		$this->tuskSize=$tuskSize;
	}

	function swim(){
		$this->weight=$this->weight - 300;
	}

	function eat(){
		$this->weight=$this->weight + 1000;
	}

	function fight($hippopotamus){
		if($this->tuskSize>$hippopotamus->tuskSize){
			return "victoire de ". $this->name."<br>";
		}else{
			return "victoire de ". $hippopotamus->name."<br>";
		}
	}

	function afficher_objet(){
		return $this->name . " est un hippopotame pesant ". $this->weight. " dont les cornes font ". $this->tuskSize . "<br>";
	}





}






?>