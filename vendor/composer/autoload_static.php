<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f7c60d43beeac5aa306701fb5fa721f
{
    public static $files = array (
        '717feddebcd4b023c0f13ee2d7d01e24' => __DIR__ . '/../..' . '/src/smax.inc.php',
        '6676c30f3f7b8a5f23993ca53c161d28' => __DIR__ . '/../..' . '/src/attitudes/humanist.inc.php',
        '890e0477ed4cd8e3996524d9b4947bbd' => __DIR__ . '/../..' . '/src/attitudes/skeptical.inc.php',
        '177e2bbc08135eb7f32d29475bbf3d4a' => __DIR__ . '/../..' . '/src/defaults.inc.php',
    );

    public static $classMap = array (
        'Smax\\Main' => __DIR__ . '/../..' . '/src/main.class.php',
        'Smax\\Rating' => __DIR__ . '/../..' . '/src/rating.class.php',
        'Smax\\RatingDefault' => __DIR__ . '/../..' . '/src/ratingdefault.class.php',
        'Smax\\RatingFromModerator' => __DIR__ . '/../..' . '/src/ratingfrommoderator.class.php',
        'Smax\\RatingFromOther' => __DIR__ . '/../..' . '/src/ratingfromother.class.php',
        'Smax\\RatingFromOwner' => __DIR__ . '/../..' . '/src/ratingfromowner.class.php',
        'Smax\\Set' => __DIR__ . '/../..' . '/src/set.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6f7c60d43beeac5aa306701fb5fa721f::$classMap;

        }, null, ClassLoader::class);
    }
}
