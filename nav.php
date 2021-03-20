

<nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="registration.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php if (isset($_SESSION['login'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="update.php">update info</a>
        </li>
      <?php endif; ?>
      <?php if (isset($_SESSION['login'])) : ?>
        <li class="nav-item">
          <button type="button" class="btn btn-outline-warning">
            <a class="nav-link" href="userlist.php">User list</a>
          </button>
        </li>
      <?php endif; ?>

      <?php if (isset($_SESSION['login'])) : ?>
        <li class="nav-item">
          <button type="button" class="btn btn-outline-danger">
            <a class="nav-link" href="logout.php">log out</a>
          </button>
        </li>
      <?php endif; ?>

    </ul>
  </div>
</nav>

<?php //unset($_SESSION['login']); 
?>