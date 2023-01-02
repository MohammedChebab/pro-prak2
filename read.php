<?php
include("connect_db.php");

$sql = "SELECT * from `contact`"; 
$result = mysqli_query($conn, $sql);


$rows = "";

// echo $result; 

while($record = mysqli_fetch_assoc($result)){
    // var_dump($record);
    $rows .="<tr>
               
                <td>{$record['firstname']}</td>

                <td>{$record['lastname']}</td>
                <td>{$record['email']}</td>
                <td>{$record['subject']}</td>
               
                
  
             </tr>";
             
}

?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="stylerefrensie.css">
      
    <title>Hello, world!</title>
  </head>
  <body>
   
  
          <a class="btn btn-success" href="index.php">NEW RECORD </a>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row">
        <div class="col-12">
<table border=1 id="table_detail"'align=center cellpadding=10>
 
    <thead>
        <tr>
           
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>subject</th>
           


        </tr>          

    </thead>

    <tbody>
        <?php echo $rows; ?>
    </tbody>


</table>

       </div>
        </div>
       
    </div>

   

      
  </body>
</html>