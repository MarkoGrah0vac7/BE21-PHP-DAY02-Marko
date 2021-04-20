<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       <form action="exercise6.php"  method ="POST">
           Firstname: <input type="text"   name="firstname" />
           Lastname: <input type ="text"  name="lastname" />
           Age: <input type="text" name="age" />
           <input  type="submit"  name="submit"  />
        </form>
       <?php

      

       if( isset($_POST['submit']))
       {
           if( $_POST["name"] && $_POST["surname"] && $_POST["age"] )
           {
               echo "Welcome ". $_POST[ 'name']." ". $_POST[ 'surname']. $_POST['age']."<br />" ;
              
           }
           elseif($_POST["firstname"]) {
               echo "Please insert your firstname.<br />";
           }
           elseif($_POST["lastname"]) {
            echo "Please insert your lastname.<br />";
           }
           else{
               echo "Please enter your name and surname.<br />";
           }
       }
       ?>
  
</body>
</html>