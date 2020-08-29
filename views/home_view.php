<!DOCTYPE html>
<html lang="fr">
    <!--head -->
    <?php include_once 'views/includes/head.php';?>

<body>
    <!--header -->
    <?php include_once 'views/includes/header.php';?>

    <!-- liste des catégories -->
  <div class=" container nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php foreach($allCategories as $index => $category) : ?>  
    <a class="p-2 text-dark" href="<?=$category['name']?>"><?=$category['name']?></a>
    <?php endforeach ?>
    </nav>
  </div>

  <div class="jumbotron p-4 m-sm-2 p-md-5 text-white rounded ">
      <div class="col-md-6 px-0">
        <h6 class="display-4 font-italic bg-dark"><?=$lastPoste['title']?></h6>
        <p class="lead my-3 bg-dark"><?=$lastPoste['sentence']?></p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Lire la suite...<a></p>
      </div>
  </div>

<!-- poste par catégories-->
  <div class="row mb-2 container">
        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?=$lastPosteLeft['category']?></strong>
                    <h5 class="mb-0"><?=$lastPosteLeft['title']?></h5>
                    <div class="mb-1 text-muted"><?=date_format(date_create($lastPosteLeft['date']), "M d")?></div>
                    <p class="card-text mb-auto"><?=$lastPosteLeft['sentence']?>...</p>
                    <a href="#" class="stretched-link">Continuer</a>
                </div>   
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"><?=$lastPosteRight['category']?></strong>
                    <h5 class="mb-0"><?=$lastPosteRight['title']?></h5>
                    <div class="mb-1 text-muted"><?=date_format(date_create($lastPosteRight['date']), "M d")?></div>
                    <p class="mb-auto"><?=$lastPosteRight['sentence']?>..</p>
                    <a href="#" class="stretched-link">Continuer</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-danger"><?=$lastPosteRight['category']?></strong>
                    <h5 class="mb-0"><?=$lastPosteRight['title']?></h5>
                    <div class="mb-1 text-muted"><?=date_format(date_create($lastPosteRight['date']), "M d")?></div>
                    <p class="mb-auto"><?=$lastPosteRight['sentence']?>..</p>
                    <a href="#" class="stretched-link">Continuer</a>
                </div>
            </div>
        </div>
        
  </div>

<!-- poste générale -->
  <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            Autre postes
          </h3>

          <?php foreach($allPostes as $index => $poste) : ?>
            <!--Blogs poste-->
            <div class="blog-post">
            <h4 class="blog-post-title"><?=$poste['title']?></h4>
            <p class="blog-post-meta"><?=date_format(date_create($poste['date']), "d/m/Y à H:i")?> par <a href="#"><?=$poste['firstname'].' '.$poste['lastname']?></a></p>

            <p><?= nl2br($poste['sentence']) ?><a href="home/afficher/<?= $poste['id']?>" class="text-primary" style="text-decoration:none"> voir plus...</a></p>
          </div><!-- /.blog-post -->

          <?php endforeach?>

          <!-- autre poste générale (plus ancien ou plus nouveau)-->
          <nav class="blog-pagination d-flex justify-content-between">
            <a class="btn btn-outline-primary" href="#">Précédent</a>
            <a class="btn btn-outline-secondary" href="#">Suivant</a>
          </nav>
        </div><!-- /.blog-main -->

        <!-- sidebar pour les autres postes selon le mois-->
      <aside class="col-md-4 blog-sidebar">
          <div class="p-4 mb-3 bg-light rounded">
            <h5 class="font-italic">A propos</h5>
            <p class="mb-0"><em>StephBlog</em> est un espace de libre échange d'expression sur 
              differentes thématiques.<br/>
              N'hesitez donc pas, à vous exprimer librement quand vous en avez la possibilité.
              Je vous souhaite un agréable moment.<em> Votre très chère stephane</em>
            </p>
          </div>

          <div class="p-4">
            <h5 class="font-italic">Me Suivre</h5>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="https://www.facebook.com/stephane.boguhe/" target="_blank">Facebook</a></li>
            </ol>
          </div>
      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->
  </main><!--<!-- /.container -->
<!--footer -->
<?php include_once 'views/includes/footer.php';?>
</body>
</html>