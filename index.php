<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi role php & pdo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <form action="login_db.php" method="post" class="form-horizontal my-5">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-12">
            <input type="text" name="txt_email" class="form-control" require placeholder="enter email">
        </div>

        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-12">
            <input type="password" name="txt_password" class="form-control" require placeholder="enter password">
        </div>

        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">select type</label>
            <div class="col-sm-12">
                <select name="txt_role" class="form-control">
                    <option value="" selected="selected">- Select Role -</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="user">User</option>

                </select>
            </div>
        
        </div>

        <div class="form-group">
            <div class="col-sm-12 mt-5">
                <input type="submit" name="btn_login" class="btn btn-success" style="width: 100%;" value="Login">
            </div>
        </div>

        <div class="form-group text-center">
            <div class="col-sm-12 mt-3">
                If you don't have an account register here?<p> <a href="register.php">Register account</a></p>
            
            </div>
        
        </div>

        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>