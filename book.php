<?php
// book.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba on the Beach - Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar (unchanged) -->
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

<main style="min-height:100vh; background:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') center/cover no-repeat; background-size:cover; display:flex; align-items:flex-start; justify-content:center; padding-top:4rem; padding-bottom:4rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-5 p-3 p-lg-5" style="background: rgba(255,255,255,0.85); backdrop-filter: blur(15px);" data-aos="fade-up">
                    <div class="text-center mb-4">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px;font-size:1.5rem;">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>
                        <h4 class="fw-bold text-success">Booking Form</h4>
                    </div>

                    <!-- Inside book.php -->
                    <form id="bookingForm" method="POST" action="send.php">
                        <div class="row g-4">
                            <div class="col-12">
                                <label for="destination" class="form-label fw-semibold">Destination</label>
                                <select name="destination" class="form-select form-select-lg rounded-pill shadow-sm" id="destination" required>
                                    <option selected disabled>Choose your destination</option>
                                    <option>Kilimanjaro Marangu Route</option>
                                    <option>Kilimanjaro Machame Route</option>
                                    <option>Kilimanjaro Lemosho Route</option>
                                    <option>Serengeti Safari</option>
                                    <option>Zanzibar Stone Town</option>
                                    <option>Zanzibar Prison Island</option>
                                    <option>Zanzibar Spice farm & Jozani Forest</option>
                                    <option>Zanzibar Butterfly Centre</option>
                                    <option>Zanzibar Mnemba Beach</option>
                                    <option>Zanzibar Kizimkazi</option>
                                    <option>Zanzibar Kuza Cave</option>
                                    <option>Zanzibar Salaam Cave</option>
                                    <option>Zanzibar Pungume island</option>
                                    <option>Zanzibar Mtende</option>
                                    <option>Zanzibar Paje</option>
                                    <option>Lake Manyara</option>
                                    <option>Tarangire National Park</option>
                                    <option>Lake Natron</option>
                                    <option>Ngorongoro Crater</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-lg rounded-pill shadow-sm" id="name" placeholder="Enter your name" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg rounded-pill shadow-sm" id="email" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-6">
                                <label for="date" class="form-label fw-semibold">Start Date</label>
                                <input type="date" name="date" class="form-control form-control-lg rounded-pill shadow-sm" id="date" required>
                            </div>

                            <div class="col-md-6">
                                <label for="people" class="form-label fw-semibold">Number of People</label>
                                <input type="number" name="people" class="form-control form-control-lg rounded-pill shadow-sm" id="people" min="1" placeholder="e.g. 2" required>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label fw-semibold">Special Requests</label>
                                <textarea name="message" class="form-control form-control-lg rounded-3 shadow-sm" id="message" rows="4" placeholder="Tell us more..."></textarea>
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

<footer class="bg-success text-light pt-4 pb-3 mt-5">
    <div class="container text-center">
        <p class="mb-1">&copy; <span id="footerYear"></span> Simba on the Beach. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
    document.getElementById('footerYear').textContent = new Date().getFullYear();

    // AJAX form submission with loader
    $('#bookingForm').on('submit', function(e) {
        e.preventDefault();
        $('#formAlert').html('');

        const submitBtn = $(this).find('button[type="submit"]');
        const originalBtnText = submitBtn.html();

        // Disable button and show loader
        submitBtn.prop('disabled', true);
        submitBtn.html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...');

        $.ajax({
            url: 'send.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if(response.status === 'success') {
                    $('#formAlert').html('<div class="alert alert-success">'+response.message+'</div>');
                    $('#bookingForm')[0].reset();
                } else {
                    $('#formAlert').html('<div class="alert alert-danger">'+response.message+'</div>');
                }
            },
            error: function() {
                $('#formAlert').html('<div class="alert alert-danger">An unexpected error occurred.</div>');
            },
            complete: function() {
                // Re-enable button and restore text
                submitBtn.prop('disabled', false);
                submitBtn.html(originalBtnText);
            }
        });
    });


    // Preselect destination from URL
    (function() {
        const params = new URLSearchParams(window.location.search);
        const tourParam = params.get('tour');
        if(tourParam){
            const select = document.getElementById('destination');
            const normalizedParam = tourParam.toLowerCase().replace(/-/g,' ');
            for(let option of select.options){
                if(option.value.toLowerCase() === normalizedParam || option.text.toLowerCase() === normalizedParam){
                    option.selected = true;
                    break;
                }
            }
        }
    })();
</script>
</body>
</html>
