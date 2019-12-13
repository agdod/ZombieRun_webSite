<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title>About</title>
    </head>
    
    <body>
        <?php include ('navbar.php') ?> 
        <div class="grid-container" >
            <div class="header">
                <h1>About</h1>
            </div> 
            <div class="right">
            <h2>About this project</h2>
                <p>
                Zombie run was desgined and developed as part of the <a href="https://www.h2c.fi">Highway2Code</a> leaning programme. 
                Teaching coding and basic game mecanics a quick learning curve of both unity game engine
                game develpment and C# was made during this course. the outcome a "reasonable" playable game. 
                With time and  develpment hopfully the game can develp more and further imporve - along with my coding skill set.    
                
                This site was also develped along with  the game where dont as part of the <a href="https://h2c.fi/">Highway2Code</a>trainign programme. 
                Undertacken in conjuntion with <a href="https://www.turkuamk.fi">TurkAmk</a> and Turku GameLab
                </p>
                <hr>
                <?php include('links.php') ?>
            </div>
            <div class="main">
                <h2>The game objective</h2>
                <!-- Game screen shot or two here-->
                Zombie Run is a third person infinte runner. The objective o the game is to survive. Avoid the hoard and stay alive for as long as you can.
                
                Background 
                Set in post apolcityc world where a zombie virus has ranveged mankind.logo Handfull of surviors are scattered across teh glode.
                Youve heard that in the north there isnt zombies zombies dont like and cant stand your cold.You decide to head north.
                
                Variuos scene to test your skills on, dodge slide and jump the obsticles and dodge the zombie, blast them on your way. be warned they are attarcted to noise though.
                Collect the power up and health packs to help you progress.
                Exchange you gained loot for additial goodies at the tading posts to help you on your way

                infintiy runner 3rd person style. Dodge attack the zombies SURVIVE. 
                Numerous levels of iniftie fun, dodge attacking the zombies, get power up and hiddens weapons. Find the secerat areas. Do you have what it take to survive.
                
                Your journey begins 
                <h3> Screen shots </h3>   <span id="dots">....</span>
                <div class="more" id="moreBtn" onclick="ShowMore()">Read more...</div>
                
                <span id="more">
                    <div class="row">
                        <div class="col-70 col-a-r">
                            <img src="/img/opening sequence.jpg" alt="Opening squence">Opening sequence. 
                            Camera pans slowly over a half destroyed bridge.
                        </div>
                        <div class="col-25 col-a-l">
                            <img src="/img/mainCharacter.png" alt="main character"> Main Character
                            <i>still to decide on name...!</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-70">
                            <img src="/img/startoff-w-swinging.jpg" alt="swinging weapon"> Swinging the buldgen weapon
                        </div>
                        <div class="col-25 t-a-right">
                            The start off point a trail swing before setting off  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-70 col-a-r" >
                            <img src="/img/screenshot.jpg" alt="attacked by zombies"> in the think of it
                        </div>
                        <div class="col-25 col-a-l">
                            <img src="/img/mainmenu.jpg" alt="main menu">Screen shot of main menu
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25 col-a-r">
                            
                        </div>
                        <div class="col-75 ">
                            
                        </div>
                    </div>
                </span>
            </div>  
            <div class="left ads">
                <h2> About Me : - </h2>
                <div class="card">
                    <img src="/img/img_avatar.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Andy Dodson</b></h4>
                        <p>Web Develper</p>
                        <p>
                            <!-- add some text here-->
                        </p>
                    </div>
                </div>  
            </div>
            <div class="col-12 footer solid-divider">
                    <?php include('footer.php') ?> 
            </div>
        </div>
        <?php include ('commonscripts.php') ?> <!-- php file for common javascripts that are used across many pages-->
    </body>
</html>