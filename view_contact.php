<?php include("include_header.php");

if (!$_SESSION['username']) {
  $_SESSION['info'] = 'Il y a y un problème.';
  header('Location: form_login.php'); 
} else {
  require_once("db_connect.php");

$sql='SELECT * FROM `tbl_contact` ';

$query = $dbh->prepare($sql);
$query->execute();
$contacts = $query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);

////
$sql_img = 'SELECT * FROM `tbl_users` WHERE `user_username` = "'.$_SESSION['username'].'"';

$query2 = $dbh->prepare($sql_img);
$query2->execute();
$user = $query2 ->fetchAll(PDO::PARAM_STR);
//var_dump($user[0]);

}
?>
  <h1>Administration des Contacts</h1>

  <?php 
//
  echo '<h2>Welcome, '.$_SESSION['username'].' !</h2><br>';
  
  echo '<p><img src="user/'.$user[0]['user_image'].'" height="150px"  alt="user image" /></p>';
//

  foreach ($contacts as $contact ) { ?>
  <p><a href="view_contact-single.php?contact_id=<?= $contact['contact_id']?>"><?= $contact['contact_subject']?></a></p>

  <?php } ?>


      <a href="index.php"><button>Retour</button></a>


      <?php include("include_footer.php") ?>
