<?php
 include 'php/common/config.php';
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email='$email' and password='$password'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             {    
             
             
               if($rows['email']=='tncoronaspeak@nixwhistle.com'&& $rows['password'] == 'tncoronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/tncorona/info/dashboard.php");
               // break;
               }
             
           
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
}
?>
<?php
   include "php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['tracking']))
   {

     
          $district=$_POST['district'];
           $datepicker=$_POST['datepicker'];
           $screened=$_POST['screened'];
           $containment=$_POST['containment'];
           $surveillance=$_POST['surveillance'];
               $ran=$_POST['ran'];
                $secretkey=$_POST['secretkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];
                $casecomplete=$_POST['casecomplete'];
                 $homequarantine=$_POST['homequarantine'];

                  $facility=$_POST['facility'];
                  $isolation=$_POST['isolation'];
                   $sampletest=$_POST['sampletest'];

                 $casepositive=$_POST['casepositive'];
                  $caseactive=$_POST['caseactive'];

 $discharged=$_POST['discharged'];

 $casedied=$_POST['casedied'];

 $contacts=$_POST['contacts'];



    $sql="INSERT INTO `tracking`(district,datepicker,screened,containment,surveillance,casecomplete,ran,secretkey,Artifacts,status,homequarantine,facility,isolation,sampletest,casepositive,caseactive,discharged,casedied,contacts)
     values('$district','$datepicker','$screened','$containment','$surveillance','$casecomplete','$ran','$secretkey','$Artifacts','$status','$homequarantine','$facility','$isolation','$sampletest','$casepositive','$caseactive','$discharged','$casedied','$contacts')";

        if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:trackcode.php");
        }
        else
        {
           echo "Error: " . $sql . "<br>" . $link->error;
          }
        }
 
?>


<?php
   include "php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['logistics']))
   {

     
          $logidistrict=$_POST['logidistrict'];
           $logidatepicker=$_POST['logidatepicker'];
           $quarantinefacilities=$_POST['quarantinefacilities'];
           $isolationfacilities=$_POST['isolationfacilities'];
           $quarIsoFacilities=$_POST['quarIsoFacilities'];
               $ran1=$_POST['ran1'];
                $secretkey1=$_POST['secretkey1'];
                 $status="created";
                $Artifacts1=$_FILES['Artifacts1']['name'];
                $casecomplete=$_POST['quaratinebeds'];
                 $isolationbeds=$_POST['isolationbeds'];

                  $icubeds=$_POST['icubeds'];
                  $ventilators=$_POST['ventilators'];
                   $triplelayer=$_POST['triplelayer'];

                 $respirators=$_POST['respirators'];
                  $faceshields=$_POST['faceshields'];

 $ppe=$_POST['ppe'];

 $lysol=$_POST['lysol'];

 $hypochorate=$_POST['hypochorate'];

 $disinfectant=$_POST['disinfectant'];

    $sql1="INSERT INTO `logostics`(logidistrict,logidatepicker,quarantinefacilities,isolationfacilities,quarIsoFacilities,ran,secretkey,Artifacts,status,quaratinebeds,isolationbeds,icubeds,ventilators,triplelayer,respirators,faceshields,ppe,lysol,hypochorate,disinfectant)
     values('$logidistrict','$logidatepicker','$quarantinefacilities','$isolationfacilities','$quarIsoFacilities','$ran1','$secretkey1','$Artifacts1','$status','$quaratinebeds','$isolationbeds','$icubeds','$ventilators','$triplelayer','$respirators','$ppe','$casedied','$lysol','$hypochorate','$disinfectant')";

        if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts1"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:logisticscode.php");
        }
        else
        {
           echo "Error: " . $sql1 . "<br>" . $link->error;
          }
        }
 
?>
<!DOCTYPE html>
<html>
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/">
        <meta charset="utf-8"/>

        <title>TamilNadu | CoronaSpeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
                             <link href="assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="assets/css/demo2/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
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
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link href="assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />

</head>
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
 <?php include 'siteheader.php'; ?>

 <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: white;">

    <!-- begin:: Page -->
    <br>
