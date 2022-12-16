<?php
namespace core;
class foo2  extends foo1 {
    public int $height = 1;

    public function getTest2() : int {
        return $this->height;
    }
    public function setTest2(int $height) :void {
         $this->height = $height + $this->getTest();
    }
}




