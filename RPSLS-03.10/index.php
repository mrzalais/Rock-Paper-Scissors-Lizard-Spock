<?php

declare(strict_types=1);

require_once 'Elements/AbstractTool.php';
require_once 'Elements/ElementInterface.php';
require_once 'Elements/Rock.php';
require_once 'Elements/Paper.php';
require_once 'Elements/Scissors.php';
require_once 'Elements/Lizard.php';
require_once 'Elements/Spock.php';
require_once 'Results/Result.php';
require_once 'Results/LoseResult.php';
require_once 'Results/TieResult.php';
require_once 'Results/WinResult.php';
require_once 'ToolCollection.php';

$tools = new ToolCollection();
$tools->addTool(new Rock());
$tools->addTool(new Paper());
$tools->addTool(new Scissors());
$tools->addTool(new Lizard());
$tools->addTool(new Spock());

$title = 'Choose your element';

if (!isset($result)) {
    $result = 4;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // collect value of input field
    $result = $_POST['result'];
    $userImg = $result;
    if (empty($result)) {
        echo "Name is empty";
    }
    $tool = $tools->getUser($result - 1);
    $pc = $tools->getPc();

    $result = $tool->beats($pc);

    $title = $result->getMessage();

    $computerImg = $tools->getComputerImg();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RPSLS</title>
</head>
<style>
    body {
        background-color: #262626;
    }

    h1 {
        color: white;
        text-align: center
    }

    .container {
        width: 1080px;
        position: absolute;
        left: 50%;
        margin-left: -540px; /* Half of width */
        padding-top: 10px;
        padding-bottom: 10px;
        display: table;
        overflow: hidden;

    }

    .imagetable {
        float: left;
        width: 150px;
        height: 100px;
        background: white;
        padding: 10px;
        display: table-cell;
        text-align: center;
        margin: 22px;
    }

    .cleartable {
        height: 100px;
        background: white;
        padding: 10px;
        display: table-cell;
        text-align: center;
        margin: 5px;
    }

    .image {
        vertical-align: middle;
        height: 100px;
        width: 100px;
        line-height: 150px;
    }

    .t {
        width: 33.33%;
        border: 2px solid white;
        background: ;
    }

    .tt {
        text-align: center;
    }

</style>
<body>

<div class="container">

    <table width="100%">
        <tr>
            <td class="t cleartable" style="text-align:center">
                <?php
                if ($title !== 'Choose your element') {
                    echo '<img class="image" src="images/' . $userImg . '.jpg" alt="">';
                }
                ?>
            </td>
            <td class="tt">
                <h1>VS</h1>
            </td>
            <td class="t cleartable" style="text-align:center">
                <?php
                if ($title !== 'Choose your element') {
                    echo '<img class="image" src="images/' . ($computerImg + 1) . '.jpg" alt="">';
                }
                ?>
            </td>
        </tr>

    </table>
    <br>
    <h1>
        <?php echo $title ?>
    </h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="imagetable">
            <input type="hidden" name="result" value="1">
            <input type="image" class="image" src="./images/1.jpg" alt="">
        </div>
    </form>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="imagetable">
            <input type="hidden" name="result" value="2">
            <input type="image" class="image" src="./images/2.jpg" alt="">
        </div>
    </form>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="imagetable">
            <input type="hidden" name="result" value="3">
            <input type="image" class="image" src="./images/3.jpg" alt="">
        </div>
    </form>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="imagetable">
            <input type="hidden" name="result" value="4">
            <input type="image" class="image" src="./images/4.jpg" alt="">
        </div>
    </form>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="imagetable">
            <input type="hidden" name="result" value="5">
            <input type="image" class="image" src="./images/5.jpg" alt="">
        </div>
    </form>

</div>
<br>
</body>
</html>
