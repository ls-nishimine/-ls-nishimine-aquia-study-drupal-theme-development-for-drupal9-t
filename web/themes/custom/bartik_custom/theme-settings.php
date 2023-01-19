<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function bartik_custom_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
  $form['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#description' => t('TwitterアカウントのURLを入力します。'),
    '#default_value' => theme_get_setting( 'textfield' ),
  );
}