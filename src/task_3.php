<link rel="stylesheet" href="style.css">

<h3>Напишіть клас PHP, який визначає периметр трикутника по трьом сторонам та виводить результат на екран</h3>

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

$yep = new Triangle(3, 4, 5);
$triangle_perimeter = $yep->calculate_perimeter();

echo "Периметр трикутника: $triangle_perimeter";
