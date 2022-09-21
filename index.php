<?php
  include('./db_config.php');
 
  // print_r($result);
  if(isset($_POST['add']))
  {
    $val=$_POST['todo'];
    $query= "INSERT Into todolist(List) values ('$val')";
    $result = $conn->query($query);
  }
  if(isset($_POST['delete']))
  {
    $del_val= $_POST['delete'];
    $query ="DELETE FROM todolist WHERE Id='$del_val'";
    $result = $conn->query($query);
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
        .tableDesign{
            width:70%;
            margin:0 auto;
        }

        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="mb-3 box">
    <form action="" method="POST">
    <label for="exampleFormControlInput1" class="form-label">Add Your Todo List</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="todo" placeholder="Todo Thing">
    <button class="btn btn-success" name="add" style="margin-top:5px" type="submit">Add Todo</button>
    </form>
    </div>
    <table class="table tableDesign">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Todo Iteam</th>
      <th>Action</th>
      
    </tr>
  </thead>
  <tbody> 
    <?php
      $i=1;
     $sql = "select * from todolist";
     $result = $conn->query($sql);

  while($row = $result->fetch_assoc())
  {?>
    <tr>
      <th><?= $i++ ?></th>
      <td><?= $row['List']?></td>
      <td><form action="" method="POST">
      <button class="btn btn-danger" name="delete" type="submit" value=<?=$row['Id']?>>Delete</button>
        </form>
      </td>
      <td><form action="save-todo.php" method="GET">
      <button class="btn btn-primary" name="update"  type="submit" value=<?=$row['Id']?>>Update</button>
        </form>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
