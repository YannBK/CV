<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Yann Bettker</title>
</head>

<body>

    <nav>
        <div class="profile">
            <img src="./Fichiers/MyFace_Curieux.png" alt="ma photo">
            <h1>Yann Bettker</h1>
        </div>
        <ul>
            <li><a href="#realisation">Réalisations</a><span></span></li>
            <li><a href="https://github.com/YannBK" target="_blank">GitHub</a><span></span></li>
            <li><a href="https://www.linkedin.com/in/YannBK" target="_blank">Linkedin</a><span></span></li>
            <li><a href="#contact">Contact</a><span></span></li>
        </ul>
    </nav>

    <section class="page">
        <section id="profil" class="box-div">
            <h2 id="titre">Développeur web en recherche de stage</h2>
            <article>
                <p>Je suis en reconversion professionnelle dans le développement web/mobile via une formation
                    qualifiante de
                    niveau Bac+2. Suivie en formation à distance, le télétravail ne m'effraie pas. <br>Cette formation me permet d'acquérir des fondations solides en développement, en
                    conception et en travail collaboratif. <br>Curieux et avide d'apprendre, j'ai également développé des compétences en autodidacte
                    que
                    je
                    continue d'approfondir.<br>Je m'intéresse aussi à de nombreux sujets, de la biologie à la musique,
                    et suis ouvert à tout nouveau domaine.
                </p>
            </article>
        </section>

        <section id="competence" class="box-div">
            <h2>Mes compétences</h2>
            <article>
                <ul>
                    <li>
                        <img class="ic-comp" src="./Fichiers/html.png" alt="icone html">
                        HTML
                    </li>
                    <li>
                        <img src="./Fichiers/css.png" alt="icone css" class="ic-comp">
                        CSS
                    </li>
                    <li>
                        <img class="ic-comp" src="./Fichiers/javascript.png" alt="icone javascript">
                        Javascript
                    </li>
                    <li>
                        <img class="ic-comp" src="./Fichiers/php.png" alt="icone php">
                        PHP
                    </li>
                </ul>
                <ul>
                    <li>
                        <img class="ic-comp" src="./Fichiers/mysql.png" alt="icone mysql">
                        MySQL
                    </li>
                    <li>
                        <img class="ic-comp" src="./Fichiers/github.png" alt="icone github">
                        Github
                    </li>
                    <li>
                        <img class="ic-comp" src="./Fichiers/git.png" alt="icone git">
                        Git
                    </li>
                    <li>
                        <img class="ic-comp" src="./Fichiers/wordpress.webp" alt="icone wordpress">
                        Wordpress
                    </li>
                </ul>
            </article>
            <p>+ Conception UML, Merise(MCD, MLD)</p>
        </section>

        <section id="parcoursQ" class="box-div">
            <h2>
                PARCOURS QUALIFIANT
            </h2>
            <article>
                <h4>RNCP Développeur web et web mobile</h4>
                <h5>ADRAR TOULOUSE - En cours | Septembre 2021 - Juin 2022</h5>
                <p>Formation à distance de 9 mois dont 2 mois de stage, et basée sur la  réalisation de projets
                </p>
            </article>
        </section>

        <section id="parcoursA" class="box-div">
            <h2>
                PARCOURS AUTODIDACTE
            </h2>
            <h5>Mai 2021 - août 2021 -> Apprentissage autodidacte en suivant assidûment les modules suivants :</h5>
            <article>
                <div class="sites">
                    <div>
                        <a href="https://www.freecodecamp.org" target="_blank"><img class="ic-auto" src="./Fichiers/fcc.svg"></a>

                    </div>
                    <ul>
                        <li>Responsive Web Design - 100%</li>
                        <li>JavaScript Algorithms and Data Strctures - 75%</li>
                    </ul>
                </div>
                <div class="sites">
                    <div>
                        <ul>
                            <li>Foundations - 100%</li>
                            <li>Full Stack JavaScript - 20%</li>
                        </ul>
                    </div>
                    <a href="https://www.theodinproject.com" target="_blank"><img class="ic-auto" src="./Fichiers/theodinproject.png"></a>
                </div>
                <div class="sites">
                    <div>
                        <a href="https://www.codecademy.com/" target="_blank"><img class="ic-auto" src="./Fichiers/Codecademy.svg.png"></a>
                    </div>
                    <ul>
                        <li>Learn JavaScript - 100%</li>
                    </ul>
                </div>
            </article>
        </section>

        <section id="realisation" class="box-div">
            <h2>
                QUELQUES PROJETS
            </h2>
            <article>
                <div>
                    <h5>Site vitrine de location saisonnière</h5>
                    <a href="https://studiosete.000webhostapp.com/" target="_blank">
                        <img src="./Fichiers/sete1.png" alt="miniature du site">
                    </a>
                    <p>HTML / CSS / Javascript</p>
                </div>
                <div>
                    <h5>Projets pédagogiques sur Github</h5>
                    <a href="https://github.com/YannBK" target="_blank">
                        <img src="./Fichiers/Projets_github.png" alt="miniature du site">
                    </a>
                    <p>HTML / CSS / Javascript / bientôt PHP et MySQL</p>
                </div>
            </article>
        </section>

        <section id="contact" class="box-div">
            <h2>
                CONTACT
            </h2>
            <article>
                <form action="index.php#contact" method="post">
                    <label>Votre email</label>
                    <input type="email" name="email" class="contact" required>
                    <label>Message</label>
                    <textarea name="message" class="contact" rows="15" required></textarea>
                    <input type="submit">
                </form>
                <div>
                    <?php
                        if (isset($_POST['message'])) {
                            $verifMail = strpos($_POST['email'], '@');
                            if ($verifMail === false)
                                echo '<p>Votre email doit être valide.</p>';
                            else {
                                $envoi = mail('yann.bettker@gmail.com', 'Envoi depuis CV Github', $_POST['message'], 'From: '.$_POST['email']);
                                if($envoi)
                                    echo '<p>Votre message a été envoyé. Merci d\'avoir pris contact.</p>';
                                else
                                    echo '<p>Une erreur s\'est produite.</p>';
                            }
                        }
                    ?>
                </div>
            </article>
        </section>

    </section>

<script type="text/javascript" src="./script.js"></script>
</body>

</html>