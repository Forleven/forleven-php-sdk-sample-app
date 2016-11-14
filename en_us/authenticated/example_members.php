<?php

include 'token.php';

use Forleven\Member\Member;

$membros = new Member();

$membros->pagination->next(); // or $membros->pagination->numPage = 2;

$n = $membros->pagination->numPage * $membros->pagination->perPage;

$rowMembros = $membros->getMembers();
foreach ($rowMembros as $member)
{
	$n++;
	echo $n . '. ' . $member['name'] . ' ' . $member['lastname'] . '<br/>';
}

// $id = ID MEMBER HERE;

if(!empty($id))
{
	$member = new Member();
	$member = $member->getMember($id);

	$member = new Member($id);
	echo $member->name;
}