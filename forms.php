<?php

include "processes/config.php";
error_reporting(0);
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
    $spouse_name = empty($_POST['spouse_name']) ? 'N/A' : $_POST['spouse_name'];
    $animal_type = $_POST['animal_type'];
    $purpose = $_POST['purpose'];
    $stock_source = $_POST['stock_source'];
    $breed = $_POST['breed'];
    $ear_mark = $_POST['ear_mark'];
    $brand = $_POST['brand'];
    $basic_color = $_POST['basic_color'];
    $no_of_male_animals = $_POST['no_of_male_animals'];
    $no_of_female_animals = $_POST['no_of_female_animals'];
    $age = $_POST['age'];
    $no_of_housing = $_POST['no_of_housing'];
    $no_of_birth_per_house_unit = $_POST['no_of_birth_per_house_unit']; //
    $date_of_purchase = date('Y-m-d', strtotime($_POST['date_of_purchase']));
    $total_no_of_heads_per_enroll = $_POST['total_no_of_heads_per_enroll'];
    $cert_owner_large_cattle_no = $_POST['cert_owner_large_cattle_no'];
    $cert_transfer_large_cattle_no = $_POST['cert_transfer_large_cattle_no'];
    $desired_sum_insured = $_POST['desired_sum_insured'];
    $total_sum_insured = $_POST['total_sum_insured'];
    $coverage_for_epidemic_disease1 = $_POST['three_one'];
    $coverage_for_epidemic_disease2 = $_POST['three_two'];
    $coverage_for_epidemic_disease3 = $_POST['three_three'];

    $insert_query = mysqli_query($conn, "INSERT INTO lmi_form (full_name, contact, date_of_birth, gender, marital_stat, spouse_name, animal_type, purpose, stock_source,
    breed, ear_mark, brand, basic_color, no_of_male_animals, no_of_female_animals, age, no_of_housing, no_of_birth_per_house_unit, date_of_purchase, total_no_of_heads_per_enroll,
    cert_owner_large_cattle_no, cert_transfer_large_cattle_no, desired_sum_insured, total_sum_insured, coverage_for_epidemic_disease1, coverage_for_epidemic_disease2, coverage_for_epidemic_disease3)
    VALUES
    ('$full_name','$contact', '$date_of_birth', '$gender', '$marital_stat', '$spouse_name', '$animal_type', '$purpose', '$stock_source', '$breed', '$ear_mark', '$brand', '$basic_color',
    '$no_of_male_animals', '$no_of_female_animals', '$age', '$no_of_housing', '$no_of_birth_per_house_unit', '$date_of_purchase', '$total_no_of_heads_per_enroll',
    '$cert_owner_large_cattle_no', '$cert_transfer_large_cattle_no', '$desired_sum_insured', '$total_sum_insured', '$coverage_for_epidemic_disease1', '$coverage_for_epidemic_disease2', '$coverage_for_epidemic_disease3')");

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Livestock Morality Insurance Registration Form</title>

    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #F2EAD3;
        }

        .container {
            position: relative;
            max-width: 850px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 11% 15px 50px 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #4070f4;
        }

        .container form {
            position: relative;
            margin-top: 13px;
            min-height: 840px;
            background-color: #fff;
            overflow: hidden;
        }

        .container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .container form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 2 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input,
        select,
        textarea {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
            resize: none;
        }

        .input-field input :focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .container form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #4070f4;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #265df2;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <header>
    <a href="index.php"><img class="logo" src="img/newl.png" width="270px" height="110px"></a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="forms.php"  class="active">Forms</a>
            <a href="processes/logout.php">Logout</a>

        </nav>
    </header>

    <div class="container">
        <header>Application Livestock Morality Insurance</header>

        <form action="#" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="contact" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select id="gender" name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="inputStatus">Marital Status</label>
                            <select id="inputStatus" name="marital_stat" onchange="toggleSpouseInput()">
                                <option value="" disabled selected>Select marital status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="validationCustomUsername">Name of Spouse</label>
                            <input type="text" id="spouseName" name="spouse_name" aria-describedby="inputGroupPrepend" disabled required>
                        </div>
                    </div>
                </div>

                <br>

                <div class="details ID">
                    <span class="title">Additional Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>What type of Animal do you own?</label>
                            <input type="text" name="animal_type" placeholder="e.g cattle, cow, horse etc." required>
                        </div>

                        <div class="input-field">
                            <label>Purpose</label>
                            <select id="purpose" name="purpose" required>
                                <option disabled selected>Select Purpose</option>
                                <option value="Fattening">Fattening</option>
                                <option value="Draft">Draft</option>
                                <option value="Broilers">Broilers</option>
                                <option value="Pullets">Pullets</option>
                                <option value="Breeding">Breeding</option>
                                <option value="Milking">Milking</option>
                                <option value="Layers">Layers</option>
                                <option value="Parent Stock">Parent Stock</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Source of Stock</label>
                            <input type="text" name="stock_source" placeholder="Enter source of stock" required>
                        </div>

                        <div class="input-field">
                            <label>Breed</label>
                            <input type="text" name="breed" placeholder="Enter breed" required>
                        </div>

                        <div class="input-field">
                            <label>Ear Mark</label>
                            <input type="text" name="ear_mark" placeholder="Enter ear mark" required>
                        </div>

                        <div class="input-field">
                            <label>Brand</label>
                            <input type="text" name="brand" placeholder="Enter brand" required>
                        </div>

                        <div class="input-field">
                            <label>Basic Color</label>
                            <input type="text" name="basic_color" placeholder="Enter basic color" required>
                        </div>

                        <div class="input-field">
                            <label>Number of Male Animals</label>
                            <input type="text" name="no_of_male_animals" placeholder="Enter number of male animals" required>
                        </div>

                        <div class="input-field">
                            <label>Number of Female Animals</label>
                            <input type="text" name="no_of_female_animals" placeholder="Enter number of female animals" required>
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>


            <div class="form second">
                <div class="details address">
                    <span class="title">Additional Information (Cont.)</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter age of animals" required>
                        </div>

                        <div class="input-field">
                            <label>Number of Housing</label>
                            <input type="text" name="no_of_housing" placeholder="Enter number of housing" required>
                        </div>

                        <div class="input-field">
                            <label>No. of Birth per Housing Unit:</label>
                            <input type="text" name="no_of_birth_per_house_unit" placeholder="Enter your no. of birth per housing" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Purchase</label>
                            <input type="date" name="date_of_purchase" required>
                        </div>

                        <div class="input-field">
                            <label>Total Number of Heads per Enrollment</label>
                            <input type="text" name="total_no_of_heads_per_enroll" placeholder="Enter total number of heads per enrollment" required>
                        </div>
                    </div>
                </div>


                <div class="details cattle">
                    <span class="title">For Cattle and Carabao Only (Type N/A if not applicable)</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Certificate of Ownership of Large Cattle No.</label>
                            <input type="text" name="cert_owner_large_cattle_no" placeholder="Enter Certificate of Owner of Large Cattle No" required>
                        </div>

                        <div class="input-field">
                            <label>Certificate of Transfer of Large Cattle No.</label>
                            <input type="text" name="cert_transfer_large_cattle_no" placeholder="Enter Certificate of Transfer of Large Cattle No" required>
                        </div>
                    </div>
                </div>


                <div class="details coverage">
                    <span class="title">Coverage</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>1. Desired Sum Insured per Head: Php</label>
                            <input type="text" name="desired_sum_insured" placeholder="Enter desired sum insured" required>
                        </div>

                        <div class="input-field">
                            <label>2. Total Sum Insured: Php</label>
                            <input type="text" name="total_sum_insured" placeholder="Enter total sum insured" required>
                        </div>
                    </div>
                </div>

                <br>

                <div class="details extend">
                    <span class="title">3. Extended Coverage for Epidemic Diseases:</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>3.1</label>
                            <input type="text" name="three_one" required>
                        </div>

                        <div class="input-field">
                            <label>3.2</label>
                            <input type="text" name="three_two" required>
                        </div>

                        <div class="input-field">
                            <label>3.3</label>
                            <input type="text" name="three_three" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="sumbit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>

                </div>

            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
        const form = document.querySelector("form"),
            nextBtn = form.querySelector(".nextBtn"),
            backBtn = form.querySelector(".backBtn"),
            allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            })
        })

        backBtn.addEventListener("click", () => form.classList.remove('secActive'));

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