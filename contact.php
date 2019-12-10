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
            <div class="header">
                <h1>ZombieRun</h1>
            </div> 
            <div class="right">
               right colume content
            </div>
            <div class="main">
                <form action="action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Name : </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="name" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Email : </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your last name..">
                            <!-- add email verifcation when focus is removed -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="reason">Reason :</label>
                        </div>
                        <div class="col-75">
                            <select id="reason" name="reason">
                                <option value="australia">comment</option>
                                <option value="canada">feedback</option>
                                <option value="usa">other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Subject : </label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                            <!-- add verfication that text is entered -->
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="left ads">
                left columen content
            </div>
            <div class="footer solid-divider">
                    <?php include('footer.php') ?> 
            </div>
        </div>
        <?php include ('commonscripts.php') ?> <!-- php file for common javascripts that are used across many pages-->
    </body>            
</html>