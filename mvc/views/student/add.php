
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa icon-student"></i> <?=$this->lang->line('panel_title')?></h3>

        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("student/index")?>"><?=$this->lang->line('menu_student')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_student')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
        <form  role="form" method="post" enctype="multipart/form-data">
            <div class="col-sm-6">


                 <div class="form-group <?php if (form_error('bangla_name')) {echo 'has-error';}?>">
                        <label for="name_id" class="control-label">
                            <?=$this->lang->line("student_bangla_name")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="bangla_name_id" name="bangla_name" value="<?=set_value('bangla_name')?>" >
                            <span class="control-label">
                            <?php echo form_error('bangla_name'); ?>
                        </span>
                        </div>
                 </div>

                <div class="form-group <?php if (form_error('name')) {echo 'has-error';}?>">
                        <label for="name_id" class="control-label">
                            <?=$this->lang->line("student_english_name")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="name_id" name="name" value="<?=set_value('name')?>" >
                            <span class="control-label">
                            <?php echo form_error('name'); ?>
                        </span>
                        </div>

                    </div>



                    <div class="form-group <?php if (form_error('dob')) {echo 'has-error';}?>">
                        <label for="dob" class="control-label">
                            <?=$this->lang->line("student_dob")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="dob" name="dob" value="<?=set_value('dob')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('dob'); ?>
                        </span>
                    </div>
                    <div class="form-group <?php if (form_error('student_birth_certificate')) {echo 'has-error';}?>">
                        <label for="birth_certificate" class="control-label">
                            <?=$this->lang->line("student_birth_certificate")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="birth_certificate" name="birth_certificate" value="<?=set_value('birth_certificate')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('birth_certificate'); ?>
                        </span>
                    </div>

 <div class="form-group <?php if (form_error('sex')) {echo 'has-error';}?>">
                        <label for="sex" class="control-label">
                            <?=$this->lang->line("student_sex")?>
                        </label>
                        <div class="">
                            <?php
