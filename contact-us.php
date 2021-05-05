<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/stylesheets.php';?>

    <title>Contact Us</title>
</head>
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body>

<?php include 'includes/header.php';?>



<!-- Content START -->
    <div style="margin-top: 50px;margin-bottom: 50px;">
        <div class="container">
           <div class="row">
            <div class="col-md-1">
            </div>
               <div class="col-md-6">

                   <!-- ERRORS START -->
                <div class="alert alert-warning alert-dismissible fade show" id="errors" role="alert" hidden>
                    <strong id="error-text"></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- ERRORS END -->

                   <h3>Contact Us</h3>
                   <br>
                    <form id="myForm" name="myForm" onsubmit = "return validation();" action="submitted-data.php">
                    <div class="form-row">
                      <div class="form-group col-md-8">
                          
                        <span id="error-name"></span>
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>

                    <div class="form-group col-md-8">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-8">
                      <label for="phone">Phone*</label>
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="form-group col-8">
                        <label for="role">Role</label>
                        <label class="radio-inline">
                            <input type="radio" name="role" value="student"> Student
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="role" value="teacher"> Teacher
                          </label>
                      </div>

                      <div class="form-group col-md-8">
                        <label for="state">State</label>
                        <select id="inputState" class="form-control" name="city">
                          <option selected>Choose...</option>
                          <option value="Lahore">Lahore</option>
                          <option value="Islamabad">Islamabad</option>
                          <option value="Karachi">Karachi</option>
                        </select>
                      </div>

                    <div class="form-group col-md-8">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>

               <div class="col-md-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Address of Business</h5>
                      <p class="card-text">The University of Lahore</p>
                      <p class="card-text">Contact us: 999999</p>
                    </div>
                  </div>
                  <br>

                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Google Map</h5>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8234823976027!2d74.23897181510243!3d31.39143038141246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919018a8ea548c1%3A0x4a52db69c2c814f!2sThe%20University%20of%20Lahore!5e0!3m2!1sen!2s!4v1616790810510!5m2!1sen!2s" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
               </div>
           </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-11" id="submitted-details" hidden>
                    <h1>Your Submitted details</h1>
                    <div>Name: <span id="data-name"></span> </div>
                    <div>Email: <span id="data-email"></span> </div>
                    <div>Phone: <span id="data-phone"></span> </div>
                    <div>Role: <span id="data-role"></span> </div>
                    <div>City: <span id="data-city"></span> </div>
                    <div>Message: <span id="data-message"></span> </div>
                </div>
        </div>
    </div>
    <!-- Content END -->


    <?php include 'includes/footer.php';?>
    <?php include 'includes/scripts.php';?>

    <script>
    function validation() {
        
        var name = document.forms["myForm"]["name"].value;
        var email = document.forms["myForm"]["email"].value;
        var phone = document.forms["myForm"]["phone"].value;
        var role = document.forms["myForm"]["role"].value;
        var city = document.forms["myForm"]["city"].value;
        var message = document.forms["myForm"]["message"].value;
        
        if(name.length < 7) {
            
            document.documentElement.scrollTop = 0;
            document.getElementById('errors').hidden = false;
            document.getElementById('error-text').innerHTML = "Name should not be less than 7 characters!";
            return false;
         }

         var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
         if(!email.match(mailformat)){
            document.documentElement.scrollTop = 0;
            document.getElementById('errors').hidden = false;
            document.getElementById('error-text').innerHTML = "You have entered an invalid email address!";
            return false;
         }

         if(role == "")
         {
            document.documentElement.scrollTop = 0;
            document.getElementById('errors').hidden = false;
            document.getElementById('error-text').innerHTML = "Please select a role!";
            return false;
         }

        return true;
    }
    </script>
</body>

</html>
