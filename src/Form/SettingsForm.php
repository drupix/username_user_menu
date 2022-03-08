<?php
/**
 * @file
 * Contains Drupal\username_user_menu\Form\SettingsForm.
 */
namespace Drupal\username_user_menu\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class SettingsForm extends ConfigFormBase {

	/**
	 * {@inheritdoc}
	 */
	protected function getEditableConfigNames() {
		return [
				'username_user_menu.settings',
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFormId() {
		return 'username_user_menu_settings_form';
	}

	/**
	 * {@inheritdoc}
	 */
	public function buildForm(array $form, FormStateInterface $form_state) {
	  $form = parent::buildForm($form, $form_state);

		$config = $this->config('username_user_menu.settings');

		$form['user_menu'] = array(
			'#type' => 'fieldset',
			'#title' => $this->t('User menu options'),
		);

		// @todo: Make config to display only first letter, capitalize, etc.
		$form['user_menu']['capitalize'] = [
			'#title' => $this->t('Capitalize user name'),
			'#type' => 'checkbox',
			'#default_value' => $config->get('username.capitalize'),
			// @todo:
			// '#description' => $this->t('Add some description here.'),
		];

		$form['user_menu']['abbreviate'] = [
			'#title' => $this->t('Abbreviate user name'),
			'#type' => 'checkbox',
			'#default_value' => $config->get('username.abbreviate'),
			// @todo:
			// '#description' => $this->t('Add some description here.'),
		];

		return $form;
	}

	/**
	 * {@inheritdoc}
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
	  //$values = $form_state->getValues();

		$this->config('username_user_menu.settings')
  		->set('username.capitalize', trim($form_state->getValue('capitalize')))
  		->set('username.abbreviate', trim($form_state->getValue('abbreviate')))
		  ->save();

		parent::submitForm($form, $form_state);
	}
}
