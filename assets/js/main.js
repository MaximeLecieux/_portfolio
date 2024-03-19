/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav_link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When click on each nav_link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== SHOW MODAL ===============*/
const  modalClose = document.querySelectorAll('div.project_close')
       modalButton = document.querySelectorAll('a.projects_button')
       modal = document.querySelectorAll('article.project_modal')


if(modalButton){
    modalButton.forEach(element => {
        element.addEventListener('click', () =>{
            const idButton = element.id.slice(-1)
            modal.forEach(element => {
                const idModal = element.id.slice(-1)
                if(idButton === idModal){
                   element.classList.add('show-modal')
                }
            });
        })
    });
}

/*=============== REMOVE MODAL ===============*/
if(modalClose){
    modalClose.forEach(element => {
        element.addEventListener('click', () =>{
            const idButton = element.id.slice(-1)
            modal.forEach(element => {
                const idModal = element.id.slice(-1)
                if(idButton === idModal){
                   element.classList.remove('show-modal')
                }
            });
        })
    });
}







/*=============== ADD BLUR TO HEADER ===============*/
const blurHeader = () =>{
    const header = document.getElementById('header')

    this.scrollY >= 50 ? header.classList.add('blur-header')
                       : header.classList.remove('blur-header')
}

window.addEventListener('scroll', blurHeader)

/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById('contact-form'),
      contactMessage = document.getElementById('contact-message')

const sendEmail = (e) =>{
    e.preventDefault()

    // serviceID - templateID - #form - publicKey
    emailjs.sendForm('service_gbntvkl', 'template_ifie9g9', '#contact-form', 'jM5rmCxLkgb1d12Fl')
    .then(() =>{
        //show sent message
        contactMessage.textContent = 'Message reçu 👍 Je vous répond dès que possible !'

        // Remove message after five seconds
        setTimeout(() =>{
            contactMessage.textContent = ''

        }, 5000)

        // Clear input fields
        contactForm.reset()
    }, () =>{
        //show error message
        contactMessage.textContent = 'Message non envoyé (service error) 👎'
    })
}

contactForm.addEventListener('submit', sendEmail)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')

    // When the scroll is higher than 350 viewport height
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}

window.addEventListener('scroll', scrollUp)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')

const scrollActive = () =>{
    const scrollY = window.scrollY

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id'),
              sectionClass = document.querySelector('.nav_menu a[href*=' + sectionId +']')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionClass.classList.add('active-link')
        }else{
            sectionClass.classList.remove('active-link')
        }
    })
}

window.addEventListener('scroll', scrollActive)

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: true // Animations repeat
})

sr.reveal(`.home_data, .home_social, .contact_container, .footer_container`)
sr.reveal(`.home_image`, {origin: 'bottom'})
sr.reveal(`.about_data, .skills_data`, {origin: 'left'})
sr.reveal(`.about_image, .skills_content`, {origin: 'right'})
sr.reveal(`.projects_card`, {interval: 100})