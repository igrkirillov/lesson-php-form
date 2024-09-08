<?php

$dirToUpload = "./uploads/";
if (empty($_REQUEST["file_name"])
    || empty($_FILES["content"])
    || $_FILES["content"]["error"] != 0) {
    // редирект обратно
    header("Location: index.php");
} else {
    if (!file_exists($dirToUpload)) {
        mkdir($dirToUpload);
    }
    $pathToFile = $dirToUpload . basename($_FILES["content"]["name"]);
    move_uploaded_file($_FILES["content"]["tmp_name"], $pathToFile);

    echo "<span style='font-size: 2rem; color: green'>" . realpath($pathToFile) . "</span><br/>";
    echo "<span style='font-size: 2rem; color: green'>" . filesize($pathToFile)/1000 . " kB" . "</span>";
}