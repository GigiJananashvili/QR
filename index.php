<html>
  <head>
    <title> Hello </title>
    <link rel="stylesheet" href="codepen.css">
    <?php require "aray.php"; ?>
  </head>
 
  <body style="background-color:#D5E1EF">

    <!-- <div

      style="width:320px;background-color:white;margin:auto;padding:16px;border-radius:20px;margin-top: 210px;border:solid black ">
      <img style="max-width:100%;border-radius:10px"src="https://i.postimg.cc/x8vyv5JV/image-qr-code.png">
      <h1 style="font-size:22px;text-align:center;border: solid black;margin-top: 30px;margin-bottom: 40px;">Improve your front-end skills by building projects</h1>
      <p style="font-size:15px;text-align:center;"> Scan the QR code to visit Frontend Mentor and take your  coding skills to the next level </p>

    </div> -->
    
<?php
foreach($qrs as $qr) {

 echo '<div class="A">
      <img class="B" src="https://i.postimg.cc/x8vyv5JV/image-qr-code.png" >
      <h1 class="h1">' . $qr['title'] .'</h1>
      <p class="p">' . $qr['subtitle'] . ' </p>
   </div> ';
  }
  ?>

   <!-- <div class="A">
      <img class="B" src="https://i.postimg.cc/x8vyv5JV/image-qr-code.png" >
      <h1 class="h1">Improve your front-end skills by building projects</h1>
      <p class="p"> Scan the QR code to visit Frontend Mentor and take your  coding skills to the next level</p>
   </div> -->
    
  </body>
  
</html>
