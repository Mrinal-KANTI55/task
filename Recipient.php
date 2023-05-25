<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" >Next Day Work</h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered"  >
 
 <tr class="bg-dark text-white text-center">
 
 <th> SL </th>
 <th> Work Description </th>
 <th> Work Priority </th>
 <th> Work Date </th>
 <th> Recipient Email </th>
 <th> Action </th>

 </tr >

 <?php

 include 'conn.php';
  
 $q = "select * from Work_List where ReceivedDate=CURDATE() + INTERVAL 1 DAY";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <input name="ID" value="<?php echo $res['ID'];  ?>">  </td>
 <td> <input name="Description" value="<?php echo $res['Description'];  ?>"> </td>
 <td> <input name="Priority" value="<?php echo $res['Priority'];  ?>"> </td>
 <td> <input name="ReceivedDate" value="<?php echo $res['ReceivedDate'];  ?>"> </td>
 <td> <input name="email" value="<?php echo $res['Email'];  ?>"> </td>
 <td> <button class="btn-primary btn"> <a href="addMail.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Send </a> </button> </td>
 </tr>

 <?php 
 }
  ?>
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>