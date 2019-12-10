
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
                Zombie run is a third person view set ina  post apolicatic world. <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                <img src="/img/apocalipse.png" alt="Post world apocalipse">
            </div>
            <div class="main">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus felis orci, euismod et dapibus sed, vestibulum sed nibh. 
                Sed consectetur odio nulla. Nam at magna imperdiet, viverra neque sit amet, ultrices libero. Praesent consequat hendrerit tellus sed scelerisque. 
                Nunc gravida tellus a lacus maximus tristique gravida at nunc. In hac habitasse platea dictumst. Praesent blandit dolor ac accumsan consectetur. 
                Praesent blandit elit vulputate lacus laoreet ultricies. Fusce scelerisque nunc vitae quam scelerisque, sed aliquam lectus condimentum. 
                Donec dignissim sed tellus at volutpat. Praesent viverra fermentum ligula a commodo. Praesent imperdiet in odio in pellentesque. 
                <img src="/img/mainCharacter.png" alt text=" main character">    
                    
            </div>  
            <div class="left ads">
                <p>
                    <!-- use class id here as ads could be placed on several areas of the age/ site and set up using a single class -->  
                    <!-- ?php include('ads.php') --> <!-- single file for ads allowing modifation to one file
                    would allow for a dynmic website althoguh could put more load on HTML requests, accessing for many php files.logo
                    Although if files are in many pages it will speed up time as file will be cached.  -->
                    for now jsut do a single flexigrid 1 colum many rows list of "ads"
                    <div class="links">
                        <?php include('common_links.php') ?>
                        <!-- extra links can be added here for indivdual pages -->                                                
                    </div>
                </p>
                
            </div>
            <div class="footer  solid-divider">
                <?php include('footer.php') ?> 
            </div>
        </div>
        <?php include ('commonscripts.php') ?> <!-- php file for common javascripts that are used across many pages-->
    </body>
</html>