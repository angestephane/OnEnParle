<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
    
    <a class="navbar-brand" href="#">StephBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if($_GET['page']==="home"): ?>active<?php endif ?>" >
          <a class="nav-link" href="home">Accueil</a>
        </li>
        
        <li class="nav-item <?php if($_GET['page']==="newspost"): ?>active<?php endif ?>">
          <a class="nav-link" href="newspost">Nouveau Poste</a>
        </li>

      </ul>
          <?php if(isset($_SESSION['name'])) : ?>
          <h6 class="text-light name-login"><?=$_SESSION['name']?>
            <a href="deconection"><img src="../assets/img/logout.png" alt="Déconnexion" title="Déconnexion" class="img-logout"></a>
          </h6>
          <?php endif ?>
  </div>
</nav>
<style>
      .active{
          border-bottom:2px solid white;
      }
    </style>

</header>