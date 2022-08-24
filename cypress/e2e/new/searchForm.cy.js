it(`search form should work correctly`, function () {
    cy.visit('/search-test')
    cy.get('#searchText').type('Welcome')
    cy.get('#submit').click()
    cy.get('.result-link').contains('Welcome Courtney Duncan')
    cy.get('.result-link').contains('Adventure Journal on the Pine Mountain 2').should('not.exist')
})