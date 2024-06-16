<link rel="stylesheet" href="style.css">

<h3>Напишіть простий клас PHP, який відображає рядок введений у поле форми (модифікувати завдання 2)</h3>

<form action="" method="post">
    <label for="string">Рядок</label>
    <input type="text" name="string" id="string">
    
    <button type="submit">Відправити</button>
</form>

<?php
class Nope
{
    private $string;

    public function __construct($data)
    {
        $this->string = $data["string"];

        echo "Класс Nope ініціалізовано <br>";
    }

    public function show()
    {
        echo "Рядок: $this->string";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nope = new Nope($_POST);
    $nope->show();
}
