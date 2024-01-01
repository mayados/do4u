document.addEventListener("DOMContentLoaded", function () {
  const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");
  const currentURL = window.location.href;

  // Retrieve the last selected menu item from local storage
  const lastSelected = localStorage.getItem("lastSelected");

  allSideMenu.forEach((item) => {
    const href = item.getAttribute("href");

    if (currentURL.includes(href) || lastSelected === href) {
      item.parentElement.classList.add("active");
    }

    item.addEventListener("click", function () {
      allSideMenu.forEach((i) => {
        i.parentElement.classList.remove("active");
      });
      item.parentElement.classList.add("active");

      // Save the selected menu item to local storage
      localStorage.setItem("lastSelected", href);
    });
  });
});

const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

// Initial setup for mobile devices
if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
}

// Event listener for window resize
window.addEventListener("resize", function () {
  if (window.innerWidth < 768) {
    sidebar.classList.add("hide");
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  } else {
    sidebar.classList.remove("hide");
  }
});
