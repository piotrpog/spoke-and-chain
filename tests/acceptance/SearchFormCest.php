<?php
namespace crafttests\acceptance;
use Craft;
use AcceptanceTester;

class SearchFormCest
{
    public function testSearch(AcceptanceTester $I)
    {
        $I->amOnPage('search-test');
        $I->fillField('#searchText', 'Welcome');
        $I->click('submit');
        $I->see('Welcome Courtney Duncan', '.result-link');
        $I->dontSee('Adventure Journal on the Pine Mountain 2', '.result-link');
    }
}