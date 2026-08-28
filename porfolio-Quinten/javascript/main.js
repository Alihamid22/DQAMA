const popup = document.getElementById("cookie-popup");
const button = document.getElementById("accept-cookies");
const cookieButton = document.getElementById("cookie-button");

if (!localStorage.getItem("cookiesAccepted")) {
  popup.style.display = "flex";
} else {
  cookieButton.style.display = "block";
}

button.addEventListener("click", () => {
  localStorage.setItem("cookiesAccepted", "true");
  popup.style.display = "none";
  cookieButton.style.display = "block";
});

cookieButton.addEventListener("click", () => {
  localStorage.removeItem("cookiesAccepted");
  popup.style.display = "flex";
  cookieButton.style.display = "none";
});
