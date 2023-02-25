<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body>

    <?php 

    // general description
    $title = 'Session 1 - Starting php and html';
    $date = 'date: 2/25/2023 - Saturday';
    $owner = 'Pouria Ghafarbeigi';

    // php codes
    $php_code = '&lt;?php ?&gt;';
    $print_code = '&lt;?php echo("text"); or echo "text"; ?&gt;';
    $print_expression = '&lt;?="text"?&gt;';

    ?>

    <!--header-->
    <h1>
        <?=$title?>
    </h1>

    <!--owner-->
    <div>
        <sub>
            <b>
                <?php echo($owner); ?>
            </b>
        </sub>
    </div>

    <!--history-->
    <sub>
        <?php echo $date; ?>
    </sub>

    <!--git discription-->
    <div>
        <p>
            We learned about some git syntax:
            <ul>
                <li>
                    <code>git add .</code>
                </li>
                <li>
                    <code>git commit -m 'name or any type of description about this commit'</code>
                </li>
                <li>
                    <code>git push</code>
                </li>
            </ul>
        </p>

        <!--php discription-->
        <p>
            We can use php in html files:
            <ul>
                <li>First, we should change the suffix of the file to the php</li>
                <li>Second, use <code><?=$php_code?></code> syntax to write some php code</li>
            </ul>

            <b>
                Actually, we can exchange 
                <code>
                    <?=$print_code?>
                </code> 
                with this code
                <code>
                    <?=$print_expression?>
                </code>
                <br>
                to print with fewer code.
            </b>
        </p>
    </div>
    
</body>
</html>