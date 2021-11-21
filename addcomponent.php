<?php
include "connection.php";
// include "handler.php"
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Components Entry</title>
</head>

<body>
    <div>
        <?php
        if (isset($_REQUEST['info'])) { ?>

            <?php
            if ($_REQUEST['info'] == "added") { ?>

                <div class="alert alert-success" role="alert">
                    Registerd successfull
                </div>

            <?php } ?>
        <?php } ?>
    </div>
    <form method="GET">
        <input type="text" name="rollnumber" placeholder="Rollnumber">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="components" placeholder="components">
        <input type="date" name="issuedate" placeholder="issuedate">
        <input type="text" name="returnbutton" value="0" hidden>
        <input type="submit" value="submit" name="submit">
    </form>


    <a href="list.php" type="button" class="btn btn-primary">list</a>

</body>

</html> -->


<?php
include "connection.php";
$mydate=getdate(date("U"));
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>

    </title>
</head>

<body>

    <div>
        <?php
        if (isset($_REQUEST['info'])) { ?>

            <?php
            if ($_REQUEST['info'] == "added") { ?>

                <div class="container" style="background-color: #90EE90;width:100%" role="alert">
                    Registerd successfull
                </div>
            <?php } ?>
        <?php } ?>
    </div>

<div style="display: flex; flex-direction:row;justify-content:space-between">
    <a href="addcomponent.php" style="text-decoration: none;"><h2>Add Component</h2></a>
    <div style="display: flex;">
    <a href="list.php" style="text-decoration: none;

    "><h2> LIST</h2></a>
    </div>
</div>
    <div class="container">
        <form method="GET">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Roll Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="rollnumber" placeholder="Enter Roll Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="name" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Component</label>
                </div>
                <div class="col-75" style="justify-content: row;">
                    <input type="text" id="lname" name="components" placeholder="Enter component" required>
                    <input type="number" id="lname" name="count" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Number</label>
                </div>
                <div class="col-75">
                    <input type="number" id="lname" name="number" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Issue Date</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="issuedate" value="<?php 
                    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                    ?>" placeholder="Enter component" disabled>
                    <input type="text" name="returnbutton" value="0" hidden>
                    <input type="text" name="damage" value="0" hidden>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Add" name="submit">
                
            </div>

        </form>
    </div>


</body>

</html>