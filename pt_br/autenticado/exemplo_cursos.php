<?php

include 'token.php';

use Forleven\Course\Course;

$n = 0;

$cursos = new Course();
$rowCursos = $cursos->getCourses();

foreach ($rowCursos as $curso)
{
	$n++;
	echo $n . '. ' . $curso['name'] . '<br/>';
}

// $id = ID CURSO AQUI;

if(!empty($id))
{
	$curso = new Course();
	$curso = $curso->getCourse($id);

	$curso = new Course($id);
	echo $curso->name;
}