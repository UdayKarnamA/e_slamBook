// typing effect for the intro text
var text = "Sometimes, being with your best friend is all the therapy you need.";
var textId = document.getElementById("intro-text");
var i=0;
function typing(){
    if(i<text.length){
        textId.innerHTML += text.charAt(i);
        i++;
        setTimeout(typing, 50);
    }       

}
window.onload = typing;

// // form validation
// var form = document.getElementById("eslambook-form");
// var errorMessage = document.getElementById("error-message");
// form.addEventListener("submit", function(event){
//     event.preventDefault();
//     var name = document.getElementById("name").value;
//     var nickname = document.getElementById("nickname").value;
//     var home = document.getElementById("home").value;
//     var phone = document.getElementById("phone").value;
//     var mail = document.getElementById("mail").value;
//     var born = document.getElementById("born").value;
//     var like = document.getElementById("like").value;
//     var strength = document.getElementById("strength").value;
//     var memories = document.getElementById("memories").value;
//     var dress = document.getElementById("dress").value;
//     var dish = document.getElementById("dish").value;
//     var color = document.getElementById("color").value;
//     var movie = document.getElementById("movie").value;
//     var actor = document.getElementById("actor").value;
//     var actress = document.getElementById("actress").value;
//     var crazy = document.getElementById("crazy").value;
//     var moment = document.getElementById("moment").value;
//     var bore = document.getElementById("bore").value;
//     var ambition = document.getElementById("ambition").value;
//     var trip = document.getElementById("trip").value;
//     var friend = document.getElementById("friend").value;
//     var likeme = document.getElementById("likeme").value;
//     var aboutme = document.getElementById("aboutme").value;
//     var quote = document.getElementById("quote").value;
//     var date = document.getElementById("date").value;
//     var sign = document.getElementById("sign").value;
//     if(name === "" || nickname === "" || home === "" || phone === "" || mail === "" || born === "" || like === "" || strength === "" || memories === "" || dress === "" || dish === "" || color === "" || movie === "" || actor === "" || actress === "" || crazy === "" || moment === "" || bore === "" || ambition === "" || trip === "" || friend === "" || likeme === "" || aboutme === "" || quote === "" || date === "" || sign === ""){
//         document.getElementById("error-message").innerHTML = "Please fill in all the fields.";
//         // clear success message if error occurs
//         errorMessage.style.display = "inline";
//         document.getElementById("success-message").innerHTML = "";
//     } else{
//         document.getElementById("error-message").innerHTML = "";
//         errorMessage.style.display = "none";
//         document.getElementById("success-message").innerHTML = "Form submitted successfully!";
//         form.reset();
//     } 
// });


// form.addEventListener("reset", function(){
//     document.getElementById("error-message").innerHTML = "";
//     document.getElementById("success-message").innerHTML = "";
// });

// form.addEventListener("input", function(){
//     document.getElementById("error-message").innerHTML = "";
//     document.getElementById("success-message").innerHTML = "";
// }); 


(function () {
  emailjs.init("LPOCgoGYjqUfRTwqA"); 
})();

const form = document.getElementById("eslambook-form");
const loader = document.getElementById("loader");
const modal = document.getElementById("successModal");
const submitBtn = form.querySelector("button[type='submit']");
const errorMessage = document.getElementById("error-message");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const name = document.getElementById("name").value.trim();
  const mail = document.getElementById("mail").value.trim();

  if (name === "" || mail === "" || !mail.includes("@")) {
    errorMessage.innerText = "Name and Email are required!";
    errorMessage.style.display = "block";
    return;
  }

  errorMessage.style.display = "none";

  loader.style.display = "flex";
  submitBtn.disabled = true;

  emailjs.sendForm(
    "service_wez4cpk",     
    "template_x531v8t",  
    this
  )
  .then(function(response) {
    
    console.log("SUCCESS", response);
    loader.style.display = "none";
    modal.style.display = "block";
    submitBtn.disabled = false;
    setTimeout(function () {
      modal.style.display = "none";
      location.reload();
    }, 3000);
     //form.reset();
  }, function (error) {

    loader.style.display = "none";
    submitBtn.disabled = false;

    errorMessage.innerText = "Failed to send. Please try again.";
    errorMessage.style.display = "block";

    console.log("FAILED...", error);
  });
});


