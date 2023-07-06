<?php

include "processes/config.php";
error_reporting();
session_start();

$session_id = $_SESSION['user_id'];
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    echo '<script>alert("Login or register to enter!")</script>';
    header('refresh:0.1;url=services.php');
    exit();
}

if (isset($_POST['submit'])) {

    $full_name = $_POST['full_name'];
    $contact = $_POST['contact'];
    $date_of_birth = date('Y-m-d', strtotime($_POST['date_of_birth']));
    $gender = $_POST['gender'];
    $marital_stat = $_POST['marital_stat'];
    $spouse_name = $_POST['spouse_name'];
    $animal_type = $_POST['animal_type'];
    $purpose = $_POST['purpose'];
    $stock_source = $_POST['source'];
    $breed = $_POST['breed'];
    $ear_mark = $_POST['ear_mark'];
    $brand = $_POST['brand'];
    $basic_color = $_POST['basic_color'];
    $no_of_male_animals = $_POST['no_of_male_animals'];
    $no_of_female_animals = $_POST['no_of_female_animals'];
    $age = $_POST['age'];
    $no_of_housing = $_POST['no_of_housing'];
    $no_of_birth_per_house_unit = $_POST['no_of_birth_per_house_unit'];
    $date_of_purchase = $_POST['date_of_purchase'];
    $total_no_of_heads_per_enroll = $_POST['total_no_of_heads_per_enroll'];
    $cert_owner_large_cattle_no = $_POST['colc'];
    $cert_transfer_large_cattle_no = $_POST['ctlc'];
    $desired_sum_insured = $_POST['one'];
    $total_sum_insured = $_POST['two'];
    $coverage_for_epidemic_disease1 = $_POST['three_one'];
    $coverage_for_epidemic_disease2 = $_POST['three_two'];
    $coverage_for_epidemic_disease3 = $_POST['three_three'];

    $insert_query = mysqli_query($conn, "INSERT INTO lmi_form 
    (full_name, contact, date_of_birth, gender, marital_stat, spouse_name, animal_type, purpose, source, breed, ear_mark, brand, basic_color, 
    no_of_male_animals, no_of_female_animals, age, no_of_housing, no_of_birth_per_house_unit, date_of_purchase, total_no_of_heads_per_enroll,
    cert_owner_large_cattle_no, cert_transfer_large_cattle_no, desired_sum_insured, total_sum_insured, coverage_for_epidemic_disease1, coverage_for_epidemic_disease2, 
    coverage_for_epidemic_disease3)
    VALUES
    ('$full_name','$contact', '$date_of_birth', '$gender', '$marital_stat', '$spouse_name' '$animal_type', '$purpose', '$source', '$breed', '$ear_mark', '$brand', '$basic_color', 
    '$no_of_male_animals', '$no_of_female_animals', '$age', '$no_of_housing', '$no_of_birth_per_house_unit', '$date_of_purchase', '$total_no_of_heads_per_enroll',
    '$cocl', '$ctlc', '$one', '$two', '$three_one', '$three_two', '$three_three')");

    if ($insert_query) {
        echo "<script>alert('Data Inserted.')</script>";
    } else {
        echo "<script>alert('Data Not Inserted.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #C2DEDC, #FAF0E4, #EEE2DE, #967E76);
            background-size: 400% 400%;
            animation: wavingColor 10s ease infinite;
        }

        @keyframes wavingColor {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            margin: 12% auto;
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

        .radio {
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

        .coverage {
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
    <header>
        <a href="index.php"><img class="logo" src="img/newl.png" width="270px" height="130px"></a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="forms.php" class="active">Forms</a>
            <a href="processes/logout.php">Logout</a>

        </nav>
    </header>

    <div class="container">
        <form class="" action="" method="POST">

            <div class="form-row">
                <h2 style="display: flex; margin-left: auto; margin-right: auto;">Application Livestock Morality Insurance</h2><br><br><br><br>
                <div class="col-md-11 mb-3">
                    <label for="validationCustom01">Full Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="full_name" placeholder="name" value="Mark Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername">Contact</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" name="contact" placeholder="09123456789" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Provide a contact number.
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Date of Birth</label>
                    <input type="date" class="form-control" id="validationCustomDate" name="date_of_birth">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="inputGender">Gender</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="inputStatus">Marital Status</label>
                    <select id="inputStatus" name="marital_stat" class="form-control" onchange="toggleSpouseInput()">
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
                        <input type="text" class="form-control" id="spouseName" name="spouse_name" aria-describedby="inputGroupPrepend" disabled required>
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
                        <input type="radio" id="animal-horse" name="animal_type" value="horse" class="form-check-input" required>
                        <label for="animal-horse">Horse</label>
                    </div>

                    <div class="form-check form-check-inline mx-2">
                        <input type="radio" id="animal-carabao" name="animal_type" value="carabao" class="form-check-input">
                        <label for="animal-carabao">Carabao</label>
                    </div>

                    <div class="form-check form-check-inline mx-2">
                        <input type="radio" id="animal-goat" name="animal_type" value="goat" class="form-check-input">
                        <label for="animal-goat">Goat</label>
                    </div>

                    <div class="form-check form-check-inline mx-2">
                        <input type="radio" id="animal-chicken" name="animal_type" value="chicken" class="form-check-input">
                        <label for="animal-chicken">Chicken</label>
                    </div>

                    <div class="form-check form-check-inline mx-2">
                        <input type="radio" id="animal-other" name="animal_type" value="other" class="form-check-input">
                        <label for="animal-other">Other:</label>
                    </div>

                    <div class="form-check form-check-inline mx-2">
                        <input type="text" id="animal-other-text" class="form-control ml-2" name="animal_type">
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
                            <input type="text" id="ear-mark" name="ear_mark" required>
                        </div>

                        <div class="form-group" style="margin-right: 20px;">
                            <label for="brand">Brand:</label>
                            <input type="text" id="brand" name="brand" required>
                        </div>

                        <div class="form-group" style="margin-right: 20px;">
                            <label for="basic-color">Basic Color:</label>
                            <input type="text" id="basic-color" name="basic_color" required>
                        </div>

                        <div class="form-group" style="margin-right: 20px;">
                            <label for="male-animals">No. of Male Animals:</label>
                            <input type="number" id="male-animals" name="male_animals" required>
                        </div>

                        <div class="form-group" style="margin-right: 20px;">
                            <label for="female-animals">No. of Female Animals:</label>
                            <input type="number" id="female-animals" name="female_animals" required>
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
                            <input type="number" id="birth-per-housing" name="no_of_birth_per_house_unit" required>
                        </div>

                        <div class="form-group" style="margin-right: 30px;">
                            <label for="purchase-date">Date of Purchase:</label>
                            <input type="text" id="purchase-date" name="date_of_purchase" required>
                        </div>

                    </div>
                    <div class="form-group" style="margin-right: 30px;">
                        <label for="heads-per-enrollment" style="font-size: 27px;">Total Number of Heads per Enrollment:</label>
                        <input type="text" id="heads-per-enrollment" name="total_no_of_heads_per_enroll" required>

                        <h3 style="font-size: 20px; margin-top: 10px;">For Cattle and Carabao Only:</h3>
                        <label for="colc">Certificate of Ownership of Large Cattle No:</label>
                        <input type="text" id="colc" name="colc" required>
                        <label for="ctlc">Certificate of Transfer of Large Cattle No:</label>
                        <input type="text" id="ctlc" name="ctlc" required>

                    </div>

                    <!--IV.-->
                    <h3 style="font-size: 27px; margin-top: 25px;">IV. Coverage</h3>

                    <div class="form-group" style="margin-right: 30px;">
                        <label for="1">1. Desired Sum Insured per Head: Php</label>
                        <input type="text" id="1" name="one" required>
                    </div>

                    <div class="form-group" style="margin-right: 30px;">
                        <label for="2">2. Total Sum Insured: Php</label>
                        <input type="text" id="2" name="two" required>
                    </div>

                    <div class="form-group mb-4" style="margin-right: 30px;">
                        <label for="3">3. Extended Coverage for Epidemic Diseases:</label>
                        <label for="3.1">3.1</label>
                        <input type="text" id="3.1" name="three_one" required>
                        <label for="3.2">3.2</label>
                        <input type="text" id="3.2" name="three_two" required>
                        <label for="3.3">3.3</label>
                        <input type="text" id="3.3" name="three_three" required>
                    </div>

                    <div class="custom-file col-md-11 mb-4">
                        <input type="file" class="custom-file-input" id="customFileLang">
                        <label class="custom-file-label" for="customFileLang">Signature of Applicant</label>
                    </div>

                    <br>

                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>

                </div>

            </div>
        </form>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function toggleSpouseInput() {
            var maritalStatus = document.getElementById('inputStatus').value;
            var spouseNameInput = document.getElementById('spouseName');

            if (maritalStatus === 'single' || maritalStatus === 'divorced') {
                spouseNameInput.disabled = true;
                spouseNameInput.value = 'N/A';
            } else {
                spouseNameInput.disabled = false;
            }
        }
    </script>

</body>

</html>