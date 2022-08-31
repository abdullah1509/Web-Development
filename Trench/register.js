function validateForm()
{
var x=document.forms["register"]["name"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }

var x=document.forms["register"]["college"].value;
if (x==null || x=="")
  {
  alert("College must be filled out");
  return false;
  }


var x=document.forms["register"]["semester"].value;
if (x==null || x=="")
  {
  alert("Semester must be filled out");
  return false;
  }

var x=document.forms["register"]["branch"].value;
if (x==null || x=="")
  {
  alert("Branch must be filled out");
  return false;
  }

var x=document.forms["register"]["participating-in"].value;
if (x==null || x=="")
  {
  alert("Participating must be filled out");
  return false;
  }

var x=document.forms["register"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var x=document.forms["register"]["contact-no"].value;
if (x==null || x=="")
  {
  alert("Contact must be filled out");
  return false;
  }

}

