<?php
$status = $_GET['status'] ?? 'error';
$message = $_GET['message'] ?? 'Something went wrong.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Result - Simba on the Beach</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height:100vh; background:#f8f9fa;">
    <div class="text-center p-5 bg-white rounded-5 shadow-lg">
        <?php if($status === 'success'): ?>
            <i class="bi bi-check-circle-fill text-success" style="font-size:4rem;"></i>
        <?php else: ?>
            <i class="bi bi-x-circle-fill text-danger" style="font-size:4rem;"></i>
        <?php endif; ?>
        <h2 class="mt-4"><?php echo htmlspecialchars($message); ?></h2>
        <a href="book.php" class="btn btn-success mt-4 px-5 py-3 rounded-pill">Back to Booking</a>
    </div>
</div>
</body>
</html>
