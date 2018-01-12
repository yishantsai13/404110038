<?php
    if(empty($_POST["height"]) or empty($_POST["weight"])){
        echo "please type in all information";
    }
        else{
        echo "height=".$_POST["height"]."</br>";
        echo "weight=".$_POST["weight"]."</br>";
        $bmi=$_POST["weight"]/($_POST["height"]*$_POST["height"]);
        echo "BMI:".$bmi."</br>";

            if($_FILES["file"]["error"]>0){
            echo "error:".$_FILES["file"]["error"];
            }
            elseif(empty($_FILES["file"])){
            echo "empty";
            }
            elseif(!in_array($_FILES["file"]["type"], array('image/jpeg', 'image/gif', 'image/png'))){
            echo "wrong file type";
            }
            else{
                $filename=$_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
                echo '<img src="upload/'.$filename.'"/>';
            }
    } 

?>