<ul>
    <?php if($page !== 'Accueil') { ?>
        <li><a href="index.php">Accueil</a></li>
    <?php } ?>
    <?php if($page !== 'Tarifs') { ?>
        <li><a href="tarifs.php">Tarifs</a></li>
    <?php } ?>
    <?php if($page !== 'Contact') { ?>
        <li><a href="contact.php">Contact</a></li>
    <?php } ?>
</ul>