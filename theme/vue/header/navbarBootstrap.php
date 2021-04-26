    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="acceuil.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php //echo RACINE; ?>acceuil">Acceuil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php //echo RACINE; ?>magazine">Magazine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?php //echo RACINE; ?>catalogue">catalogue</a>
          </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="<?php //echo RACINE; ?>contact">Contact</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0"  method="post" action="?page=search">
          <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
