<?php 
$I = new FunctionalTester($scenario);
$I->am('new user');
$I->wantTo('to register');
$I->amOnPage('/auth/register');
$I->see('Регистрация');
$I->fillField('name', 'Plamen2');
$I->fillField('email', 'v_i_p2@gyuvetch.bg');
$I->fillField('password', '7777777');
$I->fillField('password_confirmation', '7777777');
$I->click('Registarion!');
$I->seeRecord('users',[
    'email'=> 'v_i_p2@gyuvetch.bg'
]);
$I->assertTrue(\Auth::check());
$I->seeCurrentUrlEquals('/home');

