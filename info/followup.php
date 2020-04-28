  <?php
 include 'php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
    $secretkey=$_POST['secretkey'];
      $sql="SELECT ran FROM `case` where ran='$ran'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran )
               {
                  echo "Sucessfully";
                header("location:/officeofops/case/followup.php?ran=".$rows['ran']);
               }
             }
           
               else
               {
                 $sql="SELECT ran FROM `info` where ran='$ran'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran)
               {
                  echo "Sucessfully";
                header("location:/officeofops/info/followup.php?ran=".$rows['ran']);
               }
             }
               }
  }
?>

<?php
    include "../php/common/config.php";
     $tipno = $_GET['ran'];
    $query = "SELECT * FROM info WHERE ran='$tipno' order by id desc";
    $result = mysqli_query($link,$query);
    $query1 = "SELECT * FROM info WHERE ran='$tipno'";
    $result1 = mysqli_query($link,$query1);
     $query2 = "SELECT * FROM info WHERE ran='$tipno'";
    $result2 = mysqli_query($link,$query2);
?>

<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>View Info</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />

  <style type="text/css">
    #banner{
    /*background-image: url('png/front.png');*/
    /*height: 450px;*/
    box-sizing:cover;
/*    background-position: right;
*/      background-repeat: no-repeat;
align-items: center;
  }
  @media only screen and (max-width: 767px) {
  #banner{
 /*background-image: url('png/front.png');*/
        height: 250px;
/*        width:100%;
*/  
 box-sizing:cover;
      background-repeat: no-repeat;
  }

  }
.banner-container {
    width: 50%;
    /*position: relative;*/
  /*  top: 190px;
    left: 100px;*/
}
@media only screen and (max-width: 767px)
{
.banner-container {
   
    top: 0!important;
    left: 0!important;
    width: 100%!important;
}
}
.banner-container .heading {
    text-align: left;
    margin-bottom: 20px;
    line-height: 60px;
    font-size:42px;
  color:#2d2d2d;
  font-family: "Open Sans";
}
.sub-heading
{
      font-size:22px;
      color: #2d2d2d;
}
.text
{
  color: #252525;
  margin: 15px auto;
   font-size:18px;
}
.hl-help {
    width: 70%;
    margin: 0 auto 200px;
}
.hl-help .title {
    text-align: center;
    color: #171717;
    font-size: 35px;
    margin-bottom: 40px;
    font-weight: 300;
}

div {
    display: block;
}
.hl-help .help-container .content-container {
    text-align: left;
    padding-left: 1em;
}
.hl-help .help-container span:first-child {
    color: #bababa;
    font-size: 70px;
    font-weight: 600;
    margin-right: 7px;
}
.hl-help .help-container .details {
    color: #2d2d2d;
    font-size: 18px;
    font-weight: 600;
    width: 60%;
    display: inline-block;
}
@media only screen and (max-width: 767px)
{
.hl-help .help-container .details {
    font-size: 14px!important;
    width: 68%!important;
    margin-bottom: 8px;

}
}
@media only screen and (max-width: 767px)
{
#details {
  margin-top: -300px;

}
}
.hl-help .help-container .desc {
    color: #444;
    font-size: 15px;
    line-height: 26px;
    margin: 14px 0;
    width: 85%;
}
.hl-experts .title {
    background-color: #f4f6f8;
    text-align: center;
    padding-top: 150px;
}
@media only screen and (max-width: 767px)
{
.hl-experts .title {
    padding-top: 255px!important;
}
}
#shadow
{
display: inline-block;
  box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
  width:90%;
  margin-left: 80px;
 
}
@media only screen and (max-width: 767px)
{
  #shadow
{
display: inline-block;
 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
margin-left: -1px;
width:100%;


}
}
/*@media only screen and (max-width: 767px)
{
.card-body
 {
 position: fixed;
 }
}*/
.tab button:hover {
  background-color: #afd135;

}
.banner-container .home-actions {
    margin-bottom: 15px;
}
.banner-container .home-actions span {
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;
}
.banner-container .chat {
    background: #034ea2;
  }
.banner-container .appointment {
    background: #afd135;
  }
  /*#head1:hover
  {
    background-color: #034ea2;

  }
   #head2:hover
  {
    background-color: #afd135;
   
  }*/

#mental, #anonymous{
  font-size:35px;
  color:#ffffff;
  background-color: #034EA2;
  box-shadow: 0px 0px 4px #494848;
  border-radius: 50%;
  padding: 0.1em 0.3em;
}
#tracksub {
  font-size: 35px;
  color: #ffffff;
  border-radius: 50%;
  box-shadow: 0px 0px 5px #494848;
  padding: 0.1em 0.3em;
  background-color: #AFD135;
}
</style>
<style>
.zoom {

  transition: transform .2s; /* Animation */

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
#disc
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
#content
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
.kt-font-transform-u
{

    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 18px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;

}
</style>
    <style type="text/css">
          .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom:solid white 1px;
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
    margin-left: 1140px;
    margin-top: 100px;
  }
  .sub {
    margin-left: 100%;
  }
}
 </style>
