<?php $title = "Conception Web Thomas ORTA"; ?>

<?php ob_start(); ?>

<!-- SECTION HERO ANIMÉE -->
<section id="hero" class="relative overflow-hidden"
  style="position:relative;
         min-height:clamp(220px, 35vh, 520px);
         padding:clamp(24px, 6vh, 64px) 16px;
         display:flex; align-items:center; justify-content:center;
         text-align:center; color:white;">
  <div class="hero-gradient" style="position:absolute; inset:0; opacity:0.9;"></div>

  <div style="position:relative; z-index:2; max-width:1100px; width:100%;">
    <h1 style="margin:0 0 .5rem;
               font-size:clamp(1.6rem, 4vw, 3rem);
               font-weight:bold;
               text-shadow:0 0 10px rgba(0,0,0,0.5);">
      Développeur Web & Intégrateur Freelance
    </h1>

    <p style="margin:.5rem 0 1rem;
              font-size:clamp(1rem, 2.3vw, 1.25rem);
              text-shadow:0 0 6px rgba(0,0,0,0.5);">
      Je conçois des sites performants, modernes et durables.<br/>
      Disponible pour vos projets web et App-Flutter.
    </p>

    <div class="cta"
         style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
      <a href="/accueil#projects"
         style="padding:.75rem 1.25rem; background:white; color:black;
                font-weight:bold; border-radius:8px; text-decoration:none;">
        Voir mes projets
      </a>
      <a href="/accueil#formContact"
         style="padding:.75rem 1.25rem; border:2px solid white; color:white;
                border-radius:8px; text-decoration:none;">
        Me contacter
      </a>
    </div>
  </div>
</section>

<!-- SECTION SLIDER (EXISTANT) -->
<section id="slider"
  style="position:relative; width:100%; height:clamp(250px, 50vh, 480px); overflow:hidden; border-radius:8px;">
  
  <div class="slides-container" style="display:flex; height:100%; transition:transform 0.8s ease-in-out;">
    
    <div class="slide" style="min-width:100%; position:relative;">
      <img src="images/computercode.jpg" alt="Développeur Web"
           style="width:100%; height:100%; object-fit:cover; object-position:center; pointer-events:none;">
      <div class="slideTitle"
           style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; text-align:center; color:white; text-shadow:2px 2px 8px #000;">
        <h2 style="font-size:clamp(1.3rem,3vw,2.2rem); margin:0;">Développeur Web</h2>
      </div>
    </div>

    <div class="slide" style="min-width:100%; position:relative;">
      <img src="images/objectifsolutions.jpg" alt="Objectifs et solutions"
           style="width:100%; height:100%; object-fit:cover; pointer-events:none;">
      <div class="slideTitle"
           style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; text-align:center; color:white; text-shadow:2px 2px 8px #000;">
        <h2 style="font-size:clamp(1.3rem,3vw,2.2rem); margin:0;">Objectifs et solutions</h2>
      </div>
    </div>

    <div class="slide" style="min-width:100%; position:relative;">
      <img src="images/serveur.jpg" alt="Hébergement Web"
           style="width:100%; height:100%; object-fit:cover; pointer-events:none;">
      <div class="slideTitle"
           style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; text-align:center; color:white; text-shadow:2px 2px 8px #000;">
        <h2 style="font-size:clamp(1.3rem,3vw,2.2rem); margin:0;">Hébergement Web</h2>
      </div>
    </div>

  </div>

  <button id="prevBtn"
    style="position:absolute; top:50%; left:15px; transform:translateY(-50%);
           background:rgba(0,0,0,0.4); border:none; color:white; font-size:2rem;
           border-radius:50%; width:40px; height:40px; cursor:pointer; z-index:100;">&#10094;</button>

  <button id="nextBtn"
    style="position:absolute; top:50%; right:15px; transform:translateY(-50%);
           background:rgba(0,0,0,0.4); border:none; color:white; font-size:2rem;
           border-radius:50%; width:40px; height:40px; cursor:pointer; z-index:100;">&#10095;</button>

</section>


