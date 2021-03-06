<?php  //[STAMP] 4870761a288d401f8cbb645fe3797536
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait WpunitTesterActionsActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the absolute path to the plugins directory.
     *
     * The value will first look at the `WP_PLUGIN_DIR` constant, then the `pluginsFolder` configuration parameter
     * and will, finally, look in the default path from the WordPress root directory.
     *
     * @example
     * ```php
     * $plugins = $this->getPluginsFolder();
     * $hello = $this->getPluginsFolder('hello.php');
     * ```
     *
     * @param string $path A relative path to append to te plugins directory absolute path.
     *
     * @return string The absolute path to the `pluginsFolder` path or the same with a relative path appended if `$path`
     *                is provided.
     *
     * @throws ModuleConfigException If the path to the plugins folder does not exist.
     * @see \Codeception\Module\WPLoader::getPluginsFolder()
     */
    public function getPluginsFolder($path = "") {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getPluginsFolder', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Accessor method to get the object storing the factories for things.
     * This methods gives access to the same factories provided by the
     * [Core test suite](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/).
     *
     * @return FactoryStore A factory store, proxy to get hold of the Core suite object
     *                                                     factories.
     *
     * @example
     * ```php
     * $postId = $I->factory()->post->create();
     * $userId = $I->factory()->user->create(['role' => 'administrator']);
     * ```
     *
     * @link https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/
     * @see \Codeception\Module\WPLoader::factory()
     */
    public function factory() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('factory', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the absolute path to the WordPress content directory.
     *
     * @example
     * ```php
     * $content = $this->getContentFolder();
     * $themes = $this->getContentFolder('themes');
     * $twentytwenty = $this->getContentFolder('themes/twentytwenty');
     * ```
     *
     * @param string $path An optional path to append to the content directory absolute path.
     *
     * @return string The content directory absolute path, or a path in it.
     *
     * @throws ModuleConfigException If the path to the content directory cannot be resolved.
     * @see \Codeception\Module\WPLoader::getContentFolder()
     */
    public function getContentFolder($path = "") {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getContentFolder', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Starts the debug of all WordPress filters and actions.
     *
     * The method hook on `all` filters and actions to debug their value.
     *
     * @example
     * ```php
     * // Start debugging all WordPress filters and action final and initial values.
     * $this->startWpFiltersDebug();
     *
     * // Run some code firing filters and debug them.
     *
     * // Stop debugging all WordPress filters and action final and initial values.
     * $this->stopWpFiltersDebug();
     * ```
     *
     * @param callable|null $format A callback function to format the arguments debug output; the callback will receive
     *                              the array of arguments as input.
     *
     * @return void
     * @see \Codeception\Module\WPLoader::startWpFiltersDebug()
     */
    public function startWpFiltersDebug(?callable $format = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('startWpFiltersDebug', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Stops the debug of all WordPress filters and actions.
     *
     * @example
     * ```php
     * // Start debugging all WordPress filters and action final and initial values.
     * $this->startWpFiltersDebug();
     *
     * // Run some code firing filters and debug them.
     *
     * // Stop debugging all WordPress filters and action final and initial values.
     * $this->stopWpFiltersDebug();
     * ```
     *
     * @return void
     * @see \Codeception\Module\WPLoader::stopWpFiltersDebug()
     */
    public function stopWpFiltersDebug() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('stopWpFiltersDebug', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Debugs a single WordPress filter initial call using Codeception debug functions.
     *
     * The output will show following the selected output verbosity (`--debug` and `-vvv` CLI options).
     *
     * @example
     * ```php
     * // Start debugging all WordPress filters initial value.
     * add_filter('all', [$this,'debugWpFilterInitial']);
     *
     * // Run some code firing filters and debug them.
     *
     * // Stop debugging all WordPress filters initial value.
     * remove_filter('all', [$this,'debugWpFilterInitial']);
     * ```
     *
     * @param mixed ...$args The filter call arguments.
     *
     * @return mixed The filter input value, unchanged.
     * @see \Codeception\Module\WPLoader::debugWpFilterInitial()
     */
    public function debugWpFilterInitial($args = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('debugWpFilterInitial', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Debugs a single WordPress filter final call using Codeception debug functions.
     *
     * The output will show following the selected output verbosity (`--debug` and `-vvv` CLI options).
     *
     * @example
     * ```php
     * // Start debugging all WordPress filters final value.
     * add_filter('all', [$this,'debugWpFilterFinal']);
     *
     * // Run some code firing filters and debug them.
     *
     * // Stop debugging all WordPress filters final value.
     * remove_filter('all', [$this,'debugWpFilterFinal']);
     * ```
     *
     * @param mixed ...$args The filter call arguments.
     *
     * @return mixed The filter input value, unchanged.
     * @see \Codeception\Module\WPLoader::debugWpFilterFinal()
     */
    public function debugWpFilterFinal($args = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('debugWpFilterFinal', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Debugs a single WordPress action initial call using Codeception debug functions.
     *
     * The output will show following the selected output verbosity (`--debug` and `-vvv` CLI options).
     *
     * @example
     * ```php
     * // Start debugging all WordPress actions initial value.
     * add_action('all', [$this,'debugWpActionInitial']);
     *
     * // Run some code firing actions and debug them.
     *
     * // Stop debugging all WordPress actions initial value.
     * remove_action('all', [$this,'debugWpActionInitial']);
     * ```
     *
     * @param mixed ...$args The action call arguments.
     *
     * @return void
     * @see \Codeception\Module\WPLoader::debugWpActionInitial()
     */
    public function debugWpActionInitial($args = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('debugWpActionInitial', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Debugs a single WordPress action final call using Codeception debug functions.
     *
     * The output will show following the selected output verbosity (`--debug` and `-vvv` CLI options).
     *
     * @example
     * ```php
     * // Start debugging all WordPress actions final value.
     * add_action('all', [$this,'debugWpActionFinal']);
     *
     * // Run some code firing actions and debug them.
     *
     * // Stop debugging all WordPress actions final value.
     * remove_action('all', [$this,'debugWpActionFinal']);
     * ```
     *
     * @param mixed ...$args The action call arguments.
     *
     * @return void
     * @see \Codeception\Module\WPLoader::debugWpActionFinal()
     */
    public function debugWpActionFinal($args = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('debugWpActionFinal', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a text field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getTextFieldHelper()
     */
    public function getTextFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getTextFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a textarea field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getTextAreaFieldHelper()
     */
    public function getTextAreaFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getTextAreaFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for an address field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getAddressFieldHelper()
     */
    public function getAddressFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getAddressFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a Captcha field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getCaptchaFieldHelper()
     */
    public function getCaptchaFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getCaptchaFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a ChainedSelect field
	 *
	 * @param array $args .
	 * @return array
     * @see \Helper\Wpunit::getChainedSelectFieldHelper()
     */
    public function getChainedSelectFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getChainedSelectFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a Checkbox field
	 *
	 * @param array $args .
	 * @return array
     * @see \Helper\Wpunit::getCheckboxFieldHelper()
     */
    public function getCheckboxFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getCheckboxFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a consent field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getConsentFieldHelper()
     */
    public function getConsentFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getConsentFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a consent field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
     * @see \Helper\Wpunit::getDateFieldHelper()
     */
    public function getDateFieldHelper(array $args = []): \Helper\GFHelpers\PropertyHelper {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getDateFieldHelper', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the default args for a form.
	 *
	 * @return array
     * @see \Helper\Wpunit::getFormDefaultArgs()
     */
    public function getFormDefaultArgs(): array {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getFormDefaultArgs', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Converts a string value to its Enum equivalent
	 *
	 * @param string $enumName Name of the Enum registered in GraphQL.
	 * @param string $value .
	 * @return string
     * @see \Helper\Wpunit::get_enum_for_value()
     */
    public function get_enum_for_value(string $enumName, string $value): string {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('get_enum_for_value', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Helper\Wpunit::merge_default_args()
     */
    public function merge_default_args($default, $custom = []) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('merge_default_args', func_get_args()));
    }
}
