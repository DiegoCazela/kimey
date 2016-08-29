<?php

/**
 * @file
 * Defines an asymetric Mondrian inspired panels layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('CNC Multiregion'),
  'icon' => 'preview.png',
  'category' => t('Custom CNC'),
  'theme' => 'multiregion',
  'css' => 'multiregion.css',
  'regions' => array(
    'highlight' => t('Destaque'),
    'main' => t('Main'),
    'secondary' => t('Secondary'),
    'secondary-first' => t('Secondary First'),
    'secondary-second' => t('Secondary Second'),
    'tertiary' => t('Tertiary'),
    'content'  => t('Content'),
    'sub-content' => t('Sub Content'),
    'tertiary-first' => t('Tertiary First'),
    'tertiary-second' => t('Tertiary Second'),
    'tertiary-third' => t('Tertiary Third'),
    'footer-full' => t('Footer Full'),
  ),
);

/**
* Implements hook_panels_layouts().
*/
function cnc_minisite_multiregion_panels_layouts() {
 $items['multiregion'] = array(
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
