<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AcceptanceHelper extends \Codeception\Module
{
    public function SignIn(){

        $I = $this->getModule('Laravel5');
        $I->amOnPage('/');
        $I->see('Вход');
        $I->click('Вход');
        $I->seeCurrentUrlEquals('/auth/login');
        $I->fillField('email', 'p.s.yankov@abv.bg');
        $I->fillField('password', '111111');
        $I->click('.login');
        $I->assertTrue(\Auth::check());
        $I->seeCurrentUrlEquals('');
        $I->see('plamen');
    }
    public function describeProduct(){
        $I = $this->getModule('Laravel5','Asserts','Db');
        $I->amOnPage('/admin/products/new');
        $I->fillField('brand', 'Nike');
        $I->fillField('model', 'air max');
        $I->selectOption('categories','1');
//        $I->attachFile('.imgUpload', 'macbook.png');
        $I->click('Въведи продукт');
    }
}
