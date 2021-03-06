<?php
/**
 * Helpers for WPUnit tests.
 *
 * @package Helper.
 */

namespace Helper;

use Helper\GFHelpers\PropertyHelper;

use function PHPSTORM_META\map;

/**
 * Class - Wpunit
 * All public methods declared in helper class will be available in $I
 */
class Wpunit extends \Codeception\Module {

	/**
	 * Get the default args for a text field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */

	public function getTextFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				'autocompleteAttribute',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'defaultValue',
				'description',
				'descriptionPlacement',
				'enablePasswordInput',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'inputName',
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'maxLength',
				'noDuplicates',
				'placeholder',
				'size',
				[ 'type' => 'text' ],
				'visibility',
			],
			$args,
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a textarea field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */
	public function getTextAreaFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'defaultValue',
				'description',
				'descriptionPlacement',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'inputName',
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'maxLength',
				'noDuplicates',
				'placeholder',
				'size',
				[ 'type' => 'textarea' ],
				'useRichTextEditor',
				'visibility',
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for an address field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */
	public function getAddressFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'addressType',
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				'copyValuesOptionDefault',
				'copyValuesOptionField',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'defaultCountry',
				'defaultProvince',
				'defaultState',
				'description',
				'descriptionPlacement',
				'enableAutocomplete',
				'enableCopyValuesOption',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'isRequired',
				'label',
				'labelPlacement',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'size',
				'subLabelPlacement',
				[
					'inputs' => [
						'fieldId' => 1,
						'count'   => 6,
						'keys'    => [ 'customLabel', 'defaultValue', 'isHidden', 'label', 'name', 'placeholder', 'autocompleteAttribute' ],
					],
				],
				[ 'type' => 'address' ],
				'visibility',
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a Captcha field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */
	public function getCaptchaFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'captchaLanguage',
				'captchaTheme',
				'captchaType',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'description',
				'descriptionPlacement',
				'displayOnly',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'simpleCaptchaBackgroundColor',
				'simpleCaptchaSize',
				'simpleCaptchaFontColor',
				'size',
				[ 'type' => 'captcha' ],
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a ChainedSelect field
	 *
	 * @param array $args .
	 * @return array
	 */
	public function getChainedSelectFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				'chainedSelectsAlignment',
				'chainedSelectsHideInactive',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'description',
				'descriptionPlacement',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'noDuplicates',
				'size',
				'subLabelPlacement',
				[ 'type' => 'chainedselect' ],
				'visibility',
				[
					'inputs' => [
						'fieldId' => 1,
						'count'   => 3,
						'keys'    => [ 'label', 'name' ],
					],
				],
				[
					'choices' => [
						[
							'text'       => '2015',
							'value'      => '2015',
							'isSelected' => null,
							'choices'    => [
								[
									'text'       => 'Acura',
									'value'      => 'Acura',
									'isSelected' => null,
									'choices'    => [
										[
											'text'       => 'ILX',
											'value'      => 'ILX',
											'isSelected' => null,
										],
										[
											'text'       => 'MDX',
											'value'      => 'MDX',
											'isSelected' => null,
										],
									],
								],
								[
									'text'       => 'Alfa Romeo',
									'value'      => 'Alfa Romeo',
									'isSelected' => null,
									'choices'    => [
										[
											'text'       => '4C',
											'value'      => '4c',
											'isSelected' => null,
										],
										[
											'text'       => '4C Spider',
											'value'      => '$C Spider',
											'isSelected' => null,
										],
									],
								],

							],
						],
						[
							'text'       => '2016',
							'value'      => '2016',
							'isSelected' => null,
							'choices'    => [
								[
									'text'       => 'Acura',
									'value'      => 'Acura',
									'isSelected' => null,
									'choices'    => [
										[
											'text'       => 'ILX',
											'value'      => 'ILX',
											'isSelected' => null,
										],
										[
											'text'       => 'MDX 2016',
											'value'      => 'MDX 2016',
											'isSelected' => null,
										],
									],
								],
								[
									'text'       => 'Alfa Romeo',
									'value'      => 'Alfa Romeo',
									'isSelected' => null,
									'choices'    => [
										[
											'text'       => '4C',
											'value'      => '4c',
											'isSelected' => null,
										],
										[
											'text'       => '4C Spider',
											'value'      => '$C Spider',
											'isSelected' => null,
										],
									],
								],
							],
						],
					],
				],
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a Checkbox field
	 *
	 * @param array $args .
	 * @return array
	 */
	public function getCheckboxFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'description',
				'descriptionPlacement',
				'enablePrice',
				'enableChoiceValue',
				'enableSelectAll',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'inputName',
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'size',
				[ 'type' => 'checkbox' ],
				'visibility',
				[
					'inputs' => [
						'fieldId' => 1,
						'count'   => 3,
						'keys'    => [ 'label', 'name' ],
					],
				],
				[
					'choices' => [
						[
							'text'       => 'First Choice',
							'value'      => 'first',
							'isSelected' => true,
						],
						[
							'text'       => 'Second Choice',
							'value'      => 'second',
							'isSelected' => true,
						],
						[
							'text'       => 'Third Choice',
							'value'      => 'third',
							'isSelected' => false,
						],
					],
				],
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a consent field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */
	public function getConsentFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'checkboxLabel',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'description',
				'descriptionPlacement',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'inputName',
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				[ 'type' => 'consent' ],
				'visibility',
				[
					'inputs' => [
						[
							'id'    => '1.1',
							'label' => 'Conset',
						],
						[
							'id'       => '1.2',
							'label'    => 'Text',
							'isHidden' => true,
						],
						[
							'id'       => '1.3',
							'label'    => 'Description',
							'isHidden' => 1,
						],
					],
				],
				[
					'choices' => [
						[
							'text'       => 'Checked',
							'value'      => 1,
							'isSelected' => null,
						],
					],
				],
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a consent field.
	 *
	 * @param array $args .
	 * @return PropertyHelper
	 */
	public function getDateFieldHelper( array $args = [] ) : PropertyHelper {
		$keys = $this->merge_default_args(
			[
				'adminLabel',
				'adminOnly',
				'allowsPrepopulate',
				'calendarIconType',
				'calendarIconUrl',
				[ 'conditionalLogic' => null ],
				'cssClass',
				'dateFormat',
				'dateType',
				'defaultValue',
				'description',
				'descriptionPlacement',
				'errorMessage',
				'formId',
				[ 'id' => 1 ],
				'inputName',
				'isRequired',
				'label',
				'layoutGridColumnSpan',
				'layoutSpacerGridColumnSpan',
				'noDuplicates',
				'placeholder',
				'size',
				'subLabelPlacement',
				[ 'type' => 'date' ],
				'visibility',
				[
					'inputs' => [
						'fieldId' => 1,
						'count'   => 3,
						'keys'    => [ 'customLabel', 'defaultValue', 'label', 'placeholder' ],
					],
				],
			],
			$args
		);
		return new PropertyHelper( $keys );
	}

	/**
	 * Get the default args for a form.
	 *
	 * @return array
	 */
	public function getFormDefaultArgs() : array {
		return [
			'button'                     => [
				'conditionalLogic' => [
					'actionType' => 'hide',
					'logicType'  => 'any',
					'rules'      => [
						[
							'fieldId'  => 1,
							'operator' => 'is',
							'value'    => 'value2',
						],
					],
				],
				'imageUrl'         => 'https://example.com',
				'text'             => 'Submit',
				'type'             => 'text',
			],
			'confirmations'              => [
				'5cfec9464e7d7' => [
					'id'          => '5cfec9464e7d7',
					'isDefault'   => true,
					'message'     => 'Thanks for contacting us! We will get in touch with you shortly.',
					'name'        => 'Default Confirmation',
					'pageId'      => 1,
					'queryString' => 'text={Single Line Text:1}&textarea={Text Area:2}',
					'type'        => 'message',
					'url'         => 'https://example.com/',
				],
			],
			'cssClass'                   => 'css-class-1 css-class-2',
			'customRequiredIndicator'    => '(Required)',
			'date_created'               => '2019-06-10 21:19:02', // This is disregarded by GFAPI::add_form().
			'descriptionPlacement'       => 'below',
			'enableAnimation'            => false,
			'enableHoneypot'             => false,
			'firstPageCssClass'          => 'first-page-css-class',
			'is_active'                  => true,
			'is_trash'                   => false,
			'labelPlacement'             => 'top_label',
			'lastPageButton'             => [
				'imageUrl' => 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png',
				'text'     => 'Previous',
				'type'     => 'text',
			],
			'limitEntries'               => true,
			'limitEntriesCount'          => 100,
			'limitEntriesMessage'        => 'Only 100 entries are permitted.',
			'limitEntriesPeriod'         => 'year',
			'markupVersion'              => 2,
			'nextFieldId'                => 3,
			'notifications'              => [
				'5cfec9464e529' => [
					'bcc'               => 'bcc-email@example.com',
					'conditionalLogic'  => [
						'actionType' => 'show',
						'logicType'  => 'any',
						'rules'      => [
							[
								'fieldId'  => 1,
								'operator' => 'is',
								'value'    => 'value1',
							],
							[
								'fieldId'  => 1,
								'operator' => 'is',
								'value'    => 'value2',
							],
						],
					],
					'disableAutoformat' => false,
					'enableAttachments' => false,
					'event'             => 'form_submission',
					'from'              => 'from-email@example.com',
					'fromName'          => 'WordPress',
					'id'                => '5cfec9464e529',
					'isActive'          => true,
					'message'           => '{all_fields}',
					'name'              => 'Admin Notification',
					'replyTo'           => 'replyto-email@example.com',
					'routing'           => [
						[
							'fieldId'  => 1,
							'operator' => 'is',
							'value'    => 'value1',
							'email'    => 'email1@example.com',
						],
						[
							'fieldId'  => 1,
							'operator' => 'is',
							'value'    => 'value2',
							'email'    => 'email2@example.com',
						],
					],
					'service'           => 'wordpress',
					'subject'           => 'New submission from {form_title}',
					'to'                => '{admin_email}',
					'toType'            => 'email',
				],
			],
			'pagination'                 => [
				'backgroundColor'                     => '#c6df9c',
				'color'                               => '#197b30',
				'display_progressbar_on_confirmation' => true,
				'pages'                               => [ 'page-1-name', 'page-2-name' ],
				'progressbar_completion_text'         => 'Completed!',
				'style'                               => 'custom',
				'type'                                => 'percentage',
			],
			'postAuthor'                 => 1,
			'postCategory'               => 1,
			'postContentTemplate'        => 'Post content template',
			'postContentTemplateEnabled' => false,
			'postFormat'                 => '0',
			'postStatus'                 => 'publish',
			'postTitleTemplate'          => 'Post title template',
			'postTitleTemplateEnabled'   => false,
			'requireLogin'               => false,
			'requireLoginMessage'        => 'You must be logged in to submit this form.',
			'requiredIndicator'          => 'asterisk',
			'save'                       => [
				'button'  => [
					'text' => 'Save and Continue Later',
				],
				'enabled' => true,
			],
			'scheduleEnd'                => '01/01/2030',
			'scheduleEndAmpm'            => 'pm',
			'scheduleEndHour'            => 10,
			'scheduleEndMinute'          => 45,
			'scheduleForm'               => true,
			'scheduleMessage'            => 'Schedule message.',
			'schedulePendingMessage'     => 'Schedule pending message.',
			'scheduleStart'              => '01/01/2020',
			'scheduleStartAmpm'          => 'am',
			'scheduleStartHour'          => 9,
			'scheduleStartMinute'        => 30,
			'subLabelPlacement'          => 'below',
			'useCurrentUserAsAuthor'     => true,
			'validationSummary'          => true,
			'version'                    => '2.5.0.1',
		];
	}

	/**
	 * Converts a string value to its Enum equivalent
	 *
	 * @param string $enumName Name of the Enum registered in GraphQL.
	 * @param string $value .
	 * @return string
	 */
	public function get_enum_for_value( string $enumName, string $value ) : string {
		$typeRegistry = \WPGraphQL::get_type_registry();
		return $typeRegistry->get_type( $enumName )->serialize( $value );
	}

	public function merge_default_args( $default, $custom = [] ) {
		array_walk(
			$default,
			function( &$value ) use ( $custom ) {
				if ( empty( $custom ) ) {
					return;
				}

				if ( is_string( $value ) && ! empty( $custom[ $value ] ) ) {
					$value = [ $value => $custom[ $value ] ];
					return;
				}

				if ( is_array( $value ) && ! empty( $custom[ array_key_first( $value ) ] ) ) {
					$value[ array_key_first( $value ) ] = $custom[ array_key_first( $value ) ];
					return;
				}
			}
		);
		return $default;
	}
}
