
<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "assets/css/style2.css">
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
                <!--Input navigation array-->
                <?php
                $nav_arr = array('Home', 'Service', 'Portfolio', 'Team', 'Blog', 'Contact');

                if(!empty($_GET['id']))
                    $id = $_GET['id'];
                else
                    $id = 0;
                ?>

                <!--Output navigation array-->
                <nav>
                    <ul class="header_nav">
                        <?php
                            foreach($nav_arr as $key => $nav):
                        ?>
                            <li> <?php if($key != $id) {?>
                                    <a href="laba2_2.php?id=<?=$key?>"><?=$nav?></a>
                                <?php } else { ?>
                                    <a class="active" href="#"><?=$nav?></a>
                                <?php } ?>
                            </li>
                        <?php
                            endforeach;
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
</header>

<!------------------------------Form-------------------------->
<section class="city_form">
    <div class="container">
        <form class="input_form" action="" method="POST" >
            <div class="form_inner">
                <?php $message=$_POST['message']; ?>
                <div class="form_title"> Enter city names, separated by commas</div>
                <textarea name="message" cols="40" rows="3" placeholder="City names"><?=$message?></textarea>
                <input type="submit" name="send" value="Send">
            </div>
        </form>
    </div>

    <?php

    $title = "Sorted cities:";
    $input_error = "Incorrect input";
    $input_message = "";

    if (isset($_POST['send'])) {

        $input_message = $_POST['message'];

        // check input
        $a = str_split($input_message);
        $b = range(0, 9);
        if (sizeof(array_intersect($b, $a)) > 0) {

            // incorrect
            echo "<p class='cities_error'>$input_error</p>";

        } else {

            // correct
            $input_message = str_replace(" ", '', $input_message);
            $input_message = mb_convert_case($input_message, MB_CASE_TITLE, "UTF-8");
            $cities =  explode(",", $input_message);
            $cities = array_unique($cities);
            sort($cities, SORT_STRING);
            $result = implode ( ", " , $cities);
            echo "<p class='cities_text'>$title $result</p>";
        }
    }
    ?>
</section>
</body>
</html>