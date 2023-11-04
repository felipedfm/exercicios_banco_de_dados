<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$query_cursos = "CREATE TABLE IF NOT EXISTS CURSOS (
    id int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id)
)";

$executar_cursos = mysqli_query($conexao, $query_cursos);

$query_alunos = "CREATE TABLE IF NOT EXISTS ALUNOS (
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento date,
    primary key(id_aluno)
)";

$executar_alunos = mysqli_query($conexao, $query_alunos);

$query_alunos_cursos = "CREATE TABLE IF NOT EXISTS ALUNOS_CURSOS (
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$executar_alunos_cursos = mysqli_query($conexao, $query_alunos_cursos);

if ($executar_cursos) {
    echo "Executado com sucesso (cursos)<br>";
} else {
    echo "Falha ao executar (cursos)<br>";
}

if ($executar_alunos) {
    echo "Executado com sucesso (alunos)<br>";
} else {
    echo "Falha ao executar (alunos)<br>";
}

if ($executar_alunos_cursos) {
    echo "Executado com sucesso (alunos cursos)<br>";
} else {
    echo "Falha ao executar (alunos cursos)<br>";
}

// Inserção de dados
$query = "INSERT INTO ALUNOS (nome_aluno, data_nascimento) VALUES ('felipe', '1987-01-01')";
$executar = mysqli_query($conexao, $query);

if ($executar) {
    echo "Executado com sucesso (insert)<br>";
} else {
    echo "Falha ao executar (insert)<br>";
}

// Inserção de dados na tabela CURSOS
$query = "INSERT INTO CURSOS (nome_curso, carga_horaria) VALUES ('PHP E MYSQL', 10)";
$executar = mysqli_query($conexao, $query);

if ($executar) {
    echo "Executado com sucesso (insert cursos)<br>";
} else {
    echo "Falha ao executar (insert cursos)<br>";
}

// Inserção de dados na tabela ALUNOS_CURSOS
$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_curso) VALUES (8, 1)";
$executar = mysqli_query($conexao, $query);

if ($executar) {
    echo "Executado com sucesso (insert alunos_cursos)<br>";
} else {
    echo "Falha ao executar (insert alunos_cursos)<br>";
}

mysqli_close($conexao);
?>
