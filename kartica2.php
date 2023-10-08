<!DOCTYPE html>
    <html lang="HR">
        <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Galerija</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <head>
        <body>
            <div class="spinner-container">
                <div class="circles">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="container" id="pocetna">
                <header class="header">
                    <div class="img-wrapper">
                        <img src="images/kartica2.jpg"/>
                    </div>
                    <div class="banner">
                        <h1>Hotel Savus</h1>
                        <p>Naš obrt u Hotelu Savus obavlja obnovu, bojanje zidova, primjenjuje dekorativne tehnike, redovito održava površine i prilagođava dizajn. Ovi radovi poboljšavaju izgled i atmosferu hotela, čineći ga atraktivnijim za goste.</p>
                        <button onClick="window.location.href='index.php';">Natrag</button>
                    </div>
                </header>
                <section class="sidebar">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="#pocetna" class="menu-link"  data-content="Početna" id="home">Početna</a>
                        </li>
                        <li class="menu-item">
                            <a href="#onama" class="menu-link" data-content="O nama" id="about">O nama</a>
                        </li>
                        <li class="menu-item">
                            <a href="#galerija" class="menu-link" data-content="Galerija" id="galery">Galerija</a>
                        </li>
                        <li class="menu-item">
                            <a href="#posaljiupit" class="menu-link" data-content="Pošalji upit" id="upit">Pošalji upit</a>
                        </li>
                        <li class="menu-item">
                            <a href="#podacikontakt" class="menu-link" data-content="Kontakt" id="kontakt">Kontakt</a>
                        </li>
                        <li class="menu-item">
                            <a href="#adresa" class="menu-link" data-content="Adresa" id="karta">Adresa</a>
                        </li>
                    </ul>
                    <div class="social-media">
                        <a href="https://hr-hr.facebook.com/" target="blank"> <i class=" fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="blank"> <i class=" fab fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="blank"> <i class=" fab fa-twitter"></i></a>
                    </div>
                </section>
                <footer class="footer">
                    <div class="footer-content">
                        <p class="copyright">
                            Copyright &copy; 2023, Soboslikarsko-ličilački obrt Elegance - Sva prava pridržana
                        </p>
                        <div class="social-list">
                            <a href="https://hr-hr.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/" target="blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
            </footer>        
            <a href="#" class="scroll-btn">
                <i class="fas fa-arrow-up"></i>
            </a>
            </div>
            <script src="script.js"></script>
            
        </body>
    </html>