<?php foreach ($etudiants as $etudiant): ?>

    <div>
        <h3><?php echo $etudiant['nom'] . " " . $etudiant['prenom']; ?></h3>
        <p>Email: <?php echo $etudiant['email']; ?></p>
        <p>Filière: <?php echo $etudiant['filiere']; ?></p>
        <a href="index.php?action=editEtudiant&id=<?php echo $etudiant['id']; ?>">Modifier</a>
        <a href="index.php?action=deleteEtudiant&id=<?php echo $etudiant['id']; ?>">Supprimer</a>
    </div>
    
<?php endforeach; ?>