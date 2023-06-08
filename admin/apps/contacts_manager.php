<base href="../">
<?php
$contacts_manager = true;
require_once('../header.php');
require_once('../db.php');
?>


<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="dashboard.php">Bracket</a>
      <span class="breadcrumb-item active">Contacts Manager</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Contacts Manager Page Layout</h4>
    <p class="mg-b-0">This is the contact manager where you can manage users/contacts.</p>
  </div>

  <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

    <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i class="fa fa-navicon"></i></button>

    <!-- START: DISPLAYED FOR MOBILE ONLY -->
    <div class="dropdown hidden-sm-up">
      <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
      <div class="dropdown-menu pd-10">
        <nav class="nav nav-style-1 flex-column">
          <a href="" class="nav-link">Share</a>
          <a href="" class="nav-link">Download</a>
          <div class="dropdown-divider"></div>
          <a href="" class="nav-link">Edit</a>
          <a href="" class="nav-link">Delete</a>
        </nav>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <!-- END: DISPLAYED FOR MOBILE ONLY -->

    <div class="mg-l-auto hidden-xs-down">
      <a href="#" class="btn btn-info">New Contact</a>
      <a href="#" class="btn btn-outline-info mg-l-5">Add to Group</a>
    </div>

  </div><!-- d-flex -->

  <div class="br-pagebody pd-x-20 pd-sm-x-30">
    <div class="card bd-0 shadow-base">
      <table class="table mg-b-0 table-contact">
        <thead>
          <tr>
            <th class="wd-5p">
              <label class="ckbox mg-b-0">
                <input type="checkbox"><span></span>
              </label>
            </th>
            <th class="tx-10-force tx-mont tx-medium">Name / Email</th>
            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Phone</th>
            <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Salary</th>
            <th class="wd-5p hidden-xs-down"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="valign-middle">
              <label class="ckbox mg-b-0">
                <input type="checkbox"><span></span>
              </label>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="mg-l-15">
                  <div class="tx-inverse">Katherine Lumaad</div>
                  <span class="tx-12">klumaad@themepixels.me</span>
                </div>
              </div>
            </td>
            <td class="valign-middle hidden-xs-down">+1 234 6789</td>
            <td class="valign-middle hidden-xs-down">$23,000</td>
            <td class="dropdown hidden-xs-down">
              <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
              <div class="dropdown-menu dropdown-menu-right pd-10">
                <nav class="nav nav-style-1 flex-column">
                  <a href="" class="nav-link">Info</a>
                  <a href="" class="nav-link">Email</a>
                  <a href="" class="nav-link">Edit</a>
                  <a href="" class="nav-link">Delete</a>
                </nav>
              </div><!-- dropdown-menu -->
            </td>
          </tr>
          <tr>
            <td class="valign-middle">
              <label class="ckbox mg-b-0">
                <input type="checkbox"><span></span>
              </label>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="mg-l-15">
                  <div class="tx-inverse">Katherine Lumaad</div>
                  <span class="tx-12">klumaad@themepixels.me</span>
                </div>
              </div>
            </td>
            <td class="valign-middle hidden-xs-down">+1 234 6789</td>
            <td class="valign-middle hidden-xs-down">$23,000</td>
            <td class="dropdown hidden-xs-down">
              <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
              <div class="dropdown-menu dropdown-menu-right pd-10">
                <nav class="nav nav-style-1 flex-column">
                  <a href="" class="nav-link">Info</a>
                  <a href="" class="nav-link">Email</a>
                  <a href="" class="nav-link">Edit</a>
                  <a href="" class="nav-link">Delete</a>
                </nav>
              </div><!-- dropdown-menu -->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- br-pagebody -->



  <?php
  require_once('../footer.php')
  ?>