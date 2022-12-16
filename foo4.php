<?php
namespace core; 

final class foo4 extends foo1 {
    public int $width = 1;
    public function setTest4(int $width) : void {
        $this->width = $width + $this->getTest1();
    }
    public function getTest4() : int {
        return $this->width;
    }

}
