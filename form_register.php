<?php include("include_header.php") ?>

<form action="handler_register.php" method="post">

<p>
        <label for="input-username">Nom :</label>
        <input type="text" id="input-username" name="data-username">
    </p>
    <p>
        <label for="input-mail">Email :</label>
        <input type="email" id="input-mail" name="data-mail">
    </p>
    
    <p>
        <label for="input-password">Mot de passe :</label>
        <input type="password" id="input-password" name="data-password">
    </p>
    <p>
        <label for="input-confirmation">Confirmation :</label>
        <input type="password" id="input-confirmation" name="data-confirmation">
        <span id="message"></span><br>
    </p>
    <p>
        <input type="submit" value="Enregistrer">
    </p>
    
</form>

<script src="checkPwd.js"></script>

<?php include("include_footer.php") ?>