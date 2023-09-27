{{ include('header.php', {title: 'fiche client'})}}



    <table>
        <tr>
            <th>Nom: </th>
            <td>{{client_name}}</td>
        </tr>
        <tr>
            <th>Adresse: </th>
            <td>{{client_address}}</td>
        </tr>
        <tr>
            <th>Code Postal: </th>
            <td>{{client_postal_code}}</td>
        </tr>
        <tr>
            <th>Courriel: </th>
            <td>{{client_email}}</td>
        </tr>
        <tr>
            <th>Téléphone: </th>
            <td>{{client_phone}}</td>
        </tr> 
        <a href="{{ path }}client/edit/{{ client_id }}">Modifier</a>
    </table>
    </body>
    </html>