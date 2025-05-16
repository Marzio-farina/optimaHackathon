<div class="containerCard m-4">	
  <div class="product-details">
    <a href="#"><h4>{{ Str::limit($evento->nome, 25, '...') }}</h4></a>
    {{-- @if($biglietti->isNotEmpty()) --}}
        @foreach ($biglietti as $biglietto)
            <span class="price d-block">Prezzo: {{ $biglietto->prezzo ?? 'N/A' }} €</span>
        @endforeach
    {{-- @else
        <span class="price d-block text-muted">Nessun biglietto disponibile</span>
    @endif --}}
    

    <div>
      <a href="#" class="information">Categoria Esempio...</a>
    </div>

    <!-- Pulsante acquisto disabilitato/commentato -->

    <div class="buttonBuy buttonBuyClick" data-price="49.99">
      <div class="buttonBuy-wrapper">
        <span class="iconBuy">
          <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
          </svg>
        </span>
        <div class="textBuy">Compra</div>
      </div>
    </div>
  </div>  

  <div class="product-image">
    <img src="https://via.placeholder.com/300x300" alt="Immagine dell'articolo Titolo Articolo Esempio" class="custom-card-img w-100 img-fluid">
    <div class="info">
      <h5>Descrizione</h5>
      <ul>
        <li><strong>Località:</strong>Napoli</li>
        <li><strong>Data:</strong>15/05/2025</li>
        <li><strong>Ora:</strong> 21:00</li>
        <li><strong>Descrizione:</strong><p>231231</p></li>
      </ul>
    </div>
  </div>

  <script>
    function handleClick(event) {
      const articlePrice = event.currentTarget.getAttribute('data-price');
      // Azione fittizia, esempio:
      alert('Aggiunto al carrello: €' + articlePrice);
    }

    document.querySelectorAll('.buttonBuyClick').forEach(button => {
      button.removeEventListener('click', handleClick);
      button.addEventListener('click', handleClick);
    });
  </script>
</div>