<!-- SECTION MÉTÉO MODERNISÉE -->
<section id="forecast"
  style="
    margin:60px auto;
    max-width:700px;
    width:calc(100% - 30px);
    box-sizing:border-box;
    text-align:center;
    background:linear-gradient(180deg, #f8fafc, #e0e7ff);
    border-radius:15px;
    padding:30px 20px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
    overflow:hidden;
  ">

  <h2 style="font-size:clamp(1.5rem, 4vw, 2rem); color:#1e293b; margin-bottom:20px;">
    🌦️ Le petit coin météo
  </h2>

    <div class="input"
        style="
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap:wrap;
            gap:8px;
            margin-bottom:20px;
            width:100%;
            box-sizing:border-box;
        ">
  
    <input type="text" id="cityValue" placeholder="Entrez votre ville"
        style="
        flex:1 1 160px;
        max-width:260px;
        width:100%;
        padding:10px;
        border-radius:8px;
        border:1px solid #ccc;
        font-size:1rem;
        box-sizing:border-box;">
  
    <button id="button"
        style="
        flex-shrink:0;
        padding:10px 18px;
        background:#111;
        color:#fff;
        border:none;
        border-radius:8px;
        cursor:pointer;
        font-size:1rem;
        white-space:nowrap;">
    Rechercher
    </button>
    </div>
  <div class="displayWeather"
       style="background:white; border-radius:10px; padding:20px;
              box-shadow:0 2px 10px rgba(0,0,0,0.05); display:none;
              max-width:100%; overflow:hidden;">
    <div id="imgWeather">
        <img id="icon" src="" alt="Icône météo"
           style="width:80px; height:80px; margin-bottom:10px; max-width:100%;" />
    </div>
    <p id="nameCity" style="font-size:1.2rem; font-weight:bold; margin:8px 0;"></p>
    <p id="description" style="margin:4px 0;"></p>
    <p id="temperature" style="margin:4px 0;"></p>
    <p id="temperatureMax" style="margin:4px 0;"></p>
    <p id="temperatureMin" style="margin:4px 0;"></p>
  </div>
</section>

<script>
  // On lance la classe quand la page est prête
  document.addEventListener("DOMContentLoaded", () => new Forecast());
</script>


<!-- SECTION SERVICES -->
<section id="mes-services" 
  style="background:linear-gradient(180deg,#f9fafb,#f1f5f9);
         margin:30px auto; 
         padding:40px 5vw; 
         border-radius:10px; 
         max-width:1200px;
         box-sizing:border-box;
         text-align:center;">

  <h2 style="font-size:2.2rem; color:#111; margin-bottom:20px;">💼 Mes services</h2>

  <p id="mission" 
     style="max-width:700px; margin:auto; font-size:1.1rem; color:#374151;">
    Ma mission est bien plus que le développement de votre site internet : je vous accompagne vers la réussite de votre activité.
  </p>

  <!-- CONTAINER DES SERVICES -->
  <div id="services-container" 
       style="display:flex; flex-wrap:wrap; justify-content:center; gap:25px; margin-top:40px;">

    <!-- SERVICE -->
    <div class="service" 
         style="background:white; 
                border-radius:12px; 
                box-shadow:0 5px 15px rgba(0,0,0,0.1); 
                padding:25px; 
                flex:1 1 260px; 
                max-width:280px;
                min-width:240px;
                box-sizing:border-box;
                transition:transform 0.3s, box-shadow 0.3s;">
      <h3 style="color:#1e293b; margin-bottom:10px;">🌐 Site Vitrine</h3>
      <p style="font-size:0.95rem; color:#4b5563; margin-bottom:10px;">
        Présentez votre entreprise ou activité et développez votre notoriété en ligne.
      </p>
      <ul style="list-style:none; padding:0; text-align:left; color:#374151; font-size:0.9rem; margin:0;">
        <li>✅ Étude de votre projet / cahier des charges</li>
        <li>✅ HTML, CSS, Javascript</li>
        <li>✅ Validation W3C</li>
        <li>✅ Hébergement</li>
        <li>✅ Référencement Naturel</li>
        <li>✅ Responsive smartphones/tablettes</li>
      </ul>
    </div>

    <div class="service" 
         style="background:white; 
                border-radius:12px; 
                box-shadow:0 5px 15px rgba(0,0,0,0.1); 
                padding:25px; 
                flex:1 1 260px; 
                max-width:280px;
                min-width:240px;
                box-sizing:border-box;
                transition:transform 0.3s, box-shadow 0.3s;">
      <h3 style="color:#1e293b; margin-bottom:10px;">🧩 Intégration Web</h3>
      <p style="font-size:0.95rem; color:#4b5563; margin-bottom:10px;">
        À partir de vos maquettes, textes et médias, je construis un site fidèle à votre image.
      </p>
      <ul style="list-style:none; padding:0; text-align:left; color:#374151; font-size:0.9rem; margin:0;">
        <li>✅ Étude de votre projet / cahier des charges</li>
        <li>✅ Création base de données (PHP, MySQL)</li>
        <li>✅ HTML, CSS, JavaScript</li>
        <li>✅ Validation W3C</li>
        <li>✅ Hébergement</li>
        <li>✅ Référencement Naturel</li>
        <li>✅ Responsive smartphones/tablettes</li>
      </ul>
    </div>

    <div class="service" 
         style="background:white; 
                border-radius:12px; 
                box-shadow:0 5px 15px rgba(0,0,0,0.1); 
                padding:25px; 
                flex:1 1 260px; 
                max-width:280px;
                min-width:240px;
                box-sizing:border-box;
                transition:transform 0.3s, box-shadow 0.3s;">
      <h3 style="color:#1e293b; margin-bottom:10px;">✏️ Blog</h3>
      <p style="font-size:0.95rem; color:#4b5563; margin-bottom:10px;">
        Partagez votre savoir-faire, vos conseils ou vos actualités avec un blog professionnel.
      </p>
      <ul style="list-style:none; padding:0; text-align:left; color:#374151; font-size:0.9rem; margin:0;">
        <li>✅ Étude de votre projet / cahier des charges</li>
        <li>✅ Création base de données (PHP, MySQL)</li>
        <li>✅ HTML, CSS, JavaScript</li>
        <li>✅ Validation W3C</li>
        <li>✅ Hébergement</li>
        <li>✅ Référencement Naturel</li>
        <li>✅ Responsive smartphones/tablettes</li>
      </ul>
    </div>

    <div class="service" 
         style="background:white; 
                border-radius:12px; 
                box-shadow:0 5px 15px rgba(0,0,0,0.1); 
                padding:25px; 
                flex:1 1 260px; 
                max-width:280px;
                min-width:240px;
                box-sizing:border-box;
                transition:transform 0.3s, box-shadow 0.3s;">
      <h3 style="color:#1e293b; margin-bottom:10px;">⚙️ WordPress</h3>
      <p style="font-size:0.95rem; color:#4b5563; margin-bottom:10px;">
        Créez un site clé en main facile à maintenir, avec toutes les fonctionnalités nécessaires.
      </p>
      <ul style="list-style:none; padding:0; text-align:left; color:#374151; font-size:0.9rem; margin:0;">
        <li>✅ Étude de votre projet / cahier des charges</li>
        <li>✅ Validation W3C</li>
        <li>✅ Hébergement</li>
        <li>✅ Référencement Naturel</li>
        <li>✅ Responsive smartphones/tablettes</li>
      </ul>
    </div>

  </div>

  <p id="infoServices" 
     style="margin-top:40px; font-size:1.1rem; color:#374151;">
    💡 L'étude de votre projet permettra de fixer un budget personnalisé.
  </p>
</section>

<script>
  // Effet hover doux
  document.querySelectorAll('.service').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-6px)';
      card.style.boxShadow = '0 10px 20px rgba(0,0,0,0.15)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
      card.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
    });
  });
