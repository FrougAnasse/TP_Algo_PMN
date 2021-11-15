<?php


class Hippopotamus{

	public $name;
	public $weight;
	public $tuskSize;

	public function __construct($name,$weight,$tuskSize)
	{
		$this->name=$name;
		$this->weight=$weight;
		$this->tuskSize=$tuskSize;
	}

	public function swim(){
		$this->weight=$this->weight - 300;
	}

	public function eat(){
		$this->weight=$this->weight + 1000;
	}

	public function fight($hippopotamus){
		if($this->tuskSize>$hippopotamus->tuskSize){
			return "victoire de ". $this->name."<br>";
		}else{
			return "victoire de ". $hippopotamus->name."<br>";
		}
	}

	public function afficher_objet(){
		return $this->name . " est un hippopotame pesant ". $this->weight. " dont les cornes font ". $this->tuskSize . "<br>";
	}





}






?>