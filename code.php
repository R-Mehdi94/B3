<?php
   $email="contact@mail.example.com";
   if(preg_match("/[a-z]+@[a-z]+([a-z\.]+\.)+[a-z]+/",$email))
      echo "Email valide.";
   else
      echo "Email invalide.";
?>
