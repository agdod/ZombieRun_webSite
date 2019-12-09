<!DOCTYPE html>
<html lang="en">
       
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title>page title goes here</title>

    </head>
            
    <body>
        <?php include ('navbar.php') ?> 
        <div class="grid-container" >
            <div class="col-12 header">
                <h1>ZombieRun</h1>
            </div> 
            <div class="col-3 aside-right">
               right colume content
            </div>
            <div class="col-6 main">
               main content
            </div>  
            <div class="col-3 aside-left ads">
              left columen content
            </div>
            <div class="col-12 footer">
                    <?php include('footer.php') ?> 
            </div>
        </div>
    </body>            
</html>