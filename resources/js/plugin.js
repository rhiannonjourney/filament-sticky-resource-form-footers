window.addEventListener("load", function () {
    const filamentEditResourcePage = document.querySelector(".fi-resource-edit-record-page")
    const filamentCreateResourcePage = document.querySelector(".fi-resource-create-record-page")
    const filamentMainContent = document.querySelector(".fi-main");
    const filamentResourcePage = filamentCreateResourcePage ?? filamentEditResourcePage
    const theme = filamentData?.stickyResourceFormFooterTheme || 'default'

    if (!filamentResourcePage) {
        return;
    }

    const el = filamentResourcePage.querySelector(".fi-form-actions")

    const intersectionObserver = new IntersectionObserver(
        function ([e]) {
            if (e.intersectionRatio < 1) {
                filamentMainContent.classList.add('sticky-resource-form-footer-pinned')
                filamentMainContent.classList.add(`sticky-resource-form-footer-theme-${theme}`)
            } else {
                filamentMainContent.classList.remove('sticky-resource-form-footer-pinned')
                filamentMainContent.classList.remove(`sticky-resource-form-footer-theme-${theme}`)
            }


        },
        {threshold: [1]}
    )

    intersectionObserver.observe(el)

});
