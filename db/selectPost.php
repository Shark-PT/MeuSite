<?php

include('conn.php');

$sql = "SELECT * FROM posts ORDER BY date_time DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="row px-3">
        <div class="col">
            <h1><?=$row['title']?></h1>
            <small><?=$row['date_time']?> - <i><?=$row['id_user']?></i></small>
            <p><?=$row['description']?></p>
        </div>
    </div>
    <?php
  }
} else {
  echo "<h1>O blog ainda não contém posts</h1>";
}
$conn->close();
?>