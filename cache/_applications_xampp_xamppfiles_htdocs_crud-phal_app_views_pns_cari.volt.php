Hasil Pencarian
<?php $v6221346802731446811iterated = false; ?><?php $v6221346802731446811iterator = $datacari; $v6221346802731446811incr = 0; $v6221346802731446811loop = new stdClass(); $v6221346802731446811loop->self = &$v6221346802731446811loop; $v6221346802731446811loop->length = count($v6221346802731446811iterator); $v6221346802731446811loop->index = 1; $v6221346802731446811loop->index0 = 1; $v6221346802731446811loop->revindex = $v6221346802731446811loop->length; $v6221346802731446811loop->revindex0 = $v6221346802731446811loop->length - 1; ?><?php foreach ($v6221346802731446811iterator as $v) { ?><?php $v6221346802731446811loop->first = ($v6221346802731446811incr == 0); $v6221346802731446811loop->index = $v6221346802731446811incr + 1; $v6221346802731446811loop->index0 = $v6221346802731446811incr; $v6221346802731446811loop->revindex = $v6221346802731446811loop->length - $v6221346802731446811incr; $v6221346802731446811loop->revindex0 = $v6221346802731446811loop->length - ($v6221346802731446811incr + 1); $v6221346802731446811loop->last = ($v6221346802731446811incr == ($v6221346802731446811loop->length - 1)); ?><?php $v6221346802731446811iterated = true; ?>
<?php if ($v6221346802731446811loop->first) { ?>
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
    <?php } ?>
    <tbody>
      <tr>
        <td><?= $v->nip ?></td>
        <td><?= $v->nama ?></td>
        <td><?= $v->email ?></td>
        <td><?= $v->pwd ?></td>
        <td><a href="pns/edit/<?= $v->id ?>">edit</a> </td>
        <td><a href="pns/del/<?= $v->id ?>">del</a></td>
      </tr>
   <?php if ($v6221346802731446811loop->last) { ?>
    </tbody>
  </table>
  <?php } ?>
<?php $v6221346802731446811incr++; } if (!$v6221346802731446811iterated) { ?>
    No data
<?php } ?>