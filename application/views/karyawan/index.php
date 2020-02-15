<html>

<head>
    <title><?= $judul; ?></title>
</head>

<body>


    <br>
    <h2 align="center">Tabel Karyawan/
        <a href="<?= base_url('home/tambah/'); ?>"><button type="submit">Tambah</button></a></h2>
    <form action="" method="POST" align="center">

        <input type="text" name="keyword">
        <button type="submit">Cari</button>
    </form>
    <table border="1" align="center">

        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Alamat</td>
            <td colspan="3" align="center">Aksi</td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($karyawan as $row) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td>
                    <a href="<?= base_url('home/tambah'); ?>">Tambah</a>
                </td>
                <td>

                    <a href="<?= base_url(); ?>home/ubah/<?= $row['id']; ?>">Ubah</a>
                </td>
                <td>

                    <a href="<?= base_url(); ?>home/hapus/<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>