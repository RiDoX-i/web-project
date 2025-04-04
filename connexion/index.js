const input = document.querySelectorAll("input");
console.log('Elements found:', input);

// Handle form submit

form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting automatically
    verify();  // Call the verify function
});

function verify() {
    const email = input[0].value.trim();  

    // Reset border color before checking
    input[0].style.borderColor = "";  // Reset to default border color

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        input[0].style.borderColor = "red";  // Set border color to red if invalid
        return;
    }

    // If everything is good
    input[0].style.borderColor = "green";  // Set border color to green
}
