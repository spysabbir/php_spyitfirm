<base href="../../">
<?php
$contact_page = true;
$contact_message = true;
require_once('../../header.php');
require_once('../../db.php');

$select_query = "SELECT * FROM contacts_messages ORDER BY id DESC";
$databage_result = mysqli_query(connect_to_db(), $select_query);

$count_query1 = "SELECT COUNT(*) AS total_unread_message FROM contacts_messages WHERE status = 'unread'";
$count_query2 = "SELECT COUNT(*) AS total_read_message FROM contacts_messages WHERE status = 'read'";

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Contact Page</span>
            <span class="breadcrumb-item active">Contact Message</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Contact Message</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Contact Message List</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <div class="card text-start|center|end">
                <div class="card-header">
                    <h4 class="card-title">All Messages (Total:<?= mysqli_num_rows($databage_result) ?>, Unread: <?= mysqli_fetch_assoc(mysqli_query(connect_to_db(), $count_query1))['total_unread_message'] ?> Read: <?= mysqli_fetch_assoc(mysqli_query(connect_to_db(), $count_query2))['total_read_message'] ?>)</h4>
                </div>
                <div class="card-body">
                    <table id="message_table" class="table table-striped table-bordered">
                        <thead class="bg-info">
                            <tr>
                                <th class="text-center">SL No</th>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Email Address</th>
                                <th class="text-center">Subject</th>
                                <th class="text-center">Send Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $srial_no = 1;
                            foreach (spy_sabbir_all('contacts_messages') as $single_contacts_messages) :
                            ?>
                                <tr class=" <?= ($single_contacts_messages['status'] == 'unread') ? "bg-dark" : "bg-light" ?> ">
                                    <td><?= $srial_no++ ?></td>
                                    <td><?= ucwords(strtolower($single_contacts_messages["full_name"])) ?></td>
                                    <td><?= strtolower($single_contacts_messages["email_address"]) ?></td>
                                    <td><?= $single_contacts_messages["subject"] ?></td>
                                    <td><?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_sending_date'])); ?></td>
                                    <td><?= ucfirst($single_contacts_messages["status"]) ?></td>
                                    <td>
                                        <a href="webpages/contact_page/contact_message_details.php?id=<?= $single_contacts_messages['id'] ?>" class=" btn btn-sm btn-success">View Details</a>

                                        <button value="webpages/contact_page/contact_message_delete.php?id=<?= $single_contacts_messages['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- card -->

    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php')
    ?>