<?php


require_once ('Model/Aluno.php');
require_once ('Model/Turma.php');

$alunos = array();


function instanciarAlunos()
{
		$alunos = array();
/*01*/	$alunos[] = new Aluno("Ronildo Ferreira",12345,7.4,8,6.5,7);
/*02*/	$alunos[] = new Aluno("Renan de Sousa",54321,6,8.5,5,9);
/*03*/	$alunos[] = new Aluno("Douglas Augusto",19876,8,5,10,7);
/*04*/	$alunos[] = new Aluno("Francisco Antonio",29483,7,7,9.6,10);
/*05*/	$alunos[] = new Aluno("Luis Guilherme",28492,5,8,8,6);
/*Erro para adicionar esse aluno
06*/	$alunos[] = new Aluno("Maria de Fatima",59482,6,9,9,6);


	return $alunos;
}

$alunos = instanciarAlunos();

$turma = new Turma("Turma - 1");

foreach ($alunos as $aluno) 
{
	if($turma->adicionarAluno($aluno))
{
	echo "Adicionou ".$aluno->getNome()."<br>";
}
else
{
	echo "<br>Erro! Turma Cheia!";
}
}


//Testando Turma
/*
$aluno1 = new Aluno();
$aluno1->setNome("Ronildo Ferreira");
$aluno1->setRa(123456789);
$aluno1->setNota1(7.5);
$aluno1->setNota2(8);
$aluno1->setNota3(6.5);
$aluno1->setNota4(7);


$aluno2 = new Aluno();
$aluno2->setNome("Renan Sousa");
$aluno2->setRa(9876543210);
$aluno2->setNota1(5);
$aluno2->setNota2(9);
$aluno2->setNota3(6);
$aluno2->setNota4(9.5);



echo $aluno1->getNome();
echo $aluno1->getRa();
echo $aluno1->getMedia();


$tuma1 = new Turma("Turma - 01");

if($tuma1->adicionarAluno($aluno1))
{
	echo "<br>Adicionou ".$aluno1->getNome()."<br>";
}
else
{
	echo "<br>Erro! Turma Cheia!";
}


if($tuma1->adicionarAluno($aluno2))
{
	echo "Adicionou ".$aluno2->getNome()."<br>";
}
else
{
	echo "<br>Erro! Turma Cheia!";
}


echo "Media: ".$tuma1->mediaTurma();

*/


?>