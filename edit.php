<?php include 'config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM siswa WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();
?>

<h2>Edit Siswa</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $stmt = $conn->prepare("UPDATE siswa SET nama = ?, kelas = ? WHERE id = ?");
    $stmt->execute([$_POST['nama'], $_POST['kelas'], $id]);
    header("Location: index.php");
}
?>
