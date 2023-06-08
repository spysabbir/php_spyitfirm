<base href="../">
<?php
$user = true;
$view_user = true;
require_once('../header.php');
require_once('../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="dashboard.php">Bracket</a>
            <span class="breadcrumb-item active">View User</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
        <h4 class="tx-gray-800 mt-5">User List</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">User List</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <div class="row">
                <table id="message_table" class="table table-hover table-bordered table-striped">
                    <thead class="bg-info">
                        <tr>
                            <th class="text-center">Serial No</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Designation</th>
                            <th class="text-center">Gender </th>
                            <th class="text-center">Date Of Birth </th>
                            <th class="text-center">Email Address</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Account Created Date</th>
                            <th class="text-center">Profile Images</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srial_no = 1;
                        foreach (spy_sabbir_all('users') as $single_user) :
                        ?>
                            <tr>
                                <td>
                                    <?= $srial_no++ ?>
                                </td>
                                <td>
                                    <?= $single_user['full_name'] ?>
                                </td>
                                <td>
                                    <?= ucfirst($single_user['designation']) ?>
                                </td>
                                <td>
                                    <?= ucfirst($single_user['gender']) ?>
                                </td>
                                <td>
                                    <?= $single_user['date_of_birth'] ?>
                                </td>
                                <td>
                                    <?= $single_user['email_address'] ?>
                                </td>
                                <td>
                                    <?= $single_user['phone_number'] ?>
                                </td>
                                <td>
                                    <?= $single_user['created_at'] ?>
                                </td>
                                <td>
                                    <img height="100" width="80" src="img/<?= $single_user['profile_img'] ?>" alt="">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- br-pagebody -->

    <?php
    require_once('../footer.php');
    require_once('../../status.php')
    ?>