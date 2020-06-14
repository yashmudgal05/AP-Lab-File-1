function validate(){
  var name1 = document.getElementById("name1").value;
  var name2 = document.getElementById("name2").value;
  
  var institute = document.getElementById("institute").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
 
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name1.length < 5) {
    text = "Please Enter valid first Name";
    error_message.innerHTML = text;
    return false;
  }
    if(name2.length < 5) {
    text = "Please Enter valid last Name";
    error_message.innerHTML = text;
    return false;
  }
    
  
  if(institute.length < 5) {
    text = "Please Enter Institute name";
    error_message.innerHTML = text;
    return false;
  }
 
  if( phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  
  alert("Form Submitted Successfully!");
  return true;
}