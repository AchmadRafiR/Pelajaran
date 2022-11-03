<?php 

    class Rumus{
        public $x = 0;
        public $y = 0;

        function luasLingkaran($r){
            return 3.14 * $r * $r;
        }

        function kelilingLingkaran($r){
            return 2 * (3.14 * $r);
        }

        function luasPersegiPanjang($p,$l){
            return $p * $l;
        }

        function kelilingPersegiPanjang($p,$l){
            return 2 * ($p + $l);
        }

        function luasSegitiga($a,$t){
            return 0.5 * $a * $t;
        }

        function kelilingSegitiga($a){
            return 3 * $a;
        }
    }


?>