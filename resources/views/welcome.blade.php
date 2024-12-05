<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The News Dispatch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
    #subscribeButton {
      padding: 10px 20px;
      background-color: #080808;
      color: white;
      border: none;
      cursor: pointer;
  }

  /* Styles for the modal */
  #emailModal {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
    padding-top: 60px;
}


#modalContent {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    text-align: center;
    position: relative;
}


  #modalContent input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
  }

  #modalContent button {
      padding: 10px 20px;
      background-color: #040404;
      color: white;
      border: none;
      cursor: pointer;
  }

  #modalContent button:hover {
      background-color: #050505;
  }

  /* Style for custom alert */
  .custom-alert {
      display: none;
      position: fixed;
      top: 20%;
      left: 50%;
      transform: translateX(-50%);
      padding: 20px;
      background-color: #0c0c0c;
      color: white;
      border-radius: 5px;
      font-size: 18px;
  }
</style>
  <body class="bg-light">
    <div class="container px-4 px-lg-5">
      <div class="mb-3 row gx-4 gx-lg-5 align-items-center">
        <header class="py-3 bg-light border-bottom" style="background-color: rgb(204, 200, 194);">
          <div class="container shadow-sm d-flex justify-content-between align-items-center">
              <input class="form-control w-25" type="search" placeholder="Search" aria-label="Search">
              <h1 class="text-center fs-4"><b>the news <br>dispatch.</b></h1>
              <div>
                  <button class="btn">Sig In</button>
                  <button type="button" class="btn btn-dark" id="subscribeButton">Subscribe</button>
              </div>

          </div>
          <div>
              <nav class="mt-3 text-center">
                <a class="m-2" style="color:black; text-decoration: none;" href="#">Latest</a>
                <a class="m-2" style="color:black; text-decoration: none;" href="#">World</a>
                <a class="m-2" style="color:black; text-decoration: none;" href="#">Culture</a>
                <a class="m-2" style="color:black; text-decoration: none;" href="#">Lifestyle</a>
                <a class="m-2" style="color:black; text-decoration: none;" href="#">Economy</a>
              </nav>
          </div>
        </header>
      </div>


      <div class="container mt-4">
        <!-- Podcast Section -->
        <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="podcast-section">
                    <h6><i class="fas fa-headphones"></i> Podcast episodes</h6>
                    <h2>Daily Minute: Reports from around the world</h2>
                    <div class="mt-3 d-flex align-items-center">
                        <button class="play-button">
                            <i class="fas fa-play"></i>
                        </button>
                        <div class="ml-4">
                            <div style="width: 200px; height: 5px; background: #ddd;">
                                <div style="width: 40%; height: 80%; background: black;"></div>
                            </div>
                            <p class="mt-1 text-muted">22:18</p>
                        </div>
                    </div>
                    <p class="mt-2 text-muted">Nicola Schulz</p>
                </div>
                <hr>
                  <div class="col-md-12">
                    <div class="mb-3 card">
                      <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 150px;">
                        <div class="card-body">
                            <h6 class="text-uppercase text-muted">News</h6>
                            <h4>Best summer reads for your vacation</h4>
                            <p class="text-muted">Tom Jerry | 13 June 2023</p>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($articles as $item)
                        <div class="mb-3 card">
                          <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 220px;">
                            <div class="card-body">
                                <h6 class="text-uppercase text-muted">{{ $item->category->name }}</h6>
                                <h4 class="text-center">{{ $item->title }}</h4>
                                <p class="text-center">{{ $item->content }}</p>
                                <p class="text-muted">{{ $item->author->name }} | {{ $item->author->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3 card">
                        <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
                          <div class="card-body">
                              <h6 class="text-uppercase text-muted">Culture</h6>
                              <h4>Best summer reads for your vacation</h4>
                              <p class="text-muted">Rad Booker | 13 June 2023</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="card">
                        <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
                          <div class="card-body">
                            <h6 class="text-uppercase text-muted">Sports</h6>
                            <h4>Footballer leads Argentina to victory</h4>
                            <p class="text-muted">Fred Baller | 14 June 2023</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-6">
        <h2>Food and Dring</h2>
      </div>
      <div class="col-6">
        <p class="text-end">see all</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="mb-3 card">
          <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
                <h6 class="text-uppercase text-muted">Culture</h6>
                <h4>Best summer reads for your vacation</h4>
                <p class="text-muted">Rad Booker | 13 June 2023</p>
            </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-3 card">
          <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
                <h6 class="text-uppercase text-muted">Culture</h6>
                <h4>Best summer reads for your vacation</h4>
                <p class="text-muted">Rad Booker | 13 June 2023</p>
            </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-3 card">
          <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
                <h6 class="text-uppercase text-muted">Culture</h6>
                <h4>Best summer reads for your vacation</h4>
                <p class="text-muted">Rad Booker | 13 June 2023</p>
            </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-3 card">
          <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
                <h6 class="text-uppercase text-muted">Culture</h6>
                <h4>Best summer reads for your vacation</h4>
                <p class="text-muted">Rad Booker | 13 June 2023</p>
            </div>
        </div>
      </div>
    </div>
    <hr>
    <h3>Editor's Picks</h3>

    <div class="row g-3">

      <div class="col-md-4">
        <div class="d-flex">
          <h1 class="me-3 align-self-end">3</h1>
          <div class="mb-3 card">
            <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
              <h6 class="text-uppercase text-muted">Culture</h6>
              <h4>Best summer reads for your vacation</h4>
              <p class="text-muted">Rad Booker</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex">
          <h1 class="me-3 align-self-end">2</h1>
          <div class="mb-3 card">
            <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
              <h6 class="text-uppercase text-muted">Culture</h6>
              <h4>Best summer reads for your vacation</h4>
              <p class="text-muted">Rad Booker</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex">
          <h1 class="me-3 align-self-end">3</h1>
          <div class="mb-3 card">
            <img src="https://via.placeholder.com/500" class="card-img-top" alt="..." style="height: 95px;">
            <div class="card-body">
              <h6 class="text-uppercase text-muted">Culture</h6>
              <h4>Best summer reads for your vacation</h4>
              <p class="text-muted">Rad Booker</p>
            </div>
          </div>
        </div>
      </div>

    <footer class="py-5 mt-2" style="background-color: rgb(204, 200, 194);">
      <div>
        <h1 class="text-center">
          the news <br>dispatch.
        </h1>
        <div>
          <nav class="nav justify-content-center">
            <a class="m-2" style="color:black; text-decoration: none;" href="#">About</a>
            <a class="m-2" style="color:black; text-decoration: none;" href="#">Authors</a>
            <a class="m-2" style="color:black; text-decoration: none;" href="#">Archive</a>
            <a class="m-2" style="color:black; text-decoration: none;" href="#">Terms and Condition</a>
            <a class="m-2" style="color:black; text-decoration: none;" href="#">Cookie Policy</a>
        </nav>
        </div>
      </div>
      <div class="text-center">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-linkedin"></i>
      </div>
      <div class="container px-4 px-lg-5"><p class="m-0 text-center text-black">&copy; Hagus Hermanto</p></div>

      <div id="emailModal">
        <div id="modalContent">
            <h2>Subscribe to Our Newsletter</h2>
            <input type="email" id="userEmail" placeholder="Enter your email address" required>
            <button id="submitEmail">Submit</button>
        </div>
    </div>

    <div class="custom-alert" id="thankYouAlert">
        Thank you for subscribing to our news website.
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>

      document.getElementById('subscribeButton').addEventListener('click', function() {
          document.getElementById('emailModal').style.display = 'block';
      });

      document.getElementById('submitEmail').addEventListener('click', function() {
          var email = document.getElementById('userEmail').value;

          if (email && validateEmail(email)) {

              document.getElementById('emailModal').style.display = 'none';

              var thankYouAlert = document.getElementById('thankYouAlert');
              thankYouAlert.style.display = 'block';

              setTimeout(function() {
                  thankYouAlert.style.display = 'none';
              }, 5000);
          } else {
              alert('Please enter a valid email address.');
          }
      });

      function validateEmail(email) {
          var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return regex.test(email);
      }

      window.onclick = function(event) {
          var modal = document.getElementById('emailModal');
          if (event.target === modal) {
              modal.style.display = 'none';
          }
      }
  </script>
  </body>
</html>
