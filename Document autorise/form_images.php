<?php
    print("<pre>");
    print_r($_POST);
    print("</pre>");

    print("<pre>");
    print_r($_FILES);
    print("</pre>");

    show_FILES("file[]");

function show_FILES($files_name){
    // 允许上传的图片后缀
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES[$files_name]["name"]);
    $extension = end($temp);     // 获取文件后缀名
    if ((($_FILES[$files_name]["type"] == "image/gif")
        || ($_FILES[$files_name]["type"] == "image/jpeg")
        || ($_FILES[$files_name]["type"] == "image/jpg")
        || ($_FILES[$files_name]["type"] == "image/png"))){
        if ($_FILES[$files_name]["error"] > 0){
            echo "error：: " . $_FILES[$files_name]["error"] . "<br>";
        }
        else{
            echo "Nom de fichier: " . $_FILES[$files_name]["name"] . "<br>";
            echo "Type de fichier: " . $_FILES[$files_name]["type"] . "<br>";
            echo "Taille de fichier: " . ($_FILES[$files_name]["size"] / 1024) . " kB<br>";
            echo "Répertoire: " . $_FILES[$files_name]["tmp_name"] . "<br>";
        
        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，documents 目录权限为 777
            if (file_exists("./documents/" . $_FILES[$files_name]["name"])){
                echo $_FILES[$files_name]["name"] . " fichier existe déja! ";
            }
            else{
            //将文件上传到 documents 目录下
            move_uploaded_file($_FILES[$files_name]["tmp_name"], "./documents/" . $_FILES[$files_name]["name"]);
            echo "Il se trouve: " . "./documents/" . $_FILES[$files_name]["name"];
            }
        }
    }
    else if ($_FILES[$files_name]["size"] > 204800){
        echo "Fichier volumee";
    }
    else {
        echo ("Errors");
    }
    echo ("<br/><br/>"."\n");
}

?>