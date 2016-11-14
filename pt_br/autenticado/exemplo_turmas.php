<?php

include 'token.php';

use Forleven\Classroom\Classroom;

$n = 0;

$turmas = new Classroom();
$rowTurmas = $turmas->getClassrooms();

foreach ($rowTurmas as $turma)
{
	$n++;
	echo $n . '. ' . $turma['name'] . '<br/>';
}

// $id = ID CLASSROOM AQUI;

if(!empty($id))
{
	$turma = new Classroom();
	$turma = $turma->getClassroom($id);

	$turma = new Classroom($id);
	echo $turma->name;
}