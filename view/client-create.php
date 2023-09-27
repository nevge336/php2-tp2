{{ include('header.php', {title: 'Ajouter client'})}}


        <a href="{{path}}client">Liste</a>
    </div>
    
</div>
    <form action="{{path}}client/store" method="post">
        <label>Nom*
            <input type="text" name="client_name">
        </label>
        <label>Contact
            <input type="text" name="client_contact">
        </label>
        <label>Adresse
            <input type="text" name="client_address">
        </label>
        <label>Code Postal
            <input type="text" name="client_postal_code">
        </label>
        <label>Courriel*
            <input type="email" name="client_email">
        </label>
        <label>Téléphone
            <input type="text" name="client_phone" placeholder="555 555-5555">
        </label>

        <input type="submit" value="Sauvegarder">
    </form>


    {{ include('footer.php')}}


