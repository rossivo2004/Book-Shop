document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (event) {
        // Reset error messages
        resetErrors();

        // Get form fields
        const username = form.querySelector('#username');
        const email = form.querySelector('#email');
        const password = form.querySelector('#password');
        const confirmPassword = form.querySelector('#confirmPassword');

        // Get error divs
        const usernameError = form.querySelector('#usernameError');
        const emailError = form.querySelector('#emailError');
        const passwordError = form.querySelector('#passwordError');
        const confirmPasswordError = form.querySelector('#confirmPasswordError');

        // Validation flag
        let isValid = true;

        // Simple username validation
        if (username.value.trim() === '' || username.value.length < 8) {
            usernameError.textContent = 'Tên đăng nhập tối thiểu 8 kí tự';
            isValid = false;
        }

        // Simple email validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value.trim())) {
            emailError.textContent = 'Invalid email address';
            isValid = false;
        }

        // Simple password validation
        if (password.value.length < 8) {
            passwordError.textContent = 'Mật khẩu không đủ 8 kí tự';
            isValid = false;
        }

        // Check if passwords match
        if (password.value !== confirmPassword.value) {
            confirmPasswordError.textContent = 'Không giống với mật khẩu';
            isValid = false;
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });

    function resetErrors() {
        const errors = form.querySelectorAll('.error');
        errors.forEach(error => error.textContent = '');
    }
});