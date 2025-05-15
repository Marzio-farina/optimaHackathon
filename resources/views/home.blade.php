<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventi & Artisti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="p-0 m-0">
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container-fluid px-4 d-flex align-items-center">
    <a class="navbar-brand fw-bold" href="#">🎵 EventiLive</a>
    <div class="search-container">
      <form class="d-flex w-100 justify-content-center" role="search">
        <input class="form-control me-2" type="search" placeholder="Cerca artisti o eventi..." aria-label="Cerca" />
        <button class="btn btn-outline-primary" type="submit">Cerca</button>
      </form>
    </div>

    <!-- Profilo utente come link -->
    <div class="user-profile d-none d-lg-block ms-3">
      <a href="#" class="fw-semibold text-decoration-none text-primary">Profilo</a>
    </div>
  </div>
</nav>

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
      <img src="imgs/event1.png" class="d-block w-100" alt="Concerto 1">
    </div>
    <div class="carousel-item">
      <img src="imgs/event2.png" class="d-block w-100" alt="Concerto 2">
    </div>
    <div class="carousel-item">
      <img src="imgs/event3.jpg" class="d-block w-100" alt="Concerto 3">
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
              <button class="nav-link active" id="sport-tab" data-bs-toggle="pill" data-bs-target="#sport" type="button" role="tab">
                <img src="imgs/soccer-ball-variant.png" class="tab-icon-sm" alt="Sport">
                <div class="tab-label">Sport</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="musica-tab" data-bs-toggle="pill" data-bs-target="#musica" type="button" role="tab">
                <img src="imgs/microphone.png" class="tab-icon-sm" alt="Musica">
                <div class="tab-label">Musica</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="teatro-tab" data-bs-toggle="pill" data-bs-target="#teatro" type="button" role="tab">
                <img src="imgs/theater.png" class="tab-icon-sm" alt="Teatro">
                <div class="tab-label">Teatro</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="arte-tab" data-bs-toggle="pill" data-bs-target="#arte" type="button" role="tab">
                <img src="imgs/museum.png" class="tab-icon-sm" alt="Arte">
                <div class="tab-label">Arte</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="parchi-tab" data-bs-toggle="pill" data-bs-target="#parchi" type="button" role="tab">
                <img src="imgs/rollercoaster.png" class="tab-icon-sm" alt="Parchi">
                <div class="tab-label">Parchi</div>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="fiere-tab" data-bs-toggle="pill" data-bs-target="#fiere" type="button" role="tab">
                <img src="imgs/fair-trade.png" class="tab-icon-sm" alt="Fiere">
                <div class="tab-label">Fiere</div>
              </button>
            </li>
          </ul>

          <!-- Contenuto tab -->
          <div class="tab-content" id="categoryTabsContent">
            <div class="tab-pane fade show active" id="sport" role="tabpanel">
              <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="musica" role="tabpanel">
              <h4>Musica</h4>
              <p>Contenuti musicali...</p>
            </div>

            <div class="tab-pane fade" id="teatro" role="tabpanel">
              <h4>Teatro</h4>
              <p>Contenuti teatrali...</p>
            </div>
            <div class="tab-pane fade" id="arte" role="tabpanel">
              <h4>Arte</h4>
              <p>Contenuti artistici...</p>
            </div>
            <div class="tab-pane fade" id="parchi" role="tabpanel">
              <h4>Parchi</h4>
              <p>Contenuti di parchi...</p>
            </div>
            <div class="tab-pane fade" id="fiere" role="tabpanel">
              <h4>Fiere</h4>
              <p>Contenuti di fiere...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>