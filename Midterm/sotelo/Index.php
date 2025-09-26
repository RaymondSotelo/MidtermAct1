<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainCon">
        <div>
            <h1>Student Registration Form</h1>
        </div>
        <div>
            <form action="notif.php" method="POST">
                <div>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <br>
                <div>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" required>
                </div>
                <br>
                <div>
                    <label for="idnum">ID number:</label><br>
                    <input type="text" id="idNum" name="idNum" required>
                </div>
                <br>
                <div>
                    <label for="course">Course:</label><br>
                    <input type="text" id="course" name="course" required>
                </div>
                <br><br>
                <div>
                    <input type="submit" value="Submit">
                    <br>
                    <br>
                    <input type="button" value="Show Student Info" onclick="window.location.href='display.php'">
                </div>
              </form> 
        </div>
    </div>
</body>
</html>
