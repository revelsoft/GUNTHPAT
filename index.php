<?PHP
require_once('models/Contact_us.php');
require_once('models/Slide.php');

$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";

$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();

$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();
// echo "<pre>";
// print_r($slide);
// echo "</pre>"; 
?>
<html>

<head>
    <?PHP require_once('view/header.inc.php'); ?>
</head>

<body>
    <?PHP require_once('view/menu.inc.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="template/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="template/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="template/frontend/js/agency.min.js"></script>
</body>
<script src="template/frontend/js/agency.min.js"></script>
<html>