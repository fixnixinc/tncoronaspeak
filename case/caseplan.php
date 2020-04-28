<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit']))
   {
           $district=$_POST['district'];
           $Description=htmlspecialchars($_POST['Description']);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
            $ran=$_POST['tipno'];
            $secretkey=$_POST['passkey'];
            $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];
             $category = $_POST['selimg'];
            $infection = $_POST['infection'];
if($infection=="")
{
   $sql="INSERT INTO `info`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status')";

        if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:../info/infocode.php");
        }
      }
        else
        {
           // echo "Error: " . $sql . "<br>" . $link->error;
          }

          if($category=="")
          {
             if ($infection <= 75) {
              $infection = "Possible Infection";
            }
            else{
            $infection="infection";
            }

    $sql1="INSERT INTO `case`(district,Description,name,email,phone,ran,secretkey,Artifact,status,infection)
     values('$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$infection')";
          
           if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:casecode.php");
        }
        }
      }
 
?>
<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<!-- <base href="/tncorona/"> -->
<!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Corona | Case</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

 
 <!--begin::Fonts -->
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
        <!--begin:: Global Mandatory Vendors -->
<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<!-- <link href="/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" /> -->
<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
   

<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" href="../assets/jquery-ui-1.11.4/jquery-ui.css"/> -->
 <link href="../assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon" href="../assets/media/company-logos/virus.png" />


<style type="text/css">
  .slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

</style>
    </head>

    <style type="text/css">
          .text-line {
        background-color: transparent;
        color: black;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom:solid black 1px;
        padding: 3px 10px;
        width: 700px;
        font-size: 16px;
    }
     .wid{
      position: relative;
      height: 40px;
    }
      .image {
      position: absolute;
      right: 24px;
      bottom: 149px;
    }

.imageandtext {
  position: relative;
}
.image_grid {
  display: inline-block;
  padding-left: 5px;
}
.image_grid img {                       /*  added rule  */
  display: block;
}

.image_grid input {
  display: none;
}
.image_grid input:checked + .caption {
  background: rgba(0,0,0,0.5);
}
.image_grid input:checked + .caption::after {
  content: '✔';    
  position: absolute;
  top: 60%; left: 51%;
  width: 30px; height: 30px;
  transform: translate(-50%,-50%);
  color: #CB3A29;
  font-size: 20px;
  text-align: center;
  border: 3px solid #CB3A29;
  border-radius: 50%;
}
@media screen and (min-width: 1024px) {
  .resp {
    position: absolute;
    margin-left: 930px;
    margin-top: -60px;
  }
  .sub {
    margin-left: 100%;
  }
}

   </style>

    <style>
      a:hover{
        text-decoration: none;
        color: #0000;
       }


              @font-face{
        font-family: 'Oswald', sans-serif;
        src:url(https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet);
      }

      #bottom_links_foot{
        font-family: 'Oswald', sans-serif;
        font-size: 18px;
      }
    </style>
<?php
include "../nav_header.html";
?>
  <body> <br><br>
    <div class="container">
      <div class="row d-flex justify-content-end">
        <div class="form-group">
           <button type="button" class="btn btn-outline-secondary btn-sm" style="border-radius:24px;" onclick="window.location.href='https:///tncorona/speak.com/tncorona/login.php'">Admin</button>
        </div>
         <div class="col-md-4">
            <button type="button" class="btn btn-outline-secondary btn-sm" style="border-radius:24px;" onclick="window.location.href='https:///tncorona/speak.com/tncorona/caselogin.php'">Track</button>
        </div>
        </div>

 <h3 style="text-align: center;color: black;font-size: 32px;">Report an Infection</h3><br>

  <form class="kt-form" method="post" enctype="multipart/form-data">

<div class="container">
         

    <div class="form-group row" id="div0" name="Description" style="display: ;">
      <div class="col-md-2">
            <label for="example-text-input" style="color: black;font-size: 20px;">District :</label>
          </div>
            <div class="col-md-10">
                <div id="searchbox2">
           
<select id="district" name="district" class="form-control" style="border-color:#B8B8BB;background:transparent;" required="">
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>

