<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Selamat Datang <?=  $this->session->userdata('username')  ?></h1>
    <a href="<?= base_url('logout') ?>">Logout</a>
</body>
</html>