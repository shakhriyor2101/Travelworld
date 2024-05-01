<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['Ismi'];
   $last_name = $_POST['Familyasi'];
   $email = $_POST['Email'];
   

   $sql = "INSERT INTO users(Id, Ismi, Familyasi, Email) VALUES (NULL,'$first_name','$last_name','$email')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   

   <title>PHPda TravelWorld</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Registratsiya
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Yangi foydalanuvchi qo'shish</h3>
         <p class="text-muted">Ro'yhatdan o'tish uchun quyidagi ma'lumotlarni kiriting</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Ismi:</label>
                  <input type="text" class="form-control" name="Ismi" placeholder="Shaxriyor">
               </div>

               <div class="col">
                  <label class="form-label">Familyasi:</label>
                  <input type="text" class="form-control" name="Familyasi" placeholder="Komilov">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="Email" placeholder="shakhriyorkomilov@gmail.com">
            </div>

          

            <div>
               <button type="submit" class="btn btn-success" name="submit">Saqlash</button>
               <a href="index.php" class="btn btn-danger">Orqaga</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>