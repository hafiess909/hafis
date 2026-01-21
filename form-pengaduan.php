<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fasilitasku - Pengajuan Fasilitas</title>
    <link rel="stylesheet" href="#">
</head>
<body>

<header>
    <h1>Fasilitasku</h1>
    <p>Form Pengajuan & Pengaduan Sarana Sekolah</p>
</header>

<nav>
    <a href="index.php">Beranda</a>
    <a href="form-pengaduan.php">Pengajuan Fasilitas</a>
</nav>

<section class="content">
    <h2>Form Pengajuan Fasilitas</h2>

    <form action="proses_pengaduan.php" method="post">
        <label for="nama">Nama Pengaju</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>

        <label for="kelas">Kelas / Jabatan</label>
        <input type="text" id="kelas" name="kelas" placeholder="Contoh: XII RPL 1" required>

        <label for="fasilitas">Nama Fasilitas</label>
        <input type="text" id="fasilitas" name="fasilitas" placeholder="Contoh: Proyektor" required>
        <label for="lokasi">Lokasi Fasilitas</label>
        <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: LAB RPL" required>

        <label for="jenis">Jenis Pengajuan</label>
        <select id="jenis" name="jenis" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="perbaikan">Perbaikan</option>
            <option value="pengadaan">Pengadaan Baru</option>
            <option value="pengaduan">Pengaduan Kerusakan</option>
        </select>

        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan" rows="4" placeholder="Jelaskan kondisi atau kebutuhan..." required></textarea>

        <button type="submit">Kirim Pengajuan</button>
    </form>
</section>

<footer>
    <p>© 2026 Fasilitasku | Sekolah</p>
</footer>

<style>
body {
    font-family: Arial, sans-serif;
    
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #0010eb;
    color: white;
    text-align: center;
    padding: 20px;
}

nav {
    background: #333;
    padding: 10px;
    text-align: center;
}

nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
}

nav a:hover {
    text-decoration: underline;
}

.content {
    padding: 20px;
}

form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    max-width: 500px;
}

label {
    display: block;
    margin-top: 10px;
}

input, select, textarea, button {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
}

button {
    background-color: #0010eb;
    color: white;
    border: none;
    margin-top: 15px;
    cursor: pointer;
}

button:hover {
    background-color: #2c7be5;
}

footer {
    text-align: center;
    padding: 10px;
    background: #ddd;
}
</style>

</body>
</html>
