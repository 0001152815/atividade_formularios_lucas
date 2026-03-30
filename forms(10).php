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

    <h2>Média de Notas</h2>
<form method="post">
    <label>Nota 1:</label>
    <input type="number" step="0.1" name="nota1" required>

    <label>Nota 2:</label>
    <input type="number" step="0.1" name="nota2" required>

    <label>Nota 3:</label>
    <input type="number" step="0.1" name="nota3" required>

    <button type="submit">Calcular Média</button>
</form>

</div>

</body>
</html>

<?php
if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $n3 = $_POST['nota3'];

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Média: $media <br>";

    if ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}
?>