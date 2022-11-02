<?php session_start(); ?>

 <html dir="ltr"   lang="en" >

<head>
    <meta http-equiv="content-type" content="text/html; charset="UTF-8" />
    <link rel="stylesheet" href="css/style1.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <title>PHP REFSful api</title>
</head>

<body>

    <?php 

include_once 'users.php';

$users=new users();

#Sample 

#echo($users->user_add('mehdi@test1313.zzz','123456'));

#echo($users->user_show_byid(14));

#echo($users->user_show_byEmail('mehdi@test13.net'));

#echo($users->user_check_byEmail('mehdi@test13.xx'));





?>
 

<div class="main-block">

      <h1>Registration</h1>
      <hr>
      <form action="" class="" id="form-register">
         
       
        <label id="icon" for="name"><i class="bi bi-person-square"></i></label>
        <input type="text"  class="" name="name" id="name" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" minlength="11"  required/>
        <label id="icon" for="name"><i class="bi bi-keyboard"></i></label>
        <input type="password" name="name" id="name" placeholder="Password" maxlength="12" minlength="8" required/>
        <label id="icon" for="name"><i class="bi bi-keyboard"></i></label>
        <input type="password" name="name" id="name" placeholder="Re-Password" maxlength="12" minlength="8" required/>
        <hr>
                  
        <div class="btn-block">
         
          <button  class="bi bi-person-plus" type="submit" href="">  Register</button>
          
        </div>
      </form>
    </div>

     

</body>

</html>
