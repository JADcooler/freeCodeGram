
<link rel="stylesheet" href="<?php echo asset('css/css.css')?>" type="text/css">



<form action='\index' method='post' enctype='multipart/form-data'>
        <div w3-include-html="header.html"></div>
        <include src="./header.html"></include>
        <div class="container">
            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header alert-danger">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-warning fa-2x"></i>
                                </div>
                                <div class="col">
                                    <h4>&emsp;Missing</h4>
                                </div>
                            </div>

                        </div>
                        <div class="modal-body" id="errorInfo">
                            Content
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="progressModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header alert-danger">
                            Uploading
                        </div>
                        <div class="modal-body" id="errorInfo">
                            <div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" id="profileProgress" role="progressbar" style="width: 10%;">Waiting...</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 text-center">
                                        <div class="text-danger" style="display: none;" id="imageFail">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="text-success" style="display: none;" id="imageOk">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" id="signatureProgress" role="progressbar" style="width: 10%;">Waiting...</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 text-center">
                                        <div class="text-danger" style="display: none;" id="signatureFail">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="text-success" style="display: none;" id="signatureOk">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container text-center">
                                <div class="card shadow text-danger alert-danger" style="display: none; padding: 10px;" id="failed">
                                    <i class="fa fa-times-circle fa-3x"></i>
                                    <br>
                                    <b>Failed to Create Resume</b>
                                </div>
                                <div class="card shadow text-success alert-success" style="display: none; padding: 10px;" id="ok">
                                    <i class="fa fa-check-circle fa-3x"></i>
                                    <br>
                                    <b>Resume Created Successfully</b>
                                </div>
                                <div class="card shadow text-warning alert-warning" style="display: none; padding: 10px;" id="error">
                                    <i class="fa fa-exclamation-circle fa-3x"></i>
                                    <br>
                                    <b>Error Occured while Creating Resume</b>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="display: none;" id="exit">
                            <button class="btn btn-danger" data-dismiss="modal">Close &times;</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header green-bg">
                    Photo
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Upload Image
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input name="profile" id="profile" type="file" class="form-control form-control-sm" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                            <img style="height: 140px;" id="profile-img">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Name
                </div>
                <div class="card-body">
                    <input type="text"  name="name" id="name" class="form-control form-control-sm" placeholder="Enter your Name">
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Personal Details
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header green-bg">
                            Address
                        </div>
                        <div class="card-body">
                            <div class="form-group form-group-sm">
                                <input name="address1" id="address1" type="text" class="form-control form-control-sm" placeholder="Address Part-1">
                            </div>
                            <div class="form-group form-group-sm">
                                <input name="address2" id="address2" type="text" class="form-control form-control-sm" placeholder="Address Part-2">
                            </div>
                            <div class="form-group form-group-sm">
                                <input name="address3" id="address3" type="text" class="form-control form-control-sm" placeholder="Address Part-3">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Contact Number
                                </div>
                                <div class="card-body">
                                    <input name="contactNo" id="contactNo" type="text" class="form-control form-control-sm" placeholder="Contact Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Email
                                </div>
                                <div class="card-body">
                                    <div class="form-group-sm">
                                        <input name="email" id="email" type="email" class="form-control form-control-sm" placeholder="Enter Mail id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Date of Birth
                                </div>
                                <div class="card-body">
                                    <input name="dob" id="dob" type="date" class="form-control form-control-sm" placeholder="Contact Number">
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Age
                                </div>
                                <div class="card-body">
                                    <div class="form-group-sm">
                                        <input name="age" id="age" type="number" class="form-control form-control-sm" placeholder="Enter Age here" value="20">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Gender
                                </div>
                                <div class="card-body">
                                    <select name="gender"id="gender" class="form-control form-control-sm">
                                        <option value="" disabled selected>-- SELECT GENDER --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Father's Name
                                </div>
                                <div class="card-body">
                                    <input name="fatherName"id="fatherName" type="text" class="form-control form-control-sm" placeholder="Enter your Father's Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Mother's Name
                                </div>
                                <div class="card-body">
                                    <input name="motherName" id="motherName" type="text" class="form-control form-control-sm" placeholder="Enter your Mother's Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Nationality
                                </div>
                                <div class="card-body">
                                    <input name="nationality" id="nationality" type="text" class="form-control form-control-sm" placeholder="Enter your Nationality">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Blood Group
                                </div>
                                <div class="card-body">
                                    <input name="blood" id="blood" type="text" class="form-control form-control-sm" placeholder="Enter your Blood Group">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Identification Marks
                                </div>
                                <div class="card-body">
                                    <input name="idmark_1" id="idmark-1" type="text" class="form-control form-control-sm" placeholder="Enter your Identification Mark - 1">
                                    <br>
                                    <input name="idmark_2" id="idmark-2" type="text" class="form-control form-control-sm" placeholder="Enter your Identification Mark - 2">
                                </div>
                            </div>
                        </div>
                        <br>
                            <div class="col-md-4 box">
                                <div class="card">
                                    <div class="card-header green-bg">
                                        Education Qualification
                                    </div>
                                    <div class="card-body">
                                        <input name="qualification" id="qualification" type="text" class="form-control form-control-sm" placeholder="Enter your Education Qualification">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 box">
                                <div class="card">
                                    <div class="card-header green-bg">
                                        Marks in (%)
                                    </div>
                                    <div class="card-body">
                                        <input name="qualifications_per" id="qualifications_per" type="text" class="form-control form-control-sm" placeholder="Enter your Marks in (%)">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Registration No
                                </div>
                                <div class="card-body">
                                    <input name="regno" id="regno" type="text" class="form-control form-control-sm" placeholder="Reg No. here">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Degree & Department
                                </div>
                                <div class="card-body">
                                    <select name="dept" id="dept" class="form-control form-control-sm">
                                        <option value="" disabled selected>-- SELECT DEPT --</option>
                                        <optgroup label="Bachelor of Technology (B.Tech)">
                                            <option value="B.Tech Information Technology">Information Technology</option>
                                        </optgroup>
                                        <optgroup label="Bachelor of Engineering (B.E)">
                                            <option value="B.E Computer Science and Engineering">Computer Science and Engineering</option>
                                            <option value="B.E Electrical and Elecronics Engineering">Electrical and Electronics Engineering</option>
                                            <option value="B.E Civil Engineering">Civil Engineering</option>
                                            <option value="B.E Mechatronics">Mechatronics</option>
                                            <option value="B.E Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="B.E Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!--11-->
            <div class="card shadow">
                <div class="card-header green-bg">
                    Have you ever been convicted by a criminal court & if so in What circumstances and what Was the sentence? Attach relevant documents.
                </div>
                <div class="card-body">
                    <textarea name="crime" id="crime" class="form-control form-control-sm"></textarea>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="checkbox" onchange="isEnable()" id="diplomo">
                        If "YES"
                    </div>
                    <div style="display: none;" id="other">
                        <div class="form-group">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 box">
                                        <div class="card">
                                            <div class="card-header green-bg">
                                                Upload Image
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input name="crimeImg"  id="crimeImg" type="file" class="form-control form-control-sm" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="text-align: center;">
                                        <img style="height: 140px;" id="profile-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--12-->


            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Academic Records`
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header green-bg">
                            Diplomo / 12th
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Select Class/Course</label>
                                <select name="ss_course" id="ss-course" class="form-control form-control-sm">
                                    <option value="" disabled selected>-- SELECT GRADE -- </option>
                                    <optgroup>
                                        <option value="12th">Class 12</option>
                                        <option value="diploma">Diploma</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Institution Name</label>
                                <input name="ss_insti" id="ss-insti" type="text" class="form-control form-control-sm" placeholder="Enter Institution Name">
                            </div>
                            <div class="form-group">
                                <label>Board of Study</label>
                                <input name="ss_board" id="ss-board" type="text" class="form-control form-control-sm" placeholder="Enter Board of Study">
                            </div>
                            <div class="form-group">
                                <label>Year of Passing</label>
                                <input name="ss_pass" id="ss-pass" type="number" class="form-control form-control-sm" value="2021" placeholder="Enter the year of Passing">
                            </div>
                            <div class="form-group">
                                <label>Marks or CGPA</label>
                                <input name="ss_cgpa" id="ss-cgpa" type="number" class="form-control form-control-sm" placeholder="Enter your CGPA/Marks">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Willing to be enrolled and undergo training under the National Cadet Corps Act, 1948
                </div>
                <div class="card-body">
                    <textarea name="willness" id="willness" class="form-control form-control-sm"></textarea>
                </div>
            </div>
            <br>

            <div class="card shadow">
                <div class="card-header green-bg">
                    NCC Unit to be enrolled in
                </div>
                <div class="card-body">
                    <textarea name="NCC Unit" id="NCC Unit" class="form-control form-control-sm"></textarea>
                </div>
            </div>
            <br>

            <!--21-->
            <div class="card">
                <div class="card-header green-bg">
                    doubt
                    Have you been enrolled in NCC earlier.If yes, Your Enrolment No.
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="checkbox" onchange="isEnable()" id="diplomo">
                        If "YES"
                    </div>
                    <div style="display: none;" id="other1">
                        <div class="form-group">
                            <label>Marks or CGPA</label>
                            <input name="add-cgpa" id="add-cgpa" type="number" class="form-control form-control-sm" placeholder="Enter your CGPA/Marks">
                        </div>
                    </div>
                </div>
            </div>
            <!--22-->
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Have you been dismissed from NCC/the Territorial Army/the Indian Armed Forces; Please Provide details:-
                </div>
                <div class="card-body">
                    <textarea name="dismissed" id="dismissed" class="form-control form-control-sm"></textarea>
                </div>
            </div>
            <br>

            <div class="card shadow">
                <div class="card-header green-bg">
                    Next of Kin
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Relationship</label>
                                <input name= "kin_Relationship" id="kin-Relationship" type="text" class="form-control form-control-sm" placeholder="Enter your relationship with Kin">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="kin_address" id="kin-address" type="text" class="form-control form-control-sm" placeholder="Enter their address">
                            </div>
                            <div class="form-group">
                                <label>Telephone No. (O)/(R) (as applicable)</label>
                                <input name="kin_telephone" id="kin-telephone" type="text" class="form-control form-control-sm" placeholder="Enter Telephone No.">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <div class="card shadow">
                <div class="card-header green-bg">
                    Bank Details
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>IFSC code:</label>
                                <input name="IFSC code" id="IFSC code" type="text" class="form-control form-control-sm" placeholder="Enter your IFSC code:">
                            </div>
                            <div class="form-group">
                                <label>Bank Acct No of Cadet/Parent</label>
                                <input name="Bank Acct" id="Bank Acct" type="text" class="form-control form-control-sm" placeholder="Enter Bank Acct No of Cadet/Parent">
                            </div>
                            <div class="form-group">
                                <label>Aadhaar/UID No. (If allotted)</label>
                                <input name="Aadhar No" id="Aadhar No" type="text" class="form-control form-control-sm" placeholder="Enter Aadhar NO.">
                            </div>
                            <div class="form-group">
                                <label>PAN Card No. (If allotted)</label>
                                <input name="PAN No" id="PAN No" type="text" class="form-control form-control-sm" placeholder="Enter PAN NO.">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <br>
<!--

            <div class="card shadow">
                <div class="card-header green-bg">
                    Area of Intrest
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addIntrest()">+ &emsp;Add Interest</button>
                    </div>
                    <br>
                    <div id="new">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Technical Expertise
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addExpertise()">+ &emsp;Add Expertise</button>
                    </div>
                    <br>
                    <div id="newExpertise">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Projects
                </div>
                <div class="card-body">
                    <div class="form-group form-group-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addProject()">+ &emsp;Add Project</button>
                    </div>
                    <br>
                    <div id="newProject">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Industrial Training
                </div>
                <div class="card-body">
                    <div class="form-group form-group-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addIndustryTraining()">+ &emsp;Add Industry Training</button>
                    </div>
                    <br>
                    <div id="newIndustry">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Achievements
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addAchievement()">+ &emsp;Add Achievement</button>
                    </div>
                    <div id="newAchievement">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Co-Curricular Activities
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addActivity()">+ &emsp;Add Activity</button>
                    </div>
                    <div id="newActivity">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Extra-Curricular Activities
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addExtraActivity()">+ &emsp;Add Activity</button>
                    </div>
                    <div id="newExtraActivity">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Leadership Traits
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addTrait()">+ &emsp;Add Leadership Trait</button>
                    </div>
                    <div id="newTrait">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Hobbies
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addHobby()">+ &emsp;Add Hobby</button>
                    </div>
                    <div id="newHobby">

                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Languages Known
                </div>
                <div class="card-body">
                    <div class="form-group form-control-sm">
                        <button class="btn-sm btn-primary" style="float: right;" onclick="addLanguage()">+ &emsp;Add Language</button>
                    </div>
                    <div id="newLanguage">

                    </div>
                </div>
            </div>
-->
            <br>
            <div class="card shadow">
                <div class="card-header green-bg">
                    Acknowledgement
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Place
                                </div>
                                <div class="card-body">
                                    <input name="place" id="place" type="text" class="form-control form-control-sm" placeholder="Enter your Place">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 box">
                            <div class="card">
                                <div class="card-header green-bg">
                                    Date
                                </div>
                                <div class="card-body">
                                    <input name="date" id="date" type="date" class="form-control form-control-sm" placeholder="Enter your Mother's Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header green-bg">
                            Signature
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 box">
                                    <div class="card">
                                        <div class="card-header green-bg">
                                            Signature Uploading
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="file" name="signature" id="signature" class="form-control form-control-sm" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 box" style="text-align: center;">
                                    <img style="height: 120px; width: 250px;" name="signature-img" id="signature-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div id ="progress" style="float: left;">

            </div>
            <button class="btn btn-secondary" style="float: right;" onclick="uploadImages()">Submit Credentials</button>
        </div>
        <br><br>
    </form>
    </body>
