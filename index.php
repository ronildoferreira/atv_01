<?php


require_once ('Model/Aluno.php');
require_once ('Model/Turma.php');


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


//Testando Turma
/*echo $aluno1->getNome();
echo $aluno1->getRa();
echo $aluno1->getMedia();
*/

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




?>