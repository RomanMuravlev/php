<?php
namespace core;

class foo6 extends foo3 {
    public int $key;

    public function getTest7 () :int {
        return $this->key;
    }
    public function setTest7 (int $key) :void {
        $this->key = $key + $this->getTest3();
    }

    public int $num;

    public function getTest8 () :int {
        return $this->num;
    }
    public function setTest8 (int $num) :void {
        $this->num = $num * $this->getTest();
    }
}