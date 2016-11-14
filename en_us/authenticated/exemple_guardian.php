<?php

include 'token.php';

use Forleven\Member\MemberGuardian;

$id = 42; // here id user/member
$guardians = new MemberGuardian();
$guardians = $guardians->getGuardians($id);

if(is_array($guardians) && !empty($guardians))
{
	foreach ($guardians as $index => $guardian)
	{
		echo $guardian['relationship'] . ' ' .  $guardian['name'] . '<br>';
	}
}
else
{
	echo $guardians;
}