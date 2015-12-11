<?php

 if (  isset($_POST['name']) && !empty($_POST['name'])  ) {
        $your_name = $_POST['name'];
        $your_name = ucwords(strtolower(htmlspecialchars (strip_tags($your_name))));
                        
        echo $your_name;
    } else {
        $full_name = '';
    }
    if (isset($_POST['user_email'])) {
        $user_email = htmlspecialchars(strip_tags($_POST['user_email']));
    } else {
        $user_email = '';
    }
    if (isset($_POST['user_message'])) {
        $user_message = htmlspecialchars(strip_tags($_POST['user_message']));
    } else {
        $user_message = '';
    }












?>