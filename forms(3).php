<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Base</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulário Calculadora simples</h2>
    <form action="" method="post">
        
        <label for="Primeiro">Primeiro número:</label>
        <input type="text" id="nome" name="n1" placeholder="Digite um número" required>

        <label for="Segundo">Segundo número:</label>
        <input type="text" id="email" name="n2" placeholder="Digite um número" required>
		
		<input type="radio" name="op" value="soma"> +
		<input type="radio" name="op" value="sub"> -
		<input type="radio" name="op" value="mult"> *
		<input type="radio" name="op" value="div"> /
 
           <button type="submit">Enviar</button>

    </form>
</div>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$n1 = floatval($_POST["n1"]);
	$n2 = floatval($_POST["n2"]);
	$op = $_POST["op"] ?? "";

	$resultado = "";

	if ($op == "soma") {
        $resultado = $n1 + $n2;
    } elseif ($op == "sub") {
        $resultado = $n1 - $n2;
    } elseif ($op == "mult") {
        $resultado = $n1 * $n2;
    } elseif ($op == "div") {
        if ($n2 != 0) {
            $resultado = $n1 / $n2;
        } else {
            $resultado = "Erro: divisão por zero";
        }
    } else {
        $resultado = "Escolha uma operação";
    }

	echo "<script>alert(" . json_encode("Resultado: $resultado") . ");</script>";
}

?>