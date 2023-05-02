import { scroll_to_top_array } from "./exports/scroll_top.js";

const DEFAULT_TITLE = "Create 'one page apps' - Fraud PHP";
const DEFAULT_DESCRIPTION =
  "Fraud PHP is a website template that allows you to create 'one page apps' with PHP by imitating Next.js";
const DEFAULT_KEYWORDS =
  "fraud php, php, one page app, php website template, free";
const DEFAULT_AUTHOR = "sscorpi";
const DEFAULT_FAVICON = "/src/imgs/static/content/favicon.svg";

const appId = document.querySelector("body").id;

if (appId != "_fraud") {
  throw new Error(
    "App ID is not correct! Please do not use this template if you are not going to advertise it. Change the body id to _fraud and try again."
  );
}

// SCROLL HANDLER

// Get the current scroll position and store it in local storage

// Custom Links
const setCustomLinks = () => {
  const links = document.querySelectorAll("a[data-type=fraud-link]");
  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      goToPage(link.pathname);
    });
  });
};

const appBody = document.getElementById("App");

const fetchPageHTML = async (url) => {
  const response = await fetch(`/pages/${url}/page.php`);
  const { content, title, description, keywords, author, favicon } =
    await response.json();
  document.title = title || DEFAULT_TITLE;
  const descriptionTag = document.querySelector("meta[name='description']");
  if (descriptionTag) {
    descriptionTag.setAttribute("content", description || DEFAULT_DESCRIPTION);
  }
  const keywordsTag = document.querySelector("meta[name='keywords']");
  if (keywordsTag) {
    keywordsTag.setAttribute("content", keywords || DEFAULT_KEYWORDS);
  }
  const authorTag = document.querySelector("meta[name='author']");
  if (authorTag) {
    authorTag.setAttribute("content", author || DEFAULT_AUTHOR);
  }
  const faviconTag = document.querySelector("link[rel='icon']");
  if (faviconTag) {
    faviconTag.setAttribute("href", favicon || DEFAULT_FAVICON);
  }
  return content;
};

const goToPage = async (url = "/") => {
  try {
    const pageHTML = await fetchPageHTML(url);
    appBody.innerHTML = pageHTML;
    window.history.pushState({ path: url }, "", url);
    setCustomLinks();
  } catch (e) {
    goToPage("/error");
  }
};

// Custom Links

window.addEventListener("popstate", (e) => {
  const path = e.state.path;
  goToPage(path);
});

const pos = parseInt(sessionStorage.getItem("pos"));
$(window).on("beforeunload", function () {
  sessionStorage.setItem("pos", window.scrollY.toString());
});
$(window).on("load", function () {
  if (!isNaN(pos)) {
    window.scrollTo(0, pos);
    sessionStorage.removeItem("pos");
  }
  const path = window.location.pathname;
  goToPage(path);
});
function getCurrentPage() {
  let mypage = window.location.pathname.split("/");
  return mypage[mypage.length - 1].split(".")[0];
}

if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
} else if (
  performance.navigation.type === performance.navigation.TYPE_NAVIGATE
) {
  if (scroll_to_top_array.includes(getCurrentPage())) {
    $(window).on("load", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
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
