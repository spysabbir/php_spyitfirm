<base href="../../">
<?php
$contact_page = true;
$contact_message = true;
require_once('../../header.php');
require_once('../../db.php');

$id = $_GET['id'];
$update_query = "UPDATE contacts_messages SET status='read' WHERE id=$id";
mysqli_query(connect_to_db(), $update_query);

$select_query = "SELECT * FROM contacts_messages WHERE id= $id";
$single_contacts_messages = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));

?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Contact Page</span>
            <a class="breadcrumb-item" href="webpages/contact_page/contact_message.php">Contact Message</a>
            <span class="breadcrumb-item active">Contact Message</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Contact Message Page Layout</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>


    <div class="br-pagebody">
        <div class="card text-start|center|end">
            <div class="card-header bg-info text-white">
                <h6 class="card-title">Sender Details:</h6>
                <p class="card-text m-0">Sender Name: <?= $single_contacts_messages['full_name'] ?></p>
                <p class="card-text m-0">Sender Email: <?= $single_contacts_messages['email_address'] ?></p>
                <p class="card-text m-0">Message Send Date: <?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_sending_date'])); ?></p>
            </div>
            <div class="card-body">
                <h6 class="card-title mb-1">Message Subject</h6>
                <?= $single_contacts_messages["subject"] ?>
                <h6 class="card-title mt-3 mb-1">Message Body</h6>
                <p class="card-text"><?= $single_contacts_messages['message'] ?></p>
            </div>
        </div>
    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php')
    ?>