// SCROLL HANDLER

// Get the current scroll position and store it in local storage

const scrollPosition = parseInt(sessionStorage.getItem("scrollPosition"));

$(window).on("beforeunload", function () {
  sessionStorage.setItem("scrollPosition", window.scrollY.toString());
});

// Retrieve the scroll position from local storage and scroll to it
$(window).on("load", function () {
  if (!isNaN(scrollPosition)) {
    window.scrollTo(0, scrollPosition);
    sessionStorage.removeItem("scrollPosition"); // Remove the stored value after using it
  }
});

function getCurrentPage() {
  let mypage = window.location.pathname.split("/");
  return mypage[mypage.length - 1].split(".")[0];
}

function scrollToTop() {
  const top = document.documentElement.scrollTop || document.body.scrollTop;

  if (top > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, top - top / 8);
  }
}

const scroll_to_top_array = [
  "about-us",
  "contact-us",
  "privacy-policy",
  "terms-of-use",
];

if (scroll_to_top_array.includes(getCurrentPage())) {
  $(window).on("load", function () {
    scrollToTop();
  });
}
// SCROLL HANDLER

// ROUTE HANDLER

// Get the current path without the domain and query parameters
const currentPath = window.location.href;

// Get all the anchor elements on the page
const anchors = document.querySelectorAll("a");

// Add a click event listener to each anchor element
anchors.forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    // Get the path of the target URL without the domain and query parameters
    const targetPath = anchor.href;
    // Check if the target URL path matches the current page path
    if (targetPath === currentPath) {
      // Prevent the default behavior of the link
      e.preventDefault();
    }
  });
});

// ROUTE HANDLER
