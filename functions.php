<script>
  function successAnimation(){
    $("#success-checkmark").show();
    $(".check-icon").show();
    setTimeout(function () {
      $(".check-icon").hide();
      $("#success-checkmark").hide();
    }, 2000);
  }

  function failureAnimation(){
    document.getElementById('selection-null').style.display = 'block';
    setTimeout(function () {
      document.getElementById('selection-null').style.display = 'none'
    }, 2000);
  }
</script>