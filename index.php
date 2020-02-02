<?php

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        require 'conn.php';
        if (!$conn)
            throw new Exception('Could not connect to the database ' .mysqli_error());
        else
            // echo "Database connected!";

            // insert into the database
            $sql = "INSERT INTO users (username,password) VALUES ('$username', '$password');";
            $result = mysqli_query($conn, $sql);

            if (!$result)
                echo "could not save at this time, try again";
            else
                header("Location:home.php");


    }

    

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Your Name</title>
    
    <!-- If you want Google Analytics, do some Google searching, and pop it here. -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background-color: #f5f6fa">
    <div>
        <div class="row">
            
            <form method="post" action="index.php">
                <label>Username:</label><br>
                <input type="text" name="username" /><br>
                <label>Password:</label><br>
                <input type="password" name="password" /><br>
                <input type="submit" value="Login" name="login"/> 

            </form>

        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>
