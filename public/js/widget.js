  function showSection(section) {
        const loginSection = document.getElementById('loginSection');
        const signupSection = document.getElementById('signupSection');
        const loginLink = document.getElementById('loginLink');
        const signupLink = document.getElementById('signupLink');

        if (section === 'login') {
            loginSection.classList.remove('hidden');
            signupSection.classList.add('hidden');
            loginLink.classList.add('font-[600]', 'text-red-900');
            loginLink.classList.remove('font-[400]', 'no-underline', 'hover:underline');
            signupLink.classList.remove('font-[600]', 'text-red-900');
            signupLink.classList.add('font-[400]', 'no-underline', 'hover:underline');
        } else if (section === 'signup') {
            signupSection.classList.remove('hidden');
            loginSection.classList.add('hidden');
            signupLink.classList.add('font-[600]', 'text-red-900');
            signupLink.classList.remove('font-[400]', 'no-underline', 'hover:underline');
            loginLink.classList.remove('font-[600]', 'text-red-900');
            loginLink.classList.add('font-[400]', 'no-underline', 'hover:underline');
        }
    }

    function togglePasswordVisibility(type) {
        const passwordInput = type === 'login' ? document.getElementById('loginPassword') : document.getElementById('signupPassword');
        const toggleCheckbox = type === 'login' ? document.getElementById('toggleLoginPassword') : document.getElementById('toggleSignupPassword');

        if (toggleCheckbox.checked) {
            passwordInput.type = 'text'; // Show the password
        } else {
            passwordInput.type = 'password'; // Hide the password
        }
    }

    // By default, show the login section
    showSection('login');

     // Function to handle input from otp
    document.querySelectorAll('.otp-input').forEach((input, index) => {
        input.addEventListener('input', function() {
            // Allow only numbers
            this.value = this.value.replace(/[^0-9]/g, '');
            // Move to the next input if a number is entered
            if (this.value.length === 1 && index < 3) {
                document.querySelectorAll('.otp-input')[index + 1].focus();
            }
        });

        // Optional: Move back to the previous input on backspace
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && this.value.length === 0 && index > 0) {
                document.querySelectorAll('.otp-input')[index - 1].focus();
            }
        });
    });