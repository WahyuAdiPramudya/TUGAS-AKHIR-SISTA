<head>
  <script type="text/javascript" src="<?= base_url('assets/js/myscript.js'); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<form method="POST" action="<?= base_url('Admin/submitKaprodi/' . $ID); ?>" id="kaprodi">
  <div class="form-row align-items-center">
    <div class="col-md-4 mt-4 ml-2">
      <select name="kaprodi" class="custom-select mr-sm-2">
        <?php foreach ($dosen->result() as $j) {
        ?>
          <option value="<?= $j->ID; ?>"><?= $j->Nama; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-auto mt-4 ml-2">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>