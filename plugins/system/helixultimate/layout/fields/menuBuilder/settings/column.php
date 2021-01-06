<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

use HelixUltimate\Framework\Platform\Helper;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\FileLayout;
use Joomla\CMS\Uri\Uri;

extract($displayData);

if (!\class_exists('SettingsFields'))
{
	require_once __DIR__ . '/settingsFields.php';
}

$settingsId = 'hu-mega-row-' . $item->id . '-' . $id;
$positions = Helper::getTemplatePositions();
$siteModules = Helper::getModules();
$positionOptions = [];
$moduleOptions = [];

foreach ($siteModules as $siteModule)
{
	$moduleOptions[$siteModule->id] = $siteModule->title;
}

foreach ($positions as $position)
{
	$positionOptions[$position] = $position;
}

$positionOptions['custom'] = 'custom';

$fields = [];

$settingsFields = new SettingsFields(
	[
		'id' => $id,
		'rowId' => $rowId,
		'item' => $item,
		'settings' => $settings,
		'positionOptions' => $positionOptions,
		'moduleOptions' => $moduleOptions
	]
);
$fields = $settingsFields->getColumnSettingsFields();

?>

<div class="hu-mega-column-setting hidden"
	data-itemid="<?php echo $item->id; ?>"
	data-rowid="<?php echo $rowId; ?>"
	data-columnid="<?php echo $id; ?>"
	>
	<?php foreach ($fields as $name => $group): ?>
		<?php if (!empty($group)): ?>
			<div class="hu-option-group hu-option-group-<?php echo strtolower($name) . ' ' . ($group['active'] ? 'active' : ''); ?>" >
				<div class="hu-option-group-title">
					<span class="fas fa-angle-right"></span>
					<?php if (!empty($group['icon'])): ?>
						<span class="<?php echo $group['icon']; ?>"></span>
					<?php endif ?>
					<?php echo $group['title']; ?>
				</div>

				<div class="hu-option-group-list">
					<?php foreach ($group['group_fields'] as $key => $field): ?>
						<?php echo $builder->renderFieldElement($key, $field); ?>
					<?php endforeach ?>	
				</div>
			</div>
		<?php endif ?>
	<?php endforeach ?>
</div>