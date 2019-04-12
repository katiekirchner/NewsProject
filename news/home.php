<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous"> 
    </head>
    <body>
        <?php include 'navbar.php';?>
        <br>
        <br>
        <h1 class="didot-font big-header" align="center"> Today's Top News</h1>
        
        <br>
        <div class="row centered">
            <div class="col-md-3"><?php include 'newscontainer.php';?></div>
            <div class="col-md-3"><?php include 'newscontainer.php';?></div>
            <div class="col-md-3"><?php include 'newscontainer.php';?></div>
            
        </div>
        
        
    <script src="scripts/test.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <script src="scripts/jquery_test.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>

