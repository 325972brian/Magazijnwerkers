<?php
require_once './include/connect_db.php';
if (isset($_POST["save"])) {
  include('./scripts/overview_script.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Sketch Overview page</title>
</head>

<body>
  <h1>Sketch overview page</h1>
  <?php $results = mysqli_query($db, "SELECT * FROM overview"); ?>
  <table class="table">
    <thead>
      <tr>

        <th scope="col">Artikel</th>
        <th scope="col">Aanwezig J/N</th>
        <th scope="col">Aantal</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
          <td><?php echo $row['artikel']; ?></td>
          <td><?php echo $row['aanwezig']; ?></td>
          <td><?php echo $row['aantal']; ?></td>
          <td>
            <a href="overview.php?edit=<?php echo $row['artikelid']; ?>" class="edit_btn">Edit</a>
          </td>
          <td>
            <a href="./scripts/overview_script.php?del=<?php echo $row['artikelid']; ?>" class="del_btn">Delete</a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<?php if (isset($_SESSION['message'])) : ?>
  <div class="msg">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>

</html>