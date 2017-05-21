<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nullatech">
    <title>Opportunity | Nullatech</title>
    <link rel="shortcut icon" href="../favicons/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../favicons/android-chrome-512x512.png" sizes="512x512">
    <link rel="icon" type="image/png" href="../favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../favicons/favicon-32x32.png" sizes="32x32">
    <!-- Lato Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Stylesheet -->
    <link href="../gallery-materialize.min.opt.css"
          rel="stylesheet">
    <link rel="stylesheet" media="all"
          href="../additional-checkout-buttons-808913e66bb8ca34c54570ae143ad72de7405d257db279c632b910e1babef726.css">
    <link rel="canonical" href="https://nullatech.com">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<!-- Navbar and Header -->
<nav style="background-color: transparent;height: 300px;" class="nav-extended">
    <div class="nav-background custom-nav-background">
    </div>
    <div class="nav-wrapper db">
        <a href="../index.html" class="brand-logo" style="font-size: 20px"><i class="material-icons"></i>Nulatech</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="bt hide-on-med-and-down">
            <li><a href="../about">About</a></li>
            <li><a href="../projects">Projects</a></li>
            <li><a href="../academy">Academy</a></li>
            <li><a href="#">Blog</a></li>
            <li class="k"><a href="../opportunity">Opportunity</a></li>
        </ul>

        <div class="nav-header de">
            <h1>Opportunity</h1>
        </div>
    </div>

    <!-- Fixed Masonry Filters -->

</nav>
<ul class="side-nav" id="nav-mobile">
    <li class="k"><a href="../index.html"><i class="material-icons">home</i>Home</a></li>
    <li><a href="../projects"><i class="material-icons">layers</i>Projects</a></li>
    <li><a href="../about"><i class="material-icons">face</i>About</a></li>
    <li><a href="../academy"><i class="material-icons">school</i>Academy</a></li>
    <li><a href="#"><i class="material-icons">brush</i>Blog</a></li>
    <li><a href="../opportunity"><i class="material-icons">done all</i>Opportunity</a></li>
</ul>


<div id="documentation" class="cx gray">
    <!--<div class="db">-->
    <div class="e">
        <div style="width: 60%;margin: auto;">
            <div style="text-align: center">
                <h4 style="text-shadow:1px 1px 0 #444">
                    <span>Full-stack developer Internship opportunity</span>
                </h4>
                <div class="w3-panel w3-light-grey w3-round-large">
                    <p style="text-align: justify">
                        At Nullatech sky is the limit. If you are willing to lean new technologies, experience a dynamic
                        workspace and join our expert team to see how to get things done, Nullatech is the right place
                        for you. Do not hesitate and send us your resume.

                    </p>
                </div>
                <br>
                <br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file"/>
                    <button type="submit" name="btn-upload" style="font-size: smaller">upload</button>
                </form>
                <br/><br/>
                <?php
                if(isset($_GET['success']))
                {
                    ?>
                    <label>File Uploaded Successfully...</label>
                    <?php
                }
                else if(isset($_GET['fail']))
                {
                    ?>
                    <label>Problem While File Uploading !</label>
                    <?php
                }
                else
                {
                    ?>
                    <label>Try to upload any files (PDF, DOC) </label>
                    <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>


<!-- Core Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
<script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?5528909418534337984"
        crossorigin="anonymous"></script>

</body>
</html>