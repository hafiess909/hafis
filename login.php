<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="card center">
    <h3>Login Admin</h3>
    <form method="post">
        <input type="text" placeholder="Nama" required>
        <input type="password" placeholder="Password" required>
        <button name="login">LOGIN</button>
    </form>
</div>
<div> 
    <a href="halaman-awal.php">Kembali ke Halaman Utama</a>
</div>
<style>
 body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: #ffffff;
        padding: 25px;
        width: 300px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .card h3 {
        margin-bottom: 20px;
        color: #333;
    }

    .card input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .card button {
        width: 100%;
        padding: 10px;
        background: #4facfe;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .card button:hover {
        background: #00c6fb;
    }

    a {
        margin-top: 15px;
        color: white;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</body>
</html>