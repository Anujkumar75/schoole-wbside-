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
       ul li:hover{background-color: blue; color: white;}
       /* ul li a:hover{color: white;}  */
       .t-about{color: green; text-align: center;}
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


<?php
require("footer/footer.php")
?>
    
</body>
</html>