</head>
<?php include '../new_nav_header.html'?>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<h2 style="margin-left: 400px;"></h2>
<form method="post">
<!--   <div class="container" style="margin-left: 400px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="tipno" id="tipno" class="form-control" placeholder="Enter the Idea/Tip Number">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="submit" value="FollowUp" style="background-color:#3e8e9d;" class="btn btn-danger" >
      </div>
    </div><br><hr>
</div> -->
</form>
<div class="container">


<button type="button" class="btn btn-info" onclick="window.location.href='/officeofops/intro.php'" style="float: right;background-color: #034ea2;"> << Back</button>
</div>
             

<div class="container ">
 <?php
 if($rows=mysqli_fetch_assoc($result)) {
  ?>
 <div class="container">
  <label style="color: black;"><strong>DCMO Resolution Update:</strong></label>
  <textarea type="text" class="form-control" rows="8"  placeholder=""  style="background: transparent;border: 1px solid #e2e5ec;border-color:black;" disabled=""><?php echo $rows['resolution'];?> </textarea>
</div>

<br>
 <div class="container">
<button type="button" data-toggle="collapse" data-target="#demo" class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff; font-size: 16px;">  History</button>
</div><br>
<div id="demo" class="collapse">

<label style="color: black;"><strong>DCMO Remarks From Call Center:</strong></label>
  <textarea type="text" class="form-control" rows="8"  placeholder=""  style="background: transparent;border: 1px solid #e2e5ec;border-color:black;" disabled=""><?php echo $rows['MUpdate'];?> </textarea><br>

<label style="color: black;"><strong>DCMO Detailed Analysis:</strong></label>
  <textarea type="text" class="form-control" rows="8"  placeholder=""  style="background: transparent;border: 1px solid #e2e5ec;border-color:black;" disabled=""><?php echo $rows['reinvestigate'];?> </textarea><br>


  <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:black;">

<div class="row">
  <div class="col-md-6">
  <label style="color: black;"><strong>Subject :</strong></label>
<span class="form-control" name="email" class="" disabled ><?php echo $rows['category'];?></span>
</div>
 <div class="col-md-6">
  <label style="color: black;"><strong>District :</strong></label>
<span class="form-control" name="email" class="" disabled ><?php echo $rows['district'];?></span>
</div>
</div>
<br>
</div><br>


<div class="">
  <label style="color: black;"><strong>Brief note on assistance :</strong></label>
  <textarea type="text" rows="8" class="form-control" disabled  style="background: transparent;border: 1px solid #e2e5ec;border-color:black;"><?php echo $rows['Description'];?></textarea>
</div>

<br>
<div class="">

     <label class="" style="font-size: 14px;color: black;"><strong>Attachments</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:black;">
<div id="" class="">
<div class="row">
  <div class="input-group" style="margin: 20px;">
<a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
    </div>
  </div>
</div>
</div>
</div>


<div class="">
     <label class="" style="font-size: 14px;color: black;"><strong>Details of Citizen :</strong></label>
 
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:black;">
<div id="people1" class="">
<br>

<div class="row">
  <div class="input-group" style="margin:20px;">
   <div class="col-md-4 input_val">
     <label style="color: black;">Full Name :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['name'];?>" style="background: transparent;">
   </div>
   <div class="col-md-4 input_val">
     <label style="color: black;">Phone :</label>
    
    <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['phone'];?>" style="background: transparent;">
   </div>
   <div class="col-md-4 input_val">
     <label style="color: black;">Email:</label>
   
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['email'];?>" style="background: transparent;">   </div>

 
<!-- <div class="input-group after-add-more col-md-1">
           <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
       </div> -->

       </div>
   </div>
   <br><br>
</div>
</div>
<br>
</div>
<br>
<br>

<br>
<!-- 
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;"><b>Updated to Citizen- <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows1['MUpdate'];?>
      </div>
   </div><br> -->

</div>
<?php
}
?>
<br>

<br>

</div>
 
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<br><br>

</body>

</html>
<?php include '../new_footer.html'; ?>
  <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
         
      <script src="./assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            <script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
                        <!--end::Page Vendors -->
         
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo3/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<!-- <script type="text/javascript">
  function messagesent(){
  setInterval(()=>{
    var tip = $("input").val();
    if(tip){
      clickt()
    }
  },1000)
</script> -->


<!-- Modified on 24-04-2019 -->
