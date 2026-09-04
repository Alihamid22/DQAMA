function toggleLanguage() {
    const currentLang = localStorage.getItem("dqamaLang") || "nl";
    const newLang = currentLang === "nl" ? "en" : "nl";

    localStorage.setItem("dqamaLang", newLang);

    if (newLang === "en") {
        document.cookie = "googtrans=/nl/en; path=/";
    } else {
        document.cookie = "googtrans=/nl/nl; path=/";
    }

    location.reload();
}

window.addEventListener("load", function () {
    const lang = localStorage.getItem("dqamaLang") || "nl";
    const text = document.getElementById("languageText");

    if (text) {
        text.textContent = lang === "nl" ? "EN" : "NL";
    }
});