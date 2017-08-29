# Digital_Grinnell_Theme
The Digital_Grinnell theme used at https://digital.grinnell.edu and https://dgadmin.grinnell.edu.  

## Collection Layout Notes
This theme features two layouts for collections... 

  1) The first is characterized by a grid of tiles representing collections that exclusively contain other collections.  The following are examples of tile grid pages:  https://digital.grinnell.edu, https://digital.grinnell.edu/islandora/object/grinnell:special-collections, https://digital.grinnell.edu/islandora/object/grinnell:scholarship, https://digital.grinnell.edu/islandora/object/grinnell:campus-collections.
  
  2) The second is characterized by a list of objects each displaying an optional creator statement, a title, an optional abstract, and an optional "pull quote".  An example of such a page is https://digital.grinnell.edu/islandora/object/grinnell:alumni-oral-histories.

Images used in the tile grid pages should have an aspect ratio of 1.4:1 (width:height) in order to scale properly in this theme.

**Attention!** The Drupal Views employed by these two collection layouts are defined inside the DG7 custom module, in the _dg7.module_ file.  Because these views are defined in code they must be regenerated whenever a new collection is introduced. The regeneration is most easily achieved by disabling the DG7 module, re-enabling it, and flushing the Drupal caches.  This can be done using _drush_ and the following command-line instruction:

  ```bash
  cd /var/www/drupal/sites/default; drush dis dg7; drush en dg7; drush cc all 
  ```
