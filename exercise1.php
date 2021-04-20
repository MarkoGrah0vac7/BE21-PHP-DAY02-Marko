<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       <form action="exercise1.php"  method ="POST">
           Name: <input type="text"   name="name" />
           Surname: <input type ="text"  name="surname" />
           <input  type="submit"  name="submit"  />
        </form>
       <?php

      

       if( isset($_POST['submit']))
       {
           if( $_POST["name"] && $_POST["surname"] )
           {
               echo "Welcome ". $_POST[ 'name']." ". $_POST[ 'surname']."<br />" ;
              
           }
           elseif($_POST["name"]) {
               echo "Please insert your surname.<br />";
           }
           elseif($_POST["surname"]) {
            echo "Please insert your name.<br />";
           }
           else{
               echo "Please enter your name and surname.<br />";
           }
       }
       ?>
  
</body>
</html>