/* hamburger menu */
const d = document;
const header = d.querySelector(".main__header ");
const panelActive = d.querySelector(".header__nav__menu");

 function hamburgerMenu(panelBtn, panel, menuLink) {

    d.addEventListener("click", (e) => {
        if (e.target.matches(panelBtn) || e.target.matches(`${panelBtn} *`)) {
            d.querySelector(panel).classList.toggle("is-active");
            d.querySelector(panelBtn).classList.toggle("is-active");
        };

        if (e.target.matches(menuLink)) {
            d.querySelector(panel).classList.remove("is-active");
            d.querySelector(panelBtn).classList.remove("is-active");
        };
        if(panelActive.classList.contains("is-active")){
            header.classList.remove("blur")
        }else{
            header.classList.add("blur")
        }
    }
    )
}




d.addEventListener("DOMContentLoaded", (e) => {

    hamburgerMenu(".panel-btn ", ".panel", ".header__menu-link");
})