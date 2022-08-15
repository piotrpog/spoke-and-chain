<?php
namespace crafttests\acceptance;
use Craft;
use AcceptanceTester;

class CheckPagesCest
{
   /**
    * @dataProvider urlsProvider
    */
    public function rendersCorrectly(AcceptanceTester $I, \Codeception\Example $singleUrl)
    {
        $I->amOnPage($singleUrl['url']);
        $I->seeResponseCodeIs(200);
    }

    protected function urlsProvider()
    {
        return [
            ['url' => '/'],
            ['url' => '/bikes'],
            ['url' => '/services'],
            ['url' => '/articles'],
            ['url' => '/contact'],
        ];
    }
}