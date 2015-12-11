
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
</head>
<body>

   
  <script>
   var kick = function (){
            window.location.replace("step_one.php");
        };
        var kickback = function(){
            setTimeout(kick, 5000);
        };     
  </script>
<div id="holder">

<h1>Seneca College</h1>
<h2>Webmaster Program</h2>
<h3>Creature Generator</h3>
<h4>Step Two: A new Creature is generated!</h4>
    
   
   
    

<?php
//descriptions
    $alien_description = array('You are a heiry monster! Go, get a hair cut!', 'Hey, you are stinky!', 'Wow you are so beautiful ', 'Can you shut up?');
    $robot_description = array('You are a heavy robot!', 'Where you have got your wheels?', 'You are reallly scary', 'You are the dumbest robot ever!!!');
    
//form validation
    $error = 0;

 if (  isset($_POST['name']) && !empty($_POST['name']) && strlen(trim($_POST['name'])) > 0 ) {
       
        $your_name = $_POST['name'];
        $your_name = ucwords(strtolower(htmlspecialchars (strip_tags($your_name))));
                        
        //echo "Thanks {$your_name} " . "<br>" . "Today is " .date('l F jS, Y') ."and it's been a busy day. But don't worry! <br> I'm here to design your new face! <br> When you are ready to see the results, <a id='btn' href='#'>click here</a>"; 
     
    } else {
        echo "Oh, dude, you've forgotten to give me your name. In 5 seconds you'll be kicked back!";
        echo '<script type="text/javascript">    kickback();      </script>';
        $error = $error + 1; 
    }

//===================Alien================
if ( !$error > 0 && isset($_POST['creature_type']) && $_POST['creature_type'] == 'alien'){

    
    $random_number = mt_rand(0, 3);
    $your_name = $your_name . 'zulla';
    
    echo "Thanks {$your_name} " . "<br>" . "Today is " .date('l F jS, Y') ."and it's been a busy day. But don't worry! <br> I'm here to design your new face! <br> When you are ready to see the results, <a id='btn' href='#'>click here </a> <br>"; 
    
    echo " <div id='description'> <br> Hello! <br> {$your_name} <br> {$alien_description[$random_number]} <img src='images/alien.png' alt='alien'></div> ";
    
    
//===================Robot================
} else if (!$error > 0 && isset($_POST['creature_type']) && $_POST['creature_type'] == 'robot') {
   
    
    $random_number = mt_rand(0, 3);
    $your_name = $your_name . '-bot';
    
    echo "Thanks {$your_name} " . "<br>" . "Today is " .date('l F jS, Y') ."and it's been a busy day. But don't worry! <br> I'm here to design your new face! <br> When you are ready to see the results, <a id='btn' href='#'>click here</a> <br>"; 
    echo " <div id='description'> <br> Hello! <br> I am your {$your_name} <br> {$robot_description[$random_number]} <img src='images/robot.png' alt='robot'></div> ";
   
//mail to Eric================
    $message_body = "<p><strong>Name:</strong> {$your_name}</p><p><strong>Creature Type:</strong> robot </p><p><strong>Description: </strong> {$robot_description[$random_number]} </p>";
    //echo $message_body;
    mail('eric.chen@senecacollege.com', 'New Creature is generated!', $message_body);
    
} else  if (!$error > 0   ){
    
    echo "<br>But, sweethart, you've forgotten to chose your creature type! In 5 seconds you'll be kicked back!";
    echo '<script type="text/javascript">    kickback();      </script>';
    
    
} else {
}


?>

    </div>
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script type="text/javascript">
  
            
        $('#btn').click( function (){            
                $('#description').fadeIn();
               // alert('test');
            });
       
        
    </script>
    
   </body> 
</html>

