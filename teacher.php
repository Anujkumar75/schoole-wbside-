<?php
require("php/db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- fonnt change  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Yuji+Mai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="body">
<?php
require("nav/nav.php")
?>
<div class="top_heading_box">
<h1 class="text_color" style="text-align: center;">Teachers</h1>
</div>
<hr>
<div class="container">

<div class="row">
  
    
   <?php
   $teacher_data_sql=$db->query("SELECT * FROM teacher_data");

   while($tec_data=$teacher_data_sql->fetch_assoc())
   {
    echo '
    <div class="col-md-3">
    <div class=" card mb-4">
    <img src="teacher_pic/'.$tec_data['teacher_pic'].'" class="w-100">
    <div class="card-body" style="background-color:#ddd"
    <label class="fs-5text-dark" >Name='.$tec_data['teacher_name'].'</label><br>
     <label class="fs-6text-dark" >Subject='.$tec_data['teacher_subject'].'</label><br>
     <hr>
     <label class="fs-6text-dark" >About Teacher='.$tec_data['about_teacher'].'</label><br>
     </div>
     </div>
     </div>';
    
   }
   ?>
</div>
</div>
<?php
require("footer/footer.php");
?>
     
</body>
</html>