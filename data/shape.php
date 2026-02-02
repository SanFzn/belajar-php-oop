<?php

class shape
{
    public function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends shape
{
    public function getCorner():  int
    {
        return 4;
    }

    public function getParentCorner(): int
    {
        return parent::getCorner();
    }
}