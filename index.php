<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamin PELAUDEIX</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-ipad.css">
    <link rel="stylesheet" href="css/style-iphone.css">
    <!-- aos library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- icon library -->
    <script src="https://kit.fontawesome.com/e5e7c64170.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <!--  google analytics  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ES5W6ESZ10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ES5W6ESZ10');
    </script>
</head>
<body>
    <?php
        // header
        require('include/header.inc.php');
        // body
        require('include/body.inc.php');
        // footer
        require('include/footer.inc.php');
    ?>
    <!-- javascript -->
    <script src="js/getYear.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>