<?php 

include_once("sesija.php");
$veza = spojiSeNaBazu();

// Define the query
$upit = "SELECT ime, prezime, email, komentar FROM registracija";

// Execute the query
$rezultat = izvrsiUpit($veza, $upit);

?>
<!DOCTYPE html>
    <html lang="HR">
        <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Upiti</title>           
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
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <span>Close</span>
                </div>
                <header class="header">
                    <div class="img-wrapper">
                        <img src="images/kontaktpodaci.jpg"/>
                    </div>
                    <div class="banner">
                        <h1>Dobrodošli  <?php echo $_SESSION['user_ime'] . " " . $_SESSION['user_prezime']; ?></h1>
                        <p style="margin-top:30px;">Uspješno ste pristupili administratorskoj stranici!</p>
                    </div>
                </header>
                <section class="sidebar">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="#adresa" class="menu-link"  data-content="Upiti" id="home">Upiti</a>
                        </li>
                        <li class="menu-item">
                            <a href="odjava.php" class="menu-link" data-content="Odjava" id="about">Odjava</a>
                        </li>
                    </ul>
                    <div class="social-media">
                        <a href="https://hr-hr.facebook.com/" target="blank"> <i class=" fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="blank"> <i class=" fab fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="blank"> <i class=" fab fa-twitter"></i></a>
                    </div>
                </section>
                <section class="team"id="adresa">
                <div class="section-header">
                    <h1 class="section-heading">Upiti</h1>
                    <div class="table-container">
                        <table id="tablica">
                            <thead>
                                <tr>
                                    <th>Ime:</th>
                                    <th>Prezime:</th>
                                    <th>E-mail:</th>
                                    <th>Poruka:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch and process each row
                                while ($row = mysqli_fetch_assoc($rezultat)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['ime']; ?></td>
                                        <td><?php echo $row['prezime']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['komentar']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <?php
                    // Free the result set and close the connection
                    mysqli_free_result($rezultat);
                    zatvoriVezuNaBazu($veza);
                    ?>
                    <div class="underline"></div>
                </div>
  
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