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
                <form action="action_page.php">

                    <label for="fname">Name : </label>
                    <input type="text" id="fname" name="name" placeholder="Your name..">

                    <label for="lname">Email</label>
                    <input type="text" id="email" name="email" placeholder="Your last name..">
                    <!-- add email verifcation when focus is removed -->

                    <label for="reason">Reason :</label>
                    <select id="reason" name="reason">
                    <option value="australia">comment</option>
                    <option value="canada">feedback</option>
                    <option value="usa">other</option>
                    </select>

                    <label for="subject">Comment/Feedback</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <!-- add verfication that text is entered -->
                    <input type="submit" value="Submit">

                </form>
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