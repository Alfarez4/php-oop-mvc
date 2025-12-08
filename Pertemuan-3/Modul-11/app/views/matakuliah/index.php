<div class="container mt-4">

    <?php Flasher::flash(); ?>

    <h1>Daftar Mata Kuliah</h1>

    <a href="<?= BASEURL; ?>/matakuliah/tambah" class="btn btn-primary mb-3">+ Tambah Mata Kuliah</a>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th width="5%">No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>Semester</th>
                <th>SKS</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach( $data['mk'] as $mk ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($mk['kode_mk']); ?></td>
                <td><?= htmlspecialchars($mk['nama_mk']); ?></td>
                <td><?= htmlspecialchars($mk['semester']); ?></td>
                <td><?= htmlspecialchars($mk['sks']); ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/matakuliah/ubah/<?= $mk['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                    <a href="<?= BASEURL; ?>/matakuliah/hapus/<?= $mk['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>