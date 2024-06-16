<link rel="stylesheet" href="style.css">

<h3>Напишіть клас PHP, який визначає периметр трикутника по трьом сторонам та виводить результат на екран</h3>

<form action="" method="post">
    <label for="side_a">Сторона A: </label>
    <input type="number" name="side_a" id="side_a" class="width_50px"><br>
    <label for="side_b">Сторона B: </label>
    <input type="number" name="side_b" id="side_b" class="width_50px"><br>
    <label for="side_c">Сторона C: </label>
    <input type="number" name="side_c" id="side_c" class="width_50px"><br>

    <button type="submit">Відправити</button>
</form>

<?php
class Triangle
{
    private $side_a, $side_b, $side_c;

    public function __construct($side_a, $side_b, $side_c)
    {
        $this->side_a = $side_a;
        $this->side_b = $side_b;
        $this->side_c = $side_c;
    }

    public function is_valid(): bool
    {
        return ($this->side_a < ($this->side_b + $this->side_c))
            && ($this->side_b < ($this->side_a + $this->side_c))
            && ($this->side_c < ($this->side_a + $this->side_b));
    }

    public function calculate_perimeter(): int
    {
        if (!$this->is_valid())
        {
            return 0;
        }

        return $this->side_a + $this->side_b + $this->side_c;
    }
}

class TriangleForm extends Triangle
{
    public function __construct($data)
    {        
        parent::__construct(
            (int)$data["side_a"], (int)$data["side_b"], (int)$data["side_c"]
        );
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $yep = new TriangleForm($_POST);
    $triangle_perimeter = $yep->calculate_perimeter();
    
    echo "Периметр трикутника: $triangle_perimeter";
}
