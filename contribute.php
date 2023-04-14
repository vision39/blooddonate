<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute</title>
    
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h6>Blood donation</h6>
        <div class="navigation">
            <ul>
                <li><a href="/bd/index.php">Home</a></li>
                <li><a href="/bd/about.php">About</a></li>
                <li><a href="/bd/contribute.php">Contribute</a></li>
                <li><a href="/bd/contact.php">Contact Us</a></li>
                <li><a href="/bd/login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="main" style="margin: 100px auto 0px auto; width:50%; display: flex;">
        <div class="row" style="margin: 20px; font-size:20px;">
            <h3 style="text-align:center; padding:90px 30px 70px 0px; font-size: 45px;">Sign Up</h3>

            <!--Form Start-->

            <form action="form-group" method="post">
                <div class="form-group">
                    <label for="fullname" style="">Full Name</label><br>
                    <input type="text" name="name" id="fullname" placeholder="Full Name" requiredpattern="[A-Za-z/\s]+" title="Only Lower and Upper case and Space" class="form-control" required style="width: 100%; padding:10px; margin:5px 0px 5px 0px; font-size:16px">
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px; justify-content:center">
                    <label for="name" style="margin: 10px 10px 0px 0px; justify-content:center;">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="form-control" required placeholder="City" style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                        <option value="">Select Your Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="gender" style="margin: 10px 10px 0px 0px; justify-content:center;">Gender: </label>
                    <input type="radio" name="gender" id="gender" value="Male" style="margin: 10px 5px 0px 0px;">Male
                    <input type="radio" name="gender" id="gender" value="Female" style="margin: 10px 5px 0px 0px;">Female
                </div>

                <div class="form-inline" style="margin: 10px 0px 10px 0px;">
                    <label for="DOB" style="margin: 10px 10px 0px 0px; justify-content:center;">Date of Birth:</label><br>
                    <input type="text" class="form-control" id="datepicker" placeholder="DD-MM-YYYY" style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="email" style="margin: 10px 10px 0px 0px; justify-content:center;">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" title="Please write correct Email" class="form-control" required style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="contact" style="margin: 10px 10px 0px 0px; justify-content:center;">Contact No</label>
                    <input type="phone" name="contact" id="contact" placeholder="Contact Number" title="Please input valid Contact Number" required style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="City" style="margin: 10px 10px 0px 0px; justify-content:center;">City</label>
                    <select name="city" id="city" required style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                        <option value="">Select Your City</option>
                        <option value="Abohar">Abohar</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Barnala">Barnala</option>
                        <option value="Batala">Batala</option>
                        <option value="Bathinda">Bathinda</option>
                        <option value="Faridkot">Faridkot</option>
                        <option value="Firozpur">Firozpur</option>
                        <option value="Hoshiarpur">Hoshiarpur</option>
                        <option value="Jalandhar">Jalandhar</option>
                        <option value="Kapurthala">Kapurthala</option>
                        <option value="Khanna">Khanna</option>
                        <option value="Ludhiana">Ludhiana</option>
                        <option value="Malerkotla">Malerkotla</option>
                        <option value="Moga">Moga</option>
                        <option value="Muktsar">Muktsar</option>
                        <option value="Pathankot">Pathankot</option>
                        <option value="Patiala">Patiala</option>
                        <option value="Phagwara">Phagwara</option>
                        <option value="Rajpura">Rajpura</option>
                        <option value="Sunam">Sunam</option>
                    </select>
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="password" style="margin: 10px 10px 0px 0px; justify-content:center;">Password</label>
                    <input type="password" name="password" value="" placeholder="Password" pattern="{6,}" required style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                </div>

                <div class="form-group" style="margin: 10px 0px 10px 0px;">
                    <label for="password" style="margin: 10px 10px 0px 0px; justify-content:center;">Confirm Password</label>
                    <input type="password" name="c_password" value="" placeholder="Confirm Password" pattern="{6,}" required style="margin: 10px 5px 0px 0px; padding:5px; width:100%;">
                </div>

                <div class="form-inline" style="margin: 10px 0px 10px 0px;">
                    <input type="checkbox" name="term" value="true"><span>
                        <p>I am agree to donate my blood and show my Name, Contact No. and Email on Blood donors</p>
                    </span>
                </div>

                <div class="form-group" style="display:flex; align-items: center;">
                    <button id="button" name="buton" type="submit" style="align-items: center; margin: 0px 0px 0px 50%; padding: 8px; border-radius:5px; color:#fff; background-color:deeppink; border:none; font-size:15px;">Sign Up</button>
                </div>
            </form>
        </div>
    </div>



    <script src="jquery-3.6.4.min.js"></script>
    <script src="jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                changeYear: true,
                maxDate: '0D',
                minDate: '-50Y'
            });
        })
    </script>
</body>

</html>