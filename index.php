<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
       ul li:hover{background-color: pink; }
       /* .top_heading_box:hover{color: white;}  */
       .t-about{color: green; text-align: center;}

       a{
        text-decoration: none;
        color: black;
        text-align: center;
       }
      
       .d{
        text-align: center;
        font-size: 12px;
        margin-top: 50px;
       }
       .s{
        text-align: center;
        font-size: 12px;
        margin-top: 3px;
       }
      .icone{
        margin: 10px;
        font-size: 25px;
      }
      body{
        background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .color:hover{
      background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    </style>
    
</head>
<body>
<?php
require("nav/nav.php")
?>

<!-- selide image code -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img src="pic/1725.jpg" class="rounded mx-auto d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="pic/1727.jpg" class="rounded mx-auto d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="pic/1726.jpg" class="rounded mx-auto d-block w-100"alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- about collage -->
 <h1 class="t-about m-4"> About for school</h1>

<div class="row m-3" id="about">
  <div class="col-sm-6 shadow color">
    <div class="card border-0">
      <div class="card-body">
    <img src="pic/a.jpeg" class="w-100" alt="">
      </div>
    </div>
  </div>
  <div class="col-sm-6 shadow border-0 color">
    <div class="card border-0">
      <div class="card-body">
        <h5 class="card-title bg-danger p-3 fs-3 shadow" style="color: white;text-align: center; font-family:mangal">About school</h5>
        <p class="card-text fs-5" style="font-family: mangal;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quae incidunt nulla officia itaque? Minima asperiores velit nisi animi, atque minus, esse, dolorum aspernatur provident doloribus quos repellendus voluptas. Quidem possimus, 
          ad sequi fugiat animi, numquam explicabo odio libero velit quam iure et at eum,
           labore saepe laboriosam qui. Quo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum modi beatae voluptatibus, </p>
        <a href="#" class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div>
</div>

<!-- about teacher -->
<div class="row m-3">
  <div class="col-sm-4 shadow color">
    <div class="card border-0">
      <div class="card-body">
    <img src="pic/images.jpeg" class="w-100" alt="">
      </div>
    </div>
  </div>
  <div class="col-sm-8 shadow border-0 color">
    <div class="card border-0">
      <div class="card-body">
        <h5 class="card-title bg-success p-3 fs-3 shadow" style="color: white;text-align: center; font-family:mangal">About Principal</h5>
        <p class="card-text fs-5" style="font-family: mangal;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quae incidunt nulla officia itaque? Minima asperiores velit nisi animi, atque minus, esse, dolorum aspernatur provident doloribus quos repellendus voluptas. Quidem possimus, 
          ad sequi fugiat animi, numquam explicabo odio libero velit quam iure et at eum,
           labore saepe laboriosam qui. Quo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum modi beatae voluptatibus, </p>
        <a href="#" class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div>
</div>

<!-- online protable -->

<h1 class="t-about m-4">Online Portals</h1>


<div class="row row-cols-1 row-cols-md-6 g-4 m-4 justify-content-center ">
  <div class="col color p-2">
    <a href="result.php">
    <div class="card h-100">
      <img src="pic/result.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">Result</h5>
      </div>
    </div>
    </a>
  </div>
  <div class="col color p-2">
  <a href="school.php">
    <div class="card h-100">
      <img src="pic/school.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">About school</h5>
      </div>
    </div>
    </a>
  </div>
  <div class="col color p-2">
  <a href="student.php">
    <div class="card h-100">
      <img src="pic/student.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">Student</h5>
      </div>
    </div>
    </a>
  </div>
  <div class="col color p-2">
  <a href="teacher.php">
    <div class="card h-100">
      <img src="pic/techer.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">Teacher</h5>
      </div>
    </div>
    </a>
  </div>
</div>
<!-- footer box -->

<?php
require("footer/footer.php")
?>
    
</body>
</html>