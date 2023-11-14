<?php

function mg_admin_menu_candidates() {
  add_menu_page(
    __( 'Candidates', 'mg-textdomain-candidates' ),
    __( 'Candidates', 'mg-textdomain-candidates' ),
    'manage_options',
    'candidates',
    'mg_admin_page_contents_candidates',
    'dashicons-buddicons-buddypress-logo',
    100
  );
}
add_action( 'admin_menu', 'mg_admin_menu_candidates' );


function mg_admin_page_contents_candidates() {
  global $wpdb;
  $candidates = $wpdb->get_results( "SELECT * FROM candidates" );
?>
<div class="wrap">
  <h1 class="wp-heading-inline">Consulting list</h1>
  <table class="post__table">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>position</th>
        <th>phone</th>
        <th>email</th>
        <th>summary</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach (array_reverse($candidates) as $candidate): ?>
        <tr>
          <td><?php echo $candidate->ID; ?></td>
          <td><?php echo $candidate->name; ?></td>
          <td><?php echo $candidate->position; ?></td>
          <td><a href="tel:<?php echo $candidate->phone; ?>"><?php echo $candidate->phone; ?></a></td>
          <td><a href="mailto:<?php echo $candidate->email; ?>"><?php echo $candidate->email; ?></a></td>
          <td>
            <?php $files = json_decode($candidate->summary); ?>
            <?php if(gettype($files) == "array"): ?>
              <?php $i=0; foreach ($files as $file): $i++; ?>
                <a download href="<?php echo $file->url; ?>">Download File <?php echo $i; ?></a> <br>
              <?php endforeach; ?>
            <?php else: ?>
              <a download href="<?php echo $files->url; ?>">Download File</a>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php

}