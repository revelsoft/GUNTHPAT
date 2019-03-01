<?PHP
$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;

if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}

$menu = 'about_us';

require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('2');

?>

<html>
<head>


    <meta property="og:type"          content="website">
    <meta property="og:title"         content="<?PHP if($lng == "TH"){ echo $page['page_title_th']; }else{ echo $page['page_title_en'];} ?>">
    <meta property="og:description"   content="<?PHP if($lng == "TH"){ echo $page['page_description_th']; }else{ echo $page['page_description_en']; } ?>">
    




    <?PHP require_once('view/header.inc.php'); ?>
    <link href="template/frontend/css/style.css" rel="stylesheet">
    <link href="template/frontend/css/menu.css" rel="stylesheet">
    <link href="template/frontend/css/slide.css" rel="stylesheet">
    <link href="template/frontend/css/about.css" rel="stylesheet">
    <link href="template/frontend/css/home-facilities.css" rel="stylesheet">
    <link href="template/frontend/css/home-gallery.css" rel="stylesheet">
    <link href="template/frontend/css/footer.css" rel="stylesheet">    
</head>
<body>
        <?PHP require_once('view/menu.inc.php');?>
        <?PHP require_once('view/slide.inc.php');?>
    <?PHP require_once('view/about_us/index.inc.php');?>
    <?PHP require_once('view/footer.inc.php'); ?>

</body>
<html>