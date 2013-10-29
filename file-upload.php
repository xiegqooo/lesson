<?php
	//if($_FILES['photo-path']["error"] < 0){
		$file = $_FILES['photo-path'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        if (!$fileSize) {
            $fileSize = $_SERVER['CONTENT_LENGTH'];
        }

        echo json_encode(array(
            "success" => true,
            "fileName" => $fileName,
            "fileSize" => $fileSize
        ));
    //}
?>