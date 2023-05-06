<?php require('./views/partials/head.html');?>

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

<?php require('./views/partials/nav.html');?>

    <br>
    <br>

    <form action="searchPerson.redirect.php" method="get">
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
                    foreach($dao -> loadPersonById($id) as $person):
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

<?php require('./views/partials/footer.html');?>