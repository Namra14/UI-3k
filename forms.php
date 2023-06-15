<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
            width: 50%;
            margin-top: 3%;
            padding: 2%;
            background-color: whitesmoke;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 75%;
            }
        }
    </style>

</head>
<body>

<div class="container">
    <form class="needs-validation" novalidate>

    <div class="form-row">
        <div class="col-md-11 mb-3">
            <label for="validationCustom01">Full Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="name" value="Mark Otto" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>      
    </div>

    <div class="form-row">

        <div class="col-md-6 mb-3">
            <label for="validationCustomUsername">Contact</label>
            <div class="input-group">
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="09123456789" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Provide a contact number.
                </div>
            </div>
         </div>

        <div class="col-md-5 mb-3">
            <label for="validationCustom01">Date of Birth</label>
            <input type="date" class="form-control" id="validationCustomDate" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        
    </div>

    <div class="form-row">    
        <div class="col-md-3 mb-3">
        <label for="inputGender">Gender</label>
            <select id="gender" class="form-control">
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
        <label for="inputStatus">Marital Status</label>
            <select id="inputStatus" class="form-control" onchange="toggleSpouseInput()">
                <option value="" disabled selected>Select marital status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>
        </div>

        <div class="col-md-5 mb-4">
        <label for="validationCustomUsername">Name of Spouse</label>
            <div class="input-group">
                <input type="text" class="form-control" id="spouseName" aria-describedby="inputGroupPrepend" disabled required>
                <div class="invalid-feedback">
                Please Enter the Name of your Spouse.
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label class="col-form-label">Type of Animals:</label>
        <div class="form-group">
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="animal-horse" name="animal-type" value="horse" class="form-check-input" required>
                <label for="animal-horse">Horse</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="animal-carabao" name="animal-type" value="carabao" class="form-check-input">
                <label for="animal-carabao">Carabao</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="animal-goat" name="animal-type" value="goat" class="form-check-input">
                <label for="animal-goat">Goat</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="animal-chicken" name="animal-type" value="chicken" class="form-check-input">
                <label for="animal-chicken">Chicken</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="animal-other" name="animal-type" value="other" class="form-check-input">
                <label for="animal-other">Other:</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="text" id="animal-other-text" class="form-control ml-2" name="animal-other-text">
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Submit form</button>

    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function toggleSpouseInput() {
            var maritalStatus = document.getElementById('inputStatus').value;
            var spouseNameInput = document.getElementById('spouseName');

            if (maritalStatus === 'single' || maritalStatus === 'divorced') {
                spouseNameInput.disabled = true;
                spouseNameInput.value = '';
            } else {
                spouseNameInput.disabled = false;
            }
        }

</script>
    
</body>
</html>