<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container{
            width: 65%;
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
        <div class="col-md-8 mb-3">
            <label for="validationCustom01">Full Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="name" value="Mark Otto" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Contact</label>
        <div class="input-group">
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="09123456789" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
            Provide a contact number.
            </div>
        </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="validationCustom01">Date of Birth</label>
        <input type="date" class="form-control" id="validationCustomDate" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="inputStatus">Marital Status</label>
            <select id="inputStatus" class="form-control">
                <option value="" disabled selected>Select marital status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Username</label>
        <div class="input-group">
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="contact" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
            Provide a contact number.
            </div>
        </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="validationCustom03">City</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationCustom04">State</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
        <div class="invalid-feedback">
            Please provide a valid state.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationCustom05">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

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
</script>
    
</body>
</html>