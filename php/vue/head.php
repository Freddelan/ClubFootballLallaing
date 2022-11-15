<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/php/style/stylehead.css">
    <link rel="stylesheet" type="text/css" href="/php/style/contact.css">
    <link rel="stylesheet" type="text/css" href="/php/style/index.css">
    <link rel="stylesheet" type="text/css" href="/php/style/article_entier.css"> 
    <link rel="stylesheet" type="text/css" href="/php/style/footer.css">
    <title>D.C.L LALLAING</title>
</head>
<section class="navbar-btn">
                <button class="btn"><a href="/admin/vue/connexion.php">Log in</a></button>
    </section>
<body>
    
    <header>
        
        <div class="logoPrin">
             <img class="imglogo" src="Media/logoDCL.png" alt="logo club de foot Lallaing"></img>
        </div>
        <div class="titre"><h1>Dynamic C. Lallaing</h1></div>
    </header>
        <section class="navbar-container">
            <nav class="main-navbar">
                <div class="dropdown">
                    <button class="dropdown-btn"><a href="/php/index.php">Accueil</a>
                    </button>
                </div>

                <div class="dropdown">
                    <button class="dropdown-btn"><a href="/php/vue/equipes.php">Equipes</a>
                        <div class="content">
                            <a href="#">U6-U7(5-6 ans)</a></li>
                            <a href="#">U8-U9(7-8 ans)</a></li>
                            <a href="#">U10(9 ans)</a></li>
                            <a href="#">U11(10 ans)</a></li>
                            <a href="#">U12-U13(11-12 ans)</a></li>
                            <a href="#">U14-U15(13-14 ans)</a></li>
                            <a href="#">Seniors</a></li>
                        </div>
                    </button>
                </div>

                <div class="dropdown">
                    <button class="dropdown-btn"><a href="/php/vue/photos.php">Photos
                        <!-- <div class="content">
                            <a href="#">U6-U7(5-6 ans)</a></li>
                            <a href="#">U8-U9(7-8 ans)</a></li>
                            <a href="#">U10(9 ans)</a></li>
                            <a href="#">U11(10 ans)</a></li>
                            <a href="#">U12-U13(11-12 ans)</a></li>
                            <a href="#">U14-U15(13-14 ans)</a></li>
                            <a href="#">Seniors</a></li>
                        </div> -->
                    </button>
                </div>

                <div class="dropdown">
                    <button class="dropdown-btn"><a target="_blank" href="https://escaut.fff.fr/recherche-clubs?scl=789">Calendrier
                        <!-- <div class="content">
                            <a href="#">U6-U7(5-6 ans)</a></li>
                            <a href="#">U8-U9(7-8 ans)</a></li>
                            <a href="#">U10(9 ans)</a></li>
                            <a href="#">U11(10 ans)</a></li>
                            <a href="#">U12-U13(11-12 ans)</a></li>
                            <a href="#">U14-U15(13-14 ans)</a></li>
                            <a href="#">Seniors</a></li>
                        </div> -->
                     </button> 
                </div>
                
                <div class="dropdown">
                        <button class="dropdown-btn"><a class="boutique" href="#">Boutique</a>
                        </button>
                </div>
                <div id="contact" class="dropdown"> 
                        <button class="dropdown-btn"><a class="dirigeant" href="#">Staff</a></button>
                </div>
                <div class="dropdown">
                        <button class="dropdown-btn" ><a class="contact" href="/php/controler/controler-contact.php">Contact</a></button>
                        
                       
                        <!-- <button class="dropdown-btn"><a href="/php/controler/controler-contact.php">Etre partenaire de l'equipe</a></button> -->
                </div>
            </nav>
        </section>

        </nav>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--<script src="script.js"></script>-->

    <!-- Fonction pour faire apparaitre la navbarre en noir au scroll -->
    <!--<script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        })
    </script>
    <script src="script.js"></script>-->
