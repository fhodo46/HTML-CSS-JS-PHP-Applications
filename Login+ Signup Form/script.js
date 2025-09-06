function togglepasswordusername(){ 
  var icon = document.getElementById("passwordfield");
  if(icon.type === "password"){ 
    icon.type = "text";
  }
  else{
    icon.type = "password";
  }}