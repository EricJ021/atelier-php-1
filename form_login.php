<?php include("include_header.php") ?>
<form action="handler_login.php" method="post">

<p>
    <label for="">Nom :</label>
    <input type="text" name="data-username">
</p>
<p>
    <label for="">Mot de passe :</label>
    <input type="password" name="data-password" id="hInput">

    <a id="showHideBtn" href="#">Maintenir pour montrer</a>
</p>

<p>
    <input type="submit" value="Se connecter">
</p>
</form>

<script src="showHide.js"></script>

<?php include("include_footer.php") ?>