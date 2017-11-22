<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Phalcon</title>
        <?= $this->tag->stylesheetLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false) ?> 
        <?= $this->tag->stylesheetLink('https://getbootstrap.com/docs/3.3/examples/cover/cover.css', $flase) ?>
    </head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
        <div class="masthead clearfix">
        <div class="inner">
            <h3 class="masthead-brand">CRUD Phalcon</h3>
<nav>
    <ul class="nav masthead-nav">
        <li><a href="localhost:8080/crud-phal/">Home</a></li>
        <li><a href="http://localhost:8080/crud-phal/daftar">Daftar</a></li>
        <li><a href="/crud-phal/pns">List</a></li>
    </ul>
</nav>
</div>
</div>
<div class="inner cover">
    <?= $this->getContent() ?>
    <div class="mastfoot">
    <div class="inner">
    <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
</div>
</div>
</div>
</div>
</div>
<?= $this->tag->javascriptInclude('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false) ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</body>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cari Data</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</html>


