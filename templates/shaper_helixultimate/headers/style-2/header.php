<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2020 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined ('_JEXEC') or die('Restricted Access');

use HelixUltimate\Framework\Platform\Helper;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;

$data = $displayData;
$offcanvas_position = $displayData->params->get('offcanvas_position', 'right');
$menu_type = $displayData->params->get('menu_type');

$feature_folder_path = JPATH_THEMES . '/' . $data->template->template . '/features';

include_once $feature_folder_path . '/logo.php';
include_once $feature_folder_path . '/menu.php';

/**
 * Helper classes for-
 * site logo, Menu header.
 *
 */
$logo    	= new HelixUltimateFeatureLogo($data->params);
$menu    	= new HelixUltimateFeatureMenu($data->params);


/**
 * Logo and menu html classes
 *
 */
$logoClass = 'col-auto';
$menuClass = 'col-auto flex-auto';

/**
 * Get related modules
 * The modules are mod_search
 */
$searchModule = Helper::getSearchModule();

?>

<header id="sp-header">
	<div class="container">
		<div class="container-inner">
			<div class="row flex-nowrap">
				<!-- Logo -->
				<div id="sp-logo" class="<?php echo $logoClass; ?>">
					<div class="sp-column">
						<?php echo $logo->renderFeature(); ?>
						<jdoc:include type="modules" name="logo" style="sp_xhtml" />
					</div>
				</div>

				<!-- Menu -->
				<div id="sp-menu" class="<?php echo $menuClass; ?>">
					<div class="sp-column  d-flex justify-content-end align-items-center">
						<?php echo $menu->renderFeature(); ?>
						<jdoc:include type="modules" name="menu" style="sp_xhtml" />

						<!-- Related Modules -->
						<div class="d-none d-lg-flex header-modules">
							<?php if ($data->params->get('enable_search', 0)): ?>
								<?php echo ModuleHelper::renderModule($searchModule, ['style' => 'sp_xhtml']); ?>
							<?php endif ?>
	
							<?php if ($data->params->get('enable_login', 0)): ?>
								<?php echo $menu->renderLogin(); ?>
							<?php endif ?>
						</div>
						
						<!-- if offcanvas position right -->
						<?php if($offcanvas_position === 'right' && $menu_type === 'mega_offcanvas') : ?>
							<a id="offcanvas-toggler" aria-label="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>" class="offcanvas-toggler-secondary offcanvas-toggler-right" href="#"><i class="fas fa-bars" aria-hidden="true" title="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>"></i></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>