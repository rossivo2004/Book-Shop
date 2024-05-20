//login

var showPasswordElements = document.querySelectorAll(".showPassword");

showPasswordElements.forEach(function (iconShowPass) {
    var passwordInput = iconShowPass.closest(".input-group").querySelector("input[type='password']");
    var isPasswordVisible = false;

    iconShowPass.addEventListener("click", function() {
        isPasswordVisible = !isPasswordVisible;

        if (isPasswordVisible) {
            passwordInput.type = "text";
            iconShowPass.classList.remove('fa-solid');
            iconShowPass.classList.add('fa-regular');
        } else {
            passwordInput.type = "password";
            iconShowPass.classList.remove('fa-regular');
            iconShowPass.classList.add('fa-solid');
        }
    });
});



//register
// Lấy các phần tử input và phần tử small tương ứng




var form_login = document.querySelector('.form-login');
var form_register = document.querySelector('.form-register');

var loginButtonNow = document.querySelectorAll(".login-now");
var registerButtonNow = document.querySelectorAll(".register-now");

var isRegistering = false;

registerButtonNow.forEach(function(button) {
    button.addEventListener("click", function(event) {
        if (!isRegistering) {
            form_login.classList.add("hide");
            form_register.classList.remove("hide");
            isRegistering = true; // Đã chuyển sang trạng thái đăng ký
        }
    });
});

loginButtonNow.forEach(function(button) {
    button.addEventListener("click", function(event) {
        if (isRegistering) {
            form_register.classList.add("hide");
            form_login.classList.remove("hide");
            isRegistering = false; // Đã chuyển sang trạng thái đăng nhập
        }
    });
});


// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.querySelector('form');

//     form.addEventListener('submit', function (event) {
//         const username = form.querySelector('[name="username"]');
//         const email = form.querySelector('[name="email"]');
//         const password = form.querySelector('[name="password"]');
//         const repassword = form.querySelector('[name="repassword"]');
//         const errUsername = form.querySelector('.err-user_name small');
//         const errEmail = form.querySelector('.err-user_name small');
//         const errPassword = form.querySelector('.err-password .rg-err');
//         const errRepassword = form.querySelector('.err-password .rg-err__2');

//         // Reset error messages
//         errUsername.classList.add('hide');
//         errEmail.classList.add('hide');
//         errPassword.classList.add('hide');
//         errRepassword.classList.add('hide');

//         // Perform your validation checks here

//         if (username.value.trim() === '') {
//             errUsername.classList.remove('hide');
//             event.preventDefault();
//         }

//         if (email.value.trim() === '') {
//             errEmail.classList.remove('hide');
//             event.preventDefault();
//         }

//         if (password.value.length < 8) {
//             errPassword.classList.remove('hide');
//             event.preventDefault();
//         }

//         if (password.value !== repassword.value) {
//             errRepassword.classList.remove('hide');
//             event.preventDefault();
//         }
//     });
// });
