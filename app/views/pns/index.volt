<table class="table table-hover">
	<h2>User</h2>
        <div class="row">
          <center>
          <form action="{{url("pns/cari")}}" class="search" method="POST">
                <input type="text" name="nama" class="form-control input-sm" placeholder="cari nama">
                <button type="submit" class="btn btn-primary btn-sm">Search</button>
          </form>
          </center>
        </div>
      </br>
	<thead>

		<tr>
			<th>
				NIP
			</th>
			<th>
				Nama
			</th>
			<th>
				Email
			</th>
			<th>
				Delete
			</th>
			<th>
				Edit
			</th>
		</tr>
	</thead>
	<tbody>
		{% for l in data_pns %}
		<tr>
			<td> 
				{{
					l.nip
				}}
			</td>
			<td>
				{{
					l.nama
				}}
			</td>
			<td>
				{{
					l.email
				}}
			</td>
			<td><a href="pns/edit/{{l.id}}">edit</a></td>
			<td><a href="pns/del/{{l.id}}">delete</a></td>
		</tr>
		{% endfor %}
	</tbody>
</table>