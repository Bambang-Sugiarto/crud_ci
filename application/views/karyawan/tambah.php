<br>

<table align="center">
    <tr>
        <td>
            <h2>Form Tambah Karyawan</h2>
        </td>

    </tr>
    <tr>
        <td>

            <form action="" method="POST">

                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <p><?= form_error('nama'); ?></p>
                <label>Email</label><br>
                <input type="text" name="email"><br>
                <p><?= form_error('email'); ?></p>
                <label>Alamat</label><br>
                <input type="text" name="alamat"><br>
                <p><?= form_error('alamat'); ?></p>
                <button type="submit">Tambah</button>
            </form>
        </td>
    </tr>
</table>