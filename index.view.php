<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Web Programming Class</title>
</head>

<style>
    code {
        font-family: Consolas,"courier new";
        color: green;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 80%;
    }
</style>

<?php 
    $pdo = connectToDB();
?>

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

    <div>
        <table class='table -table-bordered'>
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
                    foreach(printAllPersons($pdo) as $person):
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