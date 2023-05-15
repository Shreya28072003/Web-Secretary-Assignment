// Get the login button element
var loginButton = document.querySelector('#login-button');

// Add click event listener to the login button
loginButton.addEventListener('click', function() {
    // Perform login functionality here
    alert('Login button clicked!');
    window.open('./login/index.php', '_blank');
});
