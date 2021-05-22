<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="model.css">
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
      <a class="" href="<?php echo e(url('/aboutme/aboutme')); ?>">Tentang Saya</a>
    </li>
    <li class="">
      <a class="" href="<?php echo e(url('/aboutme/callme')); ?>">Hubungi Saya</a>
    </li>
  </ul>
</nav>
<div class="isi">
 <header style="text-align: center;">
  <img src="Bali10.jpg" width="200" height="200" style="border-radius: 50%;"/>
  <h1>Muchammad Rizki Mustafiyanto</h1>
  <p>(Web Developer)</p><br>
</header>

<hr />

<article style="text-align: center;">
  <br>
  <h2>Overview</h2>
  <p>
    Halo teman teman, saya adalah Mahasiswa Universitas 17 Agustus 1945 Surabaya. Saat ini saya masih berkuliah di UNTAG 17'45 dan sedang belajar menjadi seorang programmer yang hebat.
  </p>
</article>

<div style="max-width: 600px; margin: 3em auto">
  <table border="1" width="100%">
    <thead>
      <tr>
        <th>Skill</th>
        <th>Pengalaman</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <ul>
            <li>HTML (Beginner)</li>
            <li>CSS (Beginner)</li>
            <li>Javascript (Beginner)</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Freelancer di Desa</li>
            <li>Phyton</li>
            <li>C++</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="batasbawah">Murfer Clones</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\0139\resources\views/aboutme.blade.php ENDPATH**/ ?>