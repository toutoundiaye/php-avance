<?php

$commentaireVenantDUnUtilisateur = '<script>console.log("je t\'ai eu")</script>';

$html1 = '<article>contenu de l\'article</article>' . $commentaireVenantDUnUtilisateur;

//sécurisé avec htmlspecialchars()
$html2 = '<article>contenu de l\'article</article>' . htmlspecialchars($commentaireVenantDUnUtilisateur);

echo $html1 . "\n";
echo $html2 . "\n";