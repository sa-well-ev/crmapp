<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See that landing page is up');
$I->amOnPage('/');
$I->see('We are in CRM');