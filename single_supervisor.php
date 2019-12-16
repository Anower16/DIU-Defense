<?php
// require 'session_check.php';
require 'db.php';
$id = $_GET['id'];
$select= "SELECT * FROM single_user WHERE id=$id";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="card text-black bg-light mb-3">
             <div class="card-header text-center"> <h3>Supervisors Information</h3> </div>
              <div class="card-body">
                <table class="table text-black">
                  <tr>
                    <th class="hidden">ID</th>
                    <td><?php echo $after_assoc['id'] ?></td>
                  </tr>
                  <tr>
                    <th>NAME</th>
                    <td><?php echo $after_assoc['name'] ?></td>
                  </tr>
                  <tr>
                    <th>EMAIL</th>
                    <td><?php echo $after_assoc['email'] ?></td>
                  </tr>
                    <th>EMPLOYEE ID</th>
                    <td><?php echo $after_assoc['employee_ID'] ?></td>
                  </tr>
                  <tr>
                    <th>FIELD</th>
                    <td><?php echo $after_assoc['field'] ?></td>
                  </tr>
                    <tr>
                    <th>ROLE</th>
                    <td><?php echo $after_assoc['role'] ?></td>
                  </tr>
                  <tr>
                    <th>Thumbnail</th>
                    <td> <img src="uploads/users/<?php echo $after_assoc['photo'] ?>" alt="" width="250"> </td>
                  </tr>

                </table>

             </div>

          </div>
        </div>
      </div>
    </section>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
