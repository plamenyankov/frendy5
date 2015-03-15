<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Sign in as user.');
$I->am('user');
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


