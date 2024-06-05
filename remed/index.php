<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Buku Tamu.</title>
</head>

<body>
    <div>
        <div>
            <div>
                <h4>LOGIN ADMIN</h4>
                <div>
                    <div>
                        <form action="proses-login-admin.php" method="post">
                            <div>
                                <label>username</label>
                                <input type="text" name="username" placeholder="masukkan Username anda..." required>
                            </div>
                            <div>
                                <label>password</label>
                                <input type="password" name="password" placeholder="masukkan password anda..." required>
                            </div>
                            <div>
                                <button type="submit"> LOGIN </button>
                            </div>
                            <a href="tambah-buku.php">MASUKKAN SEBAGAI TAMU</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>