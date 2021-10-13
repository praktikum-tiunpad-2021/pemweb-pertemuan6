<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<p class="h1 mt-3">Results</p>
<hr>
<p>Ini adalah halaman <code>results</code></p>

<div class="mt-3">
  <p class="h5 mt-3">Nama</p>
  <p><?= $name1; ?></p>
  <p class="h5 mt-3">Alamat</p>
  <p><?= $address1; ?></p>
</div>
<?= $this->endSection('content'); ?>