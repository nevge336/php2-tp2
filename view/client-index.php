{{ include('header.php', {title: 'Liste clients'})}}



        <a href="{{path}}client/create">Ajouter client</a>
    </div>
<table>
        <tr>
            <th>Nom</th>
            <th>Contact</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Courriel</th>
        </tr>

      
        {% for client in clients %}

                <tr>
                    <td><a href='{{path}}client/show/{{client_id}}'>{{ client_name }}</a></td>
                    <td>{{ client_contact }}</td>
                    <td>{{ client_address }}</td>
                    <td>{{ client_phone }}</td>
                    <td>{{ client_email }}</td>
                </tr>

        {% endfor %}

</table>

{{ include('footer.php')}}