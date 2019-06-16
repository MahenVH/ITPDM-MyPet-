<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TrackingVetAppointmentsADD</title>

    <link rel="stylesheet" type="text/css" href=".\css\MedicineAdd.css"/>
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

function validateMedicine()
{
	var medicine = document.getElementById("medicine").value;
		if((medicine == "") || (medicine == null))
		{
			alert("Please enter medicine");
			return false;
		}
		return true;
}

function validatePharmacy()
{
	var pharmacy = document.getElementById("pharmacy").value;
		if((clinicname == "") || (clinicname == null))
		{
			alert("Please enter the pharmacy name");
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



function validate()
{
  if ((validatePetName()) && (validateMedicine()) && (validatePharmacy()))
  {
    alert("You have added a Veterinarian Appointment");
  }
  else {
    event.preventDefault();
  }
}


</script>


<style>


.dropdown{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn{
  font-size: 20px;
  border: none;
  outline: none;
  color:#676767;
  padding: inherit;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.nav a:hover, .dropdown:hover .dropbtn{
  background-color: purple;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  font-size: 12px;
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #717171;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.form{
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
  text-align: center;
}
</style>

  </head>
  <body>
    <header>


          <div class="TopBar">
            <img src=".\img\catdog.png" width="250px" height="180px" align=top >
            <nav>
              <ul>
                <li class="current"><a href="HomePage.php">Home</a></li>
                <li ><a href="Gallery.php">Gallery</a></li>
                <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn"> Veterinarian
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="TrackingVetAppointmentsADD.php">Add appointments</a>
                    <a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.php">Modify Appointments</a>
                  </div>
                  </button>
                </div></li>

                <li><div class="dropdown">
                  <button class="dropbtn"> Medical
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="MedicineAdd.php">Add Medical Details</a>
                    <a href="MedicineViewUpdateDelete.php">Modify Medical details</a>
                  </div>
                </button>
              </div>
              </li>




              </ul>
            </nav>
          </div>

    </header>

    <form action=".\includes\medicine.php" method="post">


      <div class="center">
      <label for="petname">Pet Name</label>
      <input type="text" id="petname" name="petname" value="">
      </div>
      <div class="center">
      <label for="vetname">Medicine</label>
      <input type="text" id="medicine" name="medicine" value="">
      </div>
      <div class="center">
      <label for="vetclinic">Pharmacy</label>
      <input type="text" id="pharmacy" name="pharmacy" value="">
      </div>
      <div class="center">
      <label for="appday">Expiry Date</label>
      <input type="date" id="expdate" name="expdate" value="">
      </div>
      <div class="center">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="">
      </div>
      <div class="buttons">
      <button type="submit" name="add" class="button" onclick="validate()">Add</button>
      <button type="reset" name="clear" class="button">Clear</button>
      </div>
    </form>

  </body>
</html>
