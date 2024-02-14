<?php

// phpcs:ignoreFile

$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['config_sync_directory'] = '../config/sync';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
# $settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';

# Only use this setting once the site has been installed.
# $settings['cache']['bins']['page'] = 'cache.backend.null';

$settings['skip_permissions_hardening'] = TRUE;
$settings['rebuild_access'] = TRUE;
# $settings['extension_discovery_scan_tests'] = TRUE;
# $settings['config_exclude_modules'] = ['devel', 'stage_file_proxy'];