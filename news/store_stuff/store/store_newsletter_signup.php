
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Newsletter Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="store.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body class="mint-background">
       <?php include 'navbar.php';?>
        <div class="centered-container">
            <br>
             <h1>Newsletter Sign Up</h1>
             <br>
             <hr class="minimal">
             <br>
             <form action="store_newsletter_signup.php" method="post">
                Email:  <input type="text" name="name" placeholder="Enter email"><br>
                <br>
                <input type="submit" name="submit">
             </form>
             <br>

             <?php
            $dbh = mysqli_connect('localhost', 'csc412', 'csc412', 'csc412')
                    or die("<h3>ERROR: Failed to connect to database. </h3>");
            $sql = "CREATE TABLE IF NOT EXISTS kkirchner_newsletter_emails"
                  . "(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                  . "email VARCHAR(30) NOT NULL)";

            mysqli_query($dbh,$sql)
              or die("<h3>ERROR: Failed to create table. </h3>");


                if ($_POST['submit']){
                    echo "<h5>Hi " . $_POST['name'];
                    echo ".</h5>";

                    $email = $_POST["name"];

                    $sql = "INSERT INTO kkirchner_newsletter_emails"
                        ."(email) VALUES (\"" . $email . "\");";

                    mysqli_query($dbh,$sql)
                      or die("<h3>ERROR: Unable to insert value </h3>");

                    echo "You have successfully signed up for our newsletter <br>";
                } else{
                    echo "<h5>Please enter your email. </h5>";
                }

              echo "<br><h2> Sign Up List</h2>";

              $data = mysqli_query($dbh, "SELECT * FROM kkirchner_newsletter_emails");
                while  ($row = mysqli_fetch_array($data)){
                  echo "<h4>" . $row['email'] . "</h4>";
                }
              mysqli_close($dbh)
             ?>

             <br>
             <br>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <script src="scripts/jquery_test.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
