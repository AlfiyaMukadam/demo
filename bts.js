
<script language="javascript"type="text/javascript">
<!--

function validate()
{
var fname=document.myForm.first_name.value;
var lname=document.myForm.last_name.value;
var addr=document.myForm.address.value;
var adh=document.myForm.Adhaar_no.value;
var con=document.myForm.Contact_Number.value;


if(isNaN(con))
{
alert("enetr valid contact");
document.myForm.Contact_Number.focus();
return false;
}

if(isNaN(adh))
{
alert("enetr valid Adhaar_no");
document.myForm.Adhaar_no.focus();
return false;
}


if(!(isNaN(fname)))
{
alert("enetr valid name");
document.myForm.first_name.focus();
return false;
}

if(!(isNaN(lname)))
{
alert("enetr valid name");
document.myForm.last_name.focus();
return false;
}

//-->
</script>