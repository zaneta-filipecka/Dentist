let scrolled = false;

window.addEventListener("DOMContentLoaded", () => {

    // ---------- T I M E -------------

    const date = new Date().getFullYear();

    const timeReserved = document.querySelector('.container__time');

    timeReserved.textContent = date;


    // ---------- A N I M A T I O N S ----------

    const textsToFadein = [...document.querySelectorAll('.infoToBeFadedIn')];

    window.addEventListener("scroll", () => {

        if (!scrolled) {

            

            textsToFadein.forEach(item => {

                if (window.pageYOffset > 0.2 * item.offsetTop) {
                    item.classList.add('scrolled');
                }

                if (textsToFadein[textsToFadein.length - 1].classList.contains('scrolled')) {
                    scrolled = true;
                }

            })
        }
    })

})