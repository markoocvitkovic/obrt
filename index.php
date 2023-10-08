<?php 
include_once("baza.php");


$ime = isset($_POST["ime"]) ? $_POST["ime"] : "";
$prezime = isset($_POST["prezime"]) ? $_POST["prezime"] : 0;
$mail = isset($_POST["mail"]) ? $_POST["mail"] : 0;
$poruka = isset($_POST["poruka"]) ? $_POST["poruka"] : '';
$db = spojiSeNaBazu();

if(isset($_POST['submit'])){
    $db = spojiSeNaBazu();

    $stmt = $db->prepare("INSERT INTO `registracija` (`ime`, `prezime`, `email`, `komentar`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $ime, $prezime, $mail, $poruka);
    $stmt->execute();

    echo '<script type="text/javascript">window.location.href = "zaprimljeno.php";</script>';
}
?>
<!DOCTYPE html>
    <html lang="HR">
        <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Početna</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        </head>
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
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <span>Close</span>
                </div>
                <header class="header">
                    <div class="img-wrapper">
                        <img src="images\pozadina2.jpg"/>
                    </div>
                    <div class="banner">
                        <h1>SOBOSLIKARSKI OBRT</h1>                       
                        <button onClick="window.location.href='#onama';" id="vise">Saznaj više</button>
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
                        <li class="menu-item">
                            <a href="ponuda.html" class="menu-link" data-content="Ponuda" id="ponuda">Ponuda</a>
                        </li>
                        <li class="menu-item">
                            <a href="login.php" class="menu-link" data-content="Admin" id="karta">Admin</a>
                        </li>
                        <li class="menu-item">
                             <a href="logout.php" class="menu-link" data-content="Odjava" id="logout">Odjava</a>
                        </li>
                    </ul>
                    <div class="social-media">
                        <a href="https://hr-hr.facebook.com/" target="blank"> <i class=" fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="blank"> <i class=" fab fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="blank"> <i class=" fab fa-twitter"></i></a>
                    </div>
                </section>

                <section class="about-us"id="onama">
                    <div class="section-header">
                        <h1 class="section-heading" >O nama</h1>
                        <div class="underline"></div>
                    </div>
                    <div class="services">
                        <div class="service">
                        <div class="service-header">
                            <i class="fas fa-pen-nib"></i>
                            <h3>Unutarnji radovi</h3>
                        </div>
                        <p class="service-text">
                        Nasa strucnost u unutarnjim radovima soboslikarstva i licilastva donosi svjezinu i eleganciju u svaki prostor.
                         </p>
                    </div>
                    <div class="service">
                        <div class="service-header">
                            <i class="fas fa-paint-roller"></i>
                            <h3>Vanjski radovi</h3>
                        </div> 
                         <p class="service-text">
                         Nasa izvrsna ekspertiza u vanjskim radovima soboslikarstva i licilastva osigurava dugotrajnu zastitu i estetsku ljepotu Vaseg doma.
                        </p>
                    </div>
                    <div class="service">
                        <div class="service-header">
                            <i class="fas fa-pencil-alt"></i>
                            <h3>Dizajn</h3>
                        </div>
                         <p class="service-text">
                         Strast prema dizajnu omogucava nam stvaranje personaliziranih i inspirativnih interijera za nase klijente.
                        </p>
                    </div>
                    <div class="service">
                        <div class="service-header">
                            <i class="fas fa-paint-brush"></i>
                            <h3>Dekoracije</h3>

                        </div>  
                        <p class="service-text">
                        S posebnom paznjom i kreativnoscu pristupamo dekoraciji, stvarajuci jedinstvene detalje koji obogacuju svaku povrsinu i prostor.
                        </p>
                    </div>
                    <div class="service">
                        <div class="service-header">
                            <i class="fas fa-ruler-combined"></i>
                            <h3>Planiranje</h3>
                           
                        </div> 
                        <p class="service-text">
                        Nasa temeljita planiranja i organizacija osiguravaju besprijekoran tijek projekta, ispunjavajuci sve zahtjeve i ocekivanja nasih klijenata.
                        </p>
                    </div>
                    <div class="service">
                        <div class="service-header">
                            <i class="far fa-building"></i>
                            <h3>Izvođenje</h3>
                            
                        </div>
                        <p class="service-text">
                        Izvodjenje radova odvija se s preciznoscu, strucnoscu i paznjom prema svakom detalju, donoseci vrhunsku kvalitetu u svaki projekt.
                        </p>
                    </div>
                    <div class="about-us-img-wrapper">
                        <img src="images/kuca.png" />
                    </div>
                    </div>  
                </section>

                <section class="team"id="galerija">
                <div class="section-header">
                        <h1 class="section-heading" >Galerija</h1>
                        <div class="underline"></div>
                    </div>
                    <div class="cards-wrapper">
                        <div class="card" data-tilt>
                            <div class="card-img-wrapper">
                                <img src="images/foto1.jpg" alt="CEO">
                            </div>  
                            <div class="card-info">
                                <h2>Frizerski salon "Vesna"</h2>
                                <h3>16.02.2023.</h3>
                                <p> Uspješno smo transformirali izgled salona "Vesna", pružajući klijentima poboljšano iskustvo. Ključni radovi obuhvaćali su estetsku obnovu zidova, primjenu dekorativnih tehnika te redovito održavanje i osvježavanje boje i teksture zidova. Ovi stručno izvedeni radovi stvorili su ugodan i sofisticiran ambijent u salonu. </p>
                                <button onClick="window.location.href='kartica1.php';">Saznaj više</button>
                            </div>
                        </div>
                        <div class="card" data-tilt>
                            <div class="card-img-wrapper">
                                <img src="images/foto2.jpg" alt="CEO">
                            </div>  
                            <div class="card-info">
                                <h2>Hotel Savus</h2>
                                <h3>6.06.2023.</h3>
                                <p> Naš obrt u Hotelu Savus obavlja obnovu, bojanje zidova, primjenjuje dekorativne tehnike, redovito održava površine i prilagođava dizajn. Ovi radovi poboljšavaju izgled i atmosferu hotela, čineći ga atraktivnijim za goste. </p>
                                <button onClick="window.location.href='kartica2.php';">Saznaj više</button>
                            </div>
                        </div>
                        <div class="card" data-tilt>
                            <div class="card-img-wrapper">
                                <img src="images/foto3.jpg" alt="CEO">
                            </div>  
                            <div class="card-info">
                                <h2>Hotel Art</h2>
                                <h3>16.02.2023.</h3>
                                <p> Jedan od prvih radova našeg obrta bio je u Hotel Art i obuhvatio je bojanje, održavanje zidova i prilagodbu dizajna. Ovi ključni početni radovi igraju značajnu ulogu u poboljšanju izgleda hostela i stvaranju ugodnog ambijenta za goste. </p>
                                <button onClick="window.location.href='kartica3.php';">Saznaj više</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact"id="posaljiupit">
                    <div class="contact-wrapper">
                        <div class="contact-left"></div>
                        <div class="contact-right">
                            <h1 class="contact-heading" >Upit</h1>
                            <form action="index.php" method="POST" id="query" onsubmit="window.location.reload()">
                                <div class="input-group">
                                    <input type="text" class="field" id="name" name="ime" autocomplete="off">
                                    <label class="input-label">Ime</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="field" id="surname" name="prezime" autocomplete="off">
                                    <label class="input-label" id="surnamelabel">Prezime</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="field" id="email" name="mail" autocomplete="off">
                                    <label class="input-label" id="emaillabel">E-mail</label>
                                </div>
                                <div class="input-group">
                                    <textarea id="comment" cols="30" rows="10" class="field" name="poruka"></textarea>
                                    <label class="message" id="commentlabel">Poruka</label>
                                </div>
                                <input type="submit" class="submit-btn" value="Potvrdi" name="submit">
                            </form>
                        </div>
                    </div>
                </section>
                
                <section class="contact"id="podacikontakt">
                    <div class="contact-wrapper">
                        <div class="contact-left-us"></div>
                        <div class="contact-right"> 
                            <h1 class="contact-heading" >Kontakt</h1>
                            <div class="contact-us">
                                    <div class="input-group">
                                        <p class="contact-heading-us"><i class="fa fa-phone"></i> Petar: 095 821-7255</p>
                                    </div>
                                    <div class="input-group">
                                        <p class="contact-heading-us"><i class="fa fa-phone"></i> Marko: 095-375-1441</p>
                                    </div>
                                    <div class="input-group">
                                        <p class="contact-heading-us"><i class="fa fa-envelope"></i>  <a href="mailto:obrtmarko@gmail.com">obrtmarko@gmail.com</a>  </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="team"id="adresa">
                <div class="section-header">
                        <h1 class="section-heading" >Adresa</h1>
                        <div class="underline"></div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.4690244922144!2d18.035131515768704!3d45.54088963634354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475d6d5770bffbdf%3A0x77fc3aa211ec4078!2sMatije%20Gupca%2044%2C%2031511%2C%20%C4%90ur%C4%91enovac!5e0!3m2!1shr!2shr!4v1676482573828!5m2!1shr!2shr" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
                
                <footer class="footer">
                    <div class="footer-content">
                        <p class="copyright">
                            Copyright &copy; 2023, Soboslikarsko obrt - Sva prava pridržana
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