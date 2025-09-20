<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body>
    <?php echo "";?>
    <br>
    <br>
    
    <!--<form action = "http://localhost/sotelo/Homepage.html"> -->
        <h2>Student Registration Forms <h2>


     <form action = "display.php" method = "POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="idnum">ID Number:</label><br>
        <input type="text" id ="idNum" name = "idNum"><br>
        <label for="department">Department:</label><br>
        <input type="text" department ="department" name = "department"><br><br>

        <input type="submit" value="Submit">

      </form>
      
</body>
</html>