// Load Navbar
fetch("navbar.html")
    .then(res => res.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;

        // Highlight active page
        const currentPage = window.location.pathname.split("/").pop() || "index.html";
        const links = document.querySelectorAll("#navbar .nav-link");
        links.forEach(link => {
            if (link.getAttribute("href") === currentPage) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });


// Load footer.html into the #footer div
fetch("footer.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("footer").innerHTML = data;
        // Insert dynamic year
        document.getElementById("footerYear").textContent = new Date().getFullYear();
    });
