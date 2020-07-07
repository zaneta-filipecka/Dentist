let scrolled = false;

window.addEventListener("DOMContentLoaded", () => {

    // ======== TIME ========

    const date = new Date().getFullYear();

    const timeReserved = document.querySelector('.container__time');

    timeReserved.textContent = date;


    // ======== ANIMATIONS ========

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

// const contactForm = document.querySelector('.contact-form');

// if(contactForm) {
//     contactForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         try {
//             const fields = contactForm.querySelectorAll('input, select, textarea')
//             let error = false;
//             fields.forEach(field => {
//                 if(!field.value) {
//                     error = true;
//                 }
//                 else if(field.value.trim().length=0) {
//                     error = true;
//                     console.log(`z trim: ${field.textContent.trim()}`);
//                     console.log(`bez trim: ${field.textContent}`);
//                 }
//             });
//             if(error) {
//                 alert("Proszę uzupełnić wymagane pole");
//                 return;
//             }
//             this.submit();
//         } catch(e) {
//             alert("Przepraszamy, wystąpił błąd");
//         }
//     })
// }
