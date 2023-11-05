<?php

include_once('Hewan.php');

class Kambing implements Hewan {

    public function berkomunikasi():void
    {
        echo "mbeee";
    }

    public function makan(): void
    {
        echo "mengunyah";
    }
}