<br>
 <div class="kt-container  kt-grid__item kt-grid__item--fluid" >
        <div class="row">
    <div class="col">
        <div class="zoom">
        <div class="alert alert-light alert-elevate fade show" role="alert" id="disc">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
            Do not hesitate to share your symptoms about Covid 19 (Corona). Los Angeles County Medical Association will make best effort to reach out through the near by testing center, clinic or hospital based on your criticality.
You can stay anonymous and choose to followup with us also
            </div>
        </div>
    </div>
    </div>
</div>
</div>


 <div class="kt-container  kt-grid__item kt-grid__item--fluid" id="content">
                                         <div class="kt-portlet">
           <!--  <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    TITLE
                    </h3>
                </div>
            </div> -->
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" >
                        <a class="" data-toggle="tab" href="#kt_tabs_1_1">
                            <i class="la la-comment" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:20px;font-weight: 500;color: black;">TRACKING</label>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_4">
                            <i class="fa flaticon-customer" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">LOGISTICS</label>
                        </a>
                    </li>
                 
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">


<div class="kt-grid kt-grid--hor kt-grid--root" style="">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
      <div class="kt-grid__item">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v1__nav">
          <div class="kt-wizard-v1__nav-items">
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-bus-stop"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  1. Screened
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-list"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  2. Surveillance
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-responsive"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  3. Active/Positive Cases
                </div>
              </div>
            </a>
           
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-globe"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  4. Review and Submit
                </div>
              </div>
            </a>
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
        <form class="kt-form"  method="POST">
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" id="kt_form">

            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                <div name="District">
            <p style="font-size: 20px; font-weight: 500">1. District :</p>
           
                    <select id="district" name="district" class="form-control" style="border-color:#B8B8BB;background:transparent;">
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
    <br>

                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">2. Date:</p>
                      <input type="text" class="form-control" id="kt_datepicker_1" name="datepicker" placeholder="Select date"/>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">3. Number of Persons Screened:</p>
                    <input type="text" class="form-control" id="screened" name="screened" aria-describedby="textHelp" placeholder="Enter Number of Persons Screened">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">4. Number of Persons Screened in Containment Area:</p>
                   <input type="text" class="form-control" id="containment" name="containment" aria-describedby="textHelp" placeholder="Enter Number of Persons Screened in Containment Area">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">5. Number of Cases on Surveillance:</p>
                   <input type="text" class="form-control" id="surveillance" name="surveillance" aria-describedby="textHelp" placeholder="Enter Number of Cases on Surveillance">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
