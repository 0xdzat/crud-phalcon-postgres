<form action="../update" class="form-horizontal" method="POST">
	<div class="form-group">
		<label class="control-label col-sm-2" for="nip">NIP:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nip" placeholder="Enter nip" value="<?= $nip ?>" required>
			<input type="hidden" class="form-control" name="id" value="<?= $id ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama" placeholder="Enter nama" value="<?= $nama ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Email:</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" name="email" placeholder="Enter email" value="<?= $email ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Password:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="pwd" placeholder="Enter pwd" value="<?= $pwd ?>" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Simpan</button>
		</div>
	</div>
</form>