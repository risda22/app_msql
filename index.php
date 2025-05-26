<?php include 'config.php'; ?>
<h2>Data Siswa</h2>
<a href="tambah.php">[ + ] Tambah Siswa</a>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $stmt = $conn->query("SELECT * FROM siswa ORDER BY id DESC");
    while ($row = $stmt->fetch()) {
        echo "<tr>
                <td>$no</td>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin?\")'>Hapus</a>
                </td>
              </tr>";
        $no++;
    }
    ?>
</table>
