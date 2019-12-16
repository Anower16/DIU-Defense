<?php
require 'session_check.php';
require 'db.php';
 ?>
 <?php
 $select= "SELECT * FROM single_user";
 $select_result= mysqli_query($db, $select);
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
          <div class="col-lg-12 m-auto">
            <div class="card text-black bg-white mb-3">
             <div class="card-header text-center">
               <h3>ALL SUPERVISOR INFO <a href="logout.php" style="float:right" class="btn btn-primary">Logout</a> </h3>
             </div>
              <div class="card-body">
                <table class="table text-black">
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>EMPLOYEE ID</th>
                  <th>FIELD</th>
                  <th>ROLE</th>

                </tr>
                <?php foreach ($select_result as $value) { ?>

                <tr>
                  <td> <?php echo $value['id']?> </td>
                  <td> <?php echo $value['name']?> </td>
                  <td> <?php echo $value['email']?> </td>
                  <td> <?php echo $value['employee_ID']?> </td>
                  <td> <?php echo $value['field']?> </td>
                  <td>
                    <?php
                  if($value['role']==1){
                  echo"Admin";
                }
                elseif($value['role']==2){
                  echo"supervisor";
                }
                else{
                  echo"student";
                }
                  ?> </td>

                  <td> <img src="uploads/users/<?php echo $value['photo']?>" alt="" width="50"> </td>

                  <td>
                     <a href="single_supervisor.php?id=<?php echo $value['id'] ?>" class="btn btn-info">view</a>
                  </td>
                
                  <td>
                     <a data-toggle="modal" data-target="#exampleModal<?php echo $value['id'] ?>" href="#" class="btn btn-danger text-white">Delete</a>

                     <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="exampleModalLabel">Are You Sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger "><a href="del_supervisor.php?id=<?php echo $value['id'] ?>" class="text-white">Yes</button>
      </div>
    </div>
  </div>
</div>
                  </td>

                </tr>
              <?php  } ?>
                </table>
                  <div class="text-center">
                    <p>
                      <a  href="add_supervisor.php">
                        <button type="button" class="btn btn-outline-info">Add Supervisor</button>
                        </a>
                    </p>
                  </div>
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
