{{ include('header.php', {title: 'fiche client'})}}



    <table>
        <tr>
            <th>Nom: </th>
            <td>{{client.nom}}</td>
        </tr>
        <tr>
            <th>Adresse: </th>
            <td>{{client.adresse}}</td>
        </tr>
        <tr>
            <th>Code Postal: </th>
            <td>{{client.postal_code}}</td>
        </tr>
        <tr>
            <th>Courriel: </th>
            <td>{{client.courriel}}</td>
        </tr>
        <tr>
            <th>Téléphone: </th>
            <td>{{client.phone}}</td>
        </tr> 
        <a href="{{ path }}client/edit/{{ client.id }}">Modifier</a>
    </table>
    </body>
    </html>