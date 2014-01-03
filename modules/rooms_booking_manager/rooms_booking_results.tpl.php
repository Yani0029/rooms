<?php if (!$booking_results): ?>
  <?php print render($no_results); ?>
  <?php print render($booking_search_form); ?>
<?php endif; ?>

<?php if (isset($style) && ($style == ROOMS_INDIVIDUAL)): ?>
  <?php if ($booking_results): ?>
    <?php //print render($legend); ?>
    <?php
      print "<div class='change-search'>";
      print render($legend);
      print render($change_search);
      print "</div>";
    ?>
    <?php print "<div id='content_result'>";?>
    <?php foreach ($units_per_type as $unit_type => $units_per_price_level) {
      print render($$unit_type);
      foreach ($units_per_price_level as $price => $units) {
        foreach ($units as $unit_id => $unit) {
          // Yani: add div outside side item. 
          print "<div class='booking-result room-result" . $unit_id ."'>
          <div class='result-div'>";
          
          print render($unit['unit']);
          print render($unit['price']);
          print render($unit['book_unit_form']);
          print "</div></div>";
        }
      }
    }
    print "</div>"; ?>
  <?php endif; ?>
<?php endif; ?>

<?php if (isset($style) && ($style == ROOMS_PER_TYPE)): ?>
  <?php if ($booking_results): ?>
        <?php print render($units_per_type_form); ?>
  <?php endif; ?>
<?php endif; ?>
