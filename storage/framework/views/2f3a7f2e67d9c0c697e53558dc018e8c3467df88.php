<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href=<?php echo e(mix("/css/model.css")); ?>>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="tombol3">
			<i class="fas fa-bars"></i>
		</label>
	<ul><label class="logo">PTW</label></ul>
        <ul class="">
          <li class="">
            <a class="" href="materi.html">List Materi</a>
          </li>
          <li class="">
            <a class="" href="<?php echo e(url('/callme/aboutme')); ?>">Tentang Saya</a>
          </li>
          <li class="">
            <a class="" href="<?php echo e(url('/callme/callme')); ?>">Hubungi Saya</a>
          </li>
        </ul>
    </nav>
    <div class="isi">
    	<div>
        <h1>Contact Me</h1>
        <form>
            <label for="email">Email</label><br />
            <input type="email" name="email" placeholder="Alamat email anda"/>
            <br />
            <label for="message">Pesan</label><br />
            <textarea name="message" placeholder="Tulis pesan anda..." rows="4" cols="80"></textarea>
            <br />
            <br />
            <input type="submit" value="Kirim" />
        </form>
    </div>
    </div>
    <div class="batasbawah">Murfer Clones</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\0139\resources\views/callme.blade.php ENDPATH**/ ?>