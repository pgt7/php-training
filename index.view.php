<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Web Programming Class</title>
</head>

<body>

    <!--header-->
    <h1>
        <?=$title?>
    </h1>

    <!--owner-->
    <div>
        <sub>
            <b>
                <?php echo($owner)?>
            </b>
        </sub>
    </div>

    <!--history-->
    <sub>
        <?php echo $date?>
    </sub>

    <br>
    <br>

    <form action="search.redirect.php" method="get">
    ID:  <input type="text" name="id" />
    <input type="submit" name="submit" value="Search" />
    </form>

    <form action="index.redirect.php" method="get">
    LIMIT:  <input type="text" name="limit" />
    <input type="submit" name="submit" value="filter" />
    </form>

    </br>
    </br>

    <div>
        <table class='table table-bordered'>
            <theader>
                <th>row</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>gender</th>
                <th>birthdate</th>
                <th>email</th>
                <th>country</th>
            </theader>
            <tbody>
            <?php 
                    foreach($dao -> loadAllPersons($limit) as $person):
                ?>
                <tr>
                    <?php      
                        foreach($person as $key=>$value):
                    ?>
                        <td><?=$value?></td>
                    <?php 
                        endforeach;
                    ?>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>