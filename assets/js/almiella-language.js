document.addEventListener("DOMContentLoaded", () => {

    const language = document.querySelector(".almiella-language");

    if (!language) return;

    const button = language.querySelector(".almiella-language-toggle");
    const dropdown = language.querySelector(".almiella-language-dropdown");

    button.addEventListener("click", (e) => {

        e.preventDefault();
        language.classList.toggle("open");

    });

    document.addEventListener("click", (e) => {

        if (!language.contains(e.target)) {

            language.classList.remove("open");

        }

    });

});