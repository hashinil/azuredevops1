<?php 
class Barn {
    private $family;  
    private $animal_count;
    private $legs;
    private $product;
 
    public function __construct($family) {
        $this->family = $family; 
        $this->animal_count = 1;
    } 

    public function get_family() {
        return $this->family; 
    } 
    public function set_family($family) {
        $this->family = $family; 
    } 

    public function get_legs() {
        return $this->legs; 
    } 
    public function set_legs($legs) {
        $this->legs = $legs; 
    } 

    public function set_product($product) {
        $this->product = $product; 
    } 

    public function get_product() {
        return $this->product; 
    } 

    public function add_animal() {
        return $this->animal_count++;
    }
} 
?>