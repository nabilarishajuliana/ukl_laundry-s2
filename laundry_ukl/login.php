<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="login_style.css" >
</head>
<body style="    background-color: rgb(121, 121, 207);">

<div class="overlay"></div>
   <form action="proses_login.php" method="post" class="box">
       <div class="login-area">
           <h4>Login To Your Account Laundry Lovefly</h4>
           <p>Selamat Datang di Web Laundry Lovefly,Silahkan Login</p>
           <input type="text" name="username" class="username" placeholder="Username">
           <input type="password" name="password" class="password" placeholder="Password">
           <select name="role" class="role" >
            <option value="">Role</option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
        </select>
           <input type="submit" value="Login" class="submit">
           <p>Belum punya akun?<a href="tambah_user_login.php">buat akun</a></p>
       </div>
   </form> 

</body>
</html>
