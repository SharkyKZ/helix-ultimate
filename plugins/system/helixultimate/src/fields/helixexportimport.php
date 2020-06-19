<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Form\FormField;

/**
 * Form field for helix import
 *
 * @since	1.0.0
 */
class JFormFieldHelixexportimport extends FormField
{
	/**
	 * Field type
	 *
	 * @var		string	$type
	 * @since	1.0.0
	 */
	protected $type = 'Helixexportimport';

	/**
	 * Override getInput function form FormField
	 *
	 * @return	string	Field HTML string
	 * @since	1.0.0
	 */
	protected function getInput()
	{
		$input = Factory::getApplication()->input;
		$template_id = $input->get('id', 0, 'INT');

		$export_url = 'index.php?option=com_ajax&helix=ultimate&task=export&id=' . $template_id;

		$output  = '<a class="btn btn-success" id="btn-helix-ultimate-export-settings" rel="noopener noreferrer" target="_blank" href="' . $export_url . '">' . Text::_("HELIX_ULTIMATE_SETTINGS_EXPORT") . '</a>';
		$output .= '<textarea id="input-helix-ultimate-settings" rows="5"></textarea>';
		$output .= '<a id="btn-helix-ultimate-import-settings" class="btn btn-primary" rel="noopener noreferrer" data-template_id="' . $template_id . '" target="_blank" href="#">' . Text::_("HELIX_ULTIMATE_SETTINGS_IMPORT") . '</a>';

		return $output;
	}
}