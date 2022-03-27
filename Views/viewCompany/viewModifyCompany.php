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
                            <input class="field__input" name="name" autocomplete="off" autocapitalize="off" placeholder="e.g.Google" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Company's Name</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" name="mail" autocomplete="off" autocapitalize="off" placeholder="e.g. company@company.com" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                        <input class="datepicker" type="date" name="creationdate" autocomplete="off" autocapitalize="off" id="creationdate" required="required"> 
                    </div>
                    <div class="formformmiddle">
                        <input class="descriptioninput" type="text" name="description" autocomplete="off" autocapitalize="off" id="description" placeholder="Company's description" required="required">
                    </div>
                    <div class="formformbottom">
                        <label class="field field_v1">
                            <input class="field__input" name="activity" autocomplete="off" autocapitalize="off" placeholder="e.g. Technologic Services" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Activity Area</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" name="turnover" autocomplete="off" autocapitalize="off" placeholder="e.g. 257000000" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Turnover</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" name="cesi" autocomplete="off" autocapitalize="off" placeholder="e.g. 4" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of CESI students hired</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" name="employees" autocomplete="off" autocapitalize="off" placeholder="e.g. 72000" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of employees</span>
                            </span>
                        </label>
                        <label class="field field_v1">
                            <input class="field__input" name="clients" autocomplete="off" autocapitalize="off" placeholder="e.g. 7000000000" required="required">
                            <span class="field__label-wrap">
                                <span class="field__label">Nb of clients</span>
                            </span>
                        </label>
                    </div>
                    <!--<input type="text" name="name" id="name" placeholder="Company's Name" required="required" > 
                    <input type="email" name="mail" id="mail" placeholder="company@company.com" required="required" >                    
                    <input type="text" name="activity" id="activity" placeholder="Activity Area" required="required" > 
                    <input type="number" name="turnover" id="turnover" placeholder="Company's turnover" required="required" > 
                    <input type="number" name="CESI students hired" id="CESI students hired" placeholder="Number of CESI students hired" required="required" > 
                    <input type="number" name="employees" id="employees" placeholder="Company's employees" required="required" >                     
                    <input type="number" name="clients" id="clients" placeholder="Company's clients"" required="required" >-->
                    <div class="formbuttons">
                        <input class="btnsubmit" type="submit" value="Create" name="create">
                        <input class="btnsubmit" type="submit" value="Modify" name="modify">
                        <input class="btnsubmit" type="submit" value="Delete" name="delete">
                    </div>
                </form>
            </div>
        </div>
        <p><?= $test ?><p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'E:\2EME ANNEE\PROJET 4 WEB\PROJET\Livrable 3\Stage-Sensor\Views\template.php'; ?>