
    <div class="center">
         
          <img src="img/the-dress.jpg" alt="The Dress Poll">

     </div>

<style>
	
h1{


	text-align: center;
}
	h5{

		text-align: center;
		text-transform: uppercase;
		letter-spacing:5px;
		margin:30px;
	}
</style>
    <div class="formcontainer" >

    <h1 class='heading'>Vote and find which side you are on!</h1>
<h5>#TeamBlueBlack or #TeamWhiteGold</h5>
                <form action="index.php" method="POST">


							<div class="radio">
							  <label>
							    <input type="radio" name="poll"  value="wg" checked>
							  The White-Gold ones.
							  </label>
							</div>


							<div class="radio">
							  <label>
							    <input type="radio" name="poll"  value="bb">
							    The Blue-Black ones.
							  </label>
							</div>

							<div class="radio">
							  <label>
							    <input type="radio" name="poll"  value="ot">
							    The Odd ones (green? orrange? pink? maybe?)
							  </label>
							</div>


                <input type="submit" value='Vote' class='btn btn-primary btn-lg btn-block'>
                </form>
    </div>