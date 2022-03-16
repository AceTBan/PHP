<?php

    namespace Encaps;

    class User{
        public string $name;
        public static $addToString = " est mon prénom.";
        public $nbrChildren;

        public function fullAnswer(){
            return $this->name.self::$addToString;
        }

        public function addToNbrChildren($nbr) {
            $this->nbrChildren += $nbr;
        }
    }
?>