</script>


<script>
  // effet hover
  document.querySelectorAll('.service').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-6px)';
      card.style.boxShadow = '0 10px 20px rgba(0,0,0,0.15)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
      card.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
    });
  });
</script>



<script>
  // petit effet hover moderne
  document.querySelectorAll('.service').forEach(s => {
    s.addEventListener('mouseenter', () => {
      s.style.transform = 'translateY(-8px)';
      s.style.boxShadow = '0 10px 20px rgba(0,0,0,0.15)';
    });
    s.addEventListener('mouseleave', () => {
      s.style.transform = 'translateY(0)';
      s.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
    });
  });
</script>


<!-- SECTION PROJETS -->
<section id="projects"
  style="background:white;
         border:2px solid black;
         margin:30px auto;
         padding:40px 5vw;
         border-radius:10px;
         max-width:1200px;
         box-sizing:border-box;
         text-align:center;">

  <h2 style="font-size:2.2rem; color:#111; margin-bottom:20px;">💻 Mes réalisations</h2>

  <p id="infoProjects"
     style="max-width:700px; margin:auto; margin-bottom:30px; font-size:1.1rem; color:#374151;">
    Retrouvez tous mes projets créés : sites vitrine, blogs, applications web...
  </p>

  <div id="portfolio"
       style="display:flex; flex-wrap:wrap; justify-content:center; gap:25px;">

    <?php
      $projects = [
        ['img'=>'images/webAgency.jpg','title'=>'WebAgency','desc'=>'Site vitrine pour une agence Web','url'=>'http://webagency.thomasorta.fr/'],
        ['img'=>'images/velok31.jpg','title'=>'VéloK 31','desc'=>'Application location de vélos sur Toulouse','url'=>'http://locationvelo.thomasorta.fr/'],
        ['img'=>'images/jeanforteroche.jpg','title'=>'Publier un livre','desc'=>'Blog pour un écrivain','url'=>'https://jeanforteroche.thomasorta.fr/'],
        ['img'=>'images/thomasorta.jpg','title'=>'Thomas ORTA','desc'=>'Site vitrine Thomas ORTA','url'=>'#'],
        ['img'=>'images/manoir.jpg','title'=>'Manoir de la Gravette','desc'=>'Site Maison d\'hôtes','url'=>'https://manoirdelagravette.com/'],
      ];

      foreach ($projects as $p): ?>
        <figure 
          style="position:relative;
                 flex:1 1 260px;
                 max-width:280px;
                 min-width:240px;
                 background:#f9fafb;
                 border-radius:12px;
                 overflow:hidden;
                 box-shadow:0 5px 15px rgba(0,0,0,0.1);
                 cursor:pointer;
                 transition:transform 0.3s, box-shadow 0.3s;">

          <img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>"
               style="width:100%;
                        height:180px;
                        display:block;
                        object-fit:cover;
                        object-position:center;">

          <figcaption
            style="position:absolute;
                   bottom:0; left:0; right:0;
                   background:rgba(0,0,0,0.6);
                   color:white;
                   padding:15px;
                   opacity:0;
                   transition:opacity 0.3s ease;">
            <h3 style="margin:0; font-size:1.2rem;">
              <a href="<?= $p['url'] ?>" target="_blank"
                 style="color:white; text-decoration:none;">
                <?= $p['title'] ?>
              </a>
            </h3>
            <p style="margin:5px 0 0; font-size:0.9rem;"><?= $p['desc'] ?></p>
          </figcaption>
        </figure>
    <?php endforeach; ?>

  </div>
