<?php
class Calculadora
{
    private $n1;
    private $n2;

    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function somar()
    {
        return $this->n1 + $this->n2;
    }

    public function subtrair()
    {
        return $this->n1 - $this->n2;
    }

    public function multiplicar()
    {
        return $this->n1 * $this->n2;
    }

    public function dividir()
    {
        return $this->n1 / $this->n2;
    }


}

$resultado = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    $calc = new Calculadora($num1, $num2);

    switch ($operacao) {
        case 'soma':
            $resultado = $calc->somar();
            break;
        case 'subtrai':
            $resultado = $calc->subtrair();
            break;
        case 'multiplica':
            $resultado = $calc->multiplicar();
            break;
        case 'divide':
            $resultado = $calc->dividir();
            break;
    }
}
?>

<form method="post" action="">
    <title>Calculadora Php</title>
    <h1>Calculadora em Php</h1>
    <input type="number" name="num1" required>
    <select name="operacao">
        <option value="soma">+</option>
        <option value="subtrai">-</option>
        <option value="multiplica">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num2" required>
    <input type="submit" value="calcular">
</form>
<?php
if ($resultado !== "")
    echo "<h3>resultado: $resultado</h3>";

?>