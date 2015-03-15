<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('to add new product');
$I->SignIn();
$I->assertTrue(\Auth::check());
$I->amOnPage('/admin/products');
$I->seeCurrentUrlEquals('/admin/products');
$I->click('Нов Продукт');
$I->seeInCurrentUrl('/admin/products/new');
$I->see('Нов продукт');
$I->describeProduct();
$I->seeRecord('products',[
    'brand'=> 'Nike',
    'model'=> 'air max'
]);
$I->see('Продукта е успешно въведен');
$I->seeCurrentUrlEquals('/admin/products');
//$I->see('Nike');
$guest = $I->haveFriend('Guest');
$guest->does(function(AcceptanceTester $I) {
    $I->amOnPage('');
    $I->see('Nike', '.product');
});
