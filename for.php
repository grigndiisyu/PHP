<?php
class Laptop {
    protected $pemilik;
    protected function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }

}

$laptop_anto = new Laptop();
$laptop_anto->pemilik="Melin";
echo $laptop_anto->pemilik;
echo $laptop_anto->hidupkan_laptop();
?>