echo form_dropdown("sex", array($this->lang->line('student_sex_male') => $this->lang->line('student_sex_male'), $this->lang->line('student_sex_female') => $this->lang->line('student_sex_female')), set_value("sex"), "id='sex' class='form-control'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('sex'); ?>
                        </span>
                    </div>


<div class="form-group <?php if (form_error('bloodgroup')) {echo 'has-error';}?>">
                        <label for="bloodgroup" class="control-label">
                            <?=$this->lang->line("student_bloodgroup")?>
                        </label>
                        <div class="">
                            <?php
$bloodArray = array(
    '0'   => $this->lang->line('student_select_bloodgroup'),
    'A+'  => 'A+',
    'A-'  => 'A-',
    'B+'  => 'B+',
    'B-'  => 'B-',
    'O+'  => 'O+',
    'O-'  => 'O-',
    'AB+' => 'AB+',
    'AB-' => 'AB-',
);
echo form_dropdown("bloodgroup", $bloodArray, set_value("bloodgroup"), "id='bloodgroup' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('bloodgroup'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('religion')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="religion" class="control-label">
                            <?=$this->lang->line("student_religion")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="religion" name="religion" value="<?=set_value('religion')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('religion'); ?>
                        </span>
                    </div>



                   <!-- fathers  -->

                   <div class="form-group <?php if (form_error('fathers_name')) {echo 'has-error';}?>">
                        <label for="fathers_name" class="control-label">
                            <?=$this->lang->line("student_fathers_name")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="<?=set_value('fathers_name')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('fathers_name'); ?>
                        </span>
                    </div>

                    <div class="form-group <?php if (form_error('fathers_profession')) {echo 'has-error';}?>">
                        <label for="fathers_profession" class="control-label">
                            <?=$this->lang->line("student_fathers_profession")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="fathers_profession" name="fathers_profession" value="<?=set_value('fathers_profession')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('fathers_profession'); ?>
                        </span>
                    </div>

                    <div class="form-group <?php if (form_error('fathers_nid')) {echo 'has-error';}?>">
                        <label for="fathers_nid" class="control-label">
                            <?=$this->lang->line("student_fathers_nid")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="fathers_nid" name="fathers_nid" value="<?=set_value('fathers_nid')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('fathers_nid'); ?>
                        </span>
                    </div>

                   <!-- file -->
                   <div class="form-group <?php if (form_error('fathers_file')) {echo 'has-error';}?>">
                        <label for="fathers_file" class="control-label">
                            <?=$this->lang->line("student_fathers_file")?>
                        </label>
                        <div class="">
                            <div class="input-group">
                            <div class="input-group">
                            <input type="file" accept="image/png, image/jpeg, image/gif" class="form-control" name="fathers_file"/>
                            </div>
                            </div>
                        </div>

                        <span class="col-sm-4">
                            <?php echo form_error('fathers_file'); ?>
                        </span>
                    </div>

                    <!-- mothers  -->

                    <div class="form-group <?php if (form_error('mothers_name')) {echo 'has-error';}?>">
                        <label for="mothers_name" class="control-label">
                            <?=$this->lang->line("student_mothers_name")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="mothers_name" name="mothers_name" value="<?=set_value('mothers_name')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('mothers_name'); ?>
                        </span>
                    </div>

                    <div class="form-group <?php if (form_error('mothers_profession')) {echo 'has-error';}?>">
                        <label for="mothers_profession" class="control-label">
                            <?=$this->lang->line("student_mothers_profession")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="mothers_profession" name="mothers_profession" value="<?=set_value('mothers_profession')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('mothers_profession'); ?>
                        </span>
                    </div>

                    <div class="form-group <?php if (form_error('mothers_nid')) {echo 'has-error';}?>">
                        <label for="mothers_nid" class="control-label">
                            <?=$this->lang->line("student_mothers_nid")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="mothers_nid" name="mothers_nid" value="<?=set_value('mothers_nid')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('mothers_nid'); ?>
                        </span>
                    </div>

                    <!-- file -->
                   <div class="form-group <?php if (form_error('mothers_file')) {echo 'has-error';}?>">
                        <label for="mothers_file" class="control-label">
                            <?=$this->lang->line("student_mothers_file")?>
                        </label>
                        <div class="">
                            <div class="input-group">
                            <input type="file" accept="image/png, image/jpeg, image/gif" class="form-control" name="mothers_file"/>
                            </div>
                        </div>

                        <span class="col-sm-4">
                            <?php echo form_error('mothers_file'); ?>
                        </span>
                    </div>
                    <!-- address present -->
                    <div class="form-group">
                        <label for="address_present" class="control-label">
                            <?=$this->lang->line("student_present_address")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_village")?></label>
                             <input type="text" class="form-control"  name="present_village" value="<?=set_value('present_village')?>" >
                             <span class="control-label">
                            <?php echo form_error('present_village'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_thana")?></label>
                             <input type="text" class="form-control"  name="present_thana" value="<?=set_value('present_thana')?>" >
                             <span class="control-label">
                            <?php echo form_error('present_thana'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_district")?></label>
                             <input type="text" class="form-control" name="present_district" value="<?=set_value('present_district')?>" >
                             <?php echo form_error('present_district'); ?>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- end present address  -->
                    <!-- address permanent -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">
                            <?=$this->lang->line("student_permanent_address")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_village")?></label>
                             <input type="text" class="form-control"  name="permanent_village" value="<?=set_value('permanent_village')?>" >
                             <span class="control-label">
                            <?php echo form_error('permanent_village'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_thana")?></label>
                             <input type="text" class="form-control"  name="permanent_thana" value="<?=set_value('permanent_thana')?>" >
                             <span class="control-label">
                            <?php echo form_error('permanent_thana'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_district")?></label>
                             <input type="text" class="form-control" name="permanent_district" value="<?=set_value('permanent_district')?>" >
                             <?php echo form_error('permanent_district'); ?>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- end permanent address  -->


                    <?php
if (form_error('email')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="email" class="control-label">
                            <?=$this->lang->line("student_email")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('email'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('phone')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="phone" class="control-label">
                            <?=$this->lang->line("student_phone")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?=set_value('phone')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('phone'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('address')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="address" class="control-label">
                            <?=$this->lang->line("student_address")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="address" name="address" value="<?=set_value('address')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('address'); ?>
                        </span>
                    </div>






            </div> <!-- col-sm-6 -->


            <div class="col-sm-6">
            <?php
if (form_error('state')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="state" class="control-label">
                            <?=$this->lang->line("student_state")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="state" name="state" value="<?=set_value('state')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('state'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('country')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="country" class="control-label">
                            <?=$this->lang->line("student_country")?>
                        </label>
                        <div class="">
                            <?php
$country['0'] = $this->lang->line('student_select_country');
foreach ($allcountry as $allcountryKey => $allcountryit) {
    $country[$allcountryKey] = $allcountryit;
}
?>
                            <?php
echo form_dropdown("country", $country, set_value("country"), "id='country' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('country'); ?>
                        </span>
                    </div>


            <?php
if (form_error('classesID')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="classesID" class="control-label">
                            <?=$this->lang->line("student_classes")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <?php
$classArray = array(0 => $this->lang->line("student_select_class"));
foreach ($classes as $classa) {
    $classArray[$classa->classesID] = $classa->classes;
}
echo form_dropdown("classesID", $classArray, set_value("classesID"), "id='classesID' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('classesID'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('sectionID')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="sectionID" class="control-label">
                            <?=$this->lang->line("student_section")?> <span class="text-red">*</span>
                        </label>

                        <div class="">
                            <?php
$sectionArray = array(0 => $this->lang->line("student_select_section"));
if ($sections != "empty") {
    foreach ($sections as $section) {
        $sectionArray[$section->sectionID] = $section->section;
    }
}

$sID = 0;
if ($sectionID == 0) {
    $sID = 0;
} else {
    $sID = $sectionID;
}

echo form_dropdown("sectionID", $sectionArray, set_value("sectionID", $sID), "id='sectionID' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('sectionID'); ?>
                        </span>
                    </div>


                    <div class="form-group <?=form_error('studentGroupID') ? ' has-error' : ''?>">
                        <label for="studentGroupID" class="control-label">
                            <?=$this->lang->line("student_studentgroup")?>
                        </label>
                        <div class="">
                            <?php
$groupArray = array(0 => $this->lang->line("student_select_studentgroup"));
if (customCompute($studentgroups)) {
    foreach ($studentgroups as $studentgroup) {
        $groupArray[$studentgroup->studentgroupID] = $studentgroup->group;
    }
}
echo form_dropdown("studentGroupID", $groupArray, set_value("studentGroupID"), "id='studentGroupID' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('studentGroupID'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('optionalSubjectID') ? ' has-error' : ''?>">
                        <label for="optionalSubjectID" class="control-label">
                            <?=$this->lang->line("student_optionalsubject")?>
                        </label>
                        <div class="">
                            <?php
$optionalSubjectArray = array(0 => $this->lang->line("student_select_optionalsubject"));
if ($optionalSubjects != "empty") {
    foreach ($optionalSubjects as $optionalSubject) {
        $optionalSubjectArray[$optionalSubject->subjectID] = $optionalSubject->subject;
    }
}

echo form_dropdown("optionalSubjectID", $optionalSubjectArray, set_value("optionalSubjectID", $optionalSubjectID), "id='optionalSubjectID' class='form-control select2'");
?>
                        </div>
                        <span class="control-label">
                            <?php echo form_error('optionalSubjectID'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('registerNO')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="registerNO" class="control-label">
                            <?=$this->lang->line("student_registerNO")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="registerNO" name="registerNO" value="<?=set_value('registerNO')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('registerNO'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('roll')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="roll" class="control-label">
                            <?=$this->lang->line("student_roll")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="roll" name="roll" value="<?=set_value('roll')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('roll'); ?>
                        </span>
                    </div>

            <?php
if (form_error('photo')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>

                        <label for="photo" class="control-label">
                            <?=$this->lang->line("student_photo")?>
                        </label>
                        <div class="">
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="fa fa-remove"></span>
                                        <?=$this->lang->line('student_clear')?>
                                    </button>
                                    <div class="btn btn-success image-preview-input">
                                        <span class="fa fa-repeat"></span>
                                        <span class="image-preview-input-title">
                                        <?=$this->lang->line('student_file_browse')?></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <span class="col-sm-4">
                            <?php echo form_error('photo'); ?>
                        </span>
                    </div>

                    <!-- stipend -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">
                            <?=$this->lang->line("student_stipend")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_stipend")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="stipend" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="stipend" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('stipend'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_merit_stipend")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="merit_stipend" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="merit_stipend" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('merit_stipend'); ?>
                             </span>
                             </div>
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_others_stipend")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="others_stipend" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="others_stipend" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('others_stipend'); ?>
                             </span>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- end stipend   -->


                    <!-- extra -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">
                        <?=$this->lang->line("student_quota")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-3">
                             <label for=""> <?=$this->lang->line("student_orphan")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="orphan" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="orphan" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('orphan'); ?>
                             </span>
                             </div>
                             <div class="col-md-3">
                             <label for=""> <?=$this->lang->line("student_physically_chalanged")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="physically_chalanged" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="physically_chalanged" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('physically_chalanged'); ?>
                             </span>
                             </div>
                             <div class="col-md-3">
                             <label for=""> <?=$this->lang->line("student_freedom_fighter")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="freedom_fighter" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="freedom_fighter" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('freedom_fighter'); ?>
                             </span>
                             </div>
                             <div class="col-md-3">
                             <label for=""> <?=$this->lang->line("student_poor_fund")?></label><br>
                             <?=$this->lang->line("student_yes")?> <input type="radio" name="poor_fund" id="" value="yes" >
                             <?=$this->lang->line("student_no")?>  <input type="radio" name="poor_fund" id="" value="no" >
                             <span class="control-label">
                            <?php echo form_error('poor_fund'); ?>
                             </span>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- end extra   -->

                    <!-- Gurdian Profession -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">

                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-6">
                             <label for=""> <?=$this->lang->line("student_gurdian_profession")?></label><br>
                            <input type="text" name="gurdian_profession" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('gurdian_profession'); ?>
                             </span>
                             </div>
                             <div class="col-md-6">
                             <label for=""> <?=$this->lang->line("student_gurdian_phone_no")?></label><br>
                             <input type="text" name="gurdian_phone_no" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('gurdian_phone_no'); ?>
                             </span>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- Gardian Profession -->
                    <!-- Gurdian without father -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">
                        <?=$this->lang->line("student_gurdian_without_father")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_gurdian_without_father_name")?></label><br>
                            <input type="text" name="gurdian_without_father" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('gurdian_without_father'); ?>
                             </span>
                             </div>

                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_relation_with_student")?></label><br>
                             <input type="text" name="relation_with_student" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('relation_with_student'); ?>
                             </span>
                             </div>

                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_gurdian_without_father_phone")?></label><br>
                             <input type="text" name="gurdian_without_father_phone" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('gurdian_without_father_phone'); ?>
                             </span>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- Gardian without father -->


                    <!-- Previous School -->
                    <div class="form-group">
                        <label for="address_permanent" class="control-label">
                        <?=$this->lang->line("student_previous_school")?>
                        </label>
                        <div class="">
                            <div class="row">
                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_previous_school")?></label><br>
                            <input type="text" name="previous_school" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('previous_school'); ?>
                             </span>
                             </div>

                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_previous_class")?></label><br>
                             <input type="text" name="previous_class" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('previous_class'); ?>
                             </span>
                             </div>

                             <div class="col-md-4">
                             <label for=""> <?=$this->lang->line("student_previous_grade")?></label><br>
                             <input type="text" name="previous_grade" id="" class="form-control">
                             <span class="control-label">
                            <?php echo form_error('previous_grade'); ?>
                             </span>
                             </div>
                            </div>

                        </div>

                    </div>
                    <!-- end previous scool -->

                    <div class="form-group <?=form_error('extraCurricularActivities') ? ' has-error' : ''?>">
                        <label for="extraCurricularActivities" class="control-label">
                            <?=$this->lang->line("student_extracurricularactivities")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="extraCurricularActivities" name="extraCurricularActivities" value="<?=set_value('extraCurricularActivities')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('extraCurricularActivities'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('remarks') ? ' has-error' : ''?>">
                        <label for="remarks" class="control-label">
                            <?=$this->lang->line("student_remarks")?>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="remarks" name="remarks" value="<?=set_value('remarks')?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('remarks'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('username')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="username" class="control-label">
                            <?=$this->lang->line("student_username")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username')?>" >
                        </div>
                         <span class="control-label">
                            <?php echo form_error('username'); ?>
                        </span>
                    </div>

                    <?php
if (form_error('password')) {
    echo "<div class='form-group has-error' >";
} else {
    echo "<div class='form-group' >";
}

?>
                        <label for="password" class="control-label">
                            <?=$this->lang->line("student_password")?> <span class="text-red">*</span>
                        </label>
                        <div class="">
                            <input type="password" class="form-control" id="password" name="password" value="<?=set_value('password')?>" >
                        </div>
                         <span class="control-label">
                            <?php echo form_error('password'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_student")?>" >
                        </div>
                    </div>


                <?php if ($siteinfos->note == 1) {?>
                    <div class="callout callout-danger">
                        <p><b>Note:</b> Create teacher, class, section before create a new student.</p>
                    </div>
                <?php }?>
            </div>
            </form>

        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<script type="text/javascript">
$( ".select2" ).select2();
$('#dob').datepicker({ startView: 2 });

$('#username').keyup(function() {
    $(this).val($(this).val().replace(/\s/g, ''));
});


$('#classesID').change(function(event) {
    var classesID = $(this).val();
    if(classesID === '0') {
        $('#sectionID').val(0);
    } else {
        $.ajax({
            async: false,
            type: 'POST',
            url: "<?=base_url('student/sectioncall')?>",
            data: "id=" + classesID,
            dataType: "html",
            success: function(data) {
               $('#sectionID').html(data);
            }
        });

        $.ajax({
            async: false,
            type: 'POST',
            url: "<?=base_url('student/optionalsubjectcall')?>",
            data: "id=" + classesID,
            dataType: "html",
            success: function(data2) {
                $('#optionalSubjectID').html(data2);
            }
        });
    }
});

$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
           $('.content').css('padding-bottom', '100px');
        },
         function () {
           $('.image-preview').popover('hide');
           $('.content').css('padding-bottom', '20px');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("<?=$this->lang->line('student_file_browse')?>");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200,
            overflow:'hidden'
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("<?=$this->lang->line('student_file_browse')?>");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            $('.content').css('padding-bottom', '100px');
        }
        reader.readAsDataURL(file);
    });
});


</script>
