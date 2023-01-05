<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Login</h2>
        <hr>
<div class="row">
    <div class="col-4">
        <div class="card card-body">
            <?php
            if($this->session->flashdata('pesan')){
                echo "<div class= 'alert alert-danger'>";
                echo $this->session->flashdata('pesan');
                echo "</div>";
            }
            ?>
            <form action="<?= site_url('Login/proses_login');?>" method="post">
                <div class="mb-3">
                    <label for="">Username</label>
                    <input type="text" name ="txtusername"class="form-control"  >
                   
                </div>

                <div class="mb-3">
                    <label for="" >Password</label>
                    <input type="password" name="txtpassword"class="form-control" >
                </div>
        
         <input type="submit" value="Login" name="loginn" class="btn btn-info">
           </form>

        </div>
    </div>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>