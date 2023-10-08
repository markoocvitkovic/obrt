<?php 
include_once("baza.php");
session_start(); // Start session to store user data

$error = "";

if (isset($_POST['submit'])) {
    // Retrieve input values from form
    $korime = isset($_POST["korime"]) ? $_POST["korime"] : "";
    $lozinka = isset($_POST["lozinka"]) ? $_POST["lozinka"] : "";

    // Connect to database
    $db = spojiSeNaBazu();

    // Prepare SQL statement
    $stmt = $db->prepare("SELECT * FROM admin WHERE korime = ? AND lozinka = ?");
    $stmt->bind_param("ss", $korime, $lozinka);
    $stmt->execute();

    // Check if user exists in database
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Store user data in session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_korime'] = $row['korime'];
        $_SESSION['user_ime'] = $row['ime'];
        $_SESSION['user_prezime'] = $row['prezime'];

        // Redirect to homepage or other authorized page
        header("Location: main.php");
        exit();
    } else {
        // Display error message if user is not found
      $error = "Pogrešno korisničko ime i/ili lozinka! Molimo pokušajte ponovno!";
    }
}
?>
<!DOCTYPE html>
    <html lang="HR">
        <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Login</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
           <script src="script.js"></script>
        <head>
        <body>

<section class="contact" id="posaljiupit">
    <div class="contact-wrapper">
        <div class="contact-left"></div>
        <div class="contact-right">
            <h1 style="font-size:3rem;" class="contact-heading">Prijava u sustav</h1>
            <h3 style="text-align:center; color:red; font-size:2rem; font-family:'Baloo Da 2', serif;" ><?php echo $error; ?></h3>
            <form action="login.php" method="POST" onsubmit="window.location.reload()">
                <div style="margin-top:50px;" class="input-group">
                    <input type="text" class="field" id="korime" name="korime" autocomplete="off">
                    <label class="input-label" id="korimelabel">Korisničko ime</label>
                </div>
                <div class="input-group">
                    <input type="password" class="field" id="lozinka" name="lozinka" autocomplete="off">
                    <label class="input-label" id="lozinkalabel">Lozinka</label>
                </div>
                <input type="submit" class="submit-btn" value="Potvrdi" name="submit">
            </form>
            <input style="margin-left:4.5rem;" type="submit" class="submit-btn" value="Natrag" name="natrag" onclick="back()">
        </div> 
   
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
            <script>
            function back() {
                window.location.href = 'index.php';
            }
            </script>
            <script src="login.js"></script>         
           
        </body>
    </html>
