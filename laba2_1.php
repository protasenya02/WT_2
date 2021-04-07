
<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset = "utf-8">

	 <link rel = "stylesheet" href = "assets/css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Author</title>

</head>
<body>

<!------------------------------Menu-------------------------->
    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo">Author</div>
                <nav >
                    <ul class="header_nav">
                        <li <?php if($_GET['id'] == 1) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=1">Home</a></li>
                        <li <?php if ($_GET['id'] == 2) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=2">Service</a></li>
                        <li <?php if($_GET['id'] == 3) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=3">Portfolio</a></li>
                        <li <?php if($_GET['id'] == 4) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=4">Team</a></li>
                        <li <?php if($_GET['id'] == 5) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=5">Blog</a></li>
                        <li <?php if($_GET['id'] == 6) echo 'class="active"';?>><a class="nav_link" href="laba2_1.php?id=7">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>