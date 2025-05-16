<x-layout>
  <div class="bg-cover d-flex align-items-center justify-content-center">
    <div class="overlay"></div>
    <div class="container form-wrapper d-flex justify-content-center align-items-center h-100">
      <div class="form-card w-100" style="max-width: 500px;">
        <h3 class="text-center text-primary mb-4">Registrati per partecipare</h3>
        <form method="POST" action="{{route('register')}}">
          @csrf
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>

          <div class="mb-3">
            <label for="cognome" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="cognome" name="cognome" required>
          </div>

          <div class="mb-3">
            <label for="dataNascita" class="form-label">Data di Nascita</label>
            <input type="date" class="form-control" id="dataNascita" name="dataNascita" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="codiceFiscale" class="form-label">Codice Fiscale</label>
            <input type="text" class="form-control" id="codiceFiscale" name="codiceFiscale" required maxlength="16" pattern="[A-Z0-9]{16}">
          </div>

          <div class="mb-4">
            <label for="sesso" class="form-label">Sesso (opzionale)</label>
            <select class="form-select" id="sesso" name="sesso">
              <option value="">-- Seleziona --</option>
              <option value="M">Maschile</option>
              <option value="F">Femminile</option>
              <option value="N">Preferisco non specificare</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Conferma la password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Registrati</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>