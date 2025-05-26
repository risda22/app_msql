<?php include 'config.php'; ?>
<h2>Tambah Siswa</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Kelas: <input type="text" name="kelas"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    $stmt = $conn->prepare("INSERT INTO siswa (nama, kelas) VALUES (?, ?)");
    $stmt->execute([$_POST['nama'], $_POST['kelas']]);
    header("Location: index.php");
}
?>
