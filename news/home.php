<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="https://newsapi.org/v2/everything?domains=wsj.com&apiKey=dda138d75e5741048e1a9902fdee83c0" rel="stylesheet">
    </head>
    <body>
        <?php include 'navbar.php';?>
        <br><br>

        <h1 class="didot-font big-header" align="center">Today's Top News</h1>
        <h2 class="didot-font" align="center" style="color:white;"><?php include 'timestamp.php';?></h2>

        <br>
        <hr class="white-hr">
        <br>
        <!-- <div id="test" class="side-div"> -->
        </div>

        <!-- <br><br><br><br><br><br><br> -->
        <div id="root" class="side-div"></div>


    <!-- <script src="scripts/test.js"></script> -->

    <script src="scripts/top_news.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <script src="scripts/jquery_test.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
