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
    <h2>Formulário de pares ou ímpares</h2>
    <form action="#" method="get">
        
        <label for="Num">Número:</label>
        <input type="text" id="nome" name="n1" placeholder="Digite seu número" required>

        <button type="submit">Enviar</button>

    </form>
</div>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET")
	
	$_num = $_GET["n1"];
	
	if ($_num % 2 == 0) {	
	echo "<script>alert('Seu número é par!');</script>";
	
	} else {
		echo "<script>alert('Seu número é ímpar');</script>";
		}
?>