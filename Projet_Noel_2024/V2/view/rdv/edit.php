<form action="?controller=client&action=update" method="post">
    <input type="text" name="id" value="<?= $Rdv['id'] ?>" hidden>
    <label for="">Date</label>
    <input type="date" name="date" value="<?= $Rdv['date'] ?>"><br>
    <label for="">Heure</label>
    <input type="time" name="heure" value="<?= $Rdv['Heure'] ?>"><br>
    <label for="">Description</label>
    <input type="text" name="description" value="<?= $Rdv['Description'] ?>"><br>
    <label for="">Client_Id</label>
    <input type="text" name="client_Id" value="<?= $Rdv['Client_Id'] ?>"><br>
    <button type="submit">Editer</button>
</form>