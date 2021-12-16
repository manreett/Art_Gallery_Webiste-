<?php

include("db_connect.php");



 ?>
<html>
    <head>
<title>Contact Us</title>
<link rel="stylesheet" href="homepage.css">
<link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1>Contact Us</h1>
        <div class= "navi">
                   <a href=homepage.html>Home Page</a>
                    <a href=collection.html>Collection</a>
                    <a href=artists.html>Artists</a> 
                    <a href=salespage.html>Sales Page</a>
                     <a href=aboutus.html>About Us</a>
                     <a href=faq.html>FAQ</a>
                    <a class="active"href=contactUs.php>Contact Us</a>    
        </div>
    </header>
    



       
        <h2>Our team is always ready to help! We typically reply within 1-2 days.</h2>
        <h2>If you have any inquiries or would like to get involved with us, please fill out the form below!</h2>
        <div class="contactform">
        <b><label for ="inquiry">How can we help?</label></b>
                <br>
                <br>
             
            <form action="contactusform.php" id="contact-form" name="user" method="post" >
                
                <br>
                <label for ="firstname">First Name</label>
                <input type="text" id="firstname" name="fname" placeholder="Enter your first name" required>
                <br>
                <br>

                <label for ="lastname">Last Name</label>
                <input type="text" id="lastname" name="lname" placeholder="Enter your last name" required>
                <br>
                <br>
                
                <label for="email">Email: </label>
                <input type="email" id="subject" name="mail" placeholder="Enter your email address" required>



                <br>
                <br>

                <label for="subject">Subject: </label>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>



                <br>
                <br>
                <label for="message">Message: </label>
                <br>
                <br>
                <textarea name="message"
                placeholder="Write your message here" required></textarea>


                    
                    <br><br>    
                <input type="Submit" class="submit" value="Submit your message">



                
                
            </form>
            
        </div>
    </body>
</html>
