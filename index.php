
<?php include("connection.php"); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <style>
      input {
        padding: 15px;
        margin: 5px;
      }
      button {
        height: 40px;
      }
    </style>
  </head>

  <body>
  <form action="#" method="POST">    
      <h2>Please fill all the fields</h2>
      ID <input type="number"  name="id" /><br />


      Email <input type="text" name="email" /><br />

      Password <input type="password" name="password" />
      <br />

      <input
        type="submit"
        value="Register"
        name="register"
      /><br />
    </form>
  </body>
</html>



<?php 

if(isset($_POST['register']))
{
  
  $id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users VALUES('$id','$email','$password')";
  $data = mysqli_query($conn,$query);

  if($data){
    echo "Data inserted into database";
  }
  else {
    echo "Failed";
  }
}

?>
