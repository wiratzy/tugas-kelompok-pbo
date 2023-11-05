<?php
include_once ('Hewan.php');
class Kucing implements Hewan 
{
    public function berkomunikasi():void {
        echo "meongg";
    }

    public function makan():void {
        echo "mengigit";
    }


}