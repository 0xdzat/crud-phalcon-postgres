<form action="{{url("daftar/simpan")}}" class="form-horizontal" method="POST">
  <!-- {{ form('daftar/simpan','role': 'form') }} -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="NIP" required>NIP:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="nip" placeholder="Enter nip">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama" required>Nama:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" required>Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" required>Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Daftar</button>
      </div>
    </div>
  </form>