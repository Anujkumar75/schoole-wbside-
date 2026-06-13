<?php
require("php/db.php");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="js/capcha.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
</head>
<body class="body" >
<?php
require("nav/nav.php")
?>

<div id="main_box" >
    <main class="main">
        <div class="container-fluid pb-5">
            <div class="col-12 mt-2 mb-2">
                <a class="btn btn-sm btn-success"><i class="bi bi-printer-fill"></i>Print Marksheet</a>
            </div>
            <div class="col-12 print-area">
                <table class="nospacing print" id="print">
                    <tr>
                        <td id="print_date">
                            Print At :2025/01/01 12:00:00

                        </td>
                    </tr>
                </table>

                <table class="nospacing print watermark" id="Ntable">
                <tr >
                    <td id="Nbox" >
                        <table id="logo_table">
                            <tr>
                                <td id="logo_style" >
                                    <img src="images/logo.png" alt="" id="image_logo" >
                                </td>
                                <td id="tag">
                                    <?php 
                                    $roll_number = base64_decode($_COOKIE['_aut_ui_']);
                                    
                                    $data=$db->query("SELECT * FROM student_details WHERE roll_no='$roll_number'");
                                    while($aa=$data->fetch_assoc()){
                                        echo "<span id='c_name'>".$aa['collage_name']."</span></br>
                                    Examination <span id='session'>".$aa['exam_year']."</span><br>
                                    STATEMENT OF MARKS/GRADE <br>
                                    <b><span id='class_name'>".$aa['class_name']."</span><b>";
                                        
                                        
                                    }
                                    ?>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr id="ds_table">
                    <td id="mainDS_table">
                        <table id="d_box">
                            <tbody>
                                <tr>
                                    
                                    <?php
                                      $roll_number = base64_decode($_COOKIE['_aut_ui_']);
                                      $data=$db->query("SELECT * FROM student_details WHERE roll_no='$roll_number'");
                                      while($aa=$data->fetch_assoc()){
                                      echo "<th class='ps-1' style='width: 125px;'>ROLL NO</th>
                                      <td>
                                        :<strong>".$aa['roll_no']."</strong>
                                      </td>
                                      <td class='text-right' style='width: 250px;'>
                                      <b> CATEGORY : </b>
                                      <b>".$aa['category']."</b>
                                      </td>
                                      </tr>
                                      
                                      <tr>
                                          <th class='ps-1'>STUDENT'S NAME</th>
                                          <td>
                                              :<b>".$aa['student_name']."</b>
                                          </td>
                                          </tr>

                                           <tr>
                                          <th class='ps-1'>FATHER'S NAME</th>
                                          <td>
                                              :<b>".$aa['father_name']."</b>
                                          </td>
                                          </tr>

                                           <tr>
                                          <th class='ps-1'>MOTHER'S NAME</th>
                                          <td>
                                              :<b>".$aa['mother_name']."</b>
                                          </td>
                                          </tr>

                                           <tr>
                                          <th class='ps-1'>COLLAGE NAME</th>
                                          <td>
                                              :<b>".$aa['collage_name']."</b>
                                          </td>
                                          </tr>"
                                      ;
                                      }                             
                                    ?>

                                </tr>
                            </tbody>
                        </table>
                    </td>

                </tr>

               <tr>
                <td style="padding: 0px !important;">
                    <table style="width: 100%; font: size 12px; font-family:Calibri,Arial;">
                        <tr>
                            <th class="bt bb br ps-1"><strong> Subject</strong></th>
                            <th class="bt bb br text-center" style="width: 70px;"><strong>Maximum Marks</strong></th>
                            <th class="bt bb br text-center" style="width: 70px;"><strong>6Month</strong></th>
                            <th class="bt bb br text-center" style="width: 70px;"><strong>Maximum Marks</strong></th>
                            <th class="bt bb br text-center" style="width: 70x;"><strong>12Month</strong></th>                          
                            <th class="bt bb br text-center" style="width: 70px;"><strong>Maximum Marks</strong></th>
                            <th class="bt bb br text-center" style="width: 70px;"><strong>total</strong></th>

                        </tr>

                        <?php
                         $roll_number = base64_decode($_COOKIE['_aut_ui_']);
                         $data_marks=$db->query("SELECT * FROM marks WHERE roll_number='$roll_number'");
                         $data_marks_m6=$db->query("SELECT * FROM marks_m6 WHERE roll_number='$roll_number'");
                         while(($aa_marks=$data_marks->fetch_assoc()) && ($aa_marks_m6=$data_marks_m6->fetch_assoc())){
                            echo "<tr>
                              <td class='bb br p-1 align-middle'>Hindi</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["hindi"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["hindi"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["hindi"] + $aa_marks["hindi"])."</td>
                              
                              </tr>
                              <tr>
                              <td class='bb br p-1 align-middle'>English</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["english_m"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["english_m"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["english_m"] + $aa_marks["english_m"])."</td>

                              
                              </tr>
                            
                              <tr>
                              <td class='bb br p-1 align-middle'>MatheMethetics</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["maths"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["maths"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["maths"] + $aa_marks["maths"])."</td>
                                                           
                              </tr>

                               <tr id='scin'>
                              <td class='bb br p-1 align-middle'>Science</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["science"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["science"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["science"] + $aa_marks["science"])."</td>
                                                           
                              </tr>
                              
                             
                              <tr id='gk'>
                              <td class='bb br p-1 align-middle'>Social_Science</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["gk"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["gk"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["gk"] + $aa_marks["gk"])."</td>

                              </tr>

                                                
                               
                              <tr id='phy'>
                              <td class='bb br p-1 align-middle'>Physics</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["phys"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["phys"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["phys"] + $aa_marks["phys"])."</td>

                              </tr>
                              
                               
                              <tr id='chem'>
                              <td class='bb br p-1 align-middle'>Chemistry</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["chemi"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["chemi"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["chemi"] + $aa_marks["chemi"])."</td>

                              </tr>
                              
                               
                              <tr id='bolo'>
                              <td class='bb br p-1 align-middle'>Biology</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td> 
                              <td class='bb p-1 align-middle text-center'>".$aa_marks_m6["biol"]."</td>
                              <td class='bb p-1 align-middle' style='width: 10px;'>50</td>
                              <td class='bb p-1 align-middle text-center'>".$aa_marks["biol"]."</td>
                               <td class='bb p-1 align-middle' style='width: 10px;'>100</td>
                              <td class='bb p-1 align-middle text-center'>".($aa_marks_m6["biol"] + $aa_marks["biol"])."</td>

                              </tr>";
                              
                         };
                        ?> 
                        
                    </table>
                </td>
               </tr>

                <tr>
                            <td style="padding: 0;">
                                <table style="width: 100%;">
                                    <tr>
                                        <td colspan="2" class="p-1">
                                            <div style="font-weight: 900;">
                                                RESULT: PASS
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                         <tr>
                            <td style="padding: 0;">
                                <table style="width: 100%; font: size 20px; font-family:Calibri,Arial;">
                                    <tr>
                                        <td colspan="2" class="text-center bt bt bl bb br">
                                            <b>
                                                Result Wise Records
                                            </b>

                                        </td>
                                    </tr>

                                    <tr style="font-size :12px;">
                                        <td style="border-top: none !important; border-left:1px solid #000 !important; border-right:1px solid #000 !important; border-bottom:1px solid #000 !important; ">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="border: none !important; text-align:left;">
                                                        <b>Remarks:</b>
                                                        <ul style="list-style-type: square; margin:0; padding-left: 15px;"></ul>
                                                        <li>
                                                            In case of any descrepancy between entries in the marks sheet and in 
                                                            the University record, the University record shall be final.
                                                        </li>

                                                        <li>
                                                            This statement is a computer generated document and no need of 
                                                             manual signature.
                                                        </li>

                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                </table>
            </div>
        </div>

    </main>
</div>




<?php
require("footer/footer.php");
?>


<script>

    let class_v = document.getElementById("class_name").innerText;
    

    let bolo=document.getElementById("bolo");
    let chem=document.getElementById("chem");
    let phy=document.getElementById("phy");
    let gk=document.getElementById("gk");
    let scin=document.getElementById("scin"); 

    if(class_v=="class 11")
    {
        bolo.style.display="block"
        chem.style.display="block"
        phy.style.display="block"
        gk.style.display="none";
        scin.style.display="none";

    }
    if(class_v=="class NC" ||  class_v=="class KG" ||  class_v=="class 1" || class_v=="class 2" || class_v=="class 3" || class_v=="class 4" || class_v=="class 5" || class_v=="class 6" || class_v=="class 7" || class_v == "class 8" || class_v=="class 9")
    {
        bolo.style.display="none";
        chem.style.display="none";
        phy.style.display="none";
    }
    

    
</script>

</body>
</html>