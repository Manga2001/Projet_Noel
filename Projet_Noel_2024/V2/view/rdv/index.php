<h1>Liste des rendez-vous</h1>
<table>
    <tr>
        <th>Date</th>
        <th>Heure</th>
        <th>Description</th>
        <th>Client</th>
    </tr>
    <?php while ($row = $Rdv->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['date'] ?></td>
            <td><?= $row['heure'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['client_id'] ?></td>
        </tr>
    <?php } ?>
</table>