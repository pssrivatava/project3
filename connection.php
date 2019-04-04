<?php

    $link = mysqli_connect("localhost","root","","hello");
        
        if (mysqli_connect_error())
         {
            
            die ("Database Connection Error");
            
        }

?>