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

<div class="panel-display cnc_multiregion" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class='panel-panel highlight-content'>
      <div class="inside"><?php print $content['highlight']; ?></div>
    </div>
    <div class='first-line'>
      <div class="panel-panel cnc_multiregion-left ">
          <div class="inside"><?php print $content['main']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-right ">
          <div class="inside"><?php print $content['secondary']; ?></div>
      </div>
      <div class="first-line--second">
        <div class="panel-panel cnc_multiregion-secondary-first ">
            <div class="inside"><?php print $content['secondary-first']; ?></div>
        </div>
        <div class="panel-panel cnc_multiregion-secondary-second ">
            <div class="inside"><?php print $content['secondary-second']; ?></div>
        </div>
      </div>
      <div class="panel-panel cnc_multiregion-tertiary ">
          <div class="inside"><?php print $content['tertiary']; ?></div>
      </div>
    </div>
    <div class='second-line'>
      <div class="panel-panel cnc_multiregion-content ">
          <div class="inside"><?php print $content['content']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-sub-content ">
          <div class="inside"><?php print $content['sub-content']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-tertiary-first ">
          <div class="inside"><?php print $content['tertiary-first']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-tertiary-second ">
          <div class="inside"><?php print $content['tertiary-second']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-tertiary-third ">
          <div class="inside"><?php print $content['tertiary-third']; ?></div>
      </div>
      <div class="panel-panel cnc_multiregion-footer-full ">
          <div class="inside"><?php print $content['footer-full']; ?></div>
      </div>

  </div>

</div>
