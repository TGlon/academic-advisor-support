<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<script>
    start_loader()
  </script>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="Login_student.php" method="POST" role="form">
            <legend>Login</legend>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="Input username" name="username">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Input password" name="password">
              </div>
              <button type="submit" name="dangnhap" class="btn btn-primary">Sign In</button>
              <a href="dangky_st.php" class="btn btn-primary">Sign Up</a>
          </form>
        </div>
      </div>

    </div>
    <script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
<style>
  legend{
    text-align:center;
    color: #000099;
    font-weight: bold;
    font-size: 30px;
  }
  form{
    width: 300px;
    margin-left: 430px
  }
</style>
</html>