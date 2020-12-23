<!DOCTYPE HTML>
<html lang='en'>

<head>
    <Title>Indian Modern Sr. Sec. School</Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Linking external CSS-->
    <link rel="stylesheet" href="css/index.css">

    <!--Adding Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@599&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Below stylesheet imports icons from Google-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


    <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
    }
    </script>
</head>

<body>
    <!--Top Black Strip-->
    <div class="mainbar">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-whatsapp"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <div id="google_translate_element"></div>
    </div>

    <div class="topnav" id="myTopnav">

        <a1 class="logo">Indian Modern Sr. Sec</a1>
        <a2 class="logo">School</a2>

        <a href="#home" class="active">Enroll</a>
        <a href="#news">Events</a>
        <div class="dropdown">
            <button class="dropbtn">Instruction
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Academics</a>
                <a href="#">Staff</a>
                <a href="#">Leadership</a>
            </div>
        </div>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>


    <?php include 'slideshow.html';?>
    

    <?php include 'sectionCounter.html';?>

    <div id="main_page">
        <?php include 'aboutUs.html';?>
    </div>


    <?php include 'qualityEducation.html';?>



    <?php include 'qualifiedFaculty.html';?>

    <?php include 'ourServices.html';?>

    <?php include 'hostelFacility.html';?>

   

</body>

</html>