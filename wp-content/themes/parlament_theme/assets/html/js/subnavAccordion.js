function subnavAccordion() {
    const navCatalogNode = document.querySelector(".nav__catalog")
    const navItemNode = navCatalogNode.querySelectorAll(".nav__item")
    let openedTabs = ''

    navItemNode.forEach((e) => {
        const subNavContent = e.querySelector('.subnav')
        const navItemArrow = e.querySelector('.product-category__arrow')

        e.addEventListener('click', () => {
            if (subNavContent.classList.contains('subnav_open')) {
                closeTab(subNavContent)
            } else {
                openTab(subNavContent)
            }
            function closeTab (tab) {
                let arrow = tab.parentNode.querySelector(".product-category__arrow")
                arrow.style.rotate = ""
                tab.style.height = ''
                openedTabs = ''
            }
            function openTab (tab) {
                if (openedTabs) {
                    openedTabs.classList.toggle('subnav_open')
                    openedTabs.previousElementSibling.classList.toggle('nav__item_active')
                    closeTab(openedTabs)
                }
                let arrow = tab.parentNode.querySelector(".product-category__arrow")
                arrow.style.rotate = "180deg"
                openedTabs = subNavContent
                tab.style.height = subNavContent.scrollHeight + 'px'
            }
            e.classList.toggle('nav__item_active')
            subNavContent.classList.toggle('subnav_open')
        })
    })
} subnavAccordion()

