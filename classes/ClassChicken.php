<?php
class Chicken extends Barn {
    private $eggs;

    const CH_COUNT = 1;
    
    public function __construct($family) {
        parent::__construct($family);
    }
    
    public function set_eggs($eggs)
    {
        $this->eggs = $eggs;
    }
    public function get_eggs()
    {
        return $this->eggs;
    }

    public function add_animal() {
        return self::CH_COUNT;
    }
}
?>  