 <?php
    // Get the post ID from the URL
    $current__page__id = url_to_postid(get_permalink());

    // Get the post object
    $current__post = get_post($current__page__id);

    // Get the post slug
    if ($current__post) {
        $current__page__slug = $current__post->post_name;
    } else {
        $current__page__slug = $current_page_id;
    }

    $default__category__event = isset($_GET['events']) ? sanitize_text_field($_GET['events']) : 'utrecht';
    ?>

 <form action="<?php echo esc_url(home_url($current__page__slug)); ?>" method="get" class="filter">
     <div class="event-filter__form <?php echo ($default__category__event === 'utrecht') ? 'event-filter--selected' : ''; ?>">
         <button class="event-filter__button <?php echo ($default__category__event === 'utrecht') ? 'event-button--selected' : ''; ?>" name="events" value="utrecht">
             events utrecht
         </button>
     </div>
     <div class="event-filter__form <?php echo ($default__category__event === 'rotterdam') ? 'event-filter--selected' : ''; ?>">
         <button class="event-filter__button <?php echo ($default__category__event === 'rotterdam') ? 'event-button--selected' : ''; ?>" name="events" value="rotterdam">
             events rotterdam
         </button>
     </div>
     <div class="event-filter__form <?php echo ($default__category__event === 'leiden') ? 'event-filter--selected' : ''; ?>">
         <button class="event-filter__button <?php echo ($default__category__event === 'leiden') ? 'event-button--selected' : ''; ?>" name="events" value="leiden">
             events leiden
         </button>
     </div>
 </form>

 <script>
     // Set the default selected category to "utrecht"
     var defaultCategory = 'utrecht';

     function toggleCategory(button) {
         var isSelected = button.classList.contains('event-button--selected');

         var formContainer = button.closest('.event-filter__form');
         var isSelectedDiv = formContainer.classList.contains(
             'event-filter--selected'
         );

         var buttons = document.querySelectorAll('.event-filter__button');
         var divs = document.querySelectorAll('.event-filter__form');

         buttons.forEach(function(btn) {
             btn.classList.remove('event-button--selected');
         });

         divs.forEach(function(div) {
             div.classList.remove('event-filter--selected');
         });

         if (!isSelected) {
             button.classList.add('event-button--selected');
         }

         if (!isSelectedDiv) {
             formContainer.classList.add('event-filter--selected');
             updateSelectedCategory(button.getAttribute('data-category'));
         }
     }

     function updateSelectedCategory(category) {
         // Update the default category to the selected category
         defaultCategory = category;
     }
 </script>