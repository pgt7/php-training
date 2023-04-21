
<?php

include 'PersonDto.php';

// general description
$title = 'Session 5 - Better Structure';
$date = 'date: 4/17/2023 - Monday';
$owner = 'Pouria Ghafarbeigi';

// create an instance of dto
$dto = new PersonDto();

// create a defualt id var
$id = null;

// create a default limit var
$limit = null;

// check limit variable 
if ($_GET['limit'] != null) {
    $limit = $_GET['limit'];
}

require('index.view.php');