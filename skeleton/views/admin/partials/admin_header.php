 
<nav class="navbar navbar-expand-lg navbar-admin">
	<div class="container">
		<?php
		/**
		 * Apply filter on the displayed brand on dashboard.
		 * @since 	1.4.0
		 */
		$brand = html_tag('a', array(
			'href'  => admin_url(),
			'class' => 'navbar-brand skeleton-logo',
		));
		$brand = apply_filters('admin_logo', $brand);
		if ( ! empty($brand)) {
			echo $brand;
		}
		?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-admin" aria-controls="navbar-admin" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-fw fa-bars"></i></button>
		<div class="collapse navbar-collapse" id="navbar-admin">
			<?php
			// ------------------------------------------------------------------------
			// Dashboard main menu.
			// ------------------------------------------------------------------------
			echo '<ul class="navbar-nav mr-auto">',

			// 1. System dropdown.
			'<li class="nav-item dropdown">',
			html_tag('a', array(
				'href'        => '#',
				'class'       => 'nav-link dropdown-toggle',
				'data-toggle' => 'dropdown',
			), __('CSK_ADMIN_SYSTEM')),
			'<div class="dropdown-menu">',

				// Dashboard anchor.
				admin_anchor(
					'',
					__('CSK_ADMIN_ADMIN_PANEL'),
					'class="dropdown-item"'
				),
				'<div class="dropdown-divider"></div>',

				// Global settings.
				admin_anchor(
					'settings',
					__('CSK_ADMIN_GLOBAL_SETTINGS'),
					'class="dropdown-item"'
				);

				/**
				 * Fires inside the settings menu.
				 * @since 	2.0.0
				 */
				if (has_action('_settings_menu')) {
					echo '<div class="dropdown-divider"></div>';
					do_action('_settings_menu');
				}

				echo '<div class="dropdown-divider"></div>',
				admin_anchor(
					'settings/sysinfo',
					__('CSK_ADMIN_SYSTEM_INFORMATION'),
					'class="dropdown-item"'
				);

			// Closing tag.
			echo '</div>',

			// 2. Users menu.
			'<li class="nav-item dropdown">',
			admin_anchor('users', __('CSK_ADMIN_USERS'), array(
				'class' => 'nav-link dropdown-toggle',
				'data-toggle' => 'dropdown',
			)),
			'<div class="dropdown-menu">',
			// Manage users.
			html_tag('a', array(
				'href'  => admin_url('users'),
				'class' => 'dropdown-item',
			), __('CSK_ADMIN_USERS_MANAGE'));

			/**
			 * Fires inside users menu.
			 * @since   2.0.0
			 */
			if (has_action('_users_menu')) {
				echo '<div class="dropdown-divider"></div>';
				do_action('_users_menu');
			}

			// Closing tag (users menu).
			echo '</div></li>';

			/**
			 * Fires right after users dropdown menu.
			 * @since 	2.1.0
			 */
			do_action('_admin_navbar');

			/**
			 * Display menu for modules with content controller.
			 * @since 	2.0.0
			 */
			if (has_action('_content_menu')) {
				// Menu opening tag.
				echo '<li class="nav-item dropdown">',
				html_tag('a', array(
					'href' => '#',
					'class'       => 'nav-link dropdown-toggle',
					'data-toggle' => 'dropdown',
				), __('CSK_ADMIN_CONTENT')),
				'<div class="dropdown-menu">';

				// Do the actual action.
				do_action('_content_menu');

				// Menu closing tag.
				echo '</div></li>';
			}

			/**
			 * Display menu for modules with admin controller.
			 * @since 	2.0.0
			 */
			if (has_action('_admin_menu')) {
				// Menu opening tag.
				echo '<li class="nav-item dropdown">',
				html_tag('a', array(
					'href' => '#',
					'class'       => 'nav-link dropdown-toggle',
					'data-toggle' => 'dropdown',
				), __('CSK_ADMIN_COMPONENTS')),
				'<div class="dropdown-menu">';

				// Do the actual action.
				do_action('_admin_menu');

				// Menu closing tag.
				echo '</div></li>';
			}

			/**
			 * Extensions menu.
			 * @since 	2.0.0
			 */
			echo '<li class="nav-item dropdown">',
			html_tag('a', array(
				'href' => '#',
				'class'       => 'nav-link dropdown-toggle',
				'data-toggle' => 'dropdown',
			), __('CSK_ADMIN_EXTENSIONS')),
			'<div class="dropdown-menu">',
			admin_anchor('modules', __('CSK_ADMIN_MODULES'), 'class="dropdown-item"'),
			admin_anchor('plugins', __('CSK_ADMIN_PLUGINS'), 'class="dropdown-item"'),
			admin_anchor('themes', __('CSK_ADMIN_THEMES'), 'class="dropdown-item"'),
			admin_anchor('languages', __('CSK_ADMIN_LANGUAGES'), 'class="dropdown-item"');

			/**
			 * Display menus for modules with "Extensions.php" controllers.
			 * @since 	2.0.0
			 */
			if (has_action('_extensions_menu')) {
				echo '<div class="dropdown-divider"></div>';
				do_action('_extensions_menu');
			}
			echo '</div></li>';

			/**
			 * Display menu for modules with reports controller.
			 * @since 	2.0.0
			 */
			if (has_action('_reports_menu')) {
				// Menu opening tag.
				echo '<li class="nav-item dropdown">',
				html_tag('a', array(
					'href' => '#',
					'class'       => 'nav-link dropdown-toggle',
					'data-toggle' => 'dropdown',
				), __('CSK_ADMIN_REPORTS')),
				'<div class="dropdown-menu">';

				// Do the actual action.
				do_action('_reports_menu');

				echo '<div class="dropdown-divider"></div>',
				admin_anchor('reports', __('CSK_ADMIN_REPORTS'), 'class="dropdown-item"'),
				'</div></li>';
			} else {
				echo '<li class="nav-item dropdown">',
				admin_anchor('reports', __('CSK_ADMIN_REPORTS'), 'class="nav-link"'),
				'</li>';
			}

			/**
			 * Help menu.
			 * @since 	2.0.0
			 */
			// Menu opening tag.
			echo '<li class="nav-item dropdown">';
			echo html_tag('a', array(
				'href'        => '#',
				'class'       => 'nav-link dropdown-toggle',
				'data-toggle' => 'dropdown',
			), __('CSK_BTN_HELP')),
			'<div class="dropdown-menu">';

			// Skeleton documentation.
			$csk_wiki_url = apply_filters('csk_wiki_url', 'https://goo.gl/WuLdkt');
			if ( ! empty($csk_wiki_url)) {
				echo html_tag('a', array(
					'href'   => $csk_wiki_url,
					'class'  => 'dropdown-item',
					'target' => '_blank',
				), __('CSK_ADMIN_DOCUMENTATION'));
			}

			/**
			 * Display modules with "Help.php" controllers.
			 * @since 	2.0.0
			 */
			if (has_action('_help_menu')) {
				echo '<div class="dropdown-divider"></div>';
				do_action('_help_menu');
			}

			/**
			 * Various CodeIgniter Skeleton URLS.
			 * @since 	2.0.0
			 */
			echo '<div class="dropdown-divider"></div>',

			// Link to extensions page.
			html_tag('a', array(
				'href' => 'javascript:void(0)',
				'class' => 'dropdown-item disabled',
			), __('CSK_ADMIN_EXTENSIONS')),

			// Link to translations page.
			html_tag('a', array(
				'href' => 'javascript:void(0)',
				'class' => 'dropdown-item disabled',
			), __('CSK_ADMIN_TRANSLATIONS')),

			// Link to shop page.
			html_tag('a', array(
				'href' => 'javascript:void(0)',
				'class' => 'dropdown-item disabled',
			), __('CSK_ADMIN_SKELETON_SHOP'));
			
			// Menu closing tag.
			echo '</div></li>',

			// Dashboard main menu closing tag.
			'</ul>',

			// ------------------------------------------------------------------------
			// Dashboard right menu.
			// ------------------------------------------------------------------------
			'<ul class="navbar-nav my-2 my-lg-0">';

			/**
			 * Fires right after users dropdown menu.
			 * @since 	2.1.0
			 */
			do_action('_admin_navbar_right');

			// 1. Languages dropdown.
			if ($site_languages) {
				echo '<li class="nav-item dropdown" id="lang-dropdown">',
				
				html_tag('a', array(	// Dropdown toggler.
					'href'        => '#',
					'class'       => 'nav-link dropdown-toggle',
					'data-toggle' => 'dropdown',
				), $current_language['name']),
				'<div class="dropdown-menu dropdown-menu-right">';

				// Language list.
				foreach ($site_languages as $folder => $lang) {
					echo html_tag('a', array(
						'href' => site_url('process/set_language/'.$folder),
						'class' => 'dropdown-item',
					), $lang['name_en'].html_tag('span', array(
						'class' => 'text-grey pull-right'
					), $lang['name']));
				}
				unset($lang);

				echo '</div></li>';
			} else {
				echo '<li id="lang-dropdown"></li>';
			}

			// 2. View site anchor.
			echo html_tag('li', array(
				'class' => 'nav-item csk-view-site'
			), html_tag('a', array(
				'href'   => site_url(),
				'target' => '_blank',
				'class'  => 'nav-link',
			), __('CSK_BTN_VIEW_SITE').fa_icon('external-link ml-1'))),

			// 3. User dropdown.
			'<li class="nav-item dropdown user-menu">',
			
			html_tag('a', array(
				'href' => '#',
				'class' => 'nav-link dropdown-toggle',
				'data-toggle' => 'dropdown',
			), fa_icon('user-o')),
			
			'<div class="dropdown-menu dropdown-menu-right">',

				// View profile anchor.
				anchor(
					$c_user->username,
					__('CSK_BTN_VIEW_PROFILE'),
					'class="dropdown-item"'
				),

				// Edit account anchor.
				admin_anchor(
					'users/edit/'.$c_user->id,
					__('CSK_BTN_EDIT_PROFILE'),
					'class="dropdown-item"'
				),

				'<div class="dropdown-divider"></div>',

				// Logout anchor.
				anchor('logout', __('CSK_BTN_LOGOUT'), 'class="dropdown-item"'),
			'</div></li>',

			// Closing tag (right menu).
			'</ul>';
			?>
		</div>
	</div>
