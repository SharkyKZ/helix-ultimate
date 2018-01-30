<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die ();

function column_grid_system($device = 'lg')
{
	$col = array(0 => 'Inherit');
	for($i = 1; $i <= 12; $i++)
	{
		if($device == 'xs')
		{
			$col[$i] = 'col-'.$i;
		}
		else
		{
			$col[$i] = 'col-'.$device.'-'.$i;
		}
	}

	return $col;
}

$rowSettings = array(
	'type'=>'general',
	'title'=>'',
	'attr'=>array(

		'name' => array(
			'type'		=> 'text',
			'title'		=> JText::_('HELIX_SECTION_TITLE'),
			'desc'		=> JText::_('HELIX_SECTION_TITLE_DESC')
		),
		'background_color' => array(
			'type'		=> 'color',
			'title'		=> JText::_('HELIX_SECTION_BACKGROUND_COLOR'),
			'desc'		=> JText::_('HELIX_SECTION_BACKGROUND_COLOR_DESC')
		),
		'color' => array(
			'type'		=> 'color',
			'title'		=> JText::_('HELIX_SECTION_TEXT_COLOR'),
			'desc'		=> JText::_('HELIX_SECTION_TEXT_COLOR_DESC')
		),
		'background_image' => array(
			'type'		=> 'media',
			'title'		=> JText::_('HELIX_SECTION_BACKGROUND_IMAGE'),
			'desc'		=> JText::_('HELIX_SECTION_BACKGROUND_IMAGE_DESC')
		),
		'background_repeat'=>array(
			'type'=>'select',
			'title'=>JText::_('HELIX_BG_REPEAT'),
			'desc'=>JText::_('HELIX_BG_REPEAT_DESC'),
			'values'=>array(
				'no-repeat'=>JText::_('HELIX_BG_REPEAT_NO'),
				'repeat'=>JText::_('HELIX_BG_REPEAT_ALL'),
				'repeat-x'=>JText::_('HELIX_BG_REPEAT_HORIZ'),
				'repeat-y'=>JText::_('HELIX_BG_REPEAT_VERTI'),
				'inherit'=>JText::_('HELIX_BG_REPEAT_INHERIT'),
			)
		),
		'background_size' => array(
			'type'		=> 'select',
			'title'=>JText::_('HELIX_BG_SIZE'),
			'desc'=>JText::_('HELIX_BG_SIZE_DESC'),
			'values'=>array(
				'cover'=>JText::_('HELIX_BG_COVER'),
				'contain'=>JText::_('HELIX_BG_CONTAIN'),
				'inherit'=>JText::_('HELIX_BG_INHERIT'),
			)
		),
		'background_attachment'=>array(
			'type'=>'select',
			'title'=>JText::_('HELIX_BG_ATTACHMENT'),
			'desc'=>JText::_('HELIX_BG_ATTACHMENT_DESC'),
			'values'=>array(
				'fixed'=>JText::_('HELIX_BG_ATTACHMENT_FIXED'),
				'scroll'=>JText::_('HELIX_BG_ATTACHMENT_SCROLL'),
				'inherit'=>JText::_('HELIX_BG_ATTACHMENT_INHERIT'),
			)
		),
		'background_position' => array(
			'type'		=> 'select',
			'title'=>JText::_('HELIX_BG_POSITION'),
			'desc'=>JText::_('HELIX_BG_POSITION_DESC'),
			'values'=>array(
				'0 0'=>JText::_('HELIX_BG_POSITION_LEFT_TOP'),
				'0 50%'=>JText::_('HELIX_BG_POSITION_LEFT_CENTER'),
				'0 100%'=>JText::_('HELIX_BG_POSITION_LEFT_BOTTOM'),
				'50% 0'=>JText::_('HELIX_BG_POSITION_CENTER_TOP'),
				'50% 50%'=>JText::_('HELIX_BG_POSITION_CENTER_CENTER'),
				'50% 100%'=>JText::_('HELIX_BG_POSITION_CENTER_BOTTOM'),
				'100% 0'=>JText::_('HELIX_BG_POSITION_RIGHT_TOP'),
				'100% 50%'=>JText::_('HELIX_BG_POSITION_RIGHT_CENTER'),
				'100% 100%'=>JText::_('HELIX_BG_POSITION_RIGHT_BOTTOM'),
			)
		),
		'link_color' => array(
			'type'		=> 'color',
			'title'		=> JText::_('HELIX_LINK_COLOR'),
			'desc'		=> JText::_('HELIX_LINK_COLOR_DESC')
		),
		'link_hover_color' => array(
			'type'		=> 'color',
			'title'		=> JText::_('HELIX_LINK_HOVER_COLOR'),
			'desc'		=> JText::_('HELIX_LINK_HOVER_COLOR_DESC')
		),
		'hide_mobile' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_MOBILE'),
			'desc'		=> JText::_('HELIX_HIDDEN_MOBILE_DESC')
		),
		'hide_large_mobile' => array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_LARGE_MOBILE'),
			'desc'		=> JText::_('HELIX_HIDDEN_LARGE_MOBILE_DESC')
		),
		'hide_tablet' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_TABLET'),
			'desc'		=> JText::_('HELIX_HIDDEN_TABLET_DESC')
		),
		'hide_small_desktop' => array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_SMALL_DESKTOP'),
			'desc'		=> JText::_('HELIX_HIDDEN_SMALL_DESKTOP_DESC')
		),
		'hide_desktop' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_DESKTOP'),
			'desc'		=> JText::_('HELIX_HIDDEN_DESKTOP_DESC')
		),
		'padding' => array(
			'type'		=> 'text',
			'title'		=> JText::_('HELIX_PADDING'),
			'desc'		=> JText::_('HELIX_PADDING_DESC')
		),
		'margin' => array(
			'type'		=> 'text',
			'title'		=> JText::_('HELIX_MARGIN'),
			'desc'		=> JText::_('HELIX_MARGIN_DESC')
		),
		'fluidrow' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_ROW_FULL_WIDTH'),
			'desc'		=> JText::_('HELIX_ROW_FULL_WIDTH_DESC')
		),
		'custom_class' => array(
			'type'		=> 'text',
			'title'		=> JText::_('HELIX_CUSTOM_CLASS'),
			'desc'		=> JText::_('HELIX_CUSTOM_CLASS_DESC'),
			'std'		=> ''
		),
	)
);

