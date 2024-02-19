<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galeri </title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Website Galeri </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-primary m-1">Masuk</a>
    </div>
  </div>
</nav>
     <div class="container py-5">
       <div class="row justify-content-center">
         <div class="col-md-4">
           <div class="card">
             <div class="card-body bg-light">
               <div class="text-center">
                 <h5>Daftar akun baru</h5>
               </div>
               <form action="config/aksi_register.php" method="POST">
                 <label class="form-label">username</label>
                 <input type="text" name="username" class="form-control" required>
                  <label class="form-label">password</label>
                 <input type="password" name="password" class="form-control" required>
                 <label class="form-label">email</label>
                 <input type="email" name="email" class="form-control" required>
                 <label class="form-label">namalengkap</label>
                 <input type="text" name="namalengkap" class="form-control" required>
                 <label class="form-label">alamat</label>
                 <input type="text" name="alamat" class="form-control" required>
                 <div class="d-grid mt-2">
                   <button class="btn btn-success" type="submit" name="kirim">Daftar</button>
                 </div>
               </form>
               <hr>
               <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
             </div>
           </div>
         </div>
       </div>
     </div>
    <footer class="d-flex justify-content-center border-top mt-3
    bg-primary fixed-bottom">
    	<p>&copy; ukk rpl 2024 | SanSan Hendriansyah</p>
    </footer>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html\