<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="notifCon">
    <form action="index.php">
        <div>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //Gets the ID's from index.php
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $idnum = $_POST['idNum'];
                $course = $_POST['course'];

                $myfile = fopen("studentInfo.txt", "a") or die("Unable to open file!");

                //This adds the ID's
                $txt = "Student ID: " . $idnum . "\n";
                fwrite($myfile, $txt);
                $txt = "First Name: " . $fname . "\n";
                fwrite($myfile, $txt);
                $txt = "Last Name: " . $lname . "\n";
                fwrite($myfile, $txt);
                $txt = "Course: " . $course . "\n";
                fwrite($myfile, $txt);
                $txt = "------------------------\n";
                fwrite($myfile, $txt);

                fclose($myfile);

                echo "Student has been registered!";
            }
            ?>
        </div>
        <br>
        <div>
             <input type="Submit" value="Return">
            <br>
            <br>
         <input type="button" value="Show Student Info" onclick="window.location.href='display.php'">
        </div>
    </form>
</div>
</body>
</html>
