document.addEventListener('DOMContentLoaded', function () {
    var registrationForm = document.getElementById('registrationForm');

    registrationForm.addEventListener('submit', function (event) {
        event.preventDefault();

        if (validateForm()) {
            registrationForm.submit();
        }
    });

    function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var uname = document.getElementById('uname').value;
        var pass = document.getElementById('pass').value;
        var cpassword = document.getElementById('cpassword').value;
        var address = document.getElementById('address').value;
        var gender = document.querySelector('input[name="gender"]:checked');
        var day = document.getElementById('day').value;
        var month = document.getElementById('month').value;
        var year = document.getElementById('year').value;

       
        clearErrorMessages();

        if (name.trim() === '') {
            displayErrorMessage('nameError', 'Please enter your name.');
            return false;
        }

        if (email.trim() === '') {
            displayErrorMessage('emailError', 'Please enter your email.');
            return false;
        } else if (!isValidEmail(email)) {
            displayErrorMessage('emailError', 'Invalid email format.');
            return false;
        }

        if (uname.trim() === '') {
            displayErrorMessage('unameError', 'Please enter a username.');
            return false;
        }

        if (pass.trim() === '') {
            displayErrorMessage('passError', 'Please enter a password.');
            return false;
        } else if (!isStrongPassword(pass)) {
            displayErrorMessage('passError', 'Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one digit.');
            return false;
        }

        if (cpassword.trim() === '') {
            displayErrorMessage('cpasswordError', 'Please confirm your password.');
            return false;
        } else if (pass !== cpassword) {
            displayErrorMessage('cpasswordError', 'Passwords do not match.');
            return false;
        }

        if (address.trim() === '') {
            displayErrorMessage('addressError', 'Please enter your address.');
            return false;
        }

        if (!gender) {
            displayErrorMessage('genderError', 'Please select your gender.');
            return false;
        }

        if (!isValidDate(day, month, year)) {
            displayErrorMessage('dobError', 'Invalid date of birth.');
            return false;
        }

        return true;
    }

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isStrongPassword(password) {
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        return passwordRegex.test(password);
    }

    function isValidDate(day, month, year) {
        var date = new Date(`${year}-${month}-${day}`);
        return !isNaN(date.getTime());
    }

    function displayErrorMessage(elementId, message) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.textContent = message;
        }
    }

    function clearErrorMessages() {
        var errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(function (element) {
            element.textContent = '';
        });
    }
});
