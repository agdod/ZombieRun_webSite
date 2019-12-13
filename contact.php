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
                <h1>Contact Us:</h1>
            </div> 
            <div class="right">
                <h2>Ads :</h2>
                <div class="card ">
                        <img src="/img/img_avatar.png" alt="Avatar" style="width:60%">
                        <div class="container">
                            <h4><b>Elleros Games</b></h4>
                            <p>game develpement enterpises</p>
                            <p>
                                leading game develpment 
                            </p>
                        </div>
                    </div> 
                    <div class="card">
                        <img src="/img/img_avatar.png" alt="Avatar" style="width:60%">
                        <div class="container">
                            <h4><b>Elleros Enterpise </b></h4>
                            <p>Web Develpment spiecalist</p>
                            <p>
                                for all you web devlpment needs
                            </p>
                        </div>
                    </div> 
            </div>  <!--end of right-->
            <div class="main">
            Contact us. We'd love to hear from you! Send us your thoughts, ideas, suggestions, comments, feedback, or  even write a review. 
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
                            <input type="text" id="email" name="email" placeholder="email@.....">
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
                <hr>
                <h2>Meet the team: </h2>
            <div class="row"> 
                    <div class="col-33">
                        <div class="card">
                            <img src="/img/img_avatar.png" alt="Joe Bloggs" style="width:100%">
                            <div class="container">
                                <h2><b>Joe blogs</b></h2>
                                <p class="title">Customer Service</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>joebloggs@ellerosgames.test</p>
                                <p><button class="button-gen">Contact</button></p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-33">
                        <div class="card">
                            <img src="/img/img_avatar.png" alt="John Doe" style="width:100%">
                            <div class="container">
                                <h2><b>John Doe</b></h2>
                                <p class="title">Customer Service</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>johndoe@ellerosgames.test</p>
                                <p><button class="button-gen">Contact</button></p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-33">
                        <div class="card">
                            <img src="/img/img_avatar2.png" alt="Jane Doe" style="width:100%">
                            <div class="container">
                                <h2><b>Jane Doe</b></h2>
                                <p class="title">Senior Web Develpor </p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>janedoe@ellerosgames.test</p>
                                <p><button class="button-gen">Contact</button></p>
                            </div>
                        </div> 
                    </div> 
                </div> <!-- end of meet the team-->              
            </div>
            <div class="left ads">
                <!--?php include('links.php') ?-->
                # some filler text <br>
                here will be adds space <br>
                and some links too <br>
                ad1 <br> ad2<br> ...etc<br>
                <hr>
                <div class="links">
                    <?php include('links.php') ?>
                </div>    
            </div>
            <div class="footer solid-divider">
                    <?php include('footer.php') ?> 
            </div>
        </div>
        <?php include ('commonscripts.php') ?> <!-- php file for common javascripts that are used across many pages-->
    </body>            
</html>