</section>

<script>
  // Effet hover : zoom + apparition figcaption
  document.querySelectorAll('#portfolio figure').forEach(fig => {
    fig.addEventListener('mouseenter', () => {
      fig.style.transform = 'translateY(-6px)';
      fig.style.boxShadow = '0 10px 20px rgba(0,0,0,0.15)';
      fig.querySelector('figcaption').style.opacity = '1';
    });
    fig.addEventListener('mouseleave', () => {
      fig.style.transform = 'translateY(0)';
      fig.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
      fig.querySelector('figcaption').style.opacity = '0';
    });
  });
</script>


<script>
  // Petit effet hover : zoom + apparition figcaption
  document.querySelectorAll('#portfolio figure').forEach(fig => {
    fig.addEventListener('mouseenter', () => {
      fig.style.transform = 'scale(1.05)';
      fig.querySelector('figcaption').style.opacity = '1';
    });
    fig.addEventListener('mouseleave', () => {
      fig.style.transform = 'scale(1)';
      fig.querySelector('figcaption').style.opacity = '0';
    });
  });
</script>

<!-- SECTION CONTACT -->
<section id="formContact"
  style="background:linear-gradient(180deg,#111,#333);
         color:white;
         padding:60px 5vw;
         text-align:center;
         box-sizing:border-box;
         max-width:1200px;
         margin:40px auto;
         border-radius:10px;">

  <h2 class="titleFormContact" 
      style="font-size:2.2rem; margin-bottom:25px; color:#fff;">
      📩 Formulaire de contact
  </h2>

  <article class="form"
    style="width:100%;
           max-width:700px;
           margin:auto;
           background-color:#1f2937;
           padding:30px 25px;
           border-radius:15px;
           box-shadow:0 5px 20px rgba(0,0,0,0.3);
           text-align:left;
           box-sizing:border-box;">

    <div class="heddingTitle" style="text-align:center;">
      <h3 style="color:#f59e0b; font-size:1.5rem; margin-bottom:10px;">
        Contactez-moi !
      </h3>
    </div>

    <div class="heddingDescription"
         style="margin:15px 0; text-align:center; color:#d1d5db; font-size:0.95rem;">
      <p>
        Ma mission est bien plus que le développement de votre site internet.<br>
        Contactez-moi via ce formulaire ou par téléphone.
      </p>
      <p style="margin-top:10px; font-weight:bold; color:#fcd34d;">
        📞 Thomas ORTA : 06.12.14.92.55
      </p>
    </div>

    <form method="POST" action="index?objet=contact"
          style="display:flex; flex-direction:column; gap:15px;">

      <div>
        <label for="inputContactName">Votre nom :</label><br>
        <input id="inputContactName" type="text" name="name"
               placeholder="Entrez votre nom"
               maxlength="20" required
               style="width:100%; padding:12px;
                      border:none; border-radius:8px;
                      margin-top:5px; font-size:1rem; box-sizing:border-box;">
      </div>

      <div>
        <label for="inputContactFirstName">Votre prénom :</label><br>
        <input id="inputContactFirstName" type="text" name="firstName"
               placeholder="Entrez votre prénom"
               maxlength="20" required
               style="width:100%; padding:12px;
                      border:none; border-radius:8px;
                      margin-top:5px; font-size:1rem; box-sizing:border-box;">
      </div>

      <div>
        <label for="inputContactTitle">Titre de votre message :</label><br>
        <input id="inputContactTitle" type="text" name="title"
               placeholder="Sujet..." maxlength="50" required
               style="width:100%; padding:12px;
                      border:none; border-radius:8px;
                      margin-top:5px; font-size:1rem; box-sizing:border-box;">
      </div>

      <div>
        <label for="inputContactEmail">Votre e-mail :</label><br>
        <input id="inputContactEmail" type="email" name="email"
               placeholder="exemple@mail.com"
               maxlength="50" required
               style="width:100%; padding:12px;
                      border:none; border-radius:8px;
                      margin-top:5px; font-size:1rem; box-sizing:border-box;">
      </div>

      <div>
        <label for="inputContactMessage">Votre message :</label><br>
        <textarea id="inputContactMessage" name="message"
                  rows="5" maxlength="500" required
                  placeholder="Votre message..."
                  style="width:100%; padding:12px;
                         border:none; border-radius:8px;
                         margin-top:5px; resize:none;
                         font-size:1rem; box-sizing:border-box;"></textarea>
      </div>

      <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
        <input id="inputContactCheck" type="checkbox" value="0" name="acceptSend" required>
        <label for="inputContactCheck" style="font-size:0.9rem;">
          J’accepte de transmettre mes informations.
        </label>
      </div>

      <button id="formButton" type="submit" name="mailForm"
              style="background:#f59e0b;
                     color:#111;
                     border:none;
                     border-radius:8px;
                     padding:14px;
                     font-weight:bold;
                     font-size:1rem;
                     cursor:pointer;
                     transition:background 0.3s;">
        Envoyer le message
      </button>
    </form>
  </article>
