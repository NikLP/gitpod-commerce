<?php

// phpcs:ignoreFile

// NikLP: best options to start development IMO, change at will.

// The below file is non-default and will enable twig debugging.
$settings['container_yamls'][] = './devlocal.services.yml';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
# $settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';

$settings['skip_permissions_hardening'] = TRUE;
$settings['rebuild_access'] = TRUE;
# $settings['extension_discovery_scan_tests'] = TRUE;
# $settings['config_exclude_modules'] = ['devel', 'stage_file_proxy'];