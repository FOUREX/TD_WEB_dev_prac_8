 <link rel="stylesheet" href="style.css">

<h3>Напишіть простий клас PHP, який відображає наступний рядок: "Клас MyClass ініціалізовано!"</h3>

<?php
    class Yep
    {
        public function __construct()
        {
            echo "Класс Yep ініціалізовано";
        }
    }

    $yep = new Yep();
