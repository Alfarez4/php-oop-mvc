<div class="container mt-4">
  <h1 class="mb-4"><?= $data['judul']; ?></h1>

  <form action="<?= BASEURL; ?>/matakuliah/<?= $data['aksi']; ?>" method="post">
    <?php if(isset($data['mk']['id'])): ?>
      <input type="hidden" name="id" value="<?= $data['mk']['id']; ?>">
    <?php endif; ?>

    <div class="mb-3">
      <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
      <input type="text" class="form-control" id="kode_mk" name="kode_mk"
             value="<?= $data['mk']['kode_mk'] ?? ''; ?>" required>
    </div>

    <div class="mb-3">
      <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
      <input type="text" class="form-control" id="nama_mk" name="nama_mk"
             value="<?= $data['mk']['nama_mk'] ?? ''; ?>" required>
    </div>

    <div class="mb-3">
      <label for="semester" class="form-label">Semester</label>
      <input type="number" class="form-control" id="semester" name="semester"
             value="<?= $data['mk']['semester'] ?? ''; ?>" min="1" max="8" required>
    </div>

    <div class="mb-3">
      <label for="sks" class="form-label">SKS</label>
      <input type="number" class="form-control" id="sks" name="sks"
             value="<?= $data['mk']['sks'] ?? ''; ?>" min="1" max="6" required>
    </div>

    <div class="mb-3">
      <label for="status_id" class="form-label">Status</label>
      <select class="form-select" id="status_id" name="status_id">
        <?php $status = $data['mk']['status_id'] ?? 1; ?>
        <option value="1" <?= $status == 1 ? 'selected' : ''; ?>>Aktif</option>
        <option value="0" <?= $status == 0 ? 'selected' : ''; ?>>Nonaktif</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= BASEURL; ?>/matakuliah" class="btn btn-secondary">Batal</a>
  </form>
</div>