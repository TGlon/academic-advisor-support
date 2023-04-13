<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng Ký</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            
        <form action="xuly.php" method="POST">
            <legend>Đăng ký</legend>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="txtFullname" size="50" />
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" name="txtPhone" size="50" />
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <input type="text" name="txtAddress" size="50" />
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <select name="txtSex">
                    <option value=""></option>
                    <option value="Nam">Nam</option>
                    <option value="Nu">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Tên Đăng Nhập</label>
                <input type="text" name="txtUsername" size="50" />
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" name="txtPassword" size="50" />
            </div>
            
            
            <input type="submit"  name="submit" class="btn btn-primary" value="Đăng ký" />
            <input type="reset" class="btn btn-primary" value="Nhập lại" />
            <p style="text-align:center;font-weight:bold;font-size:15px;margin-top: 10px">or</p>
            <a href="login_st.php" class="btn btn-primary" style="width:340px;margin-top:10px">Đăng Nhập</a>
        </form>
            </div>

        </div>
    </div>
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