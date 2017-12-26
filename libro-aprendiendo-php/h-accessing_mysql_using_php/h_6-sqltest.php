<?php
  /* Example 10-6. Inserting and deleting using sqltest.php */
  require_once 'h_1-login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['delete']) && isset($_POST['isbn']))
  {
      $isbn   = get_post($conn, 'isbn');
      $query  = "DELETE FROM classics WHERE isbn='$isbn'";
      $result = $conn->query($query);
      if (!$result)
          echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
  }

  if (isset($_POST['author'])   &&
      isset($_POST['title'])   &&
      isset($_POST['category']) &&
      isset($_POST['year'])     &&
      isset($_POST['isbn']))
  {
      $author = get_post($conn, 'author');
      $title = get_post($conn, 'title');
      $category = get_post($conn,'category');
      $year = get_post($conn, 'year');
      $query = "INSERT INTO classics VALUES" .
          "('$author', '$title', '$category', '$year', '$isbn')";
      $result = $conn->query($query);
      if (!$result)
          echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
  }
?>