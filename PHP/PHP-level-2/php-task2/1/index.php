<?php

    interface summa 
    {

        public function endResult ();

    }

    class Shirt implements summa
    {

        public $name = 'Shirt';
        public $value = 14;
        public $size = 46;
        public $buy;

        function __construct($buy)
        {
            $this->buy = $buy;
        }

        function endResult()
        {
            $result = $this->value * $this->buy;            
            echo "<h1>$this->name</h1>";
            echo "<p>Всего: " . "{$this->value}" * "{$this->buy}" . "$</p>";
            return $result;
        }
    }

    class pants implements summa
    {
        public $name = 'Pants';
        public $value = 28;
        public $size = 46;
        public $buy;

        function __construct($buy)
        {
            $this->buy = $buy;
        }

        function endResult()
        {
            $result = $this->value * $this->buy;           
            echo "<h1>$this->name</h1>";
            echo "<p>Всего: " . "{$this->value}" * "{$this->buy}" . "$</p>";
            return $result;
        }
    }

    class apple implements summa
    {
        public $sort = 'Мельба';
        public $value = 2;
        public $buy;

        function __construct($buy)
        {
            $this->buy = $buy;
        }

        function endResult()
        {
            $result = $this->value * $this->buy;            
            echo "<h1>$this->sort</h1>";
            echo "<p>Кг: {$this->buy}</p>";
            echo "<p>Всего: " . "{$this->value}" * "{$this->buy}" . "$</p>";
            return $result;
        }
    }

    function endSells ($shirt, $pants, $apple)
    {
        $a = new Shirt($shirt);
        $aa = $a->endResult();
        $b = new pants($pants);
        $bb = $b->endResult();
        $с = new apple($apple);
        $cc = $с->endResult();

        $sum = $aa + $bb + $cc;
        echo "<h1>Общая сумма покупки: $sum $</h1>"; 
    }

endSells(1, 1, 10);
?>