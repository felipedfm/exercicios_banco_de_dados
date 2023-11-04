<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta na tabela ALUNOS
$consulta_alunos = mysqli_query($conexao, "SELECT * FROM ALUNOS");

echo '<h1>Tabela ALUNOS</h1>';
echo '<table>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>data de nascimento</th>
    </tr>';

while ($linha = mysqli_fetch_array($consulta_alunos)) {
    echo '<tr>';
    echo '<td>' . $linha['id_aluno'] . '</td>';
    echo '<td>' . $linha['nome_aluno'] . '</td>';
    echo '<td>' . $linha['data_nascimento'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Consulta na tabela CURSOS
$consulta_cursos = mysqli_query($conexao, "SELECT * FROM CURSOS");

echo '<h1>Tabela CURSOS</h1>';
echo '<table>
    <tr>
        <th>id</th>
        <th>nome do curso</th>
        <th>carga horária</th>
    </tr>';

while ($linha = mysqli_fetch_array($consulta_cursos)) {
    echo '<tr>';
    echo '<td>' . $linha['id'] . '</td>';
    echo '<td>' . $linha['nome_curso'] . '</td>';
    echo '<td>' . $linha['carga_horaria'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Consulta na tabela ALUNOS_CURSOS
$consulta_alunos_cursos = mysqli_query($conexao, "SELECT * FROM ALUNOS_CURSOS");

echo '<h1>Tabela ALUNOS_CURSOS</h1>';
echo '<table>
    <tr>
        <th>id</th>
        <th>id_aluno</th>
        <th>id_curso</th>
    </tr>';

while ($linha = mysqli_fetch_array($consulta_alunos_cursos)) {
    echo '<tr>';
    echo '<td>' . $linha['id_aluno_curso'] . '</td>';
    echo '<td>' . $linha['id_aluno'] . '</td>';
    echo '<td>' . $linha['id_curso'] . '</td>';
    echo '</tr>';
}

echo '</table>';

mysqli_close($conexao);
?>
