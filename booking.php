<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simba on the Beach - Booking</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-white shadow-sm sticky-top">
  <div class="container d-flex align-items-center">
    <a href="javascript:history.back()" class="btn btn-outline-success fw-bold me-3">
      <i class="bi bi-arrow-left"></i>
    </a>
    <a class="navbar-brand d-flex align-items-center mx-auto" href="index.html">
      <img src="img/simba-logo.png" alt="Logo" width="40" class="me-2">
      <span class="fw-bold text-success">Simba on the Beach</span>
    </a>
  </div>
</nav>

<!-- Booking Form -->
<main class="d-flex align-items-center justify-content-center" style="min-height:100vh;background:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') center/cover no-repeat;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-lg border-0 rounded-5 p-4" style="background:rgba(255,255,255,0.9);backdrop-filter:blur(10px);">
          <div class="text-center mb-4">
            <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px;font-size:1.5rem;">
              <i class="bi bi-calendar-check-fill"></i>
            </div>
            <h4 class="fw-bold text-success">Booking Form</h4>
          </div>

          <form method="POST" action="send.php">
            <div class="row g-4">
              <div class="col-12">
                <label class="form-label fw-semibold">Destination</label>
                <select class="form-select form-select-lg rounded-pill shadow-sm" name="destination" required>
                  <option disabled selected>Choose your destination</option>
                  <option>Kilimanjaro Marangu Route</option>
                  <option>Serengeti Safari</option>
                  <option>Zanzibar Stone Town</option>
                  <option>Ngorongoro Crater</option>
                  <!-- Add other options as needed -->
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Full Name</label>
                <input type="text" class="form-control form-control-lg rounded-pill shadow-sm" name="name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control form-control-lg rounded-pill shadow-sm" name="email" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Start Date</label>
                <input type="date" class="form-control form-control-lg rounded-pill shadow-sm" name="date" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Number of People</label>
                <input type="number" class="form-control form-control-lg rounded-pill shadow-sm" name="people" min="1" required>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Special Requests</label>
                <textarea class="form-control form-control-lg rounded-3 shadow-sm" name="message" rows="4"></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-success btn-lg px-5 py-3 shadow-sm rounded-pill fw-bold">
                  <i class="bi bi-send-fill me-2"></i> Submit
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<footer class="bg-success text-light text-center py-3">
  <p>&copy; <span id="footerYear"></span> Simba on the Beach. All rights reserved.</p>
</footer>

<script>
  document.getElementById('footerYear').textContent = new Date().getFullYear();
</script>
</body>
</html>
