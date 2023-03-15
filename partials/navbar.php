
<div class="navbar-container">


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
      
        $menu_items = array("TEFL Courses", "Teach Online", "Internships", "TEFL jobs","School Elective", "Journal","About");

        // Generate the HTML for the menu items
        foreach ($menu_items as $item) {
            echo "<li class='nav-item'><a class='nav-link' href='#'>$item</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
</div>



    