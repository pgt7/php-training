
<?php

include './dao/PersonDao.php';

// general description
$title = 'Session 8 - Models And Their Relationships';
$date = 'date: 5/6/2023 - Monday';
$owner = 'Pouria Ghafarbeigi';

// create an instance of dto
$dao = new PersonDao();

// get id
$id = null;

// create a default limit
$limit = null;

if ($_GET['id'] != null) {
    $id = $_GET['id'];
}

require('./views/searchPerson.view.php');