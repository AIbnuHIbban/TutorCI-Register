<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
<body>
    
    <form action="<?= base_url('prosesdaftar') ?>" method="post">
        <p>Username</p>    
        <input type="text" name='username' required><br>
        <p>Password</p>    
        <input type="password" name='password' required><br>

        <button type='submit'> Tambah User </button>
    </form>

</body>
</html>