$columnSettings = array(
	'type'=>'general',
	'title'=>'',
	'attr'=>array(

		'column_type' => array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_COMPONENT'),
			'desc'		=> JText::_('HELIX_COMPONENT_DESC'),
			'std'=>'',
		),
		'name' => array(
			'type'		=> 'select',
			'title'		=> JText::_('HELIX_MODULE_POSITION'),
			'desc'		=> JText::_('HELIX_MODULE_POSITION_DESC'),
			'values'	=> array(),
			'std'=>'none',
		),
		'hide_mobile' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_MOBILE'),
			'desc'		=> JText::_('HELIX_HIDDEN_MOBILE_DESC'),
			'std'		=> '',
		),
		'hide_large_mobile' => array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_LARGE_MOBILE'),
			'desc'		=> JText::_('HELIX_HIDDEN_LARGE_MOBILE_DESC'),
			'std'		=> '',
		),
		'hide_tablet' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_TABLET'),
			'desc'		=> JText::_('HELIX_HIDDEN_TABLET_DESC'),
			'std'		=> '',
		),
		'hide_small_desktop' => array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_SMALL_DESKTOP'),
			'desc'		=> JText::_('HELIX_HIDDEN_SMALL_DESKTOP_DESC'),
			'std'		=> '',
		),
		'hide_desktop' 		=> array(
			'type'		=> 'checkbox',
			'title'		=> JText::_('HELIX_HIDDEN_DESKTOP'),
			'desc'		=> JText::_('HELIX_HIDDEN_DESKTOP_DESC'),
			'std'		=> '',
		),
		'xl_col' 		=> array(
			'type'		=> 'select',
			'title'		=> JText::_('HELIX_DESKTOP_LAYOUT'),
			'desc'		=> JText::_('HELIX_DESKTOP_LAYOUT_DESC'),
			'values'	=> column_grid_system('xl'),
			'std'		=> 0,
		),
		'md_col' 		=> array(
			'type'		=> 'select',
			'title'		=> JText::_('HELIX_TABLET_LAYOUT'),
			'desc'		=> JText::_('HELIX_TABLET_LAYOUT_DESC'),
			'values'	=> column_grid_system('md'),
			'std'		=> 0,
		),
		'sm_col' 		=> array(
			'type'		=> 'select',
			'title'		=> JText::_('HELIX_LARGE_MOBILE_LAYOUT'),
			'desc'		=> JText::_('HELIX_LARGE_MOBILE_LAYOUT_DESC'),
			'values'	=> column_grid_system('sm'),
			'std'		=> 0,
		),
		'xs_col' 		=> array(
			'type'		=> 'select',
			'title'		=> JText::_('HELIX_MOBILE_LAYOUT'),
			'desc'		=> JText::_('HELIX_MOBILE_LAYOUT_DESC'),
			'values'	=> column_grid_system('xs'),
			'std'		=> 0,
		),
		'custom_class' => array(
			'type'		=> 'text',
			'title'		=> JText::_('HELIX_CUSTOM_CLASS'),
			'desc'		=> JText::_('HELIX_CUSTOM_CLASS_DESC'),
			'std'		=> ''
		),
	)
);

