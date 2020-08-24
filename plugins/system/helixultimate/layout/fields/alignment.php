<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

/**
 * Text field.
 *
 * @since	 1.0.0
 */
class HelixultimateFieldAlignment
{
	/**
	 * Get input for the field.
	 *
	 * @param	string	$key
	 * @param	array	$attr
	 *
	 * @return	string
	 * @since	1.0.0
	 */
	public static function getInput($key, $attr)
	{
		$value = !empty($attr['value']) ? $attr['value'] : (isset($attr['default']) ? $attr['default'] : '');
		$dataAttrs = '';

		if (!empty($attr['data']))
		{
			foreach ($attr['data'] as $dataName => $dataValue)
			{
				$dataAttrs .= ' data-' . $dataName . '=' . $dataValue;
			}
		}

		$output  = '<div class="control-group hu-field-alignment">';
		$output .= '<label>' . $attr['title'] . '</label>';

		if (!empty($attr['desc']))
		{
			$output .= '<span class="hu-help-icon hu-ml-2 fas fa-info-circle"></span>';
			$output .= '<p class="control-help">' . $attr['desc'] . '</p>';
		}

		$output .= '<div class="controls">';
		$output .= '<div class="hu-switcher hu-switcher-inline hu-switcher-style-tab hu-switcher-style-tab-sm">';
		$output 	.= '<div class="hu-action-group">';
		$output 		.= '<span data-value="left" class="hu-switcher-action ' . ($value === 'left' ? 'active' : '') . '" role="button"><span class="fas fa-align-left"></span></span>';
		$output 		.= '<span data-value="center" class="hu-switcher-action ' . ($value === 'center' ? 'active' : '') . '" role="button"><span class="fas fa-align-center"></span></span>';
		$output 		.= '<span data-value="right" class="hu-switcher-action ' . ($value === 'right' ? 'active' : '') . '" role="button"><span class="fas fa-align-right"></span></span>';
		$output 		.= '<span data-value="justify" class="hu-switcher-action ' . ($value === 'justify' ? 'active' : '') . '" role="button"><span class="fas fa-align-justify"></span></span>';
		$output 	.= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		$output .= '<input type="hidden" ' . $dataAttrs . '" name="' . $key . '" value="' . $value . '" />';

		$output .= '</div>';

		return $output;
	}

}
