function clickBurgerMenu() {
    /*Открытие и закрытие меню через бургер*/
    const menu = document.querySelector('.menu')
    const navBurger = document.querySelector('.nav__burger')
    const blackout = document.querySelector('.blackout')

    menu.addEventListener('click', () => {
        navInvert()
    })
    navBurger.addEventListener('click', () => {
        navInvert()
    })
    blackout.addEventListener('click', () => {
        navInvert()
    })
}

clickBurgerMenu()

function navInvert() {
    const nav = document.querySelector('.nav')
    const html = document.querySelector('html')
    const blackout = document.querySelector('.blackout')

    if (nav.classList.contains('nav____active')) {
        nav.classList.remove('nav____active')
        html.style.overflow = "auto"
        blackout.style.display = "none"
    } else {
        nav.classList.add('nav____active')
        html.style.overflow = "hidden"
        blackout.style.display = "block"
    }
}