<html>
    <body>
        

        <form action="" method="post" id="form1">
            <h2 class="text-center">Formulaire de contact</h2>
            <div  id="renseign" >
                
                <div class="form-group">
                 <label  for="mail"></label>
                 <input class="form-control"  type="email" id="mail" name="user_mail" placeholder="Votre e-mail">
                </div>
                <div class="form-group">
                    <label for="objet"></label>
                    <input class="form-control" type="text" id="objet" placeholder="Objet" name="objet">
                </div>
                <div class="form-group">
                    <label for="msg"></label>
                    <textarea class="form-control" id="msg" name="user_message" placeholder="Ecrivez içi votre message"></textarea>
                </div>

            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" id="bouton" placeholder="Envoyez" name="submit">
             </div>
        </form>
    </body>

</html>