<?php

use \Codeception\Util\Locator;

$I = new TestGuy($scenario);
$I->wantTo('Test demo page');
$I->amOnPage('/demo');
$I->see('Hello World', Locator::href('/demo/hello/World'));
