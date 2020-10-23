<?php

chdir("..");
chdir("..");
include_once 'service/EmployeService.php';

$es = new EmployeServices();
//var_dump($_FILES['file']);
if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
        //Allowed file type
        $allowed_extensions = array("jpg","jpeg","png","gif");
    
        //File extension
        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
    
        //Check extension
        if(in_array($ext, $allowed_extensions)) {
           //Convert image to base64
           $encoded_image = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
           
           $photo = $encoded_image = 'data:image/' . $ext . ';base64,' . $encoded_image;
           $nom= "Salah";$prenom="salah"; $matricule= "e13XXX"; $cin="mllo"; $createdAt= "2019-12-06 23:51:56";$date_naissance="2019-12-06 23:51:56"; $email="sasasa"; $telephone= $sexe= $salaire = "";
           
           $urlPhoto = "image/". $matricule."-".$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $urlPhoto);
//            move_uploaded_file($_FILES['file']['tmp_name'], "image/". $name);
        try {
            echo json_encode($es->create(new Employe(null, $nom, $prenom, $matricule, $urlPhoto, $cin, $createdAt, $date_naissance, $email, $telephone, $sexe, $salaire)));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        
//           $query = "insert into `images` set `encoded_image` = '".$encoded_image."'";
////           mysqli_query($con, $query);
//           echo "File name : " . $_FILES['uploadFile']['name'];
//           echo "<br>";
           
       } 
  }
