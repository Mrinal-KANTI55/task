<?php
 include 'conn.php';

 $id = $_GET["ID"];
 $view = "select * from Work_List where id=$id ";
 $ViewQuery = mysqli_query($con,$view);
 $res = mysqli_fetch_array($ViewQuery);
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="col-lg-6 m-auto">
 
 <form method="post" action="Email_api.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Recipient Information </h1>
 </div><br>

 <label>Recipient Email: </label>
 <input type="email" id="" name="Email" class="form-control" value="<?php echo $res['Email'];  ?>"> <br>

 <label> Work Description: </label>
 <input name="Description" class="form-control" rows="4" cols="50" value="<?php echo $res['Description'];  ?>"> <br>

 <label>Work Priority: </label>
 <input type="text" name="Priority" class="form-control" value="<?php echo $res['Priority'];  ?>"> <br>

 <label>Received Date: </label>
 <input type="date" name="ReceivedDate" class="form-control" value="<?php echo $res['ReceivedDate'];  ?>"> <br>

 <button class="btn btn-success" type="submit" name="done"> Send Mail </button><br>

 </div>
 </form>
 </div>
</body>
</html>
