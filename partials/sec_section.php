
<?php
$body_menu = [
    'What Will I Learn',
    'Course Content',
    'Course Benefits',
    'Accreditation',
    'Why Us',
    'FAQs'
];
?>

<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
           
             <ul class="list-group">
         <?php foreach ($body_menu as $item): ?>
        <li class="list-group-item"><?php echo $item ?></li>
           <?php endforeach; ?>
     </ul>
 
            </div>

            <div class="col-md-6 col-sm-12">
                <h3 class="text-bold">What will I learn</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Dolores repudiandae quasi rem voluptatum quas. Quis quia ea modi aperiam sequi.</p>

            </div>
        </div>
    </div>