<?php

    class Product 
    {

        public $name = 'Shirt';
        public $prise = 34;
        public $size = '48';
        public $count = 10;

        /* function __construct($id, $name, $prise, $size, $count) 
        {
            $this->id = $id;
            $this->name = $name;
            $this->prise = $prise;
            $this->size = $size;
            $this->count = $count;
        } */

        function view() 
        {
            echo "<h1>Продукт:$this->name</h1><p>Цена: $this->prise $</p><p>Размер: $this->size</p><p>В наличии: $this->count</p>";
        }

        function buy($count) 
        {
            $sum = $this->count;
            $sum -= $count;
            $result = $count * $this->prise;            
            echo "<h1>Вы купили: $count " . strtolower($this->name) . " на сумму: $result $</h1>";
            echo "<p>Остаток: $sum</p>";
            $this->count = $sum;
        }
    }

$a = new Product();
$a->view();
$a->buy(4);
$a->view();
?>