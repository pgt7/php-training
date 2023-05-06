
<?php

include './dao/UsersDao.php';

// general description
$title = 'Session 8 - Models And Their Relationships';
$date = 'date: 5/6/2023 - Monday';
$owner = 'Pouria Ghafarbeigi';

// create an instance of dto
$dao = new UsersDao();

// create a defualt id var
$id = null;

// create a default limit var
$limit = null;

// check limit variable 
if ($_GET['limit'] != null) {
    $limit = $_GET['limit'];
}

require('./views/users.view.php');