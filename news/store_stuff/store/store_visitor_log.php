
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Visitor Log</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="store.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body class="mint-background">
       <?php include 'navbar.php';?>
        <div class="centered-container">
            <br>
             <h1>Visitor Log</h1>
             <br>
             <hr class="minimal">
             <br>
             <form action="store_visitor_log.php" method="post">
                Name:  <input type="text" name="name" placeholder="Enter name"><br>
                <br>
                <input type="submit" name="submit">
             </form>
             <br>     
            
             <?php
                if ($_POST['submit']){
                    echo "<h5>Hi " . $_POST['name']; 
                    echo ".</h5>";
                    
                    echo "Welcome to our store.";
                } else{
                    echo "<h5>Please enter your name. </h5>";
                }
             
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


