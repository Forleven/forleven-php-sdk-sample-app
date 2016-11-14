<?php

include 'token.php';

use Forleven\Member\Member;

$membros = new Member();

$membros->pagination->next(); // OU $membros->pagination->numPage = 2;

$n = $membros->pagination->numPage * $membros->pagination->perPage;

$rowMembros = $membros->getMembers();
foreach ($rowMembros as $membro)
{
	$n++;
	echo $n . '. ' . $membro['name'] . ' ' . $membro['lastname'] . '<br/>';
}

// $id = ID MEMBER AQUI;

if(!empty($id))
{
	$membro = new Member();
	$membro = $membro->getMember($id);

	$membro = new Member($id);
	echo $membro->name;
}