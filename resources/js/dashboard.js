/**
 * Dashboard JavaScript
 * Custom functionality only - Keen scripts.bundle.demo1.js handles Bootstrap and menu components
 */

// DOM Ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dashboard initialized');

    // Keen's plugins.bundle.js already initializes tooltips and popovers

    // Sidebar toggle functionality
    const sidebarToggle = document.getElementById('kt_app_sidebar_mobile_toggle');
    const sidebar = document.getElementById('kt_app_sidebar');

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('drawer-on');

            // Add overlay
            let overlay = document.querySelector('.drawer-overlay');
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.className = 'drawer-overlay';
                overlay.style.cssText = 'position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); z-index: 104;';
                document.body.appendChild(overlay);

                overlay.addEventListener('click', function() {
                    sidebar.classList.remove('drawer-on');
                    overlay.remove();
                });
            } else {
                overlay.remove();
            }
        });
    }

    // Keen's scripts.bundle.demo1.js handles all menu functionality
    // No custom menu toggle needed

    // Initialize DataTables if present
    if (typeof DataTable !== 'undefined') {
        const tables = document.querySelectorAll('.datatable');
        tables.forEach(table => {
            new DataTable(table, {
                responsive: true,
                pageLength: 10,
                language: {
                    search: "Search:",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoEmpty: "Showing 0 to 0 of 0 entries",
                    infoFiltered: "(filtered from _MAX_ total entries)",
                    paginate: {
                        first: "First",
                        last: "Last",
                        next: "Next",
                        previous: "Previous"
                    }
                }
            });
        });
    }

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });

    // Auto-dismiss alerts (custom functionality)
    const alerts = document.querySelectorAll('.alert[data-auto-dismiss]');
    alerts.forEach(alert => {
        const delay = parseInt(alert.getAttribute('data-auto-dismiss')) || 5000;
        setTimeout(() => {
            alert.remove();
        }, delay);
    });

    // Theme toggle
    const themeToggle = document.getElementById('kt_theme_mode_toggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('data-bs-theme', newTheme);
        });
    }

    // Smooth scroll to top
    const scrollTopBtn = document.getElementById('kt_scrolltop');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        scrollTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Card loading state
    window.cardLoader = {
        show: function(cardId) {
            const card = document.getElementById(cardId);
            if (card) {
                card.classList.add('card-loading');
                const spinner = document.createElement('div');
                spinner.className = 'card-loader';
                spinner.innerHTML = '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>';
                card.appendChild(spinner);
            }
        },
        hide: function(cardId) {
            const card = document.getElementById(cardId);
            if (card) {
                card.classList.remove('card-loading');
                const loader = card.querySelector('.card-loader');
                if (loader) {
                    loader.remove();
                }
            }
        }
    };
});
