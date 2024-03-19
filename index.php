<?php
require_once('assets/lib/projects.php');

$projects = getProjects($pdo);

?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Maxime Lecieux - 26 ans. Développeur web junior je suis à la recherche d'une entreprise afin de pouvoir continuer à enrichir mes connaissances et mettre en pratique celle que j'ai acquises.">
      <meta name="keywords" content="Développeur, Web, Dev, Lyon, Ain, front-end, back-end, HTML, CSS, Javascript, PHP, Développeur web, Junior">
      <meta name="author" content="Maxime Lecieux">

      <!--=============== FAVICON ===============-->
      <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Portfolio Maxime Lecieux</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav_logo">
               Maxime <span>Lecieux</span>
            </a>
            <div class="nav_menu" id="nav-menu">
               <ul class="nav_list">
                  <li class="nav_item">
                     <a href="#home" class="nav_link active-link">Accueil</a>
                  </li>
                  <li class="nav_item">
                     <a href="#about" class="nav_link">À propos</a>
                  </li>
                  <li class="nav_item">
                     <a href="#skills" class="nav_link">Compétences</a>
                  </li>
                  <li class="nav_item">
                     <a href="#projects" class="nav_link">Projets</a>
                  </li>
                  <li class="nav_item">
                     <a href="#contact" class="nav_link">Contact</a>
                  </li>
               </ul>
               
               <div class="nav_close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <!-- Toggle button -->
            <div class="nav_toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home_container container grid">
               <div class="home_content">
                  <div class="home_data">

                     <h1 class="home_title">Maxime Lecieux</h1>

                     <h3 class="home_education">
                        Développeur web junior
                     </h3>

                     <p class="home_description">
                        Jeune développeur web en herbe, je suis à la recherche d'une 
                        entreprise afin de pouvoir continuer à enrichir mes connaissances
                        et mettre en pratique celle que j'ai acquises.
                     </p>

                     <a href="#contact" class="button">Discutons ensemble !</a>
                  </div>
                  <div class="home_social">
                     <a href="https://github.com/MaximeLecieux" target="_blank" class="home_social-link">
                        <i class="ri-github-fill"></i>
                     </a>
                     <a href="https://www.linkedin.com/in/maxime-lecieux/" target="_blank" class="home_social-link">
                        <i class="ri-linkedin-box-fill"></i>
                     </a>
                     <a href="mailto:maxime.lecieuxlmf@gmail.com" class="home_social-link">
                        <i class="ri-mail-line"></i>
                     </a>
                  </div>
               </div>
               <div class="home_image">
                  <svg class="home_blob" viewBox="0 0 550 591" xmlns="http://www.w3.org/2000/svg">
                     <mask id="maskBlob" mask-type="alpha">
                        <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                        170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                        447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                        587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                        438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
                     </mask>
                     <g mask="url(#maskBlob)">
                        <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                        170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                        447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                        587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                        438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
                  
                        <rect x="37" width="476" height="630" fill="url(#pattern0)"/>
                     </g>
                  
                     <rect x="37" width="476" height="300" fill="url(#pattern1)"/>
                  
                     <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                           <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)"/>
                        </pattern>
                  
                        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                           <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)"/>
                        </pattern>
                  
                        <!-- Insert your profile (recommended size: 640 x 940) -->
                        <image class="home_img" id="imageBlob" width="645" height="1090" href="assets/img/profil.png"/>
                     </defs>
                  </svg>
               </div>
            </div>
         </section>

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="about_container container grid">
               <div class="about_data">
                  <h3 class="section_subtitle">
                     <span>À propos</span> de moi
                  </h3>
                  <h2 class="section_title">
                     Faisons connaissance
                  </h2>
                  <p class="about_description">
                     Originaire d'un peu partout dans le monde
                     (Guyane, Nouvelle-Calédonie et France maintenant),
                     je suis de nature curieuse et aventurier. J'aime découvrir
                     et explorer de nouvelles choses ! <br><br>

                     Auparavant, j'étais technicien informatique ce qui m'a permis
                     d'acquérir des compétences telles que l'écoute, le conseil
                     ainsi que des qualités relationnelles importantes. J'aime aider
                     mon prochain autant que je le peux ! <br><br>

                     Actuellement en formation de développeur web, je suis à la recherche 
                     d'une entreprise en alternance afin de me performer dans les langages
                     que je maîtrise ainsi que d'en découvrir de nouveaux ! Je n'ai pas peur 
                     de repousser mes limites !

                  </p>
                  <a href="assets\cv\CV_Maxime_Lecieux.pdf" class="button" download="">Télécharger mon CV</a>
               </div>
               <div class="about_image">
                  <img src="assets/img/about-img.jpg" class="about_img" alt="about-img">
               </div>
            </div>
         </section>

         <!--==================== SKILLS ====================-->
         <section class="skills section" id="skills">
            <div class="skills_container container grid">
               <div class="skills_data">
                  <h3 class="section_subtitle">
                     Mes <span>Compétences</span>
                  </h3>
                  <h2 class="section_title">
                     Ce que je pratique actuellement
                  </h2>
                  <p class="skills_description">
                     Voici les compétences que j'ai acquises au cours
                     de ma formation et en dehors
                  </p>
                  <a href="#projects" class="button">Voir mes projets</a>
               </div>

               <div class="skills_content">
                  <ol class="skills_group">
                     <li class="skills_item">HTML & CSS</li>
                     <li class="skills_item">JavaScript</li>
                     <li class="skills_item">Bootstrap</li>
                     <li class="skills_item">PHP & SQL</li>
                  </ol>
                  <ol class="skills_group" start="5">
                     <li class="skills_item">Git & GitHub</li>
                     <li class="skills_item">Figma</li>
                  </ol>
               </div>
            </div>
         </section>

         <!--==================== PROJECTS ====================-->
         <section class="projects section" id="projects">
            <h3 class="section_subtitle">
               Mes <span>Projets</span>
            </h3>
            <h2 class="section_title">
               Projets récents
            </h2>

            <div class="projects_container container grid">
               <?php foreach($projects as $project) {?>
                  <article class="projects_card">
                  <img src="<?=$project['img']?>" alt="projects image" class="projects_img">

                     <div class="projects_modal">
                        <h2 class="projects_title"><?=$project['title']?></h2>

                        <a href="#project-modal<?=$project['idProject']?>" class="projects_button" id="projects-button<?=$project['idProject']?>">
                           En savoir plus <i class="ri-arrow-right-line"></i>
                        </a>
                     </div>
                  </article>
               <?php } ?>           
            </div>
            

             <!--==================== MODAL PROJECTS ====================-->

            <?php foreach($projects as $project) {?>
               <article class="project_modal" id="project-modal<?=$project['idProject']?>">
                  <div class="project_close" id="project-close<?=$project['idProject']?>">
                     <i class="ri-close-line"></i>
                  </div>
                  <h2 class="project_title"><?=$project['title']?></h2>
                  <div>
                     <p class="project_description">
                        <?=$project['description']?><br><br>
                     </p>
                  </div>
                  <div class="project_content">
                     <div class="project_group">
                        <h3 class="project_subtitle">Langages utilisés</h3>
                        <ul class="project_languages">
                           <?php $languages = explode(", ", $project['languages']);
                           foreach($languages as $language){ ?>
                              <li class="project_item"><?=$language?></li>
                           <?php } ?>
                        </ul>
                     </div>
                     <div class="project_group">
                        <h3 class="project_subtitle">Liens <i class="ri-links-line"></i></h3>
                        <ul class="project_links">
                           <?php if($project['website']) { ?>
                              <li class="project_item">
                                 <a href="<?=$project['website']?>" target="_blank" class="projects_button">Lien site <i class="ri-external-link-line"></i></a>
                              </li>
                           <?php } ?>
                           <?php if($project['git']) { ?>
                              <li class="project_item">
                                 <a href="<?=$project['git']?>" target="_blank" class="projects_button">Lien git <i class="ri-external-link-line"></i></a>
                              </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
               </article>
            <?php } ?> 

         </section>

         <!--==================== CONTACT ====================-->
         <section class="contact section" id="contact">
            <h3 class="section_subtitle">
               Entrer en <span>Contact</span>
            </h3>
            <h2 class="section_title">
               Discutons ensemble !
            </h2>

            <div class="contact_container container grid">
               <form action="" class="contact_form" id="contact-form">
                  <div class="contact_group">
                     <input type="text" name="user_name" required placeholder="Indiquer votre nom" class="contact_input">
                     <input type="email" name="user_email" required placeholder="Indiquer votre mail" class="contact_input">
                  </div>

                  <textarea name="user_project" required placeholder="Dites-moi tout..." id="" cols="30" rows="10" class="contact_input"></textarea>

                  <p class="contact_message" id="contact-message"></p>

                  <button type="submit" class="button contact_button">Send Message</button>
               </form>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer_container container grid">
            <div>
               <h1 class="footer_title">
                  Maxime <span>Lecieux</span>
               </h1>
               <h2 class="footer_education">
                  Développeur web junior
               </h2>
            </div>

            <div class="footer_social">
               <a href="https://github.com/MaximeLecieux" target="_blank" class="home_social-link">
                  <i class="ri-github-fill"></i>
               </a>
               <a href="https://www.linkedin.com/in/maxime-lecieux/" target="_blank" class="home_social-link">
                  <i class="ri-linkedin-box-fill"></i>
               </a>
               <a href="mailto:maxime.lecieuxlmf@gmail.com" class="home_social-link">
                  <i class="ri-mail-line"></i>
               </a>
            </div>

            <span class="footer_copy">
               &#169; Copyright MaximeLecieux. All rights reserved
            </span>
         </div>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="assets/js/scrollreveal.min.js"></script>

      <!--=============== EMAIL JS ===============-->
      <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>