<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/css/style.css">
    <link rel="stylesheet" href="includes/css/bootstrap.min.css">
    <title>DING</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#name").val();
                var company = $("#company").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                var submit = $("#submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    company: company,
                    phone: phone,
                    email: email,
                    subject: subject,
                    message: message,
                    submit: submit

                });
            });
        });    
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top  ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="includes/assets/linkedin_icon.png" alt="linkedin_icon"> /company/group-ding </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="includes/assets/vimeo_icon.png" alt="vimeo_icon">  /groupding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="includes/assets/twitter_icon.png" alt="twitter_icon">  /@GroupDing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="includes/assets/instagram_icon.png" alt="instagram_icon">  /groupding</a>
                    </li>
                </ul>
                <div class="col-lg-1">
                </div>
                <div class="form-inline my-2 my-lg-0">
                    <a href=#contact>CONTACT</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<section id="about">
    <div class="container ">
        <div class="row">
            <img  class="logo_about img-fluid rounded mx-auto d-block" src="includes/assets/logo_ding.svg" alt="logo_ding">
        </div>
    </div>
    
    <p class="text-about text-center"> Influence Marketing   <span>I</span>  Esports   <span>I</span>   Studio   <span>I</span>   Brand Content <br>
       Production Audiovisuelle  <span>I</span>  Conception d'événement </p>

        <img class="scroll_about img-fluid rounded mx-auto d-block" width="50px" src="includes/assets/scroll_icon.svg" alt="scroll_icon">
  
    <br>  <br>  <br>  


</section>

<section id="intro">

<div class="container intro ">
        <div class="row">
            <img  class="intro-icon img-fluid rounded mx-auto d-block" src="includes/assets/intro_icon.svg" alt="logo_ding">
        </div>
    </div>
<div class="text-intro">
    <p class="text-intro text-center"> Nous utilisons <span>l'influence marketing, la vidéo</span> et <span>l'Esport</span> en adéquation<br> avec les millenials et le nouveau public web afin de garantir <br>un contenu de confiance authentique au service des marques. </p>
</div>
</section>

<section id="metier">

    <div class="container ">
        <div class="row ">
            <div class="col-lg-2"></div>
            <div class="col-lg-3 metier">
            <img class="logo-metier img-fluid rounded mx-auto d-block" src="includes/assets/logo_ding_metier.svg" alt="logo_ding_metier" srcset="">
            <p class="text-metier"> Ding Contents est notre pôle dédié au conseil et à la création de contenus pour les marques. Nous avons un vision globale du marché et nous nous approprions les nouveaux usages en terme de productiion audiovisuelle, esport, influence marketing et conception d'événement. Nous disposons d'un studio haut-de-gamme pour assister nos créations.</p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3 metier">
            <img class="img-fluid rounded mx-auto d-block" src="includes/assets/logo_bastille_metier.svg" alt="logo_bastille_metier" srcset="">
            <p class="text-metier">Bastille Legacy est notre écosystème compétitif et performant composé de Bastille Legacy, un club esport professionnel, d'un centre d'entrainement et d'un centre de formation, en cours d'ouverture, à destination des plus jeunes. Nous nous focalisons sur la performance, l'encadrement et le bien être de nos joueurs.</p>
            </div>
        </div>
    </div>

</section>

<section id="contact">

    <div class="col-lg-12 text-center">
        <img class="contact-title img-fluid rounded mx-auto d-block" src="includes/assets/contact_title.svg" alt="contact_title" >
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 contact">

          
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.692610310732!2d3.129841980239056!3d50.66996759014027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c329738413d9ab%3A0xb2ebc59bad14a05a!2sEtude+Florence+RICHARD+-+Notaire!5e0!3m2!1sfr!2sfr!4v1543417129345" frameborder="0" style="border:0" allowfullscreen></iframe>
        



            </div>
            <div class="col-lg-4 contact">
                <div class="log-form text-group">
                    <form action="mail.php" method="post" id="contactform">
                        <input type="text" title="name" name="name" id="name" placeholder="Nom, Prénom" />
                        <input type="text" title="company" name="company" id="company" placeholder="Entreprise" />
                        <input type="phone" title="phone" name="phone" id="phone" placeholder="Téléphone" />
                        <input type="email" title="email" name="email" id="email" placeholder="Email" />
                        <input type="text" title="subject" name="subject" id="subject" placeholder="Sujet" />
                        <textarea class="form-control" name="message" id="message" placeholder="Message" rows="1"></textarea><br> 
                        <div class="bouton">                               
                            <button type="submit" class="btn" name="submit" id="submit">Envoyer</button>
                        </div> <br>
                        <p class="form-message" id="form-message"></p>                  
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
<script src="includes/js/bootstrap.min.js"></script>
<script src="includes/js/script.js"></script>
</html>