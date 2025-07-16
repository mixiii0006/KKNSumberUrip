document.addEventListener('DOMContentLoaded', function () {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
        // Remove active class from all links
        link.classList.remove('active');

        // Normalize href to compare with currentPath
        let linkPath = link.getAttribute('href');

        // Handle index.html or root path equivalence
        if (linkPath === 'index.html' && (currentPath === '/' || currentPath === '/index.html')) {
            link.classList.add('active');
        } else if (linkPath === currentPath) {
            link.classList.add('active');
        }
    });
});
