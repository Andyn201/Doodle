<?php

include("./classes/DomDocumentParser.php");


function followLinks($url) {

    $parser = new DomDocumentParser($url);

}


$startUrl = "https://reecekenney.com/";

followLinks($startUrl);

?>