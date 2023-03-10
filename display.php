<html>
<head> 
<title> Table records </title>
<style>

    table,td,th {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px;

    }
    </style>

</head>

<body>
<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);  // to store the number of records in table



if($total!=0) // if there are no records in table

{
    ?>

    <h1 align="center"> Records of the table </h1>
<table align="center" width="90%">
    <tr>
<th> ID </th>     
<th> Email </th> 
<th> Password </th>     

</tr>   

    <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo"<tr>
    
<td>".$result['ID']." </td>    
<td>".$result['Email']." </td>  
<td>".$result['Password']." </td>   

</tr> ";
   }
}
else {
    echo "no records found";
}
?>
</table>
</body>


</html>

