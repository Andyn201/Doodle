<?php

    echo $_GET['term'];

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
                        <button>
                            Search
                        </button>
                    </div>
                </form>
            </div>

        </div>
        
    </div>

</div>
    
</body>
</html>