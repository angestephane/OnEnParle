<header>
  <nav class="navbar navbar-expand-lg item-align-center mt-2 mb-0"> 
      
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item <?php if($_GET['page']==="home"): ?>active<?php endif ?>" >
            <a class="nav-link text-dark" href="home">Accueil</a>
          </li>
          
          <li class="nav-item <?php if($_GET['page']==="newspost"): ?>active<?php endif ?>">
            <a class="nav-link text-dark" href="newspost">Nouveau Poste</a>
          </li>
        </ul>

        <a class="navbar-brand mx-auto text-dark" href="#">OnEnParle</a>
      </div>

            <?php if(isset($_SESSION['name'])) : ?>
            <h6 class="text-dark name-login"><?=$_SESSION['name']?>
              <a href="deconection"><img src="../assets/img/logout.png" alt="Déconnexion" title="Déconnexion" class="img-logout"></a>
            </h6>
            <?php endif ?>
  
  </nav>
  <style>
        .active{
            border-bottom:2px solid white;
        }
  </style>

</header>
<hr>