 <head >
        <title>Hours</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="store.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body class="mint-background">
        <?php include 'navbar.php';?>
        <div class="centered-container">
            <div class="container" style="display:table;">
                <h1>Store Hours</h1>
                <h2 id="title2">Weekends and Holidays Included</h2>          

                <img class="open-sign-image img-fluid" id="hour-pic" src="images/open_sign.jpg" alt="hour sign">

                <br>
                <br>
                <button onclick="changeStyle()">Alter Title</button>
                <button id="title2-button">Alter Second Title</button>
                <button id="pic-button">Move Picture</button>

                <br>
                <br>

                <table style="width:25%" align="center">
                    <tr>
                      <th>Day</th>
                      <th>Hours of Operation</th> 
                    </tr>
                    <tr>
                      <td>Monday:</td>
                      <td>closed</td> 
                    </tr>
                    <tr>
                      <td>Tuesday:</td>
                      <td>closed</td> 
                    </tr>
                    <tr>
                      <td>Wednesday:</td>
                      <td>Noon - 1pm</td> 
                    </tr>
                    <tr>
                      <td>Thursday:</td>
                      <td>closed</td> 
                    </tr>
                    <tr>
                      <td>Friday:</td>
                      <td>10:30am - 10:35am</td> 
                    </tr>
                    <tr>
                      <td>Saturday:</td>
                      <td>closed</td> 
                    </tr>
                    <tr>
                      <td>Sunday:</td>
                      <td>closed</td> 
                    </tr>
                  </table>
            </div>
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
