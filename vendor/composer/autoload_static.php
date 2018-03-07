<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcf58cfb35baa30f44e3185238a44081
{
    public static $classMap = array (
        'LCF_Config_Page' => __DIR__ . '/../..' . '/includes/pages/class-config-page.php',
        'LCF_Metaboxes' => __DIR__ . '/../..' . '/includes/class-metaboxes.php',
        'LCF_Option_Page' => __DIR__ . '/../..' . '/includes/pages/class-option-page.php',
        'LCF_Shortcodes' => __DIR__ . '/../..' . '/includes/class-shortcodes.php',
        'LCF_Shortcodes_Resources' => __DIR__ . '/../..' . '/includes/class-shortcodes-resources.php',
        'LCF_Shortcodes_Resources_Admin' => __DIR__ . '/../..' . '/includes/class-shortcodes-resources-admin.php',
        'LCF_Shortcodes_Resources_Run' => __DIR__ . '/../..' . '/includes/class-shortcodes-resources-run.php',
        'LCF_Template_Loader' => __DIR__ . '/../..' . '/includes/class-template-loader.php',
        'LiquidChurch_Functionality' => __DIR__ . '/../..' . '/liquidchurch-functionality.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbcf58cfb35baa30f44e3185238a44081::$classMap;

        }, null, ClassLoader::class);
    }
}
