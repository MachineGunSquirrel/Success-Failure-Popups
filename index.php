<link rel="stylesheet" href="./Public/CSS/index-styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php
  include './functions.php';
?>

<div id="success-checkmark">
  <div class="check-icon">
    <span class="icon-line line-tip"></span>
    <span class="icon-line line-long"></span>
    <div class="icon-circle"></div>
    <div class="icon-fix"></div>
  </div>
</div>
<div id='selection-null'>
  <p>Failure Message</p>
</div>

<button onclick='successAnimation()'>Success</button>
<button onclick='failureAnimation()'>Failure</button>