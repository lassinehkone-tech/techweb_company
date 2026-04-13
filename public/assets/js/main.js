document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');

    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
                navbar.classList.add('scrolled');
                navbar.style.backdropFilter = 'blur(20px)';
            } else {
                navbar.classList.remove('scrolled');
                navbar.style.backdropFilter = 'blur(20px)';
            }
        });
    }

    document.querySelectorAll('.alert').forEach(function (alert) {
        setTimeout(function () {
            if (typeof bootstrap !== 'undefined') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            } else {
                alert.style.display = 'none';
            }
        }, 5000);
    });
});
