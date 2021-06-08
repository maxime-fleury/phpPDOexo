<?php
class calc{
    public static function addition($a,$b){
        return intval($a) + intval($b);
    }
    public static function soustraction($a,$b){
        return intval($a) - intval($b);
    }
    public static function multiplication($a,$b){
        return intval($a) * intval($b);
    }
    public static function divition($a,$b){
        return intval($a) / intval($b);
    }
    public static function modulo($a,$b){
        return intval($a) % intval($b);
    }

}
$a = 4;
$b = 16;
echo " a = $a et b = $b <br>";
$p = calc::addition($a, $b);
echo "addition " . $p . "<br>";
$p = calc::soustraction($a,$b);
echo "soustraction " . $p . "<br>";
$p = calc::multiplication($a,$b);
echo "multiplication "  . $p . "<br>";
$p = calc::divition($a,$b);
echo "divition " . $p . "<br>";
$p = calc::modulo($a,$b);
echo "modulo " . $p . "<br>";



