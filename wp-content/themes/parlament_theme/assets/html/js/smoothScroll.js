function scrollIntoView() {
    const anchors = document.querySelectorAll('.nav__menu .nav__item .nav__link[href*="#"]')

    console.log(window.location.pathname)
    console.log(window.location.pathname !== '/Parlament/index.html')
    /*todo Изменить ссылку при деплое*/
    if(window.location.pathname !== '/Parlament/index.html') {
        return
    } else {
        for (let anchor of anchors) {
            anchor.addEventListener('click', function (e) {
                e.preventDefault()
                navInvert()
                const blockID = anchor.getAttribute('href').substr(1)

                document.getElementById(blockID).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            })
        }
    }

}

scrollIntoView()
