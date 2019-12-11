<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title> 404 - Page Not Found </title>
    <style>
        body {
            /** different size images for different size displays need to be re sized**/
            background-image: url("/img/apocalipse.png");
            background-repeat: no-repeat;
            /*background-position: center center ;*/
            background-size: cover;
        }
    </style> 
    <title>Error Page Not found </title>
    </head>
    <body>
        <?php include ('navbar.php') ?> 
        <div class="grid-container" >
            <div class="col-12 header">
                <h1>ZombieRun</h1>
            </div> 
            <div class="main notfound">
                <p> 
                    <b>Sorry but the page you was looking for was not found on this site.</b><br>
                    Return to the <a href="index.php">home page</a> or contact the Admin of the site</a>
                </p>
                <br><br>
                <p>Have a nice day.</p>
            </div>  
            <div class="footer">
                    <?php include('footer.php') ?> 
            </div>
        </div>
    </body>            

</html>