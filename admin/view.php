<?php

error_reporting(0);
session_start();

include "../processes/config.php";
include "logic.php";

$session_id = $_SESSION['user_id'];
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    echo '<script>alert("Login or register to enter!")</script>';
    header('refresh:0.1;url=admin_login.php');
    exit();
}

$admin_query = mysqli_query($conn, "SELECT * FROM `user_table` WHERE id = '$session_id'");
$admin_row = mysqli_fetch_assoc($admin_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <!-- Include Bootstrap CSS -->

    <style>
        /* Set table width to 100% */
        table {
            margin: 0% 5% 1% 5%;
            width: 90%;
        }

        /* Add some padding to table cells */
        th,
        td {
            padding: 10px;
        }

        /* Make table headers bold */
        th {
            font-weight: bold;
        }

        /* Add custom styles for client information row */
        .client-info-row {
            background-color: #f8f9fa;
        }

        /* Add custom styles for table cells in client information row */
        .client-info-row td {
            font-weight: bold;
        }

        /* Add custom styles for table header backgrounds */
        th {
            background-color: #10ac84;
            color: #ffffff;
        }

        tr {
            background-color: #e2e6ea;
        }

        /* Add custom styles for alternating row colors */
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* Add custom styles for table hover effect */
        tbody tr:hover {
            background-color: #e2e6ea;
        }

        .namer {
            width: 13%;
            font-weight: bold;
            background-color: #1dd1a1;
            color: #f8f9fa;
        }
    </style>

    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>OAIR Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Projects</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $admin_row['name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div class="row my-2">
                    <h3 class="fs-4 mb-3">Insurance Information</h3>
                    <div class="col">
                        <?php foreach ($query as $q) { ?>
                            <table class="table-bordered">
                                <tr>
                                    <th colspan="6">Client Information</th>
                                </tr>
                                <tr>
                                    <td class="namer">Name</td>
                                    <td colspan="6"><?php echo $q['full_name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Gender</td>
                                    <td><?php echo $q['gender']; ?></td>
                                    <td class="namer">Birthday</td>
                                    <td colspan="6"><?php echo $q['date_of_birth']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Account Number</td>
                                    <td><?php echo $q['account_no']; ?></td>
                                    <td class="namer">Contact #</td>
                                    <td colspan="6"><?php echo $q['contact']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Marital Status</td>
                                    <td><?php echo $q['marital_stat']; ?></td>
                                    <td class="namer">Spouse Name</td>
                                    <td colspan="6"><?php echo $q['spouse_name']; ?></td>
                                </tr>

                                <tr>
                                    <th colspan="6">Livestock Information</th>
                                </tr>
                                <tr>
                                    <td class="namer">Animal Type</td>
                                    <td><?php echo $q['animal_type']; ?></td>
                                    <td class="namer">Purpose</td>
                                    <td><?php echo $q['purpose']; ?></td>
                                    <td class="namer">Stock Source</td>
                                    <td><?php echo $q['stock_source']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Breed</td>
                                    <td><?php echo $q['breed']; ?></td>
                                    <td class="namer">Ear Mark</td>
                                    <td><?php echo $q['ear_mark']; ?></td>
                                    <td class="namer">Brand</td>
                                    <td><?php echo $q['brand']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Color</td>
                                    <td><?php echo $q['basic_color']; ?></td>
                                    <td class="namer">No. of Male Animals</td>
                                    <td><?php echo $q['no_of_male_animals']; ?></td>
                                    <td class="namer">No. of Female Animals</td>
                                    <td><?php echo $q['no_of_female_animals']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">No. of House</td>
                                    <td><?php echo $q['no_of_housing']; ?></td>
                                    <td class="namer">No. Of Birth Per House Unit</td>
                                    <td><?php echo $q['no_of_birth_per_house_unit']; ?></td>
                                    <td class="namer">Date of Purchase</td>
                                    <td><?php echo $q['date_of_purchase']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">Total No. of Heads per Enroll</td>
                                    <td><?php echo $q['no_of_housing']; ?></td>
                                    <td class="namer">Certificate of Ownership of Large Cattle No.</td>
                                    <td><?php echo $q['no_of_birth_per_house_unit']; ?></td>
                                    <td class="namer">Certificate of Transfer of Large Cattle No.</td>
                                    <td><?php echo $q['date_of_purchase']; ?></td>
                                </tr>
                                <tr>
                                    <th colspan="6">Coverage</th>
                                </tr>
                                <tr>
                                    <td class="namer">1. Desired Sum Insured</td>
                                    <td><?php echo number_format($q['desired_sum_insured']); ?></td>
                                    <td class="namer">2. Total Sum Insured</td>
                                    <td colspan="6"><?php echo number_format($q['total_sum_insured']); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="namer" style="background-color: #10ac84;">3. Extended Coverage for Epidemic Diseases</td>
                                </tr>
                                <tr>
                                    <td class="namer">&nbsp;&nbsp;3.1 </td>
                                    <td colspan="6"><?php echo $q['coverage_for_epidemic_disease1']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">&nbsp;&nbsp;3.2</td>
                                    <td colspan="6"><?php echo $q['coverage_for_epidemic_disease2']; ?></td>
                                </tr>
                                <tr>
                                    <td class="namer">&nbsp;&nbsp;3.3</td>
                                    <td colspan="6"><?php echo $q['coverage_for_epidemic_disease3']; ?></td>
                                </tr>

                            </table>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>