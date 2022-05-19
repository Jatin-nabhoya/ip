<?php
session_start();
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".delete").click(function() {
        if (confirm("Are u sure to delete ")) {
          $(this).closest('tr').fadeOut(800, function() {
              $(this).remove();
              
            });
          var deleteid = $(this).data('id');
          var url = "deleterecord.php?id=" + deleteid;
          $.get(url, function(data) {           
          });
        }
      });
    });
  </script>
</head>

<body>
  <div class="container">
    <div>
      <a href="addrecord.php" class="btn btn-success">Add Record.</a>
    </div>
    <br>
    <div class="text-danger"><?= isset($_SESSION['msg']) ? $_SESSION['msg'] : ""; ?></div>
    <?php unset($_SESSION['msg']); ?>
    <table class="table" border="1">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">gallery_name</th>
          <th scope="col">gallery_images</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = 'select id,gallery_name as gallery_name,gallery_images as gallery_images from gd_gallery_sub';
        $result = $conn->query($sql);


        while ($row = $result->fetch_assoc()) {
          //print_r($row);
        ?>
          <tr class="table-success">

            <td><?= $row['id']; ?></td>
            <td><?= $row['gallery_name']; ?></td>
            <td><?= $row['gallery_images']; ?></td>

            <td><input type="button" class="btn btn-danger delete" data-id="<?= $row['id'] ?>" name="delete" value="Delete">
              <a class="btn btn-primary" href="addrecord.php?id=<?= $row['id'] ?>" id="edit" name="edit">Edit
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    </tbody>

    </table>
  </div>
</body>

</html>