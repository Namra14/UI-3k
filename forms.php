<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
        margin: 5% auto;
        position: relative;
        width: 70%;
        height: 100%;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        box-shadow: 0 0 70px rgba(0, 0, 0, 0.1);
        padding: 40px;
        }

        .form-group {
        margin-bottom: 20px;
        }

        .form-group label {
        display: block;
        margin-bottom: 5px;
        }
        .radio{
        display: flex;
        width: 100%;
        text-align: center;
        margin-left: 15px;
    }
    .form-group input[type="text"],
    .form-group input[type="tel"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-group select {
      height: 34px;
    }
    .coverage{
    display: flex;
    width: 100%;
    text-align: center;
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
    <h2 style="display: flex; margin-left: auto; margin-right: auto;" >Application Livestock Morality Insurance</h2><br><br><br><br>
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

        <!--I.-->
    <div class="form-row">
        <label class="col-form-label" style="font-size: 27px;">I. Type of Animals:</label>
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

        <!--II.-->
            <label class="col-form-label" style="font-size: 27px;">II. Purpose:</label>
        <div class="form-group">
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Fattening" name="purpose" value="Fattening" class="form-check-input" required>
                <label for="Fattening">Fattening</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Draft" name="purpose" value="Draft" class="form-check-input">
                <label for="Draft">Draft</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Broilers" name="purpose" value="Broilers" class="form-check-input">
                <label for="Broilers">Broilers</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Pullets" name="purpose" value="Pullets" class="form-check-input">
                <label for="Pullets">Pullets</label>
            </div>
            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Breeding" name="purpose" value="Breeding" class="form-check-input">
                <label for="Breeding">Breeding</label>
            </div>

            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Milking" name="purpose" value="Milking" class="form-check-input">
                <label for="Milking">Milking</label>
            </div>

            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Layers" name="purpose" value="Layers" class="form-check-input">
                <label for="Layers">Layers</label>
            </div>

            <div class="form-check form-check-inline mx-2">
                <input type="radio" id="Parent Stock" name="purpose" value="Parent Stock" class="form-check-input">
                <label for="Parent Stock">Parent Stock</label>
            </div>
            <br><br><br>

            <!--III.-->
            <div class="form-group">
                <h3>III. Description of Animals to be Insured</h3>
                <label for="source">Source of Stock:</label>
                <input type="text" id="source" name="source" required>
            </div>
        </div>

    <div class="form-row">   

      <div class="form-group" style="margin-right: 18px;">
        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="ear-mark">Ear Mark:</label>
        <input type="text" id="ear-mark" name="ear-mark" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="basic-color">Basic Color:</label>
        <input type="text" id="basic-color" name="basic-color" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="male-animals">No. of Male Animals:</label>
        <input type="number" id="male-animals" name="male-animals" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="female-animals">No. of Female Animals:</label>
        <input type="number" id="female-animals" name="female-animals" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="housing">No. of Housing:</label>
        <input type="number" id="housing" name="housing" required>
      </div>

      <div class="form-group" style="margin-right: 20px;">
        <label for="birth-per-housing">No. of Birth per Housing Unit:</label>
        <input type="number" id="birth-per-housing" name="birth-per-housing" required>
      </div>

      <div class="form-group" style="margin-right: 30px;">
        <label for="purchase-date">Date of Purchase:</label>
        <input type="text" id="purchase-date" name="purchase-date" required>
      </div>
      
      </div>
      <div class="form-group" style="margin-right: 30px;">
        <label for="heads-per-enrollment" style="font-size: 27px;">Total Number of Heads per Enrollment:</label>
        <input type="text" id="heads-per-enrollment" name="heads-per-enrollment" required>

        <h3 style="font-size: 20px; margin-top: 10px;" >For Cattle and Carabao Only:</h3>
        <label for="colc">Certificate of Ownership of Large Cattle No:</label>
        <input type="text" id="colc" name="colc" required>
        <label for="ctlc">Certificate of Transfer of Large Cattle No:</label>
        <input type="text" id="ctlc" name="ctlc" required>
    
    </div>
    
    <!--IV.-->
    <h3 style="font-size: 27px; margin-top: 25px;" >IV. Coverage</h3>
    
    <div class="form-group" style="margin-right: 30px;">
        <label for="1">1. Desired Sum Insured per Head: Php</label>
        <input type="text" id="1" name="1" required>
      </div>

      <div class="form-group" style="margin-right: 30px;">
        <label for="2">2. Total Sum Insured: Php</label>
        <input type="text" id="2" name="2" required>
      </div>

      <div class="form-group mb-4" style="margin-right: 30px;">
        <label for="3">3. Extended Coverage for Epidemic Diseases:</label>
        <label for="3.1">3.1</label>
        <input type="text" id="3.1" name="3.1" required>
        <label for="3.2">3.2</label>
        <input type="text" id="3.2" name="3.2" required>
        <label for="3.3">3.3</label>
        <input type="text" id="3.3" name="3.3" required>
      </div>

    <!--E-Signature.-->
      <form>
        <div class="custom-file col-md-11 mb-4">
            <input type="file" class="custom-file-input" id="customFileLang">
            <label class="custom-file-label" for="customFileLang">Signature of Applicant</label>
        </div>
    </form>

        <br>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>

        </div>
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