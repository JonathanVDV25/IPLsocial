<div id="contenu">
    <h2> IPL social </h2>
    <p> Tester ici votre mot de passe </p>
    <form method="post" action="index.php?action=home">
        Entrez un mot de passe : <input type="password" name="password">
        <input type="submit" value="valider" name="submitPassword">
    </form>
    <?php if(!empty($status)) { ?>
        <p> <?php echo $status ?> <p>
    <?php } ?>

</div>