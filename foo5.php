<?php
namespace core; 

class foo5 extends foo2
{
    public int $price;

    public function getTest5 () :int {
        return $this->price;
    }
    public function setTest5 (int $price) :void {
        $this->price = $price * $this->getTest2();
    }

    public int $value;

    public function getTest6 () :int {
        return $this->value;
    }
    public function setTest6 (int $value) :void {
        $this->value = $value - $this->getTest();
    }
}
