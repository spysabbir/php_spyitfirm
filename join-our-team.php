<?php
require_once('header.php');
?>

<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="banner_text">
                            <h1> Join our Team</h1>
                            <p>Please do not hesitate to send us your detailed resume you want to apply.
                                All applications will be treated as strictly confidential. </p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Join our Team</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Join Now Start -->
<section id="join-now">
    <div class="container">
        <div class="section_title">
            <h2>Apply<span> Online</span></h2>
            <p>Come join our Team. Let's fill up your information.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="join-now-form">
                    <form method="POST" action="join-our-team-form.php" class="needs-validation" novalidate>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-head">
                                    <h3>Apply Information<span>*</span></h3>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Name of the position applied <span>*</span></label>
                                <select class="form-control " name="position_applied" required>
                                    <option value="">Select Position Name *</option>
                                    <option value="Professional Graphic Design">Graphic Design</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">Please Enter Your Position Applied Name.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-12">
                                <label>Career Objective <span>*</span></label>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <textarea name="career_objective" rows="4" class="form-control " value="" placeholder="Enter Career Objective*" required></textarea>
                                        <div class="invalid-feedback">Please Enter Your Career Objective.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Salary <span>*</span></label>
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="number" name="present_salary" value="" placeholder="Present Salary*" class="form-control " required>
                                        <div class="invalid-feedback">Please Enter Your Present Salary.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="number" name="expected_salary" value="" placeholder="Expected Salary*" class="form-control " required>
                                        <div class="invalid-feedback">Please Enter Your Expected Salary.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-head">
                                    <h3>Personal Information<span>*</span></h3>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Full Name <span>*</span></label>
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="join_first_name" value="" placeholder="First Name*" class="form-control " required>
                                        <div class="invalid-feedback">Please Enter Your First Name.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="join_last_name" value="" placeholder="Last Name*" class="form-control " required>
                                        <div class="invalid-feedback">Please Enter Your Last Name.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Father’s Name<span>*</span></label>
                                <input type="text" name="join_fathers_name" value="" placeholder="Father’s Name*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your Father’s Name.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="">Mother’s Name<span>*</span></label>
                                <input type="text" name="join_mothers_name" value="" placeholder="Mother’s Name*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your Mother’s Name.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <div class="col-lg-12">
                                <label for="">Permanent Address<span>*</span></label>
                                <div class="form-row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="text" name="permanent_address_street_one" value="" placeholder="Street Address*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="text" name="permanent_address_street_two" value="" placeholder="Street Address Line 2" class="form-control ">
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="text" name="permanent_address_city" value="" placeholder="City*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="text" name="permanent_address_state" value="" placeholder="State / Province*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="number" name="permanent_address_postal" value="" placeholder="Postal / Zip Code*" class="form-control " required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="">Present Address<span>*</span></label>
                                <div class="form-row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="text" name="present_address_street_one" value="" placeholder="Street Address*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="text" name="present_address_street_two" value="" placeholder="Street Address Line 2" class="form-control ">
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="text" name="present_address_city" value="" placeholder="City*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="text" name="present_address_state" value="" placeholder="State / Province*" class="form-control " required>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <input type="number" name="present_address_postal" value="" placeholder="Postal / Zip Code*" class="form-control " required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="">National ID<span>*</span></label>
                                <input type="number" name="join_nid" value="" placeholder="National ID*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your National ID.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <label for="">Date of Birth<span>*</span></label>
                                <input type="date" name="join_dob" value="" placeholder="Date of Birth*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your Date of Birth.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <label for="">Blood Group<span>*</span></label>
                                <select class="form-control " name="join_blood_group" required>
                                    <option value="">Select Blood Group*</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <div class="invalid-feedback">Please Select Your Blood Group.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <label for="">Marital Status<span>*</span></label>
                                <select class="form-control " name="join_marital_status" required>
                                    <option value="">Select Marital Status*</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">Please Select Your Marital Status.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <label for="">Gender<span>*</span></label>
                                <div class="gender-group d-flex justify-content-between">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio_stacked" value="Male" required>
                                        <label class="custom-control-label" for="customControlValidation1">Male</label>
                                        <div class="invalid-feedback">Please Select Your Gender.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio_stacked" value="Female" required>
                                        <label class="custom-control-label" for="customControlValidation2">Female</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio_stacked" value="Others" required>
                                        <label class="custom-control-label" for="customControlValidation3">Others</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="">Nationality<span>*</span></label>
                                <select class="form-control " name="join_country" required>
                                    <option value="">Select Nationality*</option>
                                    <option value="Bangladeshi">Bangladeshi</option>
                                    <option value="Other Country">Other Country</option>
                                </select>
                                <div class="invalid-feedback">Please Select Your Nationality.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <label for="">Religion<span>*</span></label>
                                <select class="form-control " name="join_religion" required>
                                    <option value="">Select Religion *</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please Select Your Religion.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="">Phone<span>*</span></label>
                                <input type="number" name="join_phone" value="" placeholder="Phone*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your Phone Number.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <label for="">E-mail<span>*</span></label>
                                <input type="email" name="join_email" value="" placeholder="Email*" class="form-control " required>
                                <div class="invalid-feedback">Please Enter Your Valid E-mail.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 table-item">
                                <div class="form-head">
                                    <h3>Educational Background <span>*</span></h3>
                                </div>
                                <table>
                                    <tr>
                                        <th>Degree</th>
                                        <th>Institution</th>
                                        <th>Board</th>
                                        <th>Year of Passing</th>
                                        <th>Division / GPA</th>
                                    </tr>
                                    <tr>
                                        <td>S.S.C / O Level*</td>
                                        <td><input type="text" class="form-control" value="" name="s_institution" placeholder="Institution*" required>
                                        </td>
                                        <td><input type="text" class="form-control" value="" name="s_board" placeholder="Board*" required></td>
                                        <td><input type="text" class="form-control" value="" name="s_year" placeholder="Year*" required></td>
                                        <td><input type="text" class="form-control" value="" name="s_gpa" placeholder="GPA*" required></td>
                                    </tr>
                                    <tr>
                                        <td>H.S.C / Diploma*</td>
                                        <td><input type="text" class="form-control" value="" name="h_institution" placeholder="Institution*" required>
                                        </td>
                                        <td><input type="text" class="form-control" value="" name="h_board" placeholder="Board*" required></td>
                                        <td><input type="text" class="form-control" value="" name="h_year" placeholder="Year*" required></td>
                                        <td><input type="text" class="form-control" value="" name="h_gpa" placeholder="GPA*" required></td>
                                    </tr>
                                    <tr>
                                        <td>Graduation*</td>
                                        <td><input type="text" class="form-control" value="" name="g_institution" placeholder="Institution*" required>
                                        </td>
                                        <td><input type="text" class="form-control" value="" name="g_board" placeholder="Board*" required></td>
                                        <td><input type="text" class="form-control" value="" name="g_year" placeholder="Year*" required></td>
                                        <td><input type="text" class="form-control" value="" name="g_gpa" placeholder="GPA*" required></td>
                                    </tr>
                                    <tr>
                                        <td>Post Graduation</td>
                                        <td><input type="text" class="form-control" value="" name="p_institution" placeholder="Institution"></td>
                                        <td><input type="text" class="form-control" value="" name="p_board" placeholder="Board"></td>
                                        <td><input type="text" class="form-control" value="" name="p_year" placeholder="Year"></td>
                                        <td><input type="text" class="form-control" value="" name="p_gpa" placeholder="GPA"></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Educational Background Mobile Design Start -->
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="mobile-table-item">-->
                            <!--        <div class="form-head">-->
                            <!--            <h3>Educational Background<span>*</span></h3>-->
                            <!--        </div>-->
                            <!--        <table>-->
                            <!--            <tr>-->
                            <!--                <td><span>S.S.C / O Level*</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="s_institution"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Board</th>-->
                            <!--                <td><input type="text" class="form-control" name="s_board" required>-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Year of Passing</th>-->
                            <!--                <td><input type="text" class="form-control" name="s_year" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Division / GPA</th>-->
                            <!--                <td><input type="text" class="form-control" name="s_gpa" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>H.S.C / Diploma*</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="h_institution"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Board</th>-->
                            <!--                <td><input type="text" class="form-control" name="h_board" required>-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Year of Passing</th>-->
                            <!--                <td><input type="text" class="form-control" name="h_year" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Division / GPA</th>-->
                            <!--                <td><input type="text" class="form-control" name="h_gpa" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Graduation*</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="g_institution"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Board</th>-->
                            <!--                <td><input type="text" class="form-control" name="g_board" required>-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Year of Passing</th>-->
                            <!--                <td><input type="text" class="form-control" name="g_year" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Division / GPA</th>-->
                            <!--                <td><input type="text" class="form-control" name="g_gpa" required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Post Graduation</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="p_institution"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Board</th>-->
                            <!--                <td><input type="text" class="form-control" name="p_board"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Year of Passing</th>-->
                            <!--                <td><input type="text" class="form-control" name="p_year"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Division / GPA</th>-->
                            <!--                <td><input type="text" class="form-control" name="p_gpa"></td>-->
                            <!--            </tr>-->
                            <!--        </table>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- Educational Background Mobile Design End -->

                            <div class="col-lg-12 table-item">
                                <div class="form-head">
                                    <h3>Training and Workshops <span>*</span></h3>
                                </div>
                                <table>
                                    <tr>
                                        <th>Institution</th>
                                        <th>Subject</th>
                                        <th>Time of Training</th>
                                        <th>Address</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="tw_one_institution" placeholder="Institution*" required></td>
                                        <td><input type="text" class="form-control" name="tw_one_subject" placeholder="Subject*" required></td>
                                        <td><input type="text" class="form-control" name="tw_one_time" placeholder="Time (Month)*" required></td>
                                        <td><input type="text" class="form-control" name="tw_one_address" placeholder="Address*" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="tw_two_institution" placeholder="Institution"></td>
                                        <td><input type="text" class="form-control" name="tw_two_subject" placeholder="Subject"></td>
                                        <td><input type="text" class="form-control" name="tw_two_time" placeholder="Time (Month)"></td>
                                        <td><input type="text" class="form-control" name="tw_two_address" placeholder="Address"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="tw_three_institution" placeholder="Institution">
                                        </td>
                                        <td><input type="text" class="form-control" name="tw_three_subject" placeholder="Subject"></td>
                                        <td><input type="text" class="form-control" name="tw_three_time" placeholder="Time (Month)"></td>
                                        <td><input type="text" class="form-control" name="tw_three_address" placeholder="Address"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="tw_four_institution" placeholder="Institution"></td>
                                        <td><input type="text" class="form-control" name="tw_four_subject" placeholder="Subject"></td>
                                        <td><input type="text" class="form-control" name="tw_four_time" placeholder="Time (Month)"></td>
                                        <td><input type="text" class="form-control" name="tw_four_address" placeholder="Address"></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Training and Workshops Mobile Design Start -->
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="mobile-table-item">-->
                            <!--        <div class="form-head">-->
                            <!--            <h3>Training and Workshops</h3>-->
                            <!--        </div>-->
                            <!--        <table>-->
                            <!--            <tr>-->
                            <!--                <td><span>Training and Workshops One</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_one_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Subject</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_one_subject"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Time of Training</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_one_time"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_one_address"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Training and Workshops Two</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_two_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Subject</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_two_subject"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Time of Training</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_two_time"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_two_address"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Training and Workshops Three</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_three_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Subject</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_three_subject">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Time of Training</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_three_time"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_three_address">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Training and Workshops Four</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_four_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Subject</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_four_subject"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Time of Training</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_four_time"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="tw_four_address"></td>-->
                            <!--            </tr>-->
                            <!--        </table>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- Training and Workshops Mobile Design End -->

                            <div class="col-lg-12 table-item">
                                <div class="form-head">
                                    <h3>Experiences<span>*</span></h3>
                                </div>
                                <table>
                                    <tr>
                                        <th>Institution</th>
                                        <th>Years of Service</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Address</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="ex_one_institution" placeholder="Institution*" required></td>
                                        <td><input type="text" class="form-control" name="ex_one_year" placeholder="Services (Years)*" required>
                                        </td>
                                        <td><input type="text" class="form-control" name="ex_one_department" placeholder="Department*" required></td>
                                        <td><input type="text" class="form-control" name="ex_one_designation" placeholder="Designation*" required></td>
                                        <td><input type="text" class="form-control" name="ex_one_address" placeholder="Address*" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="ex_two_institution" placeholder="Institution"></td>
                                        <td><input type="text" class="form-control" name="ex_two_year" placeholder="Services (Years)"></td>
                                        <td><input type="text" class="form-control" name="ex_two_department" placeholder="Department"></td>
                                        <td><input type="text" class="form-control" name="ex_two_designation" placeholder="Designation"></td>
                                        <td><input type="text" class="form-control" name="ex_two_address" placeholder="Address"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="ex_three_institution" placeholder="Institution">
                                        </td>
                                        <td><input type="text" class="form-control" name="ex_three_year" placeholder="Services (Years)"></td>
                                        <td><input type="text" class="form-control" name="ex_three_department" placeholder="Department"></td>
                                        <td><input type="text" class="form-control" name="ex_three_designation" placeholder="Designation">
                                        </td>
                                        <td><input type="text" class="form-control" name="ex_three_address" placeholder="Address"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="ex_four_institution" placeholder="Institution"></td>
                                        <td><input type="text" class="form-control" name="ex_four_year" placeholder="Services (Years)"></td>
                                        <td><input type="text" class="form-control" name="ex_four_department" placeholder="Department"></td>
                                        <td><input type="text" class="form-control" name="ex_four_designation" placeholder="Designation"></td>
                                        <td><input type="text" class="form-control" name="ex_four_address" placeholder="Address"></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Experiences Mobile Design Start -->
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="mobile-table-item">-->
                            <!--        <div class="form-head">-->
                            <!--            <h3>Experiences<span>*</span></h3>-->
                            <!--        </div>-->
                            <!--        <table>-->
                            <!--            <tr>-->
                            <!--                <td><span>Experiences One</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_one_institution"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Years of Service</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_one_year" required>-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Department</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_one_department"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Designation</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_one_designation"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_one_address"-->
                            <!--                        required></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Experiences Two</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_two_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Years of Service</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_two_year"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Department</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_two_department">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Designation</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_two_designation">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_two_address"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Experiences Three</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_three_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Years of Service</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_three_year"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Department</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_three_department">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Designation</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_three_designation">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_three_address">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <td><span>Experiences Four</span></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Institution</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_four_institution">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Years of Service</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_four_year"></td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Department</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_four_department">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Designation</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_four_designation">-->
                            <!--                </td>-->
                            <!--            </tr>-->
                            <!--            <tr>-->
                            <!--                <th>Address</th>-->
                            <!--                <td><input type="text" class="form-control" name="ex_four_address"></td>-->
                            <!--            </tr>-->
                            <!--        </table>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- Experiences Mobile Design End -->
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-head">
                                    <h3>Reference Details</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row form">
                                    <div class="col-lg-12 form-head">
                                        <h5>Reference One</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_name_one" value="" placeholder="Name" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_address_one" value="" placeholder="Address" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="number" name="reference_phone_one" value="" placeholder="Mobile Number" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_relation_one" value="" placeholder="Relation with employee" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row form">
                                    <div class="col-lg-12 form-head">
                                        <h5>Reference Two</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_name_two" value="" placeholder="Name" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_address_two" value="" placeholder="Address" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="number" name="reference_phone_two" value="" placeholder="Mobile Number" class="form-control ">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="reference_relation_two" value="" placeholder="Relation with employee" class="form-control ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 m-auto">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload passport size
                                        photo<span>*</span></label>
                                    <input type="file" class="form-control pt-1" name="file_one" value="" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">Please upload passport size photo</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center pt-2">I hereby declare that all the information I have provided aforementioned are
                                    athentic as per my acknowledgement.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-auto text-center">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label mt-0 ml-2" for="invalidCheck">
                                            Agree to <a href="terms-and-condition.php">terms and conditions</a>
                                        </label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="submit">
                                    <input type="submit" value="Submit Your Information" id="btn" class="btn" name="join_btn" />
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join Now End -->

<?php
require_once('footer.php');
?>