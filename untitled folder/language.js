/* =========================================
   DQAMA LANGUAGE SYSTEM
========================================= */

const languageButtons =
    document.querySelectorAll(".lang-btn");


/* ==============================
   TAAL INSTELLEN
============================== */

function setLanguage(language) {

    // Alle elementen met NL en EN tekst zoeken
    const elements =
        document.querySelectorAll("[data-nl][data-en]");


    elements.forEach(element => {

        if (language === "nl") {

            element.textContent =
                element.getAttribute("data-nl");

        }

        if (language === "en") {

            element.textContent =
                element.getAttribute("data-en");

        }

    });


    /* Actieve knop */

    languageButtons.forEach(button => {

        button.classList.remove("active");

        if (
            button.getAttribute("data-lang")
            === language
        ) {

            button.classList.add("active");

        }

    });


    /* Taal onthouden */

    localStorage.setItem(
        "dqama-language",
        language
    );


    /* HTML language aanpassen */

    document.documentElement.lang =
        language;

}



/* ==============================
   BUTTONS
============================== */

languageButtons.forEach(button => {

    button.addEventListener(
        "click",
        function () {

            const selectedLanguage =
                this.getAttribute(
                    "data-lang"
                );

            setLanguage(
                selectedLanguage
            );

        }
    );

});



/* ==============================
   OPGESLAGEN TAAL LADEN
============================== */

const savedLanguage =
    localStorage.getItem(
        "dqama-language"
    );


if (savedLanguage) {

    setLanguage(
        savedLanguage
    );

} else {

    setLanguage("nl");

}