</nav>
<header class="header" id="header" role="banner">
	<div class="container">
		<?php
		/**
		 * Fires on page header.
		 * @since 	2.0.0
		 */
		// Default Icon and Title.
		$default_icon  = 'home';
		$default_title = __('CSK_ADMIN_DASHBOARD');

		/**
		 * Page icon using Data_Cache object.
		 * @since 	2.1.2
		 * @var 	string
		 */
		isset($page_icon) OR $page_icon = $default_icon;
		$page_icon .= ' page-icon';

		/**
		 * Page title using Data_Cache object.
		 * @since 	2.1.2
		 * @var 	string
		 */
		isset($page_title) OR $page_title = $default_title;

		// Filtered icon and title.
		$page_icon  = apply_filters('admin_page_icon', $page_icon);
		$page_title = apply_filters('admin_page_title', $page_title);

		echo html_tag('h1', array('class' => 'page-title'), fa_icon($page_icon).$page_title);

		/**
		 * Skeleton logo filter.
		 * @since 	2.0.0
		 */
		$skeleton_logo_src = apply_filters('skeleton_logo_src', get_common_url('img/skeleton.png'));
		$skeleton_logo_alt = apply_filters('skeleton_logo_alt', 'Skeleton');
		if ( ! empty($skeleton_logo_src)) {
			echo html_tag(
				'div',
				'class="logo-container"',
				html_tag('img', array(
					'src'   => $skeleton_logo_src,
					'class' => 'logo',
					'alt'   => $skeleton_logo_alt,
				))
			);
		}
		?>
	</div>
