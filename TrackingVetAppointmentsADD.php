<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TrackingVetAppointmentsADD</title>

    <link rel="stylesheet" type="text/css" href=".\css\VeteriarianAppointmentsADD.css"/>
    <script type="text/javascript">



function validatePetName()
{
	var petname = document.getElementById ("petname").value;
		if((petname == "") || (petname == null))
		{
			alert("Please enter your Pet's name");
			return false;
		}
		return true;
}

function validateVetName()
{
	var vetname = document.getElementById("vetname").value;
		if((vetname == "") || (vetname == null))
		{
			alert("Please enter your veterinarian's name");
			return false;
		}
		return true;
}

function validateVetClinicName()
{
	var clinicname = document.getElementById("vetclinic").value;
		if((clinicname == "") || (clinicname == null))
		{
			alert("Please enter the clinic name");
			return false;
		}
		return true;
}

/*function validateAppDate()
{
  var date=document.getElementById("appday").value;
  regex = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$;
  if ((date == "") || (date == null) || (!date.match(regex)))
  {
    alert("Please enter the valid date");
    return false;
  }
  return true;

}*/

function validateEmail()
{
	var email = document.getElementById("email").value;
	var dot = email.lastIndexOf(".");
	var at = email.indexOf("@");
	var len = email.length;

		if((at < 1) || (dot-at <2) || (len-dot <3 ))
		{
			alert("Please enter a valid Email");
			return false;
		}
		return true;
}

function validate()
{
  if ((validatePetName()) && (validateVetName()) && (validateVetClinicName()) && (validateEmail()))
  {
    alert("You have added a Veterinarian Appointment");
  }
  else {
    event.preventDefault();
  }
}

</script>


    <link rel="stylesheet" type="text/css" href=".\css\VeteriarianAppointmentsADD.css"/>

  </head>
  <body>
    <header>

      <div class="TopBar">
        <img src=".\img\catdog.png" width="250px" height="180px" align=top >
        <nav>
          <ul>
            <li ><a href="HomePage.html">Home</a></li>
            <li class="current"><a href="Gallery.html">Gallery</a></li>
            <li><a href="RegisterPetDetails.html">Register Your Pet</a></li>
            <li><a href="login.html">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">View Update Delete</a></li>
            <li class=current><a href="TrackingVetAppointmentsADD.html">Add </a></li>
          </ul>
        </nav>
      </div>

    </header>

    <form action="D:\XAMP\htdocs\ITPDM-MyPet-\includes\vetappointment.php" method="post">
      <div class="center">
      <label for="entryno">Entry No.</label>
      <input type="number" id="entryno" name="entryno" value="">
      </div>
      <div class="center">
      <label for="petname">Pet Name</label>
      <input type="text" id="petname" name="petname" value="">
      </div>
      <div class="center">
      <label for="vetname">Veterinarian Name</label>
      <input type="text" id="vetname" name="vetname" value="">
      </div>
      <div class="center">
      <label for="vetclinic">Veterinarian Clinic</label>
      <input type="text" id="vetclinic" name="vetclinic" value="">
      </div>
      <div class="center">
      <label for="appday">Appointment day</label>
      <input type="date" id="appday" name="appday" value="">
      </div>
      <div class="center">
      <label for="apptime">Appointment time</label>
      <input type="time" id="apptime" name="apptime" value="">
      </div>
      <div class="center">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="">
      </div>
      <div>
      <button type="submit" name="add" class="button" onclick="validate()">Add</button>
      <button type="reset" name="clear" class="button">Clear</button>
      </div>
    </form>
    ?>

  </body>
</html>
