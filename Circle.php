<?php


require_once 'Point.php';


class Circle{

		private $point;
		private $radius;

		public function __construct($point,$radius)
		{
			$this->point=$point;
			$this->radius=$radius;

		}


		public function area(){
			return $this->radius*$this->radius*3.14;
		}







		public function containsPoint( $pointVerifier ){
			if (( ($pointVerifier->getX()-$this->point->getX())*($pointVerifier->getX()-$this->point->getX()) 
			+ ($pointVerifier->getY()-$this->point->getY())*($pointVerifier->getY()-$this->point->getY()) ) == $this->radius*$this->radius){
				return true;
			}else{
				return false;
			}
		}



		/**
		 * Get the value of radius
		 */ 
		public function getRadius()
		{
				return $this->radius;
		}

		/**
		 * Set the value of radius
		 *
		 * @return  self
		 */ 
		public function setRadius($radius)
		{
				$this->radius = $radius;

				return $this;
		}

		/**
		 * Get the value of point
		 */ 
		public function getPoint()
		{
				return $this->point;
		}

		/**
		 * Set the value of point
		 *
		 * @return  self
		 */ 
		public function setPoint($point)
		{
				$this->point = $point;

				return $this;
		}
}




?>