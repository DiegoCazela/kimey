<?php

/**
 * @file
 * Defines an asymetric Mondrian inspired panels layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('CNC Mondrian'),
  'icon' => 'preview.png',
  'category' => t('Custom CNC'),
  'theme' => 'cncmondrian',
  'css' => 'cncmondrian.css',
  'regions' => array(
    'highlight' => t('Destaque'),
    'main' => t('Main'),
    'secondary' => t('Secondary'),
    'tertiary-first' => t('Tertiary First'),
    'tertiary-second' => t('Tertiary Second'),
    'tertiary-third' => t('Tertiary Third'),
  ),
);

/**
* Implements hook_panels_layouts().
*/
function cnc_minisite_cncmondrian_panels_layouts() {
 $items['cncmondrian'] = array(
   'title' => t('My Panel'),
   'category' => t('My Site'),
   'icon' => 'mypanel.png',
   'theme' => 'mypanel',
   'regions' => array(
     'top' => t('Top'),
     'left' => t('Left column'),
     'right' => t('Right column')
   ),
 );

 return $items;
}
