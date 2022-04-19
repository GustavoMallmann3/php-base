<?php 

$var1 = "Gustavo";
$var2 = "Mallmann";
$var3 = 55.3;
$var4 = 22;
$var5 = true;  //booleano (true or false)


// comentarios variáveis com String
echo $var1 . "---" . $var2 . "---" .  $var3 . "---" . $var4;

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

$n1 = 5.7;
$n2 = 8.7;
$media = ($n1 + $n2) / 2;
echo "Média: " . $media . "<br>";

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
//listas (Array = Vetor)
$cores = [
    "VERDE",
    "AMARELO",
    "VERMELHO"
];

echo $cores[0] . "<br>";

//controle de fluxo (if / elseif / else)

$sinaleira = "VERDE";

if($sinaleira == "VERDE") {
    print(
        "<h2 style='backgroud-color: green'>Siga em Frente!</h2>"
    );
} elseif (
    $sinaleira == "AMARELO"
    )
{   print(
        "<h2 style='backgroud-color: yellow'>Cuidado!</h2>"
    );
} else {
    print(
        "<h2 style='backgroud-color: red'>Pare!</h2>"
    );
};

echo "<hr>";

//Laços de repetução
//FOR => início; condição; incrmento
for($i = 0; $i < 10; $i++) {
    echo $i . " * ";
} 

echo "<hr>";
//WHILE => condição
$count = 0;
while($count < 10) {
    echo $count . " / ";
    $count++;
}

//FOREACH => 