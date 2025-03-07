<!DOCTYPE html>
<html>
    <head>
        <title>Sports</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="https://newsapi.org/v2/everything?domains=wsj.com&apiKey=dda138d75e5741048e1a9902fdee83c0" rel="stylesheet">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    </head>
    <body>

            <nav class="navbar navbar-expand-lg sticky-top navbar-light white-navbar">
                    <a class="navbar-brand didot-font" align="center" style="margin-left: 20px;" href="home.php">Top News</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a href="science.php" class="didot-font" style="color: black;margin: 15px">Science</a>
                        </li>
                        <li class="nav-item">
                        <a href="tech.php" class="didot-font" style="color: black;margin: 15px">Technology</a>
                        </li>
                        <li>
                        </li>
                        <li class="nav-item">
                        <a href="sports.php" class="didot-font" style="color: black; margin: 15px">Sports</a>
                        </li>
                        <li class="nav-item">
                        <a href="entertainment.php" class="didot-font" style="color: black; margin: 15px">Entertainment</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item" align="right">
                        <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                            <input class="didot-font form-control mr-sm-2" type="text" name="search" placeholder="Search a topic" id="lookup"><br>
                            <br>
                            <input class="didot-font btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">
                        </form>
                        </li>
                    </ul>
                    </div>
                    <!-- <div>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item" align="right">
                        <a href="my_articles.php" class="didot-font" style="color: black; font-size: 20; justify-content: space-between; margin-right: 30px">My Articles</a>
                        </li>
                    </div> -->
        </nav>

        <br><br>
        <h1 class="didot-font big-header centered" align="center">Sports</h1><br>
        <h2 class="didot-font centered stamp" align="center" style="color:white;"><?php include 'timestamp.php';?></h2>

        <br>
        <hr class="white-hr">
        <br>
        <div id="root"></div>
        <!-- <div id="root" class="side-div"></div> -->
        <div align="center">
          <a href="https://newsapi.org/" class="didot-font centered" align="center" style="color:white;"> Thank you News API</a>
        </div>
        <br>

    <script src="scripts/sports.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            crossorigin="anonymous">
    </script>
    <!-- <script src="scripts/jquery_test.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
