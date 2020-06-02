<html>
    <head>
        <title>My Articles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="https://newsapi.org/v2/everything?domains=wsj.com&apiKey=dda138d75e5741048e1a9902fdee83c0" rel="stylesheet">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    </head>
    <body>
        <?php include 'navbar.php';?>
        <br><br>

        <h1 class="didot-font big-header centered" align="center">My Articles</h1><br>
        <h2 class="didot-font centered" align="center" style="color:white;"><?php include 'timestamp.php';?></h2>

        <br>
        <hr class="white-hr">
        <br>

        <div id="root" class="side-div">


          <?php
          $dbh = mysqli_connect('localhost', 'csc412', 'csc412', 'csc412')
                 or die("<h3>ERROR: Failed to connect to database. </h3>");



         $sql = "CREATE TABLE IF NOT EXISTS kkirchner_my_articles (
           id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           author VARCHAR(30) NOT NULL,
           content TEXT(800) NOT NULL,
           description TEXT(800) NOT NULL,
           published_at VARCHAR(30) NOT NULL,
           title VARCHAR(255) NOT NULL,
           url VARCHAR(255) NOT NULL,
           url_to_image VARCHAR(255) NOT NULL
         )";
         
          mysqli_query($dbh,$sql)
           or die("<h3>ERROR: Failed to create table. </h3>". mysqli_error($dbh));
           //
           //
           //   if ($_POST['submit']){
           //       echo "<h5>Hi " . $_POST['name'];
           //       echo ".</h5>";
           //
           //       $email = $_POST["name"];
           //
           //       $sql = "INSERT INTO kkirchner_newsletter_emails"
           //           ."(email) VALUES (\"" . $email . "\");";
           //
           //       mysqli_query($dbh,$sql)
           //         or die("<h3>ERROR: Unable to insert value </h3>");
           //
           //       echo "You have successfully signed up for our newsletter <br>";
           //   } else{
           //       echo "<h5>Please enter your email. </h5>";
           //   }
           //
           // echo "<br><h2> Sign Up List</h2>";
           //
           // $data = mysqli_query($dbh, "SELECT * FROM kkirchner_newsletter_emails");
           //   while  ($row = mysqli_fetch_array($data)){
           //     echo "<h4>" . $row['email'] . "</h4>";
           //   }
           mysqli_close($dbh)
          ?>






        </div>



    <script src="scripts/my_articles.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <script src="scripts/jquery_test.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