</section>

<script>
  const btn = document.getElementById('formButton');
  btn.addEventListener('mouseenter', () => btn.style.background = '#fde68a');
  btn.addEventListener('mouseleave', () => btn.style.background = '#f59e0b');
</script>


<script>
  // Effet hover du bouton
  const btn = document.getElementById('formButton');
  btn.addEventListener('mouseenter', () => btn.style.background = '#fde68a');
  btn.addEventListener('mouseleave', () => btn.style.background = '#f59e0b');
</script>


<script>
  // petit effet visuel sur le bouton
  const btn = document.getElementById('formButton');
  btn.addEventListener('mouseenter', ()=> btn.style.background='#fde68a');
  btn.addEventListener('mouseleave', ()=> btn.style.background='#f59e0b');
</script>


<!-- JS -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    new Forecast();

    // on crée 1 instance du slider et on la réutilise pour les boutons
    const s = new Slider();

    const next = document.getElementById('nextBtn');
    const prev = document.getElementById('prevBtn');

    if (next) next.addEventListener('click', () => {
      s.index = (s.index + 1) % s.slides.length;
      s.display();
    });

    if (prev) prev.addEventListener('click', () => {
      s.index = (s.index - 1 + s.slides.length) % s.slides.length;
      s.display();
    });
  });
</script>

<?php 
$content = ob_get_clean(); 
require_once("template.php"); 
?>
