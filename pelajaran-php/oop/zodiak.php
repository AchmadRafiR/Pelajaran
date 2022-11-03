<?php 

    class Zodiac{

        public static function zodiak($b,$t){
            if ($b < 1 || $b > 12 || $t < 1 || $t > 31) {
                $hasil = "tanggal/bulan salah";
            }else {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "aquarius";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "taurus";
                    }
                }

                if ($b == 2) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "leo";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "libra";
                    }
                }

                if ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "scorpio";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "sagitarius";
                    }
                }

                if ($b == 4) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "aries";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "capricon";
                    }
                }

                if ($b == 5) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "cancer";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "pisces";
                    }
                }

                if ($b == 6) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "gk ero";
                    }
                    if ($t > 0 && $t <20) {
                        $hasil = "p";
                    }
                }else {
                    echo "Salah";
                }

            }

            return $hasil;
        }

    }

?>