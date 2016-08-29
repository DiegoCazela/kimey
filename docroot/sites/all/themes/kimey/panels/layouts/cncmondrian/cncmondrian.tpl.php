<?php
/**
 * @file
 * Template for the Mondrian layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display cnc_mondrian" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class='panel-panel highlight-content'>
      <div class="inside"><?php print $content['highlight']; ?></div>
    </div>
    <div class='first-line'>
      <div class="panel-panel cnc_mondrian-left ">
          <div class="inside"><?php print $content['main']; ?></div>
      </div>

      <div class="panel-panel cnc_mondrian-right ">
          <div class="inside"><?php print $content['secondary']; ?></div>
      </div>
    </div>
    <div class='second-line'>
      <div class="panel-panel cnc_mondrian-3-first ">
          <div class="inside"><?php print $content['tertiary-first']; ?></div>
      </div>
      <div class="panel-panel cnc_mondrian-3-second ">
          <div class="inside"><?php print $content['tertiary-second']; ?></div>
      </div>
      <div class="panel-panel cnc_mondrian-3-third ">
          <div class="inside"><?php print $content['tertiary-third']; ?></div>
      </div>

  </div>

</div>
