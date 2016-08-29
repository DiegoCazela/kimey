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
<div class="panel-display search" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class='first-line'>
      <div class="panel-panel search-left ">
          <div class="inside"><?php print $content['secondary']; ?></div>
      </div>

      <div class="panel-panel search-right ">
          <div class="inside"><?php print $content['main']; ?></div>
      </div>
    </div>
    <div class='second-line'>
      <div class="panel-panel search-3-first ">
          <div class="inside"><?php print $content['tertiary-first']; ?></div>
      </div>
      <div class="panel-panel search-3-second ">
          <div class="inside"><?php print $content['tertiary-second']; ?></div>
      </div>
      <div class="panel-panel search-3-third ">
          <div class="inside"><?php print $content['tertiary-third']; ?></div>
      </div>

  </div>

</div>
