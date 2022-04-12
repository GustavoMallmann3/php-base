<?php 

$var1 = "Gustavo";
$var2 ="Mallmann";
$var3 = 55.3;
$var4 = 22;
$var5 = true;


// comentarios variáveis com String
echo $var1 . $var2 . $var3 . $var4;

echo "<hr>";


// var_dump => utilizado para informar com detalhes o valor de uma variável
var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);

echo "<hr>";

// operadores aritimeticos
// soma             +
// subtração        -
// multiplicação    *
// divisão          /

$result = $var3 + $var4;
echo $result . "<br>";
$result = $var3 - $var4;
echo $result . "<br>";
$result = $var3 * $var4;
echo $result . "<br>";
$result = $var3 / $var4;
echo $result . "<br>";

// operadores relacionais (de comparação)
// igual ==
// diferente !=
//maior >
// menor <
// maior igual >=
// menor igual <=

echo "<hr>";

var_dump(
    ($var1 == $var2)
);

var_dump(
    ($var1 != $var2)
);

var_dump(
    ($var3 > $var4)
);

// Operadores Lógicos
// and  &&
// or   ||
// not  !

echo "<hr>";

$email = "gustavo@gmail.com";
$pass = "Manguito@123";

var_dump(
    //supondo que a variavel "$email" esteja vindo do banco de dados, assim como "$pass"
    ($email == "deko.sete@gmail.com") &&
    ($pass = "1234")
);

var_dump(
    //supondo que a variavel "$email" esteja vindo do banco de dados, assim como "$pass"
    //nesse caso as credenciais que o usuario registrou está igual a que esta no banco de dados
    ($email == "gustavo@gmail.com") &&
    ($pass = "Manguito@123")
);

echo "<hr>";

//controle de fluxo (if / elseif / else)

$sinaleira = "VERDE";

if($sinaleira == "VERDE") {
    print("Siga em Frente!");
} elseif ($sinaleira == "AMARELO") {
    print("Cuidado!");
} else {
    print("Pare!");
};