<br>
<table align="center">
    <tr>
        <td>
            <h2>Form Ubah Karyawan</h2>
        </td>
    </tr>
    <tr>
        <td>

            <form action="" method="POST">

                <input type="hidden" name="id" value="<?= $karyawan['id']; ?>"><br>
                <label>Nama</label><br>
                <input type="text" name="nama" value="<?= $karyawan['nama']; ?>"><br>
                <p><?= form_error('nama'); ?></p>
                <label>Email</label><br>
                <input type="text" name="email" value="<?= $karyawan['email']; ?>"><br>
                <p><?= form_error('email'); ?></p>
                <label>Alamat</label><br>
                <input type="text" name="alamat" value="<?= $karyawan['alamat']; ?>"><br>
                <p><?= form_error('alamat'); ?></p>
                <button type="submit">Ubah</button>
            </form>

        </td>
    </tr>
</table>