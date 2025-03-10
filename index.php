<?php
// index.php

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // Menyimpan data ke database
  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Pesan berhasil dikirim!'); window.location='index.html';</script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  </head>

  <body>
    <header class="header">
      <a href="#home" class="logo">Pandu <span>Cuy</span></a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#portofolio">Portofolio</a>
        <a href="#skillS">Skills</a>
        <a href="#education">Education</a>
        <a href="#contact">Contact</a>
      </nav>

      <button class="btn"><a href="#contact"> Contact Me</a></button>
    </header>
    <!-- Home content -->
    <section class="home" id="home">
      <div class="home-content">
        <h4>Halo, Saya</h3>
        <h2>Lazuardi Pandu </h1>
          <br>
        <p>Nama Lengkap Saya Lazuardi Pandu Dwi Suratno Saya Lahir Pada 14 Agustus 2009 Saya adalah Siswa SMK Telkom Purwokerto, Dengan Jurusan PPLG</p>
        <h4>Dari Kelas X PPLG 2</h3>

        <div class="social-icons">
          <a href="https://github.com/Panduweb123">
            <i class="bx bxl-github"></i>
          </a>

          <a href="">
            <i class="bx bxl-linkedin-square"></i>
          </a>

          <a href="https://www.instagram.com/panducuy_?igsh=MTlwNWc0YXJtNjNrMQ==">
            <i class="bx bxl-instagram-alt"></i>
          </a>

          <a href="#">
            <i class="bx bxl-youtube"></i>
          </a>
        </div>

      </div>

      <div class="home-img">
        <img src="" alt="" />
      </div>
    </section>

     <section class="about" id="about">

      <div class="about-content">
        <h2>About Me</h2>
        <br>
        <p>
          Nama Lengkap Saya Lazuardi Pandu Dwi Suratno Saya Lahir Pada 14 Agustus 2009 
          saya anak ke-3 dari Tiga bersaudara 
          saya Memiliki nama “Pandu” karena saya lahir pada tanggal 14 Agustus yang bertepatan pada hari pramuka. 
          sekarang tinggal di Purwokerto tepatnya di Tambak sogra dan saya sekarang bersekolah di SMK Telkom Purwokerto dengan Jurusan PPLG
        </p>
      </div>

      <div class="home-img">
        <img src="img/img 2.jpg" alt="" />
      </div>
     </section>

     <section class="portofolio" id="portofolio">

      <h2 class="heading">Portofolio</h2>

      <div class="porto-box">

        <div class="porto-card">
          <img src="img/img 3.png" alt="">

          <h3>Game</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
          <div class="btn">Review Project</div>
        </div>

        <div class="porto-card">
          <img src="img/img 4.jpg" alt="">

          <h3>Website</h3>

          <p>Saya membuat Website e-commerce pada SMK 
            untuk penilaian Mapel DPK
          </p>
          <div class="btn">Review Project</div>
        </div>

        <div class="porto-card">
          <img src="img/img 5.jpg" alt="">

          <h3>Logo</h3>

          <p>Saya membuat Logo Website e-commerce pada SMK 
            untuk penilaian Mapel DPK.
          </p>
          <div class="btn">Review Project</div>
        </div>

        
        <div class="porto-card">
          <img src="img/img 3.png" alt="">

          <h3>Visual Studio</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
          <div class="btn"><a href="">Review Project</a></div>
        </div>

        
        <div class="porto-card">
          <img src="img/img 3.png" alt="">

          <h3>Visual Studio</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
          <div class="btn">Review Project</div>
        </div>

        
        <div class="porto-card">
          <img src="img/img 3.png" alt="">

          <h3>Visual Studio</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
          <div class="btn">Review Project</div>
        </div>



      </div>


    
     </section>

     <section class="skillS" id="skillS">

      <h2 class="heading">Skills</h2>

      <div class="porto-box">

        <div class="porto-card-s">
          <i class='bx bxl-figma'></i>
          <h3>UI/UX</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
        </div>

        <div class="porto-card-s">
          <i class='bx bx-code-curly' ></i>
          <h3>Back End</h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
        </div>

        <div class="porto-card-s">
          <i class='bx bx-code'></i>
          <h3>Front End </h3>

          <p>Saya membuat game pertamakali pada SMP Kelas 9
            untuk Ujian Akhir Sekolah Pada Mapale Jurnior Progaming.
          </p>
        </div>


      </div>

     </section>


     <section class="education" id="education">
			
			<h2 class="heading">Education</h2>

			<div class="contents">
				
				<div class="box">
					<h4>2018 - 2022</h4>
					<h3>Tk Alkautsar</h3>
				</div>

				<div class="box">
					<h4>2018 - 2022</h4>
					<h3>SD NEGERI 1 PURWOJATI</h3>
				</div>

				<div class="box">
					<h4>2018 - 2022</h4>
					<h3>SD NEGERI 1 PURWOKERTO LOR</h3>
				</div>

        <div class="box">
					<h4>2018 - 2022</h4>
					<h3>SMP TELKOM PURWOKERTO</h3>
				</div>

        <div class="box">
					<h4>2018 - 2022</h4>
					<h3>SMK TELKOM PURWOKERTO</h3>
				</div>

			</div>
		</section>

    <section class="contact" id="contact">

      <h2 class="heading">Contact Me</h2>

      <div class="container">
        <h2>Massage Us</h2>
        <form action="index.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Massage:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send</button>
        </form>
    </div>

    </section>

    <footer>
      <p>&copy; 2025 LAZUARDI PANDU DWI SURATNO</p>
    </footer>
    
  </body>
</html>

