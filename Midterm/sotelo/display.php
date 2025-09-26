<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="displayCon">
    <form action="index.php">
        <div>
            <?php
            $file = "studentInfo.txt";

            if(filesize($file) > 0){
                $myfile = fopen("studentInfo.txt", "r") or die("Unable to open file!");
                $content = fread($myfile,filesize("studentInfo.txt"));
                fclose($myfile);

                echo nl2br(htmlspecialchars($content));   
            }else{
                echo "The list is empty. Register more students to populate the list!";
            }
            ?>
        </div>
        <br>
        <div>
             <input type="Submit" value="Return">
             <br>
             <br>
             <input type="button" value="Clear" onclick="window.location.href='clearNotif.php'">
        </div>  
    </form>
</div>
</body>
</html>
