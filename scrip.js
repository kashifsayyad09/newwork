<script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "👁️‍🗨️"; // Open eye icon
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "👁️"; // Closed eye icon
            }
        }
    </script>