<!--             <div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
 -->            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                 <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. Number of Cases Completed 28 days Surveillance:</p>
                   <input type="text" class="form-control" id="casecomplete" name="casecomplete" aria-describedby="textHelp" placeholder="Enter Number of Cases Completed 28 days Surveillance">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. Number of Cases Active Home Quarantine:</p>
                    <input type="text" class="form-control" id="homequarantine" name="homequarantine" aria-describedby="textHelp" placeholder="Enter Number of Cases Active Home Quarantine">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. Number of Cases Active Facility Quarantine:</p>
                    <input type="text" class="form-control" id="facility" name="facility" aria-describedby="textHelp" placeholder="Enter Number of Cases Active Facility Quarantine">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. Number of Cases Active Hospital Isolation:</p>
                    <input type="text" class="form-control" id="isolation" name="isolation" aria-describedby="textHelp" placeholder="Enter Number of Cases Active Hospital Isolation">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. Number of Cases Samples Tested:</p>
                    <input type="text" class="form-control" id="sampletest" name="sampletest" aria-describedby="textHelp" placeholder="Enter Number of Cases Samples Tested">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>              
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
            <!-- <div class="kt-heading kt-heading--md">Select your Services</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. Number of Cases Positive:</p>
                   <input type="text" class="form-control" id="casepositive" name="casepositive" aria-describedby="textHelp" placeholder="Enter Number of Cases Positive">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. Number of Cases Active:</p>
                    <input type="text" class="form-control" id="caseactive" name="caseactive" aria-describedby="textHelp" placeholder="Enter Number of Cases Active">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. Number of Cases Discharged:</p>
                    <input type="text" class="form-control" id="discharged" name="discharged" aria-describedby="textHelp" placeholder="Enter Number of Cases Discharged">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. Number of Cases Died:</p>
                    <input type="text" class="form-control" id="casedied" name="casedied" aria-describedby="textHelp" placeholder="Enter Number of Cases Died">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. Number of Contacts:</p>
                    <input type="text" class="form-control" id="contacts" name="contacts" aria-describedby="textHelp" placeholder="Enter Number of Contacts">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
              </div>
            </div>
          </div>

                     <input type="hidden" name="secretkey" id="secretkey">
          <input type="hidden" name="ran" id="ran">
          <!--end: Form Wizard Step 3-->

          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Your info
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>1. District :  </b></label><p id="result1"></p>
                    <label><b>2. Date :  </b></label><p id="result2"></p>
                    <label><b>3. No. of Persons Screened :  </b></label><p id="result3"></p>
                    <label><b>4. No. of Persons Screened in Containment Area :  </b></label><p id="result4"></p>
                    <label><b>5. No. of Cases on Surveillance :  </b></label><p id="result5"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>6. No. of Cases Completed 28 days Surveillance :  </b></label><p id="result6"></p>
                    <label><b>7. No.of Cases Active Home Quarantine :  </b></label><p id="result7"></p>
                    <label><b>8. No.of Cases Active Facility Quarantine :  </b></label><p id="result8"></p>
                    <label><b>9. No.of Cases Active Hospital Isolation :  </b></label><p id="result9"></p>
                    <label><b>10. No.of Cases Samples Tested :  </b></label><p id="result10"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Other Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>11. No. of Cases Positive :  </b></label><p id="result11"></p>
                    <label><b>12. No. of Cases Active :  </b></label><p id="result12"></p>
                    <label><b>13. No. of Cases Discharged :  </b></label><p id="result13"></p>
                    <label><b>14. No. of Cases Died :  </b></label><p id="result14"></p>
                    <label><b>15. No. of Contacts  :  </b></label><p id="result15"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
         
                 <input type="submit" name="tracking" id="case" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;">

            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue()" style="background-color:#034ea2;">
              Next Step
            </button>
          </div>

       
          <!--end: Form Actions -->
        </form>
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
</div>
</div>
</div>

</div>


