<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Eventi</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom px-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home.html">
            <i class="bi bi-house-door-fill me-2"></i> Home
          </a>
          

      <form class="d-flex mx-auto w-50" role="search">
        <input class="form-control me-2" type="search" placeholder="Cerca eventi..." aria-label="Search">
        <button class="btn btn-light" type="submit">Cerca</button>
      </form>

      <span class="navbar-text ms-auto fw-bold">
        Team 4
      </span>
    </div>
  </nav>

  <!-- Contenuto login -->
  <div class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 56px);">
    <div class="login-container">
      <h2 class="text-center mb-4">Accedi al tuo account</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password" required />
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
      <div class="register-link">
        <p>Non hai un account? <a href="register.html">Creane uno!</a></p>
      </div>
    </div>
  </div>
</body>
</html>
