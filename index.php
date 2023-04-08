
<?php

include 'db_connection.php';

// general description
$title = 'Session 3 - PHP and Postgres';
$date = 'date: 3/22/2023 - Wednesday';
$owner = 'Pouria Ghafarbeigi';

// connect to db
$pdo = connectToDb();

require('index.view.php');