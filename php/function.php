<?php
function db(){
  $dsn="mysql:dbname=blog;host=127.0.0.1;charset=UTF8";
  $username="root"; $passwd="0000";
  $pdo = new PDO($dsn, $username, $passwd);
  return $pdo;
}

function listeDateTitle(){
  $pdo = db();
  $query = "SELECT * FROM `Articles` ORDER BY `created_date` DESC";
  $result = $pdo->query($query);
  foreach ($result as $row) { //Row la prend la valeur de result à chaque itération, c'est à dire un id.
    echo '<div class="contents-tableau">';
    echo '<div>' . $row['created_date'] . "</div>" . "<div class='align-title'><a class='no-decoration' href='blog.dev/php/index.php?articleid=" . $row['idarticles'] . "'>" . $row['title'] . '</a></div>';
    echo '</div>';
    echo '<hr class="separation"></hr>';
  }
}
function showArticle(){
  $pdo =db();
  $query="SELECT * FROM `Articles`";
  $result = $pdo->query($query);
  
}
