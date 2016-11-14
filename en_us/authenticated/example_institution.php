<?php

include 'token.php';

use Forleven\Institution\Institution;

$school = new Institution();

echo $school->name;