<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .main_icon{
            height: 100vh;
        }
        .left{
            width: 17%;
            height: 100vh;
            background-color: #080429;
             
        }
        .right{
            width: 83%;
            height: 100%;
           overflow:auto;
           
           
        }
        .left ul{
            list-style: none;
            padding: 0;
            margin: 0;
            
        }
        .left ul li{
            color: white;
            border-bottom: 1px solid white;
           
        }
        
        .left ul li:hover{
            background-color: #fff;
            color: #080429;
            cursor: pointer;
        }
        
        .msg{
            width: 100%;
            height: 100vh;
            background-color: rgba(0,0,0,0.7);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000000000000000;
        }
    </style>
</head>
<body>
    <div class="w-100 d-flex">
     <div class="left sticky-top">
              <ul>
                <li class=" px-4 py-3 menu" p_link="adimission"></i>Adimission</li>
                <li class=" px-4 py-3 menu" p_link="function"></i>School Function</li>
                <li class="px-4 py-3 menu" p_link="student_potal"></i>Student potal</li>
                <li class="px-4 py-3 menu " p_link="teacher_potal">Teacher potal</li>
                <li class="px-4 py-3 menu" p_link="marks_potal">Marks Potal</li>               
                
              </ul>
        </div>
       <div class="right p-3"></div>
    </div>
    <div class="msg d-none"></div>
    <script>
        $(document).ready(function(){
            $(".menu").each(function(){
                $(this).click(function(){
                    var page_link=$(this).attr("p_link");
                    $.ajax({
                        type:"POST",
                        url:"php/pages/"+page_link+".php",
                        beforeSend:function(){
                            $(".msg").removeClass("d-none");
                           var div=document.createElement("DIV");
                          $(div).addClass("alert alert-success fs-2 text-center p-5");
                            $(div).html("<i class='fa-solid fa-spinner fa-spin fs-1 display-1'></i><br>Loding....");
                            $(".msg").html(div)

                           
                        },
                        success:function(response){
                            $(".msg").addClass("d-none")
                            $(".right").html(response);
                           
                        }
                    })
                })
            })
        })
    </script>

    
</body>
</html>