<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title>Login / Signup</title>

    </head>
            
    <body>
        <?php include ('navbar.php') ?> 
        <!-- using php script to detect if user is logged in then chane login to logout -->
        <div class="grid-container" >
            <div class="col-12 header">
                <h1>Login / Signup</h1>
            </div> 
            <div class="right">
               right colume content
            </div>
            <div class="main">
                <form action="action_page.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-25 t-a-right">
                                <label for="uname"><b>Username : </b></label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter Username" name="uname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25 t-a-right">
                                <label for="psw"><b>Password</b></label>
                            </div>
                            <div class="col-75">
                                <input type="password" placeholder="Enter Password" name="psw" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75 col-a-r">
                                <button type="submit">Login</button>
                                <button type="button" class="cancelbtn">Cancel</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-a-r">
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </div>    
                    </div>
                </form> 
            </div>  
            <div class="left ads">
              left columen content
            </div>
            <div class="footer">
                    <?php include('footer.php') ?> 
            </div>
        </div>
    </body>            
</html>