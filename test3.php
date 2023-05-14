<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $id = isset($_GET['id']) ? $_GET['id'] : null; // get the id parameter
      $users = getUsers(); // get the users data from database

      foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td><a href='" . $_SERVER['PHP_SELF'] . "?id=" . $user['id'] . "'>Edit</a></td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
