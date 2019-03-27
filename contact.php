<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>Murulis</title>
  <link rel="stylesheet" href="css/style.css"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
 <body> 
     <?php
     
     $name = $_GET['name'];
     $email = $_GET['email'];
     $comment = $_GET['comment'];
     
     $connection = mysqli_connect('127.0.0.1', 'shoronov_contact', 'Aa2002Aa', 'shoronov_contact');
     mysqli_query($connection, 'INSERT INTO `contact` (`name`, `email`, `comment`) VALUES ($name, $email, $contact);');
         
     ?>

     <header>
        <div class="logo">
            <a href="index.html"><img class="graficlogo" src="img/logo.png" alt="logo"></a>
         </div>
         <nav>
            <div class="topnav" id="myTopnav">
             <a href="index.html">HOME</a>
             <a href="projects.html">PROJECTS</a>
             <a href="blog.html">BLOG</a>
             <a href="contact.html">CONTACT</a>
             <a href="about.html">ABOUT</a>
             <a href="services.html">SERVICES</a>
             <a href="location.html">LOCATION</a>
             <a id="menu" href="#" class="icon">&#9776;</a>
             </div>
         </nav>
     </header>
     <main>
        <form class="form">
            <p><input type="text" name="name" class="feedback_input" placeholder="Name" id="name"></p>
            <p><input type="email" name="email" class="feedback_input" placeholder="Email" id="email"></p>
            <p><textarea name="text" id="comment" placeholder="Message" class="feedback_input"></textarea></p>
            <input type="submit" value="Submit" class="button_submit">
            <div class="easy"></div>
        </form>
     </main>
     <footer>
         <nav>
             <a href="index.html">HOME</a>
             <a href="projects.html">PROJECTS</a>
             <a href="blog.html">BLOG</a>
             <a href="contact.html">CONTACT</a>
             <a href="about.html">ABOUT</a>
             <a href="services.html">SERVICES</a>
             <a href="location.html">LOCATION</a>
         </nav>
         <div class="logo">
             <a href="index.html"><img src="img/logo.png" alt="" class="graficlogo"></a>
         </div>
         <div class="social">
             <a href="https://mail.ru/"><img src="img/em.png" alt="1"></a>
             <a href="https://ru-ru.facebook.com/"><img src="img/face.png" alt="2"></a>
             <a href="https://www.google.ru/"><img src="img/goo.png" alt="3"></a>
             <a href="https://www.instagram.com/?hl=ru"><img src="img/inst.png" alt="4"></a>
         </div>
         <p>Murulis©. 2018</p>
     </footer>
     
     <script>
     menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");
    
    if(x.className === "topnav"){
        x.className += " responsive";
    } else{
        x.className = "topnav";
    }
}
     </script>
 </body>
</html>