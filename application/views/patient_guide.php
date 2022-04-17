
<?php 
$comments = getComments($blogID);

if($comments){
    foreach($comments as $m => $comment){ 
    $class = 'mt-5 ml-5';
    if($m%2 == 0){
       $class = 'mt-5';
    }
    ?>
        <li class="list-inline-item" style="display: contents;">
          <div class="comments-box position-relative <?php echo $class;?>">
             <div class="media">
                <img class="mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/blog/clients/02.jpg" alt="Generic placeholder image">
                <div class="media-body">
                   <h5 class="mt-0 float-left"><?php echo $comment['userName'];?></h5>
                   <a class="month-detail float-right" href="#"><i class="far fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($comment['dateAdded']));?></a>
                   <div class="clearfix"></div>
                   <p><?php echo $comment['comment'];?></p>
                </div>
             </div>
          </div>
       </li>
    <?php }
} ?>
                       