</select>
         
        </div>
      </div>
    </div>

    <br>

    <div class="form-group row" id="div1" name="Description" style="display: none;">
            <div class="col-md-2">
            <label for="example-text-input" style="color: black;font-size: 20px;">Details :</label>
          </div>
             <div class="col-10">
         
           <textarea type="text" rows="8" class="form-control output" name="Description" id="Description"  placeholder="Type something here....." style="border-color:#B8B8BB;background:transparent;" required=""></textarea> <span></span>
            <label aria-hidden="true"class="resp" style="color: black;font-size: 15px;">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
           <input type="file" name="Artifacts" hidden=""></label>
          </div>
          </div><br>
         
 <div id="div2" style="display: none;">
          <div class="form-group row">
            <div class="col-md-2">
            <label for="example-text-input" style="color: black;font-size: 20px;">Infection :</label>
          </div>
             <div class="col-10">
          <div class="slidecontainer">
            <!-- <span id="textInput" style="color: red;" ></span> -->


              <input type="range" min="1" max="100" value="1" class="slider" id="myRange" onchange="update(this.value);">&nbsp;
              <input type="hidden" id="textInput"  name="infection">
            </div>
         
          </div>
        </div>
        <br>
       
        <div><h5><center>OR</center></h5></div>
        <br>
       
         <div id="inputdis" class="form-group row" >
        <div class="col-md-2">
            <label for="example-text-input" style="font-size: 20px; color: black; margin-top: 40px;">Info :</label>
          </div>
          <div class="col-md-10">
        <div class="grid-two imageandtext" >

  <div class="imageandtext image_grid">
    <label for="selimg1" style="text-align: center;">Death <br><br>
      <img src="../info/death.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg1" value="death">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg2" style="text-align: center;">Neighborhood Alert<br><br>
      <img src="../assets/media/company-logos/neighbor.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg2" value="NeighborhoodAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg3" style="text-align: center;">Travel Alert<br><br>
      <img src="../assets/media/company-logos/travel.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg3" value="travelAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg4" style="text-align: center;">Feed<br><br>
      <img src="../assets/media/company-logos/feed.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg4" value="feed">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg5" style="text-align: center;">Operation<br><br>
      <img src="../assets/media/company-logos/operation.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg5" value="operation">
    <div class="caption">
     
    </div>
  </div>

</div>
</div>
</div>
</div>
         
<br>


    
          </div>
        <div id="div3" style="display: none;">
          <div class="form-group row">
            <div class="col-md-2">
            <label for="example-month-input" style="color: black;font-size: 20px;">Your details:</label>
          </div>
            <div class="col-md-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
         <input type="radio" name="radio1" value="Anonymous" id="Anonymous" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black;">
             <input type="radio" name="radio1" value="disclose" id="disclose"> Keen to disclose

             <span></span>
           </label>

           <div id="details">
         <div class="col-md-4">
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control" style="border-color:#B8B8BB;background:transparent;">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email" class="form-control" style="border-color:#B8B8BB;background:transparent;">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" style="border-color:#B8B8BB;background:transparent;" >
      </div>


  </div>
            </div>
             
          </div>
          <input type="hidden" name="passkey" id="passkey">
          <input type="hidden" name="tipno" id="tipno">

</div>


            <input type="submit" name="submit" id="Submit" class="btn btn-primary sub" data-toggle="modal" value="Submit">
                 
</div>
<div>
                </div>
                <br>
</form>
</div>


    <script type="text/javascript">
      function reload() {
        location.reload();
      }
    </script>
<script type="text/javascript">
  var payment = document.getElementById('AHN'),
  downpayment = document.getElementById('BTC'),
    full_payment = document.getElementById('ETC');

function enableToggle(current, other1 , other2) {
    other1.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
    other2.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
}

downpayment.onkeyup = function () {
    enableToggle(this, full_payment, payment);
}
full_payment.onkeyup = function () {
    enableToggle(this, downpayment, payment);
}
payment.onkeyup = function () {
    enableToggle(this, full_payment, downpayment);
}
</script>
<script>
$(document).mouseup(function(e){
    var container = $("#category");

    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
         $('#div0').show();
    }
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    if($('#div0').on('change', function() {
      $('#div1').show();
     
     
    }));
       if($('#div1').on('click', function() {
      $('#div2').show();
     
     
    }));
         if($('#div2').on('click', function() {
      $('#div3').show();
     
     
    }));
               if($('#div4').on('change', function() {
      $('#div5').hide();
     
     
    }));
   
  });
