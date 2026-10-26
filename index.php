<?php include 'include/meta.php'; ?>
<?php include 'include/header.php'; ?>

<section>
<?php
$nama = "Mahasiswa S1";
$jurusan = "Sistem Informasi";
$hobi = ["Membaca", "Desain", "Coding"];
?>

Nama: <?php echo $nama ?> <br>
Jurusan: <?php echo $jurusan ?> <br>
Hobi:
<ul>

<?php foreach ($hobi as $key => $value): ?>
    <li><?php echo $value; ?></li>
<?php endforeach ?>
</ul>

</section>

<?php include 'include/footer.php'; ?>