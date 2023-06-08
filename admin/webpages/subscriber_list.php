<base href="../">
<?php
$subscriber_list = true;
require_once('../header.php');
require_once('../db.php');

$select_query = "SELECT * FROM subscribes ORDER BY id DESC";
$databage_result = mysqli_query(connect_to_db(), $select_query);

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item active">Subscriber List</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Subscriber List</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Subscriber List</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <div class="card text-start|center|end">
                <div class="card-header">
                    <h4 class="card-title">All Subscriber (Total: <?= mysqli_num_rows($databage_result) ?>)</h4>
                </div>
                <div class="card-body text-center">
                    <table id="message_table" class="table table-striped table-bordered">
                        <thead class="bg-info">
                            <tr>
                                <th class="text-center">SL No</th>
                                <th class="text-center">Subscriber Email Address</th>
                                <th class="text-center">Subscribe Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $srial_no = 1;
                            foreach (spy_sabbir_all('subscribes') as $single_subscribes) :
                            ?>
                                <tr>
                                    <td><?= $srial_no++ ?></td>
                                    <td><?= strtolower($single_subscribes["subscriber_email"]) ?></td>
                                    <td><?= date("d-M-Y h:i:sa", strtotime($single_subscribes['subscribe_date'])); ?></td>
                                    <td><button value="webpages/subscriber_delete.php?id=<?= $single_subscribes['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- card -->
    </div><!-- br-pagebody -->

    <?php
    require_once('../footer.php');
    require_once('../status.php')
    ?>