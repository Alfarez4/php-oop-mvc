<div class="container">
    <h3><?= $data['judul']; ?></h3>

    <form action="<?= BASEURL; ?>/mahasiswa/<?= $data['aksi']; ?>" method="post">
        
        <?php if(isset($data['mhs']['id'])): ?>
            <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
        <?php endif; ?>

        <div class="form-group">
            <label for="formGroupExampleInput" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama" name="nama" value="<?= isset($data['mhs']['nama']) ? $data['mhs']['nama'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan NPM" name="npm" value="<?= isset($data['mhs']['npm']) ? $data['mhs']['npm'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput" class="form-label">Email:</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Email" name="email" value="<?= isset($data['mhs']['email']) ? $data['mhs']['email'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput" class="form-label">Jurusan:</label>
            <select class="form-select" aria-label="Pilih Jurusan" enabled name="jurusan">
                <?php $j = isset($data['mhs']['jurusan']) ? $data['mhs']['jurusan'] : ''; ?>
                <option value="" disabled <?= $j == '' ? 'selected' : ''; ?>>-- Pilih Jurusan --</option>
                <option value="TEKNIK INFORMATIKA" <?= $j == 'TEKNIK INFORMATIKA' ? 'selected' : ''; ?>>TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI" <?= $j == 'SISTEM INFORMASI' ? 'selected' : ''; ?>>SISTEM INFORMASI</option>
                <option value="TEKNIK INDUSTRI" <?= $j == 'TEKNIK INDUSTRI' ? 'selected' : ''; ?>>TEKNIK INDUSTRI</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
</div>