<?php
session_start();
include('config.php');
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./listadmin.php");</script>';
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,800;1,300;1,400;1,800&family=Roboto:ital,wght@0,400;0,900;1,900&display=swap" rel="stylesheet">
    <title>Royan Fauzan</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
</head>
<body>
    <nav class="navbar flex tengah-hor tengah-ver" id="navbar">
        <ul class="nav-items flex tengah-hor tengah-ver">
            <li> <a href="index.html">HOME</a> </li>
            <li> <a href="profile.html">Profile</a></li>
            <li><a href="works.php">Works</a></li>
            <li><a href="listtamu.php">Guest Book</a></li>
        </ul>
    </nav>

    
    <div class="blok2" id="luar-tabel">
        <div class="judul">
            <h2 id="jud-tentang">Login</h2>
        </div>
        
        <div class="penengah profile-box tengah-vertical">
            
            <div class="tentang flex tengah-hor">
                
                
                <div class="tulisan penengah">
                    <!-- <h3>this site</h3>
                    <p>is</p> -->
                    <!-- <br> -->
                    
                    <div class="kotak-tulisan">
                    <form method="POST" action="verifikasi-login.php" enctype="multipart/form-data" >
                        <section class="base">
                            <div>
                                <label>Username.</label>
                                <input type="text" name="username" autofocus="" required />
                            </div>
                            <div>
                                <label>Password.</label>
                                <input type="password" name="passw" autofocus="" required />
                            </div>
                            
                            <div>
                                <button class="btn-simpan" type="submit">Login</button>
                            </div>
                            </section>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="blok4">
        <div class="judul">
            <h2>
                KEEP IN TOUCH
            </h2>
        </div>
            <div class="bung-kontak flex">
                <div class="kontak">
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/at.svg" alt="">
                        </div>
                        <p>Ruskipolski77@gmail.com</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/whatsapp.svg" alt="">
                        </div>
                        <p>081234567891</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon  flex tengah-ver tengah-hor">
                            <img src="image/icon/instagram.svg" alt="">
                        </div>
                        <p>@Royan_f7</p>
                    </div>
                    <div class="isi-kontak">
                        <div class="ikon flex tengah-ver tengah-hor">
                            <img src="image/icon/envelope.svg" alt="">
                        </div>
                        <p>Jl.Diponegoro No.99x,Tabanan,Bali,82171</p>
                    </div>
                </div>
                <div class="special-item flex tengah-ver tengah-hor">
                    <img src="./image/icon/logo100.gif" alt="">
                        <script src="./js/kalender.js"></script>   
                </div>
                <div class="map ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6243199111345!2d115.13846011433488!3d-8.535803788858345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a553ccfbf65%3A0xcdda98f877d77ba9!2sJl.%20Tukad%20Yeh%20Nusa%2C%20Banjar%20Anyar%2C%20Kec.%20Kediri%2C%20Kabupaten%20Tabanan%2C%20Bali%2082121!5e0!3m2!1sid!2sid!4v1611989633627!5m2!1sid!2sid" width="300" height="230" margin-top="20" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
            </div>
    </div>
    <div class="copyr">
        <p>&copy; 2020 - Royan Fauzan</p>
    </div>
    <!-- <footer>
        
    </footer> -->

    <script src="./js/main.js"></script>
</body>
</html>

<?php } ?>