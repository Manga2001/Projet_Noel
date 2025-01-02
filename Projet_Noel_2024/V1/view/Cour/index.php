<?php foreach ($cours as $court): ?>

<div>
    <h3><?php echo $cour['nom_cour'] . " " . $cour['code_cour']; ?></h3>
    <p>Nbr_Heure: <?php echo $cour['nbr_heure']; ?></p>
    <a href="index.php?action=editCour&id=<?php echo $Cour['id']; ?>">Modifier</a>
    <a href="index.php?action=deleteCour&id=<?php echo $Cour['id']; ?>">Supprimer</a>
</div>

<?php endforeach; ?>