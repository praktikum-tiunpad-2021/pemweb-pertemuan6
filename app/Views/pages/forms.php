<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<p class="h1 mt-3">Forms</p>
<hr>
<p>Ini adalah halaman <code>forms</code></p>

<div class="mt-3">
  <form action="/results" method="post">
    <div class="">
      <label for="name1">Nama</label>
      <input type="text" name="name1" id="name1">
    </div>
    <div class="">
      <label for="address1">Alamat</label>
      <textarea name="address1" id="address1" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Kirim</button>
  </form>
</div>
<?= $this->endSection('content'); ?>