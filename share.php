<?php 

include 'web/header.php';
echo '<script type="text/javascript">alert("Your vote has been casted successfully!");</script>';

?>

<div class="row">
	

<div class=" col-centered">
	<h1 class='heading center'>Page will be redirected in 15 seconds...</h1>

<div class="col-lg-6 socialmedia">
	<h3>Meanwhile, you may share this with your friends :) </h3>


	<div class="col-lg-4">
		
<iframe class='fa' src="http://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fthedresspoll.com%2F&layout=button&appId=1537453163206383" frameborder="0"></iframe>


	</div>


	<div class="col-lg-4">
		
<a class="twitter-share-button ta" href="https://twitter.com/share"
  data-related="twitterdev"
  data-size="large"
  data-count="none">
Tweet
</a>	
	</div>

	<div class="col-lg-4">
		
	
	</div>











</div>

</div>

<?php 
include 'web/footer.php';

?>
<script>
	var sm=document.querySelector('.row');
    sm.style.cursor="progress";
	setTimeout(function() { my(); }, 15000);



function my(){

window.location='http://thedresspoll.com/result.php';

}

	</script>