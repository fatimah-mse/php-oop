<?php

    class Circle extends Shape {

        private $radius;
    
        public function __construct($radius = 0) {
            $this->setRadius($radius);
        }
    
        public function setRadius($radius) {
            $this->radius = $radius;
        }
    
        public function getRadius() {
            return $this->radius;
        }
    
        public function Area() {
            return pi() * pow($this->getRadius(), 2);
        }
    
        public function Perimeter() {
            return 2 * pi() * $this->getRadius();
        }

    }

?>