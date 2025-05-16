<x-layout>
  <div class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 56px);">
    <div class="login-container">
      <h2 class="text-center mb-4">Accedi al tuo account</h2>
      <form method="POST" action="{{route('login')}}">
        @csrf
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
</x-layout>