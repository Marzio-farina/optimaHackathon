<x-layout>
  <body class="p-0 m-0">

  <!-- CAROSELLO MIGLIORATO -->
  <div id="eventCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <!-- Indicatori -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/event1.png" class="d-block w-100" alt="Concerto 1">
      </div>
      <div class="carousel-item">
        <img src="./img/event2.png" class="d-block w-100" alt="Concerto 2">
      </div>
      <div class="carousel-item">
        <img src="./img/event3.jpg" class="d-block w-100" alt="Concerto 3">
      </div>
    </div>

    <!-- Frecce navigazione -->
    <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Successivo</span>
    </button>
  </div>

    <!-- Sezione "Tutte le categorie" -->
    <section class="py-5 bg-light">
      <div class="container-fluid">
        <h2 class="mb-4 text-center fw-bold">Tutte le categorie</h2>
        <div class="row">
          <!-- Filtro laterale -->
          <div class="col-md-3 mb-4">
            <div class="p-3 bg-white rounded shadow-sm">
              <h5 class="mb-3">Filtra per</h5>
              <div class="mb-2">
                <label class="form-label">Data</label>
                <input type="date" class="form-control">
              </div>
              <div class="mb-2">
                <label class="form-label">Luogo</label>
                <input type="text" class="form-control" placeholder="Inserisci città">
              </div>
              <button class="btn btn-primary w-100 mt-3">Applica filtri</button>
            </div>
          </div>

          <!-- Categorie -->
          <div class="col-md-9">
            <ul class="nav nav-pills custom-tabs justify-content-center flex-wrap mb-4" id="categoryTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab">
                  <img src="./img/tutti.png" class="tab-icon-sm" alt="All">
                  <div class="tab-label">Tutti</div>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="sport-tab" data-bs-toggle="pill" data-bs-target="#sport" type="button" role="tab">
                  <img src="./img/soccer-ball-variant.png" class="tab-icon-sm" alt="Sport">
                  <div class="tab-label">Sport</div>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="musica-tab" data-bs-toggle="pill" data-bs-target="#musica" type="button" role="tab">
                  <img src="./img/microphone.png" class="tab-icon-sm" alt="Musica">
                  <div class="tab-label">Musica</div>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="meeting-tab" data-bs-toggle="pill" data-bs-target="#meeting" type="button" role="tab">
                  <img src="./img/fair-trade.png" class="tab-icon-sm" alt="Meeting">
                  <div class="tab-label">Meeting</div>
                </button>
              </li>
            </ul>

            <!-- Contenuto tab -->
            <div class="tab-content" id="categoryTabsContent">
              <div class="tab-pane fade show active d-flex" id="all" role="tabpanel">
                @forelse ($events as $evento)
                    <x-card :evento="$evento" :biglietti="$evento->biglietti"/>
                @empty
                    <h3 class="text-center mt-4">Non sono presenti eventi</h3>
                @endforelse
              </div>
              <div class="tab-pane fade" id="sport" role="tabpanel">
                <p>Contenuti sportivi...</p>
              </div>
              <div class="tab-pane fade" id="musica" role="tabpanel">
                <p>Contenuti musicali...</p>
              </div>
              <div class="tab-pane fade" id="meeting" role="tabpanel">
                <p>Contenuti eventi meeting...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layout>