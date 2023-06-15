<?php
    class AutoOverzicht {
        public array $autos;

        public function __construct() {
            $this -> autos = [];
        }
        public function add($auto) {
            $this -> autos[] = $auto;
        }
    }
?>