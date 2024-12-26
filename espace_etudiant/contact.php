<style>
.form{
    box-sizing: border-box;
    border: 3px dotted white;
    width: 650px;
    padding: 30px;
    margin-bottom: 30px;
}
.bulle{
    position: relative;
    display: flex;
}
.bulle span{
    position: relative;
    width: 30px;
    height: 30px;
    background-color: #4fc3dc;
    margin: 0 4px;
    border-radius: 50%;
    box-shadow: 0 0 0 10px #4fc3dc44,
    0 0 50px #4fc3dc,
    0 0 100px #4fc3dc;
    animation: animate 15s linear infinite;
    animation-duration: calc(200s / var(--i));
}
.bulle span:nth-child(even){
    background-color: #ff2d75 ;
    box-shadow: 0 0 0 10px #ff2d7544,
    0 0 50px #ff2d75,
    0 0 100px #ff2d75;
}
@keyframes animate {
    0%{
        transform: translateY(100vh) scale(0);
    }
    100%{
        transform: translateY(-100vh) scale(1);
    }
}
.cont{
    display: flex;
    flex-direction: row;
    width: 300px;
    margin: auto;
    justify-content: space-around;
    padding-bottom: 10px;
}
.boule{
    overflow: hidden;
    background-color: #0c192c;
    min-height: 100vh;
    width: 100%;
    position: relative;
}
.good{
    /* background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.4)), url('image/mot.jpg') center center fixed no-repeat   ; */
    /* background-size: cover; */
    background-color: #0c192c;
    height: 800px;
    padding-top: 140px;
    color: white;
    overflow: hidden;
}
</style>
<section class="boule">
<section class="good">
        <div class="bulle">
            <span style="--i:11"></span> 
            <span style="--i:12"></span> 
            <span style="--i:26"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:28"></span> 
            <span style="--i:20"></span> 
            <span style="--i:26"></span> 
            <span style="--i:24"></span> 
            <span style="--i:29"></span> 
            <span style="--i:11"></span> 
            <span style="--i:12"></span> 
            <span style="--i:26"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:28"></span> 
            <span style="--i:20"></span> 
            <span style="--i:26"></span> 
            <span style="--i:24"></span> 
            <span style="--i:29"></span> 
            <span style="--i:11"></span> 
            <span style="--i:12"></span> 
            <span style="--i:26"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:28"></span> 
            <span style="--i:20"></span> 
            <span style="--i:26"></span> 
            <span style="--i:24"></span> 
            <span style="--i:29"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:29"></span> 
            <span style="--i:11"></span> 
            <span style="--i:12"></span> 
            <span style="--i:26"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:28"></span> 
            <span style="--i:20"></span> 
            <span style="--i:26"></span> 
            <span style="--i:24"></span> 
            <span style="--i:29"></span> 
            <span style="--i:11"></span> 
            <span style="--i:12"></span> 
            <span style="--i:26"></span> 
            <span style="--i:27"></span> 
            <span style="--i:28"></span> 
            <span style="--i:28"></span> 
            <span style="--i:20"></span> 
            <span style="--i:26"></span> 
            <span style="--i:24"></span> 
            <span style="--i:29"></span> 
        </div>
    <div class="container form"> 
        <div class="cont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0026f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <h4>Formulaire De Contact</h4>
        </div>
        <form class="row g-3 needs-validation" action="index.php?pg=contact" method="post">

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" name="prenom" id="validationCustom01" placeholder="Mark" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" name="nom" id="validationCustom02" placeholder="Otto" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-5">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2929d5" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></span>
                <input type="email"  class="form-control" name="mail" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="jonh@example.com" required>
                <div class="invalid-feedback">
                    Please choose a valid email
                </div>
                </div>
            </div>
            <div class="col-md-7">
                <label for="validationCustomUsername" class="form-label">Objet</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2929d5" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></span>
                <input type="text"  class="form-control" name="objet" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="En quoi pouvons-nous vous aidez ?" required>
                <div class="invalid-feedback">
                    Please choose an objet
                </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2929d5" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>  Message</label>
                <textarea class="form-control" id="validationTextarea" name="message" rows="5" placeholder="Votre texte ..." required></textarea>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>
            <div class="col-12 text-center">
                <input type="hidden" value="nouss396@gmail.com" name="nous">
                <button class="btn btn-success" type="submit" name="submit" value="submit">Envoyer  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><path d="M5 12h13M12 5l7 7-7 7"/></svg></button>
            </div>
        </form>
    </div>
</section>
</section>
<?php
  
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

if (isset($_REQUEST['submit'])) {


    $mail =$_REQUEST['mail'];

    $to = $_REQUEST['nous']; // Destinataire
    $subject = $_REQUEST["objet"]; // Sujet du mail
    $message = $_REQUEST["message"]; // Corps du mail
    $headers = "From:$mail"; // En-têtes du mail
    if (mail($to, $subject, $message, $headers)) {
        echo "<script> alert('Mail envoyé avec succès.')</script>";
    } else {
        echo "Échec de l'envoi du mail.";
    }

    
   // Load Composer's autoloader
    // require 'phpmailer/vendor/autoload.php';
    // require 'phpmailer/src/PHPMailer.php';
    // require 'phpmailer/src/Exception.php';
    // require 'phpmailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    // $mail = new PHPMailer(true);

    // try {
       //Server settings
    //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    //     $mail->isSMTP();                                            //Send using SMTP
    //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //     $mail->Username   = $_REQUEST['nous'];                     //SMTP username
    //     $mail->Password   = 'jxnwfqspiirxfewi';                               //SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
    //     $mail->setFrom($_REQUEST['mail'], $nom = $_REQUEST['nom']. ''. $_REQUEST['prenom']);
    //     $mail->addAddress($_REQUEST['nous'], 'eliteSchool');     //Add a recipient
    //     $mail->addReplyTo($_REQUEST['mail'], $nom = $_REQUEST['nom']. ''. $_REQUEST['prenom']);

    //     //Content
    //     $mail->isHTML(true);                    //Set email format to HTML
    //     $mail->Subject = $_REQUEST["objet"];
    //     $mail->Body    = $_REQUEST["message"];

    //     $mail->send();
    //     echo '<script>alert("Votre message a été envoyé avec succes");
    //           document.location.href= "index.php?pg=contact"</script>';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
}