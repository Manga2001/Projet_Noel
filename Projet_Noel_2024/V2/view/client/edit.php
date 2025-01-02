<form action="?controller=client&action=update" method="post">
    <input type="text" name="id" value="<?= $client['id'] ?>" hidden>
    <label for="">Nom</label>
    <input type="text" name="nom" value="<?= $client['nom'] ?>"><br>
    <label for="">Prenom</label>
    <input type="text" name="prenom" value="<?= $client['prenom'] ?>"><br>
    <label for="">Email</label>
    <input type="text" name="email" value="<?= $client['email'] ?>"><br>
    <label for="">Telephone</label>
    <input type="number" name="telephone" value="<?= $client['telephone'] ?>"><br>
    <button type="submit">Editer</button>
</form>