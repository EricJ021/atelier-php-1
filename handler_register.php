<?php session_start();



if (isset( $_POST['data-username'] ) && !empty( $_POST['data-username'])
    && isset( $_POST['data-mail'] ) && !empty( $_POST['data-mail'])

    //&& !empty($image) 

    && isset( $_POST['data-password'] ) && !empty( $_POST['data-password'])
    && isset( $_POST['data-confirmation'] ) && !empty( $_POST['data-confirmation'])) {
			


        if ($_POST['data-password']==$_POST['data-confirmation']) {
            $username = strip_tags($_POST['data-username']);
            $mail = strip_tags($_POST['data-mail']);
            $unencrypted_password = strip_tags($_POST['data-password']);
            $encrypted_password = password_hash($unencrypted_password, PASSWORD_DEFAULT);
            //echo $unencrypted_password; 
            //echo "<br>";
            //echo $encrypted_password;


            // Get image name
            $image = $_FILES['data-image']['name'];

            // image file directory
            $target = "user/".basename($image);

            

            require_once("db_connect.php");
            $sql='INSERT INTO `tbl_users` (`user_username`, `user_mail`, `user_password`, `user_image`) VALUES (:user_username, :user_mail, :user_password, :user_image);';
            $query = $dbh->prepare($sql);
            $query->bindValue(':user_username', $username, PDO::PARAM_STR);
            $query->bindValue(':user_mail', $mail, PDO::PARAM_STR);
            $query->bindValue(':user_password', $encrypted_password, PDO::PARAM_STR);
            
            
            //save image file url
            $query->bindValue(':user_image', $image, PDO::PARAM_STR);

            $query->execute();

            //save image file into directory
            move_uploaded_file($_FILES['data-image']['tmp_name'], $target);
        
        
            $_SESSION['info'] = "<p style='color:green'>Vous êtes enregistré !</p>" ;
            header('refresh:2; url=index.php');
        
        
        }else {
            echo "problème mot de passe";
            header('refresh:2; url=form_register.php');
        }
        

    } else {
        echo "Il y a un probléme...";
    }

?>