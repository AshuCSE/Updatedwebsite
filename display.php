<!DOCTYPE html>
<html>
<head>
  <title> Table with Database </title>
  <style type="text/css">
   table {  
       border-collapse : collapse;
       border-top-style: dotted;
       border-right-style: dotted;
       border-bottom-style: dotted;
       border-left-style: dotted;
       width : 100%;
       color : #3cb371;
       font-family : "Times New Roman", Times, serif;
       font-size : 14 px;
       text-align : Left;
   }
   th {
       background-color : #588c7e;
       color : white;
       }
       tr:nth-child(even) {background-color: #f2f2f2};
</style>    
</head>
<body>
<table>
   <tr>
   <th> UserName </th>
   <th> Email </th>
   <th> Password </th>
   <th> Confirm Password </th>
   </tr>
<?php
  $conn = mysqli_connect("localhost","Ashu","Southern@@123","test1");
  if($conn-> connect_error){
      die("Connection Failed:" . $conn-> mysqli_connect_error );
    }
  $sql = "select * from registration";
  $result = $conn -> query($sql);
  if($result-> num_rows > 0) { 
                while($row = $result-> fetch_assoc())
                {
                    echo "<tr><td>" . $row["UserName"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Password"] . "</td><td>" . $row["Confirm Password"] . "</td></tr>";
                }
            }

?> 
</table>
</body>
</html>

        
                           
                    

                        






















