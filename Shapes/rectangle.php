<?php

    class Rectangle extends Shape {
        
        public function Area() {
            return $this->getWidth() * $this->getHeight();
        }
    
        public function Perimeter() {
            return 2 * ($this->getWidth() + $this->getHeight());
        }
    }

?>