<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";




$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query_cursos = "CREATE TABLE CURSOS(
    id int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id)
)";

$executar_cursos = mysqli_query($conexao, $query_cursos);

$query_alunos = "CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    primary key(id_aluno)
)";

$executar_alunos = mysqli_query($conexao, $query_alunos);

$query_alunos_cursos = "CREATE TABLE ALUNOS_CURSOS(
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

?>
