<?php
require 'session_check.php';
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
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 m-auto bg-light">
            <div class="text-center bg-info text-white py-2">
              <h2>Add Admin</h2>
            </div>

            <?php if(isset($_SESSION['success'])){ ?>
              <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
              </div>
            <?php } ?>

             <?php if(isset($_SESSION['exist'])){ ?>
               <div class="alert alert-danger" role="alert">
                 <?php echo $_SESSION['exist'];
                 unset($_SESSION['exist']);
                  ?>
               </div>
             <?php } ?>

            <form action="add_admin_post.php" method="post" enctype="multipart/form-data">


            <div class="form-group my-4">
              <input type="text" name="fname" placeholder="Admin name" class="form-control">
            </div>
            <div class="form-group my-4">
              <input type="text" name="email" placeholder="Admin email" class="form-control">
            </div>
            <div class="form-group my-4">
              <input type="text" name="pass" placeholder="Enter a Passwprd" class="form-control">
            </div>
            <div class="form-group my-4">
              <input type="text" name="employee_ID" placeholder="Employee ID" class="form-control">
            </div>
            <div class="form-group my-4">
              <select class="form-control" name="role">
                <option value="">Select Role</option>
                <option value="1">Admin</option>
              </select>
            </div>


            <div class="form-group">
              <input type="file" name="photo" class="form-control">
            </div>

            <div class="text-center ">
              <button type="submit" class="btn btn-info text-white mb-3 px-4">ADD</button>

            </div>
           </form>
          </div>
        </div>

      </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
