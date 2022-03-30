<?php $titre = "Stage Sensor | Modify company"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="../views/css/createModifyEditCompany.css">
<div class="espace1">
    <a class="retourMenu" href="../../views/viewHome.php"> ← Home </a>
</div>
<div class="mainbody">
            <div class="formbox">
                <form method="get" class="formform">  
                    <div class="optionchoosen">In this page, you are able to either add, modify or delete a company in our database</div>
                    <div class="formformtop">
                        <label class="field field_v1">
                            <input class="field__input" value="" name="name" autocomplete="off" autocapitalize="off" placeholder="example: Google" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Company's Name</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="mail" autocomplete="off" autocapitalize="off" placeholder="example: company@company.com" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                        <input class="datepicker" type="date" value="" name="creationdate" autocomplete="off" autocapitalize="off" id="creationdate" required="required">
                    </div>
                    <div class="formformmiddle">
                        <input class="descriptioninput" type="text" value="" name="description" autocomplete="off" autocapitalize="off" id="description" placeholder="Company's description" required="required">
                    </div>
                    <div class="formformbottom">
                        <label class="field field_v1">
                            <input class="field__input" name="activity" value="" autocomplete="off" autocapitalize="off" placeholder="example: IT" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Activity Area</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="turnover" autocomplete="off" autocapitalize="off" placeholder="example: 257 000 000 €" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Turnover</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="cesi" autocomplete="off" autocapitalize="off" placeholder="example: 16" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of CESI students hired</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="employees" autocomplete="off" autocapitalize="off" placeholder="example: 2 500" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of employees</span>
                            </span>
                        </label>
                    </div>
                    <div class="formbuttons">
                        <input class="btnsubmit" type="submit" value="Create" name="create">
                        <input class="btnsubmit" type="submit" value="Modify" name="modify">
                        <input class="btnsubmit" type="submit" value="Delete" name="delete">
                        <input class="btnsubmit" type="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>
        <div class="result">
            <?= $resultQuery ?>
        </div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template/template.php';