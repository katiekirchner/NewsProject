<!DOCTYPE html>

<html>
    <head>
        <title>Search Results</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="https://newsapi.org/v2/everything?domains=wsj.com&apiKey=dda138d75e5741048e1a9902fdee83c0" rel="stylesheet">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    </head>
    <body>
        <?php include 'navbar.php';?>
        <br><br>
        <?php
           if ($_POST['submit']){
             $lookup = $_POST['search'];
              echo   '<h1 class="didot-font big-header centered" align="center">' . ucfirst($lookup);
           } else{
              echo "<h5>Please enter a search word. </h5>";
           }

        ?>
        <!-- <h1 class="didot-font big-header centered" align="center">Search</h1><br> -->
        <h2 class="didot-font centered stamp" align="center" style="color:white;"><?php include 'timestamp.php';?></h2>

        <br>
        <hr class="white-hr">
        <br>
        <div id="root"></div>

        <!-- <div id="root" class="side-div"></div> -->


    <script src="scripts/search.js">
      var testtest  = <?php echo $lookup ?>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <!-- <script src="scripts/button.js"></script> -->
    <!-- <script src="scripts/jquery_test.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
