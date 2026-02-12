<?php
    $alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota Final</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno) : ?>
            <tr>
                <td><?php echo $aluno["nome"]; ?></td>
                <td><?php echo $aluno["idade"]; ?></td>
                <td><?php echo $aluno["nota"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>