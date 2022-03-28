<?php $titre = "Search Company"; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="..\css\company\menuModifyCompany.css">
<div class="espace1">
    <a class="retourMenu" href=""> ← Home Menu </a>
</div>
<div class="mainbody">
            <div class="formbox">
                <form method="get" class="formform">  
                    <div class="optionchoosen">In this page, you are able to either Add, Modify or Delete a company in our database</div>
                    <div class="formformtop">
                        <label class="field field_v1">
                            <input class="field__input" value="" name="name" autocomplete="off" autocapitalize="off" placeholder="e.g.Google" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Company's Name</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="mail" autocomplete="off" autocapitalize="off" placeholder="e.g. company@company.com" required="required">
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
                            <input class="field__input" name="activity" value="" autocomplete="off" autocapitalize="off" placeholder="e.g. Technologic Services" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Activity Area</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="turnover" autocomplete="off" autocapitalize="off" placeholder="e.g. 257000000" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Turnover</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="cesi" autocomplete="off" autocapitalize="off" placeholder="e.g. 4" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of CESI students hired</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" value="" name="employees" autocomplete="off" autocapitalize="off" placeholder="e.g. 72000" required="required">
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
            <?= $test ?>
        </div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\template.php'; ?>