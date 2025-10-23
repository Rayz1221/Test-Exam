<?php
  
  // Read values from the form
  $game_name = $_POST['MovieName'];
  $game_description = $_POST['MovieGenre'];
  $game_release_date = $_POST['DateReleased'];
  $game_price = $_POST['MoviePrice'];
  
  // Connect to database
  include("db.php");
  
  // Build SQL statement
  $sql = "INSERT INTO MovieNames(movie_name, movie_genre, released_date, price)
          VALUE('{$movie_name}', '{$movie_genre}', '{$movie_release_date}', '{$movie_price}')";
  
  // Run SQL statement and report errors
  if(!$mysqli -> query($sql)) {
      echo("<h4>SQL error description: " . $mysqli -> error . "</h4>");
  }
  
  // Redirect to list
  header("location: week02.php");
?>