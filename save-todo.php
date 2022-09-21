<?php
include('./db_config.php');
if(isset($_POST['update_value']))
{
  $updateId= $_GET['update'];
  $newValue = $_POST['todo'];
  $sql = "UPDATE todolist set List = '$newValue' where Id='$updateId' ";
  $result = $conn->query($sql);
  header('location: ./index.php');
}

 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        .box{
            width:50%;
            margin:0 auto;
            border:1px solid black;
            padding:10px;
        }
        
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="mb-3 box">
    <form action="" method="POST">
    <label for="exampleFormControlInput1" class="form-label">Add Your Todo List</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="todo" placeholder=" update Todo Thing" value=>
    <button class="btn btn-warning" name="update_value" style="margin-top:5px" type="submit">Update Todo</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
