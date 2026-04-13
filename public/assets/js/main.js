document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');

    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
                navbar.style.backgroundColor = 'rgba(13, 110, 253, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
                navbar.style.setProperty('background-color', 'rgba(13, 110, 253, 0.95)', 'important');
            } else {
                navbar.classList.remove('shadow');
                navbar.style.backgroundColor = '#0d6efd';
                navbar.style.backdropFilter = 'none';
                navbar.style.setProperty('background-color', '#0d6efd', 'important');
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
