function animationHeader() {
    const headerBottom = document.querySelector(".header__bottom-content")
    const headerSocial = document.querySelector(".header__social")
    const headerLogoTop = document.querySelector(".header__logo-top")
    const headerLogoBottom = document.querySelector(".header__logo-bottom")
    const menu = document.querySelector(".menu")
    let isMobileSize
    let isScrolled = false

    window.innerWidth < 650 ? isMobileSize = true : isMobileSize = false

    window.addEventListener('resize', (event) => {
        window.innerWidth < 650 ? isMobileSize = true : isMobileSize = false
    });

    window.onscroll = (e) => {
        if (window.scrollY > 200 && isScrolled === false && !isMobileSize) {
            isScrolled = true
            headerToggleAnimateDown()
            setTimeout(()=>{
                headerToggleAnimateDown()
                headerToggleInactive()
            }, 300)

        } else if (window.scrollY < 200 && isScrolled && !isMobileSize) {
            isScrolled = false
            headerToggleInactive()
            headerToggleAnimateUp()
            setTimeout(()=>{
                headerToggleAnimateUp()
            }, 300)
        }
    };

    function headerToggleAnimateDown() {
        headerBottom.classList.toggle("header__bottom-content_animate-down")
        headerSocial.classList.toggle("header__social_animate-down")
        headerLogoTop.classList.toggle("header__logo-top_animate-down")
        headerLogoBottom.classList.toggle("header__logo-bottom_animate-down")
        menu.classList.toggle("menu_animate-down")
    }
    function headerToggleAnimateUp() {
        headerBottom.classList.toggle("header__bottom-content_animate-up")
        headerSocial.classList.toggle("header__social_animate-up")
        headerLogoTop.classList.toggle("header__logo-top_animate-up")
        headerLogoBottom.classList.toggle("header__logo-bottom_animate-up")
        menu.classList.toggle("menu_animate-up")
    }
    function headerToggleInactive() {
        headerBottom.classList.toggle("header__bottom-content_inactive")
        headerSocial.classList.toggle("header__social_inactive")
        headerLogoTop.classList.toggle("header__logo-top_inactive")
        headerLogoBottom.classList.toggle("header__logo-bottom_inactive")
        menu.classList.toggle("menu_inactive")
    }

} animationHeader()

