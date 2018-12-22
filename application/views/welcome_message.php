<a href="<?= base_url('daftar') ?>">Daftar</a><br>

<?php if($this->session->flashdata('pesan') !== null): echo $this->session->flashdata('pesan'); endif; ?>

<form action="<?= base_url('login') ?>" method='POST'>

	<p>Username</p>
	<input type="text" name='username' placeholder='Username'> <br>
	<p>Password</p>
	<input type="password" name='password' placeholder='Password'> <br>
	<button>Login</button>

</form>