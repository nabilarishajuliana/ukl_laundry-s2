<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(121, 121, 207);">
    <br><br>
    <div class="container">
        <div class="card">
            <h1 class="card-header" align="center" style="font-weight:bold; color:rgb(71, 65, 160)">Tambah User</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_user.php">
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_user" value="" placeholder="Masukkan Nama User" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    Level :
                    <select name="role" class="form-select" aria-label="Default select example">
                    <option value="kosong" style="text-align:center ;">-----Pilih Level-----</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Owner">Owner</option>
                </select><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>