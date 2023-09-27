{{ include('header.php', {title: 'Modifier client'})}}


    <form action="{{path}}client/update" method="post">
    <input type="hidden" name="client_id" value ="{{ client_id }}">
        <label>Nom
            <input type="text" name="client_name" value="{{ client_name }}">
        </label>
        <label>Contact
            <input type="text" name="client_contact" value ="{{ client_contact }}">
        </label>
        <label>Address
            <input type="text" name="client_address" value ="{{ client_address }}">
        </label>
        <label>Code Postal
            <input type="text" name="client_postal_code" value ="{{ client_postal_code }}">
        </label>
        <label>Courriel
            <input type="text" name="client_email" value ="{{ client_email }}">
        </label>
        <label>Téléphone
            <input type="text" name="client_phone" value ="{{ client_phone }}">
        </label>
        <input type="submit" value ="Save">

    </form>
</body>
</html>