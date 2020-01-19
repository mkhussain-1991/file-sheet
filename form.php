<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students Result Sheet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function msg(){
      alert("Hello World!");
    }
  </script>
 
</head>
<body>

<div class="container">
  <h2>Form</h2>
  <form method="post" action="action.php">
    <table class="table bordered">
    <thead>
     <tr>
       <th>Name</th>
       <th>Subject</th>
       <th>Mark</th>
     </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" id="name" class="form-control" placeholder="Enter Name" name="name"></td>
        <td><input type="text" id="sub" class="form-control" placeholder="Enter Subject" name="sub"></td>
        <td><input type="text" id="mark" class="form-control" placeholder="Enter Mark" name="mark"></td>
       </tr>
    </tbody>
      </table>
    <tfoot>
      <input type="submit" onclick="msg()" class="btn btn-default" value="+">
      <button type="submit" class="btn btn-default">Submit</button>
    </tfoot>

    </div>
    
  </form>
<?php
if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
?>
</div>

</body>
</html>