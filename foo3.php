<?php
namespace core; 

class foo3 extends foo1 {
    public int $age = 5;

    public function getTest3() : int {
        return $this->age - 5;
    }
    public function setTest3(int $age) : void{
        $this->age = $age - $this->getTest1();
    }
}
