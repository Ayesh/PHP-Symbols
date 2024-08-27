<?php

return array (
  'type' => 'extension',
  'name' => 'gd',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'gd',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'gd',
    )),
    'removed' => NULL,
    'version' => '8.3.9',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'gd extension (php.net)',
        'url' => 'https://www.php.net/manual/book.gd.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'GdImage',
    1 => 'GdFont',
  ),
  'functions' => 
  array (
    'gd_info' => 'gd_info',
    'imageloadfont' => 'imageloadfont',
    'imagesetstyle' => 'imagesetstyle',
    'imagecreatetruecolor' => 'imagecreatetruecolor',
    'imageistruecolor' => 'imageistruecolor',
    'imagetruecolortopalette' => 'imagetruecolortopalette',
    'imagepalettetotruecolor' => 'imagepalettetotruecolor',
    'imagecolormatch' => 'imagecolormatch',
    'imagesetthickness' => 'imagesetthickness',
    'imagefilledellipse' => 'imagefilledellipse',
    'imagefilledarc' => 'imagefilledarc',
    'imagealphablending' => 'imagealphablending',
    'imagesavealpha' => 'imagesavealpha',
    'imagelayereffect' => 'imagelayereffect',
    'imagecolorallocatealpha' => 'imagecolorallocatealpha',
    'imagecolorresolvealpha' => 'imagecolorresolvealpha',
    'imagecolorclosestalpha' => 'imagecolorclosestalpha',
    'imagecolorexactalpha' => 'imagecolorexactalpha',
    'imagecopyresampled' => 'imagecopyresampled',
    'imagerotate' => 'imagerotate',
    'imagesettile' => 'imagesettile',
    'imagesetbrush' => 'imagesetbrush',
    'imagecreate' => 'imagecreate',
    'imagetypes' => 'imagetypes',
    'imagecreatefromstring' => 'imagecreatefromstring',
    'imagecreatefromgif' => 'imagecreatefromgif',
    'imagecreatefromjpeg' => 'imagecreatefromjpeg',
    'imagecreatefrompng' => 'imagecreatefrompng',
    'imagecreatefromwebp' => 'imagecreatefromwebp',
    'imagecreatefromxbm' => 'imagecreatefromxbm',
    'imagecreatefromxpm' => 'imagecreatefromxpm',
    'imagecreatefromwbmp' => 'imagecreatefromwbmp',
    'imagecreatefromgd' => 'imagecreatefromgd',
    'imagecreatefromgd2' => 'imagecreatefromgd2',
    'imagecreatefromgd2part' => 'imagecreatefromgd2part',
    'imagecreatefrombmp' => 'imagecreatefrombmp',
    'imagecreatefromtga' => 'imagecreatefromtga',
    'imagexbm' => 'imagexbm',
    'imagegif' => 'imagegif',
    'imagepng' => 'imagepng',
    'imagewebp' => 'imagewebp',
    'imagejpeg' => 'imagejpeg',
    'imagewbmp' => 'imagewbmp',
    'imagegd' => 'imagegd',
    'imagegd2' => 'imagegd2',
    'imagebmp' => 'imagebmp',
    'imagedestroy' => 'imagedestroy',
    'imagecolorallocate' => 'imagecolorallocate',
    'imagepalettecopy' => 'imagepalettecopy',
    'imagecolorat' => 'imagecolorat',
    'imagecolorclosest' => 'imagecolorclosest',
    'imagecolorclosesthwb' => 'imagecolorclosesthwb',
    'imagecolordeallocate' => 'imagecolordeallocate',
    'imagecolorresolve' => 'imagecolorresolve',
    'imagecolorexact' => 'imagecolorexact',
    'imagecolorset' => 'imagecolorset',
    'imagecolorsforindex' => 'imagecolorsforindex',
    'imagegammacorrect' => 'imagegammacorrect',
    'imagesetpixel' => 'imagesetpixel',
    'imageline' => 'imageline',
    'imagedashedline' => 'imagedashedline',
    'imagerectangle' => 'imagerectangle',
    'imagefilledrectangle' => 'imagefilledrectangle',
    'imagearc' => 'imagearc',
    'imageellipse' => 'imageellipse',
    'imagefilltoborder' => 'imagefilltoborder',
    'imagefill' => 'imagefill',
    'imagecolorstotal' => 'imagecolorstotal',
    'imagecolortransparent' => 'imagecolortransparent',
    'imageinterlace' => 'imageinterlace',
    'imagepolygon' => 'imagepolygon',
    'imageopenpolygon' => 'imageopenpolygon',
    'imagefilledpolygon' => 'imagefilledpolygon',
    'imagefontwidth' => 'imagefontwidth',
    'imagefontheight' => 'imagefontheight',
    'imagechar' => 'imagechar',
    'imagecharup' => 'imagecharup',
    'imagestring' => 'imagestring',
    'imagestringup' => 'imagestringup',
    'imagecopy' => 'imagecopy',
    'imagecopymerge' => 'imagecopymerge',
    'imagecopymergegray' => 'imagecopymergegray',
    'imagecopyresized' => 'imagecopyresized',
    'imagesx' => 'imagesx',
    'imagesy' => 'imagesy',
    'imagesetclip' => 'imagesetclip',
    'imagegetclip' => 'imagegetclip',
    'imageftbbox' => 'imageftbbox',
    'imagefttext' => 'imagefttext',
    'imagettfbbox' => 'imagettfbbox',
    'imagettftext' => 'imagettftext',
    'imagefilter' => 'imagefilter',
    'imageconvolution' => 'imageconvolution',
    'imageflip' => 'imageflip',
    'imageantialias' => 'imageantialias',
    'imagecrop' => 'imagecrop',
    'imagecropauto' => 'imagecropauto',
    'imagescale' => 'imagescale',
    'imageaffine' => 'imageaffine',
    'imageaffinematrixget' => 'imageaffinematrixget',
    'imageaffinematrixconcat' => 'imageaffinematrixconcat',
    'imagegetinterpolation' => 'imagegetinterpolation',
    'imagesetinterpolation' => 'imagesetinterpolation',
    'imageresolution' => 'imageresolution',
  ),
  'constants' => 
  array (
    'IMG_AVIF' => 256,
    'IMG_GIF' => 1,
    'IMG_JPG' => 2,
    'IMG_JPEG' => 2,
    'IMG_PNG' => 4,
    'IMG_WBMP' => 8,
    'IMG_XPM' => 16,
    'IMG_WEBP' => 32,
    'IMG_BMP' => 64,
    'IMG_TGA' => 128,
    'IMG_WEBP_LOSSLESS' => 101,
    'IMG_COLOR_TILED' => -5,
    'IMG_COLOR_STYLED' => -2,
    'IMG_COLOR_BRUSHED' => -3,
    'IMG_COLOR_STYLEDBRUSHED' => -4,
    'IMG_COLOR_TRANSPARENT' => -6,
    'IMG_ARC_ROUNDED' => 0,
    'IMG_ARC_PIE' => 0,
    'IMG_ARC_CHORD' => 1,
    'IMG_ARC_NOFILL' => 2,
    'IMG_ARC_EDGED' => 4,
    'IMG_GD2_RAW' => 1,
    'IMG_GD2_COMPRESSED' => 2,
    'IMG_FLIP_HORIZONTAL' => 1,
    'IMG_FLIP_VERTICAL' => 2,
    'IMG_FLIP_BOTH' => 3,
    'IMG_EFFECT_REPLACE' => 0,
    'IMG_EFFECT_ALPHABLEND' => 1,
    'IMG_EFFECT_NORMAL' => 2,
    'IMG_EFFECT_OVERLAY' => 3,
    'IMG_EFFECT_MULTIPLY' => 4,
    'IMG_CROP_DEFAULT' => 0,
    'IMG_CROP_TRANSPARENT' => 1,
    'IMG_CROP_BLACK' => 2,
    'IMG_CROP_WHITE' => 3,
    'IMG_CROP_SIDES' => 4,
    'IMG_CROP_THRESHOLD' => 5,
    'IMG_BELL' => 1,
    'IMG_BESSEL' => 2,
    'IMG_BILINEAR_FIXED' => 3,
    'IMG_BICUBIC' => 4,
    'IMG_BICUBIC_FIXED' => 5,
    'IMG_BLACKMAN' => 6,
    'IMG_BOX' => 7,
    'IMG_BSPLINE' => 8,
    'IMG_CATMULLROM' => 9,
    'IMG_GAUSSIAN' => 10,
    'IMG_GENERALIZED_CUBIC' => 11,
    'IMG_HERMITE' => 12,
    'IMG_HAMMING' => 13,
    'IMG_HANNING' => 14,
    'IMG_MITCHELL' => 15,
    'IMG_POWER' => 17,
    'IMG_QUADRATIC' => 18,
    'IMG_SINC' => 19,
    'IMG_NEAREST_NEIGHBOUR' => 16,
    'IMG_WEIGHTED4' => 21,
    'IMG_TRIANGLE' => 20,
    'IMG_AFFINE_TRANSLATE' => 0,
    'IMG_AFFINE_SCALE' => 1,
    'IMG_AFFINE_ROTATE' => 2,
    'IMG_AFFINE_SHEAR_HORIZONTAL' => 3,
    'IMG_AFFINE_SHEAR_VERTICAL' => 4,
    'GD_BUNDLED' => 0,
    'IMG_FILTER_NEGATE' => 0,
    'IMG_FILTER_GRAYSCALE' => 1,
    'IMG_FILTER_BRIGHTNESS' => 2,
    'IMG_FILTER_CONTRAST' => 3,
    'IMG_FILTER_COLORIZE' => 4,
    'IMG_FILTER_EDGEDETECT' => 5,
    'IMG_FILTER_GAUSSIAN_BLUR' => 7,
    'IMG_FILTER_SELECTIVE_BLUR' => 8,
    'IMG_FILTER_EMBOSS' => 6,
    'IMG_FILTER_MEAN_REMOVAL' => 9,
    'IMG_FILTER_SMOOTH' => 10,
    'IMG_FILTER_PIXELATE' => 11,
    'IMG_FILTER_SCATTER' => 12,
    'GD_VERSION' => '2.3.3',
    'GD_MAJOR_VERSION' => 2,
    'GD_MINOR_VERSION' => 3,
    'GD_RELEASE_VERSION' => 3,
    'GD_EXTRA_VERSION' => '',
    'PNG_NO_FILTER' => 0,
    'PNG_FILTER_NONE' => 8,
    'PNG_FILTER_SUB' => 16,
    'PNG_FILTER_UP' => 32,
    'PNG_FILTER_AVG' => 64,
    'PNG_FILTER_PAETH' => 128,
    'PNG_ALL_FILTERS' => 248,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'gd.jpeg_ignore_warning' => '1',
  ),
);
