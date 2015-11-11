<?php include 'web/header.php'; 

include 'percentage.php';

?>


<div class="row">
 
<h1 class="heading center"> Here's the result!</h1>
 


<p>People who saw the dress as blue and black:<?php echo round($per[1]);?>%</p>
<div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round($per[1]);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($per[1]);?>%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>


<p>People who saw the dress as White &amp; Gold :<?php echo round($per[0]);?>%</p>
<div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round($per[0]);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($per[0]);?>%">
    <span class="sr-only">% Complete</span>
  </div>
</div>


<p>People who saw the dress as something else :<?php echo round($per[2]);?>%</p>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round($per[2]);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($per[2]);?>%">
    <span class="sr-only">80% Complete (danger)</span>
  </div>
</div>




</div>


<?php include 'web/footer.php'; ?>