</header>
<?php
/**
 * Subhead section.
 * @since 	2.0.0
 */
if (has_action('admin_subhead') 
	OR true === $module['has_help'] 
	OR isset($page_help)) {

	// Opening tags.
	echo '<div class="navbar navbar-expand-lg subhead">',
	'<div class="container">';

		/**
		 * Fires inside the admin subhead section.
		 * @since 	2.0.0
		 */
		echo '<div class="navbar-nav d-block">';
		do_action('admin_subhead');
		echo '</div>';

		/**
		 * Display help/settings for the current section.
		 * @since 	2.0.0
		 */
		echo '<div class="my-2 my-lg-0">';
		
		if (true === $module['has_help']) {
			echo html_tag('a', array(
				'href'   => (true === $module['contexts']['help'] ? admin_url('help/'.$module['folder']) : $module['contexts']['help']),
				'target' => '_blank',
				'class'  => 'btn btn-white btn-sm btn-icon',
			), fa_icon('question-circle').__('CSK_BTN_HELP'));
		} elseif (isset($page_help)) {
			echo html_tag('a', array(
				'href'   => $page_help,
				'target' => '_blank',
				'class'  => 'btn btn-white btn-sm btn-icon',
			), fa_icon('question-circle').__('CSK_BTN_HELP'));
		}

		if (true === $module['has_settings']) {
			echo html_tag('a', array(
				'href'  => admin_url('settings/'.$module['folder']),
				'class' => 'btn btn-white btn-sm btn-icon ml-2',
			), fa_icon('cog').__('CSK_BTN_SETTINGS'));
		}

		if (isset($page_donate)) {
			echo html_tag('a', array(
				'href'   => $page_donate,
				'target' => '_blank',
				'class'  => 'btn btn-olive btn-sm btn-icon ml-2',
			), fa_icon('money').__('CSK_BTN_DONATE'));
		}

		echo '</div>';

	// Closing tags.
	echo '</div></div>';
}

echo '<main class="wrapper" role="main">',
'<div class="container">';

// Display the alert.
the_alert();

echo '<div id="wrapper">';

/**
 * Fires at the top of page content.
 * @since 	1.4.0
 */
do_action('admin_page_header');
