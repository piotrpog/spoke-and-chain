const urls = ['/', '/bikes', '/services', '/articles', '/contact']

urls.forEach((url) => {
    it(`should render correctly`, function () {
        cy.visit(url)
    })
})