</script>
<script type="text/javascript">
            function update(val) {
              document.getElementById('textInput').value= val;
            }

        </script>


<script>
$(document).ready(function() {
  $("#district").msDropdown();
})
</script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script type="text/javascript">
  $(document).ready(function(){
 $("#Description").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey").value=result;
     
});


});

</script>
<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>

<script>
$(document).ready(function(){
   $("#peoples").hide();
   $("#donates").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="donate")
{
  $("#donates").hide();
$("#peoples").show();
}
if($(this).val()=="self")
{
  $("#peoples").hide();
$("#donates").show();
}

});
});
</script>

<script type="text/javascript">
 $("#myRange").change(function(){
    $("#inputdis").find('input').prop('disabled', true);
 })
</script>
<script type="text/javascript">
  class SpeechRecognitionApi{
  constructor(options) {
    const SpeechToText = window.speechRecogniton || window.webkitSpeechRecognition;
    this.speechApi = new SpeechToText();
    this.output = options.output ? options.output: document.createElement("");
    this.speechApi.continuous = true;
    this.speechApi.interimResult = false;
    this.speechApi.onresult = (event) => {
      var resultIndex = event.resultIndex;
      var transcript = event.results[resultIndex][0].transcript;
      this.output.textContent += transcript;
      console.log(this.output)
    }
  }
  init() {
    this.speechApi.start();
  }
  stop() {
    this.speechApi.stop();
  }
}
window.onload = function() {
  var speech = new SpeechRecognitionApi({
    output: document.querySelector(".output")
  })
  document.querySelector("#start").addEventListener("click", () => {
    speech.init();
  })

  document.querySelector("#end").addEventListener("click", () =>{
    speech.stop();
  })
}
</script>
    <script>
$(document).ready(function() {
  $("#district").msDropdown();
})
</script>



          <div class="jumbotron  bg-light">
            <div class="container" style="margin-left: 230px;">
             <a href="https:///tncorona/speak.com/tncorona/case/caseplan.php?=Infection" id="bottom_links_foot" style="color: #231F1F; font-size: 14px; margin-right: 18px; float: left;">SPEAK</a>
             <a href="https://telegra.ph/TN-Corona-Speak-03-27" id="bottom_links_foot" style="color: #231F1F; font-size: 14px; margin-right: 18px; float: left;">CHAT</a>
             <a href="../TamilNaduCoronaInfectionDatabase.html" id="bottom_links_foot" style="color: #231F1F; font-size: 14px; margin-right: 18px; float: left;">CORONA INFECTION DATABASE</a>
             
             
            </div>

            <div class="container" >
              <div class="form-row d-flex justify-content-end" >
               <!--  <div  class="col-sm-1"> -->
                  <div class="form-group">
                      <a href="https://www.facebook.com/coronaSpeak/"><i class="fab fa-facebook" style="font-size: 25px;" ></i></a>&nbsp;
                  <!-- </div> -->
                
                </div>
               <!--  <div class="col-sm-1"> -->
                <div class="form-group">
                  <a href="https://www.linkedin.com/showcase/coronaspeak"><i class="fab fa-linkedin" style="font-size: 25px;"></i></a>&nbsp;
                </div>
<div class="form-group">             
     <a href="https://twitter.com/CoronaSpeak"><i class="fab fa-twitter-square" style="font-size: 25px;"></i></a>&nbsp;
                </div>
<div class="form-group">                 
 <a href="https://instagram.com/CoronaSpeak"><i class="fab fa-instagram" style="font-size: 25px;"></i></a>
</div>
               
              </div>
            </div>
      </div>

          <nav class="navbar navbar-light bg-light">
           <div class="mx-auto order-0">
             <label style="font-size: 12px;">An Open Initiative of <span><a href="https://www.nixwhistle.com"><strong>NixWhistle</strong>  </a>and<span><a href="https:///tncorona/speak.com/tncorona/contributors.php" id="bottom_links_foot" style=" font-size: 12px;"> Volunteers</a></span></span> </label>  <br>      
            </div>
         </nav>
       
       


</body>

</html>
