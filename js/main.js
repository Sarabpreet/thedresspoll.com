
// twitter shit
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));

// var sm=document.querySelector('.socialmedia');

// sm.onclick=(function(){

// setInterval(function () {alert("Hello")}, 5000);
// //setTimeout(function(){alert('Hello')},5000);
// //clearTimeout(myVar)
// //wait for 20 seconds
// sm.innerHTML="we are now redirecting you to result's page....";
// // wait for 5 seconds;
// location.href='http://thedresspoll.com/result.php';
//});


$('.socialmedia').load(function() {

window.location='http://www.google.com';
console.log("i am alive");

});