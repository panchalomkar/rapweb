// Load modal HTML and insert into the page
function loadModal() {
  fetch("modal.html")
    .then((response) => response.text())
    .then((html) => {
      document.body.insertAdjacentHTML("beforeend", html);

      // Now that modal HTML is loaded, attach event listeners
      const triggerModalBtns = document.querySelectorAll(".trigger-modal-btn1");
      const modalOverlay = document.getElementById("modalOverlay");
      const dismissModal = document.getElementById("dismissModal");

      // Show modal when any button is clicked
      triggerModalBtns.forEach((button) => {
        button.addEventListener("click", () => {
          modalOverlay.style.display = "flex";
        });
      });

      // Hide modal when 'x' button is clicked
      if (dismissModal) {
        dismissModal.addEventListener("click", () => {
          modalOverlay.style.display = "none";
        });
      }

      // Hide modal when clicking outside the modal box
      modalOverlay.addEventListener("click", (e) => {
        if (e.target === modalOverlay) {
          modalOverlay.style.display = "none";
        }
      });
      // Form submission validation
      document
        .getElementById("emailForm")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent form from submitting normally

          const emailInput = document.getElementById("email");
          const emailError = document.getElementById("emailError");

          // Regular expression to validate emails except Gmail
          const officialEmailPattern =
            /^[a-zA-Z0-9._%+-]+@(?!gmail\.)[a-zA-Z0-9-]+\.(com|org|net|edu)$/;
          if (officialEmailPattern.test(emailInput.value)) {
            emailError.style.display = "none";

            // Collect form data
            const formData = new FormData(document.getElementById("emailForm"));

            // Send data to the PHP file using AJAX (fetch)
            fetch("send_email.php", {
              method: "POST",
              body: formData,
            })
              .then((response) => response.text())
              .then((data) => {
                // alert(data); // Show the PHP response
                const modalOverlay = document.getElementById("modalOverlay");
                modalOverlay.style.display = "none";
                emailForm.reset();
                // window.location.reload();
                showModal();
              });
          } else {
            emailError.style.display = "inline";
          }
        });
    })
    .catch((error) => console.error("Failed to load modal HTML:", error));
  function showModal() {
    const modal = document.getElementById("successModal");
    modal.style.display = "block";
    // Auto-close after 3 seconds
    setTimeout(() => {
      window.location.reload();
      modal.style.display = "none";
    }, 3000);
  }
  // Function to hide the modal when the dismiss button is clicked
  document
    .getElementById("dismissModal1")
    .addEventListener("click", function () {
      window.location.reload();
      document.getElementById("successModal").style.display = "none";
    });
}

// Call the function to load modal
loadModal();
