
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale2!">
        <title>ZombieRun</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <!-- bootstrap css -->
        <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
    </head>

    <body>
        <?php include ('navbar.php') ?> 
        <div id="layout">
                    <div id="header"><h1>ZombieRun</h1></div> 
                    <div id="main">
                        <div id="main_content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus felis orci, euismod et dapibus sed, vestibulum sed nibh. 
                        Sed consectetur odio nulla. Nam at magna imperdiet, viverra neque sit amet, ultrices libero. Praesent consequat hendrerit tellus sed scelerisque. 
                        Nunc gravida tellus a lacus maximus tristique gravida at nunc. In hac habitasse platea dictumst. Praesent blandit dolor ac accumsan consectetur. 
                        Praesent blandit elit vulputate lacus laoreet ultricies. Fusce scelerisque nunc vitae quam scelerisque, sed aliquam lectus condimentum. 
                        Donec dignissim sed tellus at volutpat. Praesent viverra fermentum ligula a commodo. Praesent imperdiet in odio in pellentesque. 
                        </div>
                        <div id="main_image">
                            <img src="/img/apocalipse.png" alt="Post world apocalipse">
                        </div>   
                    </div>
                    <div id="subSectionAds">
                        <div class="ads"> <!-- use class id here as ads could be placed on several areas of the age/ site and set up using a single class -->  
                            <!-- ?php include('ads.php') --> <!-- single file for ads allowing modifation to one file
                                would allow for a dynmic website althoguh could put more load on HTML requests, accessing for many php files.logo
                                Although if files are in many pages it will speed up time as file will be cached.  -->
                                for now jsut do a single flexigrid 1 colum many rows list of "ads"
                        </div>
                    </div>
                    <div id="subSectionExtra">
                        <div id="extra_content">
                            Zombie run is a third person view set ina  post apolicatic world. <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </div>
                        <div id="extra_images">
                            <img src="/img/mainCharacter.png" alt text=" main character">
                        </div>
                    </div>
                    <div id="SubSectionLinks">
                        <p>
                        <!-- ?php include('common_links.php') --> 
                        <p> 
                        <!-- extra links can be added here for indivdual pages -->                                                
                    </div>
                    <div id="footer">
                       <?php include('footer.php') ?> 
                    </div>
        </div>
        
       
       <!-- bootstrap javascript files -->
       <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script-->
    </body>
</html>