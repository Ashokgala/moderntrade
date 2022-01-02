<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porter MT</title>
    <link rel="stylesheet" href="style.css">
</head>

  

<body>




<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div>
          <a href="index.php">
            <img src="Porter-logo.png" class="image" alt="Porter Logo"  ALIGN='left'>
</a>
        </div>
        <h1 class="heading">Porter MT Dashboard</h1>
        
      </nav>
  </header>
    <div class="bodydiv">
        <form method="POST" action = "">
          <label for="fname">Customer Pickup Location</label>
          <input type="text" id="fname" name="Pickup_Location" placeholder="Enter Customer Pickup Location.." > 

          <label for="lname">Customer Drop Location</label>
          <input type="text" id="lname" name="Drop_Location" placeholder="Enter Customer Drop Location..">
          <input type="submit" value="submit" name = "submit">
        </form>
      </div> 

      <?php

  $mysqli = new mysqli('localhost', 'root', '', 'moderntrade') or die('Unable to Connect to the Server');
  
  if(isset($_POST['submit'])) 
  {
    $mysqli = new mysqli('localhost', 'root', '', 'moderntrade') or die('Unable to Connect to the Server');
    $sql1 = "SELECT * FROM crm" or die('Unable to connect with CRM Table');
    

    $Pickup_Location = $_POST['Pickup_Location'];

    $Drop_Location = $_POST['Drop_Location'];

    $sql = $mysqli->query("SELECT * FROM crm WHERE Pickup_Location = '".$Pickup_Location."' AND Drop_Location = '".$Drop_Location."' ");
  
    //$result = $mysqli->query('$sql') or die('Unable to rn the query');

    //$result = $mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

    $result = $sql->fetch_assoc();

    
 
  

?>
    
      <table border="1" cellspacing="">
        <tr style="background-color:#25BAC3" style="width:100%" >
          <td>Order_ID </td>
          <td>Pickup_Location	</td>
          <td>Drop_Location	</td>
          <td>Contact</td>
          <td>Exceptions</td>
        </tr><?php 
        //while ($row = mysql_fetch_assoc($result)){
          if(!empty($result)){
          ?>
        <tr style="text-align:center">
    <td><?php echo $result['Order_ID']; ?></td>
    <td><?php echo $result['Pickup_Location']; ?></td>
    <td><?php echo $result['Drop_Location']; ?></td>    
    <td><?php echo $result['Contact']; ?></td>    
    <td><?php echo $result['Exceptions']; ?></td>    
  </tr>	

<?php } ?>

      </table>
<?php } ?>

          <br/>


          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>



<script language="javascript" type="text/javascript" 
  src="footer.txt"></script>

      
</body>


</html>







