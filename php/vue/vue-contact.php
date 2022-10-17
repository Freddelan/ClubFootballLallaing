<html>
    <body>
        <h2>Formulaire de contact</h2>

        <form action="" method="post" id="form1">

            <div id="renseign">
                <div>
                     <label for="name"></label>
                    <input type="text" id="name" name="user_name" placeholder="Votre Nom">
                    </div>
                <div>
                 <label for="mail"></label>
                 <input type="email" id="mail" name="user_mail" placeholder="Votre e-mail">
                </div>
                <div>
                    <label for="objet"></label>
                    <input type="text" id="objet" placeholder="Objet" name="objet">
                </div>
                <div>
                    <label for="msg"></label>
                    <textarea id="msg" name="user_message" placeholder="Ecrivez içi votre message"></textarea>
                </div>

            </div>
            <div>
                <input type="submit" id="bouton" placeholder="Envoyez" name="submit">
             </div>
        </form>
    </body>

</html>