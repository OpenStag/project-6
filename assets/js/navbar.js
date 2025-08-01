//navbar.js

// Profile DropDown
function toggleDropdown() {
  const dropdown = document.getElementById("profileDropdown");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}

document.addEventListener("click", function (e) {
  const profile = document.querySelector(".profile-container");
  const dropdown = document.getElementById("profileDropdown");

  if (profile && !profile.contains(e.target)) {
    dropdown.style.display = "none";
  }
});
