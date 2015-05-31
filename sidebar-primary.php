<?php if ( ! dynamic_sidebar() ) : ?>
	<ul>
	  <?php
	  wp_list_pages('title_li=&child_of='.$post->ID.'&show_date=modified
	  &date_format=$date_format'); ?>
  </ul>
<?php endif; ?>