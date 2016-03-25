<?php

/**
 * @file
 * This is the template file for the object page for audio file
 *
 * @TODO: add documentation about file and available variables
 */
?>

<div class="islandora-audio-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="AudioObject">
  <div class="islandora-audio-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-audio-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- MAM...added on 20-Oct-2015.  Moved down on 22-Oct-2015. -->
  <div class="islandora-object-description">
    <?php print $description; ?>
  </div>

  <div class="islandora-audio-metadata islandora-object-metadata">
    <!-- ?php print $description; ?> MAM...moved up on 20-Oct-2015 -->
    <?php print $metadata; ?>
    <?php if($parent_collections): ?>
      <!-- MAM...added class and style to div below on 20-Oct-2015 -->
      <div class="islandora_parent_collections" style="display:block; margin-top:2em;">
        <!-- MAM...changed h2 to h5 in the header below on 20-Oct-2015 -->
        <h5><?php print t('In collections'); ?></h5>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</div>
