
<?php

include 'conn.php';

if(isset($_POST['done'])){

 $Description = $_POST['Description'];
 $Priority = $_POST['Priority'];
 $ReceivedDate = $_POST['ReceivedDate'];
 $Email = $_POST['email'];

 
 $q = " INSERT INTO `Work_List`(`Description`, `Priority`, `ReceivedDate`,`Email`) VALUES ('$Description','$Priority','$ReceivedDate', '$Email')";
 $query = mysqli_query($con,$q);

}
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
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Work Information </h1>
 </div><br>

 <label>Recipient Email: </label>
 <input type="email" id="" name="email" class="form-control"> <br>

 <label> Work Description: </label>
 <textarea name="Description" class="form-control" rows="4" cols="50"> </textarea><br>

 <label> Work Priority: </label>
 <select name="Priority" id="" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select> <br>

 <label>Received Date: </label>
 <input type="date" id="" name="ReceivedDate" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Add Information </button><br>

 </div>
 </form>
 </div>
</body>
</html>