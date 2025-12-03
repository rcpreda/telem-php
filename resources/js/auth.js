/**
 * Authentication Pages JavaScript
 * Handles form validation, loading states, and Bootstrap initialization
 */

// Import Bootstrap
import * as bootstrap from 'bootstrap';

// Make Bootstrap available globally
window.bootstrap = bootstrap;

// DOM Ready
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    // Handle form submissions with loading state
    const forms = document.querySelectorAll('form.form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitButton = form.querySelector('button[type="submit"]');

            if (submitButton) {
                // Add loading class
                submitButton.classList.add('loading');
                submitButton.disabled = true;
            }
        });
    });

    // Handle password visibility toggle if exists
    const passwordToggles = document.querySelectorAll('[data-kt-password-meter-control="visibility"]');

    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input[type="password"], input[type="text"]');
            const eyeSlashIcon = this.querySelector('.ki-eye-slash');
            const eyeIcon = this.querySelector('.ki-eye');

            if (input) {
                if (input.type === 'password') {
                    input.type = 'text';
                    if (eyeSlashIcon) {
                        eyeSlashIcon.classList.add('d-none');
                    }
                    if (eyeIcon) {
                        eyeIcon.classList.remove('d-none');
                    }
                } else {
                    input.type = 'password';
                    if (eyeSlashIcon) {
                        eyeSlashIcon.classList.remove('d-none');
                    }
                    if (eyeIcon) {
                        eyeIcon.classList.add('d-none');
                    }
                }
            }
        });
    });
});
