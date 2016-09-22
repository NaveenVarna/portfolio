<?php
$display_name = 'Naveen Varna';
$year = date("Y");
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Naveen Varna | Front-end Web Developer</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Prompt|Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">    
  <link rel="stylesheet" href="css/responsive.css">    
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.html" id="logo">
        <h1>Naveen Varna</h1>
        <h2>Front-end Web Developer</h2>
      </a>  
      <nav>
      <ul>
        <li><a href="index.html" class="selected"
>Portfolio</a></li>  
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      </nav>
    </header>
    
    <div id="wrapper">
      <section>
        <ul id="gallery">
          <li>
            <a href="http://www.scs.ryerson.ca/~n2varnak/lab01/index.html">
              <img src="img/firstpage.png" alt="My First Webpage">
              <p>My first webpage created in HTML5 and CSS3.</p>
            </a>
          </li>
          <li>
            <a href="http://www.scs.ryerson.ca/~n2varnak/lab02/index.html">
              <img src="img/weather.png" alt="Weather application">
              <p>My weather web application (created using HTML5, CSS3, JS, AJAX, JSON).</p>
            </a>
          </li>
          <li>
            <a href="http://www.scs.ryerson.ca/~n2varnak/lab04/index.html">
              <img src="img/todo.png" alt="Todo List">
              <p>My To-do list web application (created using HTML5, CSS3, JS, AngularJS).</p>
            </a>
          </li>
          <li>
            <a href="img/th9.png">
              <img src="img/th9.png" alt="Clash of Clans Townhall 9.5">
              <p>A Clash of Clans thumbnail created for YouTube (created using Photoshop).</p>
            </a>
          </li>
          <li>
            <a href="img/gobknife.png">
              <img src="img/gobknife.png" alt="Clash of Clans Goblin Knife">
              <p>A Clash of Clans thumbnail created for YouTube (created using Photoshop).</p>
            </a>
          </li>
          <li>
            <a href="img/arena8magical.png">
              <img src="img/arena8magical.png" alt="Clash Royale Magical Chest">
              <p>A Clash Royale thumbnail created for YouTube (created using Photoshop).</p>
            </a>
          </li>
	  <li>
            <a href="img/KGdunk.gif">
              <img src="img/KGdunk.gif" alt="Kevin Garnett Dunk">
              <p>A sample gif I made of Kevin Garnett dunking a basketball (made in AfterEffects).</p>
            </a>
          </li>
          <li>
            <a href="img/DBZ.gif">
              <img src="img/DBZ.gif" alt="Frieza Transformation">
              <p>A sample gif I made of Frieza from DBZ transforming (made in AfterEffects).</p>
            </a>
          </li>

        </ul>
      </section>
      <footer>
        <a href="http://linkedin.com/in/naveenvarna">
          <img src="img/linkedin.jpg" alt="LinkedIn logo" class="social-icon"></a>
        <p>&copy; <?php echo "$year $display_name. "; 
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?></p>  
      </footer>
    </div>
  </body>  
</html>
