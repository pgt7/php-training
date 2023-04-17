
<?php

include 'PersonDto.php';
include 'Person.php';

// general description
$title = 'Session 5 - Better Structure';
$date = 'date: 4/17/2023 - Monday';
$owner = 'Pouria Ghafarbeigi';

// create an instance of dto
$dto = new PersonDto();

require('index.view.php');