class RowColumnSettings{

	private static function getInputElements( $key, $attr )
	{
		return call_user_func(array( 'HelixUltimateField' . ucfirst( $attr['type'] ), 'getInput'), $key, $attr );
	}


	static public function getHelixfwHeaderSettings($config = array())
	{
		$output = '<div class="hidden">';
		$output .= '<div class="live-header-settings">';

		foreach ($config['attr'] as $key => $rowAttr) {
			$output .= self::getInputElements( $key, $rowAttr );
		}
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	static public function getHelixfwFooterSettings($config = array())
	{
		$output = '<div class="hidden">';
		$output .= '<div class="helixfw-footer-settings">';

		foreach ($config['attr'] as $key => $rowAttr) {
			$output .= self::getInputElements( $key, $rowAttr );
		}
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	static public function getHelixfwLogoBlockSettings($config = array())
	{
		$output = '<div class="hidden">';
		$output .= '<div class="helixfw-logo-block-settings">';

		foreach ($config['attr'] as $key => $rowAttr) {
			$output .= self::getInputElements( $key, $rowAttr );
		}
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	static public function getRowSettings($row_settings = array())
	{

		$output = '<div class="hidden">';
		$output .= '<div id="helix-ultimate-row-settings">';

		foreach ($row_settings['attr'] as $key => $rowAttr) {
			$output .= self::getInputElements( $key, $rowAttr );
		}

		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	static public function getColumnSettings($col_settings = array())
	{

		$col_settings['attr']['name']['values'] = self::getPositionss();

		$output = '<div class="hidden">';
		$output .= '<div id="helix-ultimate-column-settings">';

		foreach ($col_settings['attr'] as $key => $rowAttr) {
			$output .= self::getInputElements( $key, $rowAttr );
		}

		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	static public function getTemplateName()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select($db->quoteName(array('template')));
		$query->from($db->quoteName('#__template_styles'));
		$query->where($db->quoteName('client_id') . ' = 0');
		$query->where($db->quoteName('home') . ' = 1');
		$db->setQuery($query);

		return $db->loadObject()->template;
	}


	static public function getPositionss()
	{

		$db = JFactory::getDBO();
		$query = 'SELECT `position` FROM `#__modules` WHERE  `client_id`=0 AND ( `published` !=-2 AND `published` !=0 ) GROUP BY `position` ORDER BY `position` ASC';

		$db->setQuery($query);
		$dbpositions = (array) $db->loadAssocList();

		$template  = self::getTemplateName();

		$templateXML = JPATH_SITE.'/templates/'.$template.'/templateDetails.xml';
		$template = simplexml_load_file( $templateXML );
		$options = array();

		foreach($dbpositions as $positions) $options[] = $positions['position'];

		foreach($template->positions[0] as $position)  $options[] =  (string) $position;

		$options = array_unique($options);

		$selectOption = array();
		sort($selectOption);

		foreach($options as $option) $selectOption[$option] = $option;

		return $selectOption;
	}

	static public function getSettings($config = null){
		$data = '';
		if (count($config)) {
			foreach ($config as $key => $value) {
				$data .= ' data-'.$key.'="'.$value.'"';
			}
		}
		return $data;
	}
}
