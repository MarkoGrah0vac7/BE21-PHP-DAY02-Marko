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
           <input  type="submit"  name="submit" value="test"  />
        </form>
       <?php
       $info = '';
       if( isset($_POST['submit']))
       {
           if( $_POST["firstname"] && $_POST["lastname"] && $_POST["age"] )
           {
               if(strlen($_POST["firstname"]) > 5){
                $info = "<div>Welcome <span style='color: green;'>". $_POST[ 'firstname']."</span> ". $_POST[ 'lastname']." ". $_POST['age']."</div>" ;
               } else {
               $info = "<div>Welcome <span style='color: red;'>". $_POST[ 'firstname']."</span> ". $_POST[ 'lastname']." ". $_POST['age']."</div>" ;
            }
           }
           elseif( !$_POST["firstname"] && !$_POST["lastname"] && !$_POST["age"] ) {
            echo "Please enter all your Information.<br />";
        }
        elseif( !$_POST["firstname"] || !$_POST["lastname"] || !$_POST["age"] ) {
            if(!$_POST["firstname"]){
                echo "Please enter your first name <br>";
            }
            if(!$_POST["lastname"]){
                echo "Please enter your last name <br>";
            }
            if(!$_POST["age"]){
                echo "Please enter your age <br>";
            }
        } }      
       ?>
        <?php echo $info;?>
        

</body>
</html>