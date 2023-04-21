
<?php

include 'PersonDto.php';

// general description
$title = 'Session 5 - Better Structure';
$date = 'date: 4/17/2023 - Monday';
$owner = 'Pouria Ghafarbeigi';

// create an instance of dto
$dto = new PersonDto();

// get id
$id = null;

// create a default limit
$limit = null;

if ($_GET['id'] != null) {
    $id = $_GET['id'];
}

require('search.view.php');