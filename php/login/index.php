<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .container {
      max-width: 400px;
      margin-top: 100px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      padding: 20px;
      background-color: #fff;
    }
    
    .container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .btn-primary {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Đăng nhập</h2>
    <form action="./index.php" method="post">
      <div class="form-group">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập">
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
        
      </div>
      <p style="color: red;"><?php echo $alert ?> </p>
      <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
  </div>
</body>
</html>