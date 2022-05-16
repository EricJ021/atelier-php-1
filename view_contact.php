<?php include("include_header.php") 

if (!$_SESSION['username']) {
  $_SESSION['info'] = 'Il y a y un problème.';
  header('Location: form_login.php'); 
} else {
  require_once("db_connect.php");
$sql='SELECT * FROM `tbl_contact` ';
$query = $dbh->prepare($sql);
$query->execute();
$contacts=$query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);
}
?>
  <h1>Administration des Contacts</h1>
  <?php foreach ($contacts as $contact ) { ?>
<p><a href="view_contact-single.php?contact_id=<?= $contact['contact_id']?>"><?= $contact['contact_subject']?></a></p>
      <?php } ?>
      <a href="index.php"><button>Retour</button></a>
      <?php include("include_footer.php") ?>
