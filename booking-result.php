<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Result - Simba on the Beach</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height:100vh;background:#f8f9fa;">

<div class="text-center">
  <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
    <div class="text-success mb-3">
      <i class="bi bi-check-circle-fill" style="font-size:4rem;"></i>
    </div>
    <h2 class="fw-bold text-success">Booking Successful!</h2>
    <p class="mt-3">Thank you for booking with <strong>Simba on the Beach</strong>. We will contact you shortly.</p>
  <?php else: ?>
    <div class="text-danger mb-3">
      <i class="bi bi-x-circle-fill" style="font-size:4rem;"></i>
    </div>
    <h2 class="fw-bold text-danger">Booking Failed</h2>
    <p class="mt-3">Oops! Something went wrong. Please try again or contact support.</p>
  <?php endif; ?>

  <a href="booking.php" class="btn btn-success mt-4 px-4 py-2 rounded-pill">Go Back</a>
</div>

</body>
</html>