<div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
      <div class="kt-grid__item">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v3__nav">
          <div class="kt-wizard-v3__nav-items">
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>1</span> Quarantine Facilities
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>2</span> Isolation Beds
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>3</span>  Face Shields
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>4</span> Review
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">
        <!--begin: Form Wizard Form-->
        <form class="kt-form" id="kt_form" method="post">
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                   <div class="form-group">
                <div name="District">
            <p style="font-size: 20px; font-weight: 500">1. District :</p>
           
                    <select id="logidistrict" name="logidistrict" class="form-control" style="border-color:#B8B8BB;background:transparent;">
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
    <br>

                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">2. Date:</p>
                      <input type="text" class="form-control" id="kt_datepicker_1" name="logidatepicker" placeholder="Select date"/>
                </div>
             
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">3. Number of Quarantine Facilities:</p>
                    <input type="text" class="form-control" id="quarantinefacilities" name="quarantinefacilities" aria-describedby="textHelp" placeholder="Enter Number of Quarantine Facilities">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">4. Number of Isolation Facilities:</p>
                   <input type="text" class="form-control" id="isolationfacilities" name="isolationfacilities" aria-describedby="textHelp" placeholder="Enter Number of Isolation Facilities">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">5. Number of Quarantine & Isolation Facilities:</p>
                   <input type="text" class="form-control" id="quarIsoFacilities" name="quarIsoFacilities" aria-describedby="textHelp" placeholder="Enter Number of Quarantine & Isolation Facilities">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
               
               
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                 <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. Number of Quarantine Beds:</p>
                   <input type="text" class="form-control" id="quaratinebeds" name="quaratinebeds" aria-describedby="textHelp" placeholder="Enter Number of Quarantine Beds">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. Number of Isolation Beds:</p>
                    <input type="text" class="form-control" id="isolationbeds" name="isolationbeds" aria-describedby="textHelp" placeholder="Enter Number of Isolation Beds">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. Number of ICU Beds:</p>
                    <input type="text" class="form-control" id="icubeds" name="icubeds" aria-describedby="textHelp" placeholder="Enter Number of ICU Beds">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. Number of Ventilators:</p>
                    <input type="text" class="form-control" id="ventilators" name="ventilators" aria-describedby="textHelp" placeholder="Enter Number of Ventilators">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. Number of Triple Layer Masks:</p>
                    <input type="text" class="form-control" id="triplelayer" name="triplelayer" aria-describedby="textHelp" placeholder="Enter Number of Triple Layer Masks">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>  
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
               
               <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. Number of N95 Respirators:</p>
                   <input type="text" class="form-control" id="respirators" name="respirators" aria-describedby="textHelp" placeholder="Enter Number of N95 Respirators">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. Number of Face Shields:</p>
                    <input type="text" class="form-control" id="faceshields" name="faceshields" aria-describedby="textHelp" placeholder="Enter Number of Face Shields">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. Number of PPE:</p>
                    <input type="text" class="form-control" id="ppe" name="ppe" aria-describedby="textHelp" placeholder="Enter Number of PPE">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. Quantity of Lysol in Litres:</p>
                    <input type="text" class="form-control" id="lysol" name="lysol" aria-describedby="textHelp" placeholder="Enter Quantity of Lysol in Litres">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. Quantity of Sodium Hypochlorate Solution:</p>
                    <input type="text" class="form-control" id="hypochorate" name="hypochorate" aria-describedby="textHelp" placeholder="Enter Quantity of Sodium Hypochlorate Solution">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">16. Number of Disinfectant Machines Available:</p>
                    <input type="text" class="form-control" id="disinfectant" name="disinfectant" aria-describedby="textHelp" placeholder="Enter Number of Disinfectant Machines Available">
                    <!-- <span class="form-text text-muted">We'll never share your text with anyone else.</span> -->
                </div>
               
              </div>
            </div>
          </div>
  <input type="hidden" name="secretkey1" id="secretkey1">
          <input type="hidden" name="ran1" id="ran1">
          <!--end: Form Wizard Step 3-->


          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Your info
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>1. District :  </b></label><p id="res1"></p>
                    <label><b>2. Date :  </b></label><p id="res2"></p>
                    <label><b>3. No. of Quarantine Facilities :  </b></label><p id="res3"></p>
                    <label><b>4. No. of Isolation Facilities :  </b></label><p id="res4"></p>
                    <label><b>5. No. of Quarantine & Isolation Facilities :  </b></label><p id="res5"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>6. No. of Quarantine Beds :  </b></label><p id="res6"></p>
                    <label><b>7. No. of Isolation Beds :  </b></label><p id="res7"></p>
                    <label><b>8. No. of ICU Beds :  </b></label><p id="res8"></p>
                    <label><b>9. No. of Ventilators :  </b></label><p id="res9"></p>
                    <label><b>10. No. of Triple Layer Masks :  </b></label><p id="res10"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Other Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>11. No. of N95 Respirators :  </b></label><p id="res11"></p>
                    <label><b>12. No. of Face Shields :  </b></label><p id="res12"></p>
                    <label><b>13. No. of PPE :  </b></label><p id="res13"></p>
                    <label><b>14. Qty of Lysol in Litres  :  </b></label><p id="res14"></p>
                    <label><b>15. Qty of Sodium Hypochlorate Solution :  </b></label><p id="res15"></p>
                    <label><b>16. No. of Disinfectant Machines Available :  </b></label><p id="res16"></p>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
         
                 <input type="submit" value="submit" name="logistics" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;">
            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue1()">
              Next Step
            </button>
          </div>
          <!--end: Form Actions -->
        </form>
       
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>

 </div>


</div>

</div>
</div>
</div>
<br><br>
 
<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
   

});

