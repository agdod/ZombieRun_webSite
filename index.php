
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title>ZombieRun</title>
    </head>

    <body>
        <?php include ('navbar.php') ?> 
        <div class="grid-container" >
            <div class="header">
                <h1>ZombieRun</h1>
            </div> 
            <div class="right">
                <div id="ratings">
                    <span class="sub-heading">User Ratings</span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>4.1 average based on 254 reviews.</p>
                    <hr style="border:3px solid #f1f1f1">

                    <div class="row">
                        <div class="col-15">
                            <div>5 star</div>
                        </div>
                        <div class="col-70">
                            <div class="bar-container">
                                <div class="bar-5"></div>
                            </div>
                        </div>
                        <div class="col-15 t-a-right">
                            <div>150</div>
                        </div>
                        <div class="col-15">
                            <div>4 star</div>
                        </div>
                        <div class="col-70">
                            <div class="bar-container">
                                <div class="bar-4"></div>
                            </div>
                        </div>
                        <div class="col-15 t-a-right">
                            <div>63</div>
                        </div>
                        <div class="col-15">
                            <div>3 star</div>
                        </div>
                        <div class="col-70">
                            <div class="bar-container">
                                <div class="bar-3"></div>
                            </div>
                        </div>
                        <div class="col-15 t-a-right">
                            <div>15</div>
                        </div>
                        <div class="col-15">
                            <div>2 star</div>
                        </div>
                        <div class="col-70">
                            <div class="bar-container">
                                <div class="bar-2"></div>
                            </div>
                        </div>
                        <div class="col-15 t-a-right">
                            <div>6</div>
                        </div>
                        <div class="col-15">
                            <div>1 star</div>
                        </div>
                        <div class="col-70">
                            <div class="bar-container">
                                <div class="bar-1"></div>
                            </div>
                        </div>
                        <div class="col-15 t-a-right">
                            <div>20</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
            <h2> - Run the gaulet of zombies, escape, survive, RUN!</h2>  
            <div class="row">
                <div class="col-70">
                    <p>
                        Zombie run is a third person view set ina  post apolicatic world. <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        <span id="dots">.....</span>
                    </p>
                    
                </div>
                <div class="col-30 col-a-r">
                    <img src="/img/apocalipse.png" alt="Post world apocalipse">
                </div>
            </div>
            <span id="more">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus felis orci, euismod et dapibus sed, vestibulum sed nibh. 
                Sed consectetur odio nulla. Nam at magna imperdiet, viverra neque sit amet, ultrices libero. Praesent consequat hendrerit tellus sed scelerisque. 
                Nunc gravida tellus a lacus maximus tristique gravida at nunc. In hac habitasse platea dictumst. Praesent blandit dolor ac accumsan consectetur. 
                Praesent blandit elit vulputate lacus laoreet ultricies. Fusce scelerisque nunc vitae quam scelerisque, sed aliquam lectus condimentum. 
                Donec dignissim sed tellus at volutpat. Praesent viverra fermentum ligula a commodo. Praesent imperdiet in odio in pellentesque. 
                <img src="/img/opening sequence.jpg" alt="Zombie Run Opening sequence">
              </p>  </span>
              <div class="more" id="moreBtn" onclick="ShowMore()">Read more...</div>
            
            </div>  
            <div class="left ads">
            <img src="/img/mainCharacter.png" alt text=" main character"> 
            The main character in the game.
                <p> 
                    <?php include('links.php') ?>
                        <!-- extra links can be added here for indivdual pages -->        
                <!-- ?php include('ads.php') --> <!-- single file for ads allowing modifation to one file 
                    would allow for a dynmic website althoguh could put more load on HTML requests, accessing for many php files.logo
                    Although if files are in many pages it will speed up time as file will be cached.  -->
                    for now just do a single flexigrid 1 colum many rows list of "ads"
                   
                </p> 
            </div>
            <div class="footer">
                <?php include('footer.php') ?> 
            </div>
        </div>
        <?php include ('commonscripts.php') ?> <!-- php file for common javascripts that are used across many pages-->
    </body>
</html>