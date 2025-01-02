<h1>Liste des Clients</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
    </tr>
    <?php while ($row = $client->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['telephone'] ?></td>
        </tr>
    <?php } ?>
</table>