</script>

 <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
                            <script src="assets/js/demo2/pages/wizard/wizard-3.js" type="text/javascript"></script>
                            <script src="assets/js/demo2/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
                             <script src="./assets/js/demo2/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- end::Body -->
</body>
</html>
<script type="text/javascript">
  function showvalue(){

  var district = document.getElementById('district').value;
  document.getElementById('result1').innerHTML = district;
  var date = document.getElementById('kt_datepicker_1').value;
  document.getElementById('result2').innerHTML = date;
  var screened = document.getElementById('screened').value;
  document.getElementById('result3').innerHTML = screened;
  var containment = document.getElementById('containment').value;
  document.getElementById('result4').innerHTML = containment;
  var surveillance = document.getElementById('surveillance').value;
  document.getElementById('result5').innerHTML = surveillance;
  var casecomplete = document.getElementById('casecomplete').value;
  document.getElementById('result6').innerHTML = casecomplete;
  var homequarantine = document.getElementById('homequarantine').value;
  document.getElementById('result7').innerHTML = homequarantine;
  var facility = document.getElementById('facility').value;
  document.getElementById('result8').innerHTML = facility;
  var isolation = document.getElementById('isolation').value;
  document.getElementById('result9').innerHTML = isolation;
  var sampletest = document.getElementById('sampletest').value;
  document.getElementById('result10').innerHTML = sampletest;
  var casepositive = document.getElementById('casepositive').value;
  document.getElementById('result11').innerHTML = casepositive;
  var caseactive = document.getElementById('caseactive').value;
  document.getElementById('result12').innerHTML = caseactive;
  var discharged = document.getElementById('discharged').value;
  document.getElementById('result13').innerHTML = discharged;
  var casedied = document.getElementById('casedied').value;
  document.getElementById('result14').innerHTML = casedied;
  var contacts = document.getElementById('contacts').value;
  document.getElementById('result15').innerHTML = contacts;


}
</script>
<script type="text/javascript">
  function showvalue1(){

  var logidistrict = document.getElementById('logidistrict').value;
  document.getElementById('res1').innerHTML = logidistrict;
  var date = document.getElementsByClassName[0]('logidatepicker').value;
  document.getElementById('res2').innerHTML = date;
  var quarantinefacilities = document.getElementById('quarantinefacilities').value;
  document.getElementById('res3').innerHTML = quarantinefacilities;
  var isolationfacilities = document.getElementById('isolationfacilities').value;
  document.getElementById('res4').innerHTML = isolationfacilities;
  var quarIsoFacilities = document.getElementById('quarIsoFacilities').value;
  document.getElementById('res5').innerHTML = quarIsoFacilities;
  var quaratinebeds = document.getElementById('quaratinebeds').value;
  document.getElementById('res6').innerHTML = quaratinebeds;
  var isolationbeds = document.getElementById('isolationbeds').value;
  document.getElementById('res7').innerHTML = isolationbeds;
  var icubeds = document.getElementById('icubeds').value;
  document.getElementById('res8').innerHTML = icubeds;
  var ventilators = document.getElementById('ventilators').value;
  document.getElementById('res9').innerHTML = ventilators;
  var triplelayer = document.getElementById('triplelayer').value;
  document.getElementById('res10').innerHTML = triplelayer;
  var respirators = document.getElementById('respirators').value;
  document.getElementById('res11').innerHTML = respirators;
  var faceshields = document.getElementById('faceshields').value;
  document.getElementById('res12').innerHTML = faceshields;
  var ppe = document.getElementById('ppe').value;
  document.getElementById('res13').innerHTML = ppe;
  var lysol = document.getElementById('lysol').value;
  document.getElementById('res14').innerHTML = lysol;
  var hypochorate = document.getElementById('hypochorate').value;
  document.getElementById('res15').innerHTML = hypochorate;
  var disinfectant = document.getElementById('disinfectant').value;
  document.getElementById('res16').innerHTML = disinfectant;

}
</script>

<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
     
});


</script>
<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran1").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey1").value=result;
     
});


</script>
<?php include 'footer.php'; ?>


<!-- Changes Made-->
