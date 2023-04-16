const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
const scrollPosition = parseInt(sessionStorage.getItem("scrollPosition"));

// Hide cookie banner if user has already accepted cookies
cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookies", "true");
});

// Set cookie to active immediately if user is changing page
if (!isNaN(scrollPosition)) {
  if (!localStorage.getItem("cookies")) {
    cookieContainer.classList.add("active");
  }
} else {
  // Set cookie to active after 2 seconds if user loads page for the first time
  setTimeout(() => {
    if (!localStorage.getItem("cookies")) {
      cookieContainer.classList.add("active");
    }
  }, 2000);
}
