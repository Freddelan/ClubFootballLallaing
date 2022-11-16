<!-- code pour envoyer un mail -->
    <?php 
    if (isset($_POST["submit"])){
        if (isset($_POST["user_name"])&& !empty($_POST["user_name"])&&
        isset($_POST["objet"])&& !empty($_POST["objet"])&& isset($_POST["user_message"])&& !empty($_POST["user_message"])&& 
        isset($_POST["user_mail"]) && !empty($_POST["user_mail"])){

            $nom=$_POST["user_name"];
            $mail=$_POST["user_mail"];
            $objet=$_POST["objet"];
            $msgutilisateur = $_POST["user_message"];
            $message='
                        Nom de l\'expéditeur: '.$nom.'
                        Mail de l\'expéditeur: '.$mail.'
                        '.$msgutilisateur.'
            ';

            echo "<p style='color:green; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message  bien été envoyé, merci.</p>";
            
            $subject = "Test envoi mail";

            $headers = "Content-Type: text/plain; charset=utf-8\r\n";

            $headers .= "From: happyrush@hotmail.com\r\n";

            if(mail("happyrush@hotmail.com", $objet, $message, $headers)){
                
                echo'';

            }else{

                echo 'Erreur envoi !';

            }
        }
        else {echo"<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Il manque quelque chose !</p> ";}
    
    }
    

