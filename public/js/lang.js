const langNav = () =>
{
    const langButton = document.getElementById("main-menu__lang-button");
    const langList = document.getElementById("main-menu__lang-list");

    langButton.addEventListener("click", ()=>{

        addEventListener("scroll", retirar);

        function retirar() { 
            if (langList.classList.contains("main-menu__lang-list--visible")) {
                langList.classList.remove("main-menu__lang-list--visible");
            }
            this.removeEventListener("scroll", retirar);
        }
        langList.classList.toggle("main-menu__lang-list--visible");
    });
}
langNav();
