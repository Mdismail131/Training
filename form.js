function validateForm() {
  var x=document.forms["myform"]["userid"].value;
  if(x=="") {
    alert("Username Required");
    return false;
  }
}