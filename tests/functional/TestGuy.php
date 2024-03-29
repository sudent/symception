<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\Symfony2;
use Codeception\Module\Doctrine2;
use Codeception\Module\TestHelper;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($role)
*/

class TestGuy extends \Codeception\AbstractGuy
{
    
    /**
     * Authenticates user for HTTP_AUTH 
     *
     * @param $username
     * @param $password
     * @see Symfony2::amHttpAuthenticated()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function amHttpAuthenticated($username, $password) {
        $this->scenario->condition('amHttpAuthenticated', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if any email were sent by last request
     *
     * @throws \LogicException
     * @see Symfony2::seeEmailIsSent()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeEmailIsSent() {
        $this->scenario->assertion('seeEmailIsSent', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Grabs a service from Symfony DIC container.
     * Recommended to use for unit testing.
     *
     * ``` php
     * <?php
     * $em = $I->grabServiceFromContainer('doctrine');
     * ?>
     * ```
     *
     * @param $service
     * @return mixed
     * @see Symfony2::grabServiceFromContainer()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function grabServiceFromContainer($service) {
        $this->scenario->action('grabServiceFromContainer', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Opens the page.
     * Requires relative uri as parameter
     *
     * Example:
     *
     * ``` php
     * <?php
     * // opens front page
     * $I->amOnPage('/');
     * // opens /register page
     * $I->amOnPage('/register');
     * ?>
     * ```
     *
     * @param $page
     * @see Framework::amOnPage()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function amOnPage($page) {
        $this->scenario->condition('amOnPage', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Perform a click on link or button.
     * Link or button are found by their names or CSS selector.
     * Submits a form if button is a submit type.
     *
     * If link is an image it's found by alt attribute value of image.
     * If button is image button is found by it's value
     * If link or button can't be found by name they are searched by CSS selector.
     *
     * The second parameter is a context: CSS or XPath locator to narrow the search.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * // simple link
     * $I->click('Logout');
     * // button of form
     * $I->click('Submit');
     * // CSS button
     * $I->click('#form input[type=submit]');
     * // XPath
     * $I->click('//form/*[@type=submit]')
     * // link in context
     * $I->click('Logout', '#nav');
     * ?>
     * ```
     * @param $link
     * @param $context
     * @see Framework::click()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function click($link, $context = null) {
        $this->scenario->action('click', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Check if current page contains the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->see('Logout'); // I can suppose user is logged in
     * $I->see('Sign Up','h1'); // I can suppose it's a signup page
     * $I->see('Sign Up','//body/h1'); // with XPath
     *
     * ```
     *
     * @param $text
     * @param null $selector
     * @see Framework::see()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function see($text, $selector = null) {
        $this->scenario->assertion('see', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Check if current page doesn't contain the text specified.
     * Specify the css selector to match only specific region.
     *
     * Examples:
     *
     * ```php
     * <?php
     * $I->dontSee('Login'); // I can suppose user is already logged in
     * $I->dontSee('Sign Up','h1'); // I can suppose it's not a signup page
     * $I->dontSee('Sign Up','//body/h1'); // with XPath
     * ```
     *
     * @param $text
     * @param null $selector
     * @see Framework::dontSee()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSee($text, $selector = null) {
        $this->scenario->action('dontSee', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if there is a link with text specified.
     * Specify url to match link with exact this url.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->seeLink('Logout'); // matches <a href="#">Logout</a>
     * $I->seeLink('Logout','/logout'); // matches <a href="/logout">Logout</a>
     *
     * ```
     *
     * @param $text
     * @param null $url
     * @see Framework::seeLink()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeLink($text, $url = null) {
        $this->scenario->assertion('seeLink', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if page doesn't contain the link with text specified.
     * Specify url to narrow the results.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->dontSeeLink('Logout'); // I suppose user is not logged in
     *
     * ```
     *
     * @param $text
     * @param null $url
     * @see Framework::dontSeeLink()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeLink($text, $url = null) {
        $this->scenario->action('dontSeeLink', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current uri contains a value
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl('home');
     * // to match: /users/1
     * $I->seeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * @see Framework::seeInCurrentUrl()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInCurrentUrl($uri) {
        $this->scenario->assertion('seeInCurrentUrl', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current uri does not contain a value
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl('/users/');
     * ?>
     * ```
     *
     * @param $uri
     * @see Framework::dontSeeInCurrentUrl()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInCurrentUrl($uri) {
        $this->scenario->action('dontSeeInCurrentUrl', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current url is equal to value.
     * Unlike `seeInCurrentUrl` performs a strict check.
     *
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals('/');
     * ?>
     *
     * @param $uri
     * @see Framework::seeCurrentUrlEquals()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeCurrentUrlEquals($uri) {
        $this->scenario->assertion('seeCurrentUrlEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current url is not equal to value.
     * Unlike `dontSeeInCurrentUrl` performs a strict check.
     *
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals('/');
     * ?>
     *
     * @param $uri
     * @see Framework::dontSeeCurrentUrlEquals()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeCurrentUrlEquals($uri) {
        $this->scenario->action('dontSeeCurrentUrlEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current url is matches a RegEx value
     *
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     *
     * @param $uri
     * @see Framework::seeCurrentUrlMatches()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeCurrentUrlMatches($uri) {
        $this->scenario->assertion('seeCurrentUrlMatches', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that current url does not match a RegEx value
     *
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches('~$/users/(\d+)~');
     * ?>
     *
     * @param $uri
     * @see Framework::dontSeeCurrentUrlMatches()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeCurrentUrlMatches($uri) {
        $this->scenario->action('dontSeeCurrentUrlMatches', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Takes a parameters from current URI by RegEx.
     * If no url provided returns full URI.
     *
     * ``` php
     * <?php
     * $user_id = $I->grabFromCurrentUrl('~$/user/(\d+)/~');
     * $uri = $I->grabFromCurrentUrl();
     * ?>
     * ```
     *
     * @param null $uri
     * @internal param $url
     * @return mixed
     * @see Framework::grabFromCurrentUrl()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function grabFromCurrentUrl($uri = null) {
        $this->scenario->action('grabFromCurrentUrl', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Assert if the specified checkbox is checked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked('#agree'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked('//form/input[@type=checkbox and @name=agree]');
     *
     * ```
     *
     * @param $checkbox
     * @see Framework::seeCheckboxIsChecked()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeCheckboxIsChecked($checkbox) {
        $this->scenario->assertion('seeCheckboxIsChecked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Assert if the specified checkbox is unchecked.
     * Use css selector or xpath to match.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked('#agree'); // I suppose user didn't agree to terms
     * $I->seeCheckboxIsChecked('#signup_form input[type=checkbox]'); // I suppose user didn't check the first checkbox in form.
     *
     * ```
     *
     * @param $checkbox
     * @see Framework::dontSeeCheckboxIsChecked()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeCheckboxIsChecked($checkbox) {
        $this->scenario->action('dontSeeCheckboxIsChecked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that an input field or textarea contains value.
     * Field is matched either by label or CSS or Xpath
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInField('Body','Type your comment here');
     * $I->seeInField('form textarea[name=body]','Type your comment here');
     * $I->seeInField('form input[type=hidden]','hidden_value');
     * $I->seeInField('#searchform input','Search');
     * $I->seeInField('//form/*[@name=search]','Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see Framework::seeInField()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInField($field, $value) {
        $this->scenario->assertion('seeInField', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that an input field or textarea doesn't contain value.
     * Field is matched either by label or CSS or Xpath
     * Example:
     *
     * ``` php
     * <?php
     * $I->dontSeeInField('Body','Type your comment here');
     * $I->dontSeeInField('form textarea[name=body]','Type your comment here');
     * $I->dontSeeInField('form input[type=hidden]','hidden_value');
     * $I->dontSeeInField('#searchform input','Search');
     * $I->dontSeeInField('//form/*[@name=search]','Search');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see Framework::dontSeeInField()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInField($field, $value) {
        $this->scenario->action('dontSeeInField', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Submits a form located on page.
     * Specify the form by it's css or xpath selector.
     * Fill the form fields values as array.
     *
     * Skipped fields will be filled by their values from page.
     * You don't need to click the 'Submit' button afterwards.
     * This command itself triggers the request to form's action.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->submitForm('#login', array('login' => 'davert', 'password' => '123456'));
     *
     * ```
     *
     * For sample Sign Up form:
     *
     * ``` html
     * <form action="/sign_up">
     *     Login: <input type="text" name="user[login]" /><br/>
     *     Password: <input type="password" name="user[password]" /><br/>
     *     Do you agree to out terms? <input type="checkbox" name="user[agree]" /><br/>
     *     Select pricing plan <select name="plan"><option value="1">Free</option><option value="2" selected="selected">Paid</option></select>
     *     <input type="submit" value="Submit" />
     * </form>
     * ```
     * I can write this:
     *
     * ``` php
     * <?php
     * $I->submitForm('#userForm', array('user' => array('login' => 'Davert', 'password' => '123456', 'agree' => true)));
     *
     * ```
     * Note, that pricing plan will be set to Paid, as it's selected on page.
     *
     * @param $selector
     * @param $params
     * @see Framework::submitForm()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function submitForm($selector, $params) {
        $this->scenario->action('submitForm', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Fills a text field or textarea with value.
     *
     * @param $field
     * @param $value
     * @see Framework::fillField()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function fillField($field, $value) {
        $this->scenario->action('fillField', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Selects an option in select tag or in radio button group.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->selectOption('form select[name=account]', 'Premium');
     * $I->selectOption('form input[name=payment]', 'Monthly');
     * $I->selectOption('//form/select[@name=account]', 'Monthly');
     * ?>
     * ```
     *
     * @param $select
     * @param $option
     * @see Framework::selectOption()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function selectOption($select, $option) {
        $this->scenario->action('selectOption', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Ticks a checkbox.
     * For radio buttons use `selectOption` method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->checkOption('#agree');
     * ?>
     * ```
     *
     * @param $option
     * @see Framework::checkOption()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function checkOption($option) {
        $this->scenario->action('checkOption', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Unticks a checkbox.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->uncheckOption('#notify');
     * ?>
     * ```
     *
     * @param $option
     * @see Framework::uncheckOption()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function uncheckOption($option) {
        $this->scenario->action('uncheckOption', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Attaches file from Codeception data directory to upload field.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // file is stored in 'tests/data/tests.xls'
     * $I->attachFile('prices.xls');
     * ?>
     * ```
     *
     * @param $field
     * @param $filename
     * @see Framework::attachFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function attachFile($field, $filename) {
        $this->scenario->action('attachFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * If your page triggers an ajax request, you can perform it manually.
     * This action sends a GET ajax request with specified params.
     *
     * See ->sendAjaxPostRequest for examples.
     *
     * @param $uri
     * @param $params
     * @see Framework::sendAjaxGetRequest()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function sendAjaxGetRequest($uri, $params = null) {
        $this->scenario->action('sendAjaxGetRequest', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * If your page triggers an ajax request, you can perform it manually.
     * This action sends a POST ajax request with specified params.
     * Additional params can be passed as array.
     *
     * Example:
     *
     * Imagine that by clicking checkbox you trigger ajax request which updates user settings.
     * We emulate that click by running this ajax request manually.
     *
     * ``` php
     * <?php
     * $I->sendAjaxPostRequest('/updateSettings', array('notifications' => true); // POST
     * $I->sendAjaxGetRequest('/updateSettings', array('notifications' => true); // GET
     *
     * ```
     *
     * @param $uri
     * @param $params
     * @see Framework::sendAjaxPostRequest()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function sendAjaxPostRequest($uri, $params = null) {
        $this->scenario->action('sendAjaxPostRequest', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     *
     * @see Framework::formatResponse()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function formatResponse($response) {
        $this->scenario->action('formatResponse', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Finds and returns text contents of element.
     * Element is searched by CSS selector, XPath or matcher by regex.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $heading = $I->grabTextFrom('h1');
     * $heading = $I->grabTextFrom('descendant-or-self::h1');
     * $value = $I->grabTextFrom('~<input value=(.*?)]~sgi');
     * ?>
     * ```
     *
     * @param $cssOrXPathOrRegex
     * @return mixed
     * @see Framework::grabTextFrom()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function grabTextFrom($cssOrXPathOrRegex) {
        $this->scenario->action('grabTextFrom', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Finds and returns field and returns it's value.
     * Searches by field name, then by CSS, then by XPath
     *
     * Example:
     *
     * ``` php
     * <?php
     * $name = $I->grabValueFrom('Name');
     * $name = $I->grabValueFrom('input[name=username]');
     * $name = $I->grabValueFrom('descendant-or-self::form/descendant::input[@name = 'username']');
     * ?>
     * ```
     *
     * @param $field
     * @return mixed
     * @see Framework::grabValueFrom()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function grabValueFrom($field) {
        $this->scenario->action('grabValueFrom', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if element exists on a page, matching it by CSS or XPath
     *
     * ``` php
     * <?php
     * $I->seeElement('.error');
     * $I->seeElement(//form/input[1]);
     * ?>
     * ```
     * @param $selector
     * @see Framework::seeElement()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeElement($selector) {
        $this->scenario->assertion('seeElement', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if element does not exist (or is visible) on a page, matching it by CSS or XPath
     *
     * ``` php
     * <?php
     * $I->dontSeeElement('.error');
     * $I->dontSeeElement(//form/input[1]);
     * ?>
     * ```
     * @param $selector
     * @see Framework::dontSeeElement()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeElement($selector) {
        $this->scenario->action('dontSeeElement', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if option is selected in select field.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     * @return mixed
     * @see Framework::seeOptionIsSelected()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeOptionIsSelected($select, $optionText) {
        $this->scenario->assertion('seeOptionIsSelected', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if option is not selected in select field.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected('#form input[name=payment]', 'Visa');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     * @return mixed
     * @see Framework::dontSeeOptionIsSelected()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeOptionIsSelected($select, $optionText) {
        $this->scenario->action('dontSeeOptionIsSelected', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Asserts that current page has 404 response status code.
     * @see Framework::seePageNotFound()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seePageNotFound() {
        $this->scenario->assertion('seePageNotFound', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that response code is equal to value provided.
     *
     * @param $code
     * @return mixed
     * @see Framework::seeResponseCodeIs()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeResponseCodeIs($code) {
        $this->scenario->assertion('seeResponseCodeIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Performs $em->flush();
     * @see Doctrine2::flushToDatabase()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function flushToDatabase() {
        $this->scenario->action('flushToDatabase', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Adds entity to repository and flushes. You can redefine it's properties with the second parameter.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->persistEntity(new \Entity\User, array('name' => 'Miles'));
     * $I->persistEntity($user, array('name' => 'Miles'));
     * ```
     *
     * @param $obj
     * @param array $values
     * @see Doctrine2::persistEntity()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function persistEntity($obj, $values = null) {
        $this->scenario->action('persistEntity', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Mocks the repository.
     *
     * With this action you can redefine any method of any repository.
     * Please, note: this fake repositories will be accessible through entity manager till the end of test.
     *
     * Example:
     *
     * ``` php
     * <?php
     *
     * $I->haveFakeRepository('Entity\User', array('findByUsername' => function($username) {  return null; }));
     *
     * ```
     *
     * This creates a stub class for Entity\User repository with redefined method findByUsername, which will always return the NULL value.
     *
     * @param $classname
     * @param array $methods
     * @see Doctrine2::haveFakeRepository()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function haveFakeRepository($classname, $methods = null) {
        $this->scenario->action('haveFakeRepository', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Saves data in repository
     * @see Doctrine2::haveInRepository()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function haveInRepository($repository, $data) {
        $this->scenario->action('haveInRepository', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Flushes changes to database executes a query defined by array.
     * It builds query based on array of parameters.
     * You can use entity associations to build complex queries.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeInRepository('User', array('name' => 'davert'));
     * $I->seeInRepository('User', array('name' => 'davert', 'Company' => array('name' => 'Codegyre')));
     * $I->seeInRepository('Client', array('User' => array('Company' => array('name' => 'Codegyre')));
     * ?>
     * ```
     *
     * Fails if record for given criteria can\'t be found,
     *
     * @param $entity
     * @param array $params
     * @see Doctrine2::seeInRepository()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInRepository($entity, $params = null) {
        $this->scenario->assertion('seeInRepository', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Flushes changes to database and performs ->findOneBy() call for current repository.
     *
     * @param $entity
     * @param array $params
     * @see Doctrine2::dontSeeInRepository()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInRepository($entity, $params = null) {
        $this->scenario->action('dontSeeInRepository', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Selects field value from repository.
     * It builds query based on array of parameters.
     * You can use entity associations to build complex queries.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $email = $I->grabFromRepository('User', 'email', array('name' => 'davert'));
     * ?>
     * ```
     *
     * @version 1.1
     * @param $entity
     * @param $field
     * @param array $params
     * @return array
     * @see Doctrine2::grabFromRepository()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function grabFromRepository($entity, $field, $params = null) {
        $this->scenario->action('grabFromRepository', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

