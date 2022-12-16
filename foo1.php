<?php
namespace core; 
class foo1
{
    public int $size = 5;

    public function getTest(): int{
        return $this->size;
    }
    public function setTest(int $size): void    {
        $this->size = $size * 2;
    }

    public int $weight = 5;

    public function getTest1(): int {
        return $this->weight;
    }
    public function setTest1(int $weight): void {
        $this->weight = $weight * 2;

    }

}
