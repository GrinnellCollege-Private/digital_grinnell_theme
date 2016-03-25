<?php

/**
 * @file
 * This is the template file for the object page for large image
 *
 * Available variables:
 * - $islandora_object: The Islandora object rendered in this template file
 * - $islandora_dublin_core: The DC datastream object
 * - $dc_array: The DC datastream object values as a sanitized array. This
 *   includes label, value and class name.
 * - $islandora_object_label: The sanitized object label.
 * - $parent_collections: An array containing parent collection(s) info.
 *   Includes collection object, label, url and rendered link.
 * - $islandora_thumbnail_img: A rendered thumbnail image.
 * - $islandora_content: A rendered image. By default this is the JPG datastream
 *   which is a medium sized image. Alternatively this could be a rendered
 *   viewer which displays the JP2 datastream image.
 *
 * @see template_preprocess_islandora_large_image()
 * @see theme_islandora_large_image()
 */
?>

<div class="islandora-large-image-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="ImageObject">
  <div class="islandora-large-image-content-wrapper clearfix">
    <?php if ($islandora_content): ?>
      <?php if (isset($image_clip)): ?>
        <?php print $image_clip; ?>
      <?php endif; ?>
      <div class="islandora-large-image-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- MAM...added on 20-Oct-2015.  Moved down on 22-Oct-2015. -->
  <div class="islandora-object-description">
    <?php print $description; ?>
  </div>

  <div class="islandora-large-image-metadata islandora-object-metadata">
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
