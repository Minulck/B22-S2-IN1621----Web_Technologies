document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('wholesale-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        // Validate form inputs
        if (!validateForm()) {
            return;
        }

        // Prepare form data
        var formData = new FormData(this);

        // Submit form data to PHP script
        fetch('backend/submit_form.php', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                if (response.ok) {
                    document.getElementById('thank-you-message').classList.remove('hidden');
                    document.getElementById('error-message').classList.add('hidden');
                    resetForm();
                } else {
                    document.getElementById('error-message').classList.remove('hidden');
                    document.getElementById('thank-you-message').classList.add('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('error-message').classList.remove('hidden');
                document.getElementById('thank-you-message').classList.add('hidden');
            });
    });
});

// Function to validate form inputs
function validateForm() {
    var company = document.getElementById("company").value;
    var contactName = document.getElementById("contact-name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var businessType = document.getElementById("business-type").value;
    var message = document.getElementById("message").value;

    // Simple validation example, you can customize this as per your requirements
    if (
        company === "" ||
        contactName === "" ||
        email === "" ||
        phone === "" ||
        businessType === "" ||
        message === ""
    ) {
        alert("All fields must be filled out");
        return false;
    }

    // Email validation using regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email address");
        return false;
    }

    // Phone validation - example, you can customize
    var phonePattern = /^\d{10}$/; // Assuming phone number is 10 digits
    if (!phonePattern.test(phone)) {
        alert("Invalid phone number");
        return false;
    }

    return true; // Form is valid
}

// Function to reset form fields after successful submission
function resetForm() {
    document.getElementById("wholesale-form").reset();
}
