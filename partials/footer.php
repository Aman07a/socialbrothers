<?php defined('ABSPATH') || exit('Forbidden'); ?>

</main>

<footer class="container-fluid">
  <div class="container">
    <!-- 12 Columns -->
    <div class="row footer__row">
      <div class="col-md-2 footer__col footer-text">
        Algemene voorwaarden
      </div>
      <div class="col-md-2 footer__col footer-text">
        Privacy statement
      </div>
      <div class="col-md-2 footer__col footer-text">
        Toegankelijkheidsverklaring
      </div>
      <div class="col footer__col">
      </div>
      <div class="col footer__col">
      </div>
      <div class="col footer__col">
      </div>
      <div class="col footer__col">
      </div>
      <div class="col footer__col">
      </div>
    </div>
  </div>
</footer>

<!-- JavaScript to handle the popup -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.getElementById("search-icon");
    const popup = document.querySelector(".popup-container");

    searchIcon.addEventListener("click", function() {
      popup.style.display = "block";
    });
  });
</script>