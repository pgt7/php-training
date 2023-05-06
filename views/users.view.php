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

    <form action="searchUser.redirect.php" method="get">
    ID:  <input type="text" name="id" />
    <input type="submit" name="submit" value="Search" />
    </form>

    <form action="user.redirect.php" method="get">
    LIMIT:  <input type="text" name="limit" />
    <input type="submit" name="submit" value="filter" />
    </form>

    </br>
    </br>

    <div class='user-table'>
        <table class='table table-bordered'>
            <theader>
                <th>number</th>
                <th>username</th>
                <th>email</th>
            </theader>
            <tbody>
            <?php 
                    foreach($dao -> loadAllUsers($limit) as $user):
                ?>
                <tr>
                    <?php      
                        foreach($user as $key=>$value):
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