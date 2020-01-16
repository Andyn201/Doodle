<?php

    if(isset($_GET["term"])){
        $term = $_GET['term'];
    }

    else {

    }

    $type = isset($_GET["type"]) ? $term = $_GET["type"] : "sites";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper ">

    <div class="header">

        <div class="headerContent">

            <div class="logoContainer">
                <a href="index.php"><img src="./assets/img/logo.png" alt="" ></a>
            </div>

            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <div class="searchBarContainer">
                        <input type="text" class="searchBox" name="term">
                        <button class="searchButton">
                            <img src="./assets/img/icons/search.png" alt="logo">
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="tabsContainer">
            <ul class="tabList">
                <li class='<?php echo $type == "sites" ? "active" : "" ?>''>
                    <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a>
                </li>
                <li class='<?php echo $type == "images" ? "active" : "" ?>''>
                    <a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
                </li>
            </ul>
        </div>
        
    </div>

</div>
    
</body>
</html>