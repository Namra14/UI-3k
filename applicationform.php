<!DOCTYPE html>
<html>
<head>
  <title> Application Livestock Morality Insurance</title>
  <style>
    /* CSS styles go here */
    .form-container {
      max-width: 500px;
      margin: 0 auto;
      position: relative;
        width: 450px;
        height: 100%;
        background: rgba(255, 255, 255, 0.2);
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

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 16px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2> Application Livestock Morality Insurance</h2>
    <form action="submit_form.php" method="POST">
      <div class="form-group">
        <label for="applicant-name">Name of Applicant:</label>
        <input type="text" id="applicant-name" name="applicant-name" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="contact-no">Contact No.:</label>
        <input type="tel" id="contact-no" name="contact-no" required>
      </div>
      <div class="form-group">
        <label for="marital-status">Marital Status:</label>
        <select id="marital-status" name="marital-status" required>
          <option value="" disabled selected>Select marital status</option>
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="divorced">Divorced</option>
          <option value="widowed">Widowed</option>
        </select>
      </div>
      <div class="form-group">
        <label for="spouse-name">Name of Spouse:</label>
        <input type="text" id="spouse-name" name="spouse-name">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select><br><br><br>

        <div class="form-group1">
        <label>Type of Animals:</label><br>
        <div class="radio">
        <input type="radio" id="animal-horse" name="animal-type" value="horse" required>
        <label for="animal-horse">Horse</label><br>
        <input type="radio" id="animal-carabao" name="animal-type" value="carabao">
        <label for="animal-carabao">Carabao</label><br>
        <input type="radio" id="animal-goat" name="animal-type" value="goat">
        <label for="animal-goat">Goat</label><br>
        <input type="radio" id="animal-chicken" name="animal-type" value="chicken">
        <label for="animal-chicken">Chicken</label><br>
        <input type="radio" id="animal-other" name="animal-type" value="other">
        <label for="animal-other">Other:</label>
        <input type="text" id="animal-other-text" name="animal-other-text">
        </div>
      </div>

      <div class="form-group">
        <h3>Description of Animals to be Insured</h3>
        <label for="source">Source of Stock:</label>
        <input type="text" id="source" name="source" required>
      </div>
      <div class="form-group">
        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" required>
      </div>
      <div class="form-group">
        <label for="ear-mark">Ear Mark:</label>
        <input type="text" id="ear-mark" name="ear-mark" required>
      </div>
      <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required>
      </div>
      <div class="form-group">
        <label for="basic-color">Basic Color:</label>
        <input type="text" id="basic-color" name="basic-color" required>
      </div>
      <div class="form-group">
        <label for="male-animals">No. of Male Animals:</label>
        <input type="number" id="male-animals" name="male-animals" required>
      </div>
      <div class="form-group">
        <label for="female-animals">No. of Female Animals:</label>
        <input type="number" id="female-animals" name="female-animals" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>
      </div>
      <div class="form-group">
        <label for="housing">No. of Housing:</label>
        <input type="number" id="housing" name="housing" required>
      </div>
      <div class="form-group">
        <label for="birth-per-housing">No. of Birth per Housing Unit:</label>
        <input type="number" id="birth-per-housing" name="birth-per-housing" required>
      </div>
      <div class="form-group">
        <label for="purchase-date">Date of Purchase:</label>
        <input type="text" id="purchase-date" name="purchase-date" required>
      </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
