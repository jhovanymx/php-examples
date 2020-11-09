<?php
    $file = $_FILES["file"];
    
    if(isset($file)){
        $result = upload($file);
        if(!$result["success"]){
            $error = $result["error"];
        }
    }
    
    function upload($file){
        if($file["size"] > 1024 * 150){
            $result["success"] = false;
            $result["error"] = "La imagen no debe exceder 150 KB";
            return $result;
        }

        $uploadDir = "./uploads/";
        $tempName = $file["tmp_name"];
        $isValidImage = getimagesize($tempName) != false;
        $result = array("success" => true);
        
        if(!$isValidImage){
            $result["success"] = false;
            $result["error"] = "El archivo no tiene un formato de imagen válida";
            return $result;
        }

        $filePath = $uploadDir . basename($file["name"]);
        $extFile = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
            
        if($extFile != "jpg" && $extFile != "jpeg"){
            $result["success"] = false;
            $result["error"] = "La imagen debe tener formato JPEG";
            return $result;
        }

        if(!move_uploaded_file($tempName, $filePath)){
            $result["success"] = false;
            $result["error"] = "Ocurrió un error al subir archivo";
            return $result;
        }

        $result["filePath"] = $filePath;

        return $result;
    }


    include_once "view/upload-image.php";
?>