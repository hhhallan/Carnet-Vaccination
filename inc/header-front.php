<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>bogboss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <?php debug($_SESSION); ?>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">home</a></li>
          <?php if(islogged()) ?>
          <li><a href="inscription.php">inscription</a></li>
          <li>bonjour <?php echo ucfirst($_SESSION['users'] ?></li>
          <li><a href="connexion.php">connexion</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
