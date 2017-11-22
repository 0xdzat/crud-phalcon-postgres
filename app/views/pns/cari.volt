Hasil Pencarian
{% for v in datacari %}
{% if loop.first %}
<table class="table table-hover">
    <thead>
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    {% endif %}
    <tbody>
      <tr>
        <td>{{v.nip}}</td>
        <td>{{v.nama}}</td>
        <td>{{v.email}}</td>
        <td>{{v.pwd}}</td>
        <td><a href="pns/edit/{{v.id}}">edit</a> </td>
        <td><a href="pns/del/{{v.id}}">del</a></td>
      </tr>
   {% if loop.last %}
    </tbody>
  </table>
  {% endif %}
{% else %}
    No data
{% endfor %}