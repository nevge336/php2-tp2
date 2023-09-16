{{ include('header.php', {title: 'Ajouter client'})}}


<form action="{{path}}client/store" method="post">
    <label>Nom
        <input type="text" name="nom">
    </label>
    <label>Adresse
        <input type="text" name="adresse">
    </label>
    <label>Code Postal
        <input type="text" name="postal_code">
    </label>
    <label>Courriel
        <input type="text" name="courriel">
    </label>
    <label>Téléphone
        <input type="text" name="phone">
    </label>
    <label>Date de naissance
        <input type="date" name="naissance">
    </label>
    <input type="submit" value="Save">

</form>
</body>

</html>