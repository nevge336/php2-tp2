{{ include('header.php', {title: 'Modifier client'})}}


    <form action="{{path}}client/update" method="post">
    <input type="hidden" name="id" value ="{{ client.id }}">
        <label>Nom
            <input type="text" name="nom" value="{{ client.nom }}">
        </label>
        <label>Adresse
            <input type="text" name="adresse" value ="{{ client.adresse }}">
        </label>
        <label>Code Postal
            <input type="text" name="postal_code" value ="{{ client.postal_code }}">
        </label>
        <label>Courriel
            <input type="text" name="courriel" value ="{{ client.courriel }}">
        </label>
        <label>Téléphone
            <input type="text" name="phone" value ="{{ client.phone }}">
        </label>
        <label>Date de naissance
            <input type="date" name="naissance" value ="{{ client.naissance }}">
        </label>
        <input type="submit" value ="Save">

    </form>
</body>
</html>