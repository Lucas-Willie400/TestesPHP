<?php
class Calculadora
{
    private $n;
    private $p;

    public function __construct($n, $p)
    {
        $this->n = $n;
        $this->p = $p;
    }

    public function calcular()
    {
        return ($this->n * $this->p) / 100;
    }
}

$resultado = null;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num = $_POST["num"];
    $por = $_POST["por"];
}

$cal = new Calculadora($num, $por);
$resultado = $cal->calcular();

?>

<form method="post" action="">
    <title>Calculadora de Porcentagem</title>
    <h1>Calculadora de Porcentagem</h1>

    <label>Valor Inteiro</label>
    <input type="number" name="num" required>

    <label>Valor em Porcentagem</label>
    <input type="number" name="por">

    <input type="submit" value="calcular">
</form>

<?php
if ($resultado !== "") {
    echo "<h3>$resultado</h3>";
}
?>