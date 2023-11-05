<?php
include_once ('Hewan.php');
class Harimau implements Hewan 
{
    public function berkomunikasi():void {
        echo "rawrrr";
    }

    public function makan():void {
        echo "mengigit";
    }


}