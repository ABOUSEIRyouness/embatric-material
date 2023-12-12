<nav class="navbar navbar-expand-lg navbar-light bg-nav">
<?php 
session_start();
?>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Material Younes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewM.php">Nos materials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Ajouter un Projet</a>
        </li>
      </ul>
      <span class="navbar-text">
        Profil <?php echo $_SESSION['name']; ?>
        <a href="index.php"><i class="fa fa-sign-out" style="font-size:18px;color:bleu"></i></a>
      </span>
    </div>
  </div>
</nav>