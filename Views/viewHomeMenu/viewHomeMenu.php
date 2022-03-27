<?php $titre = 'HomeMenu'; ?>
<?php ob_start(); ?>


<!-- Page body -->
<!-- <link rel="stylesheet" href="../css/homeMenu/reset.css"> -->
<link rel="stylesheet" href="../css/homeMenu/homeMenu.css">

<section class="menu">
    <div class="dropdown-1">
        <button>Candidacy</button>
        <div class="content">
            <a href="../candidacy/wish-list/wish-list.html">See wish-list</a>
            <a href="../candidacy/jobApplied/jobApplied.html">Job you applied for</a>
        </div>
    </div>
    <div class="dropdown-2">
        <button>Student</button>
        <div class="content">
            <a href="../student/searchStudent/searchStudent.html">Search a student</a>
            <a href="../student/createStudent/createStudent.html">Create a student profile</a>
            <a href="../student/editDeleteStudent/editDeleteStudent.html">Edit or delete a profile</a>
        </div>
    </div>
    <div class="dropdown-3">
        <button>Class president</button>
        <div class="content">
            <a href="../classPresident/searchClassPresident/searchClassPresident.html">Search a class president</a>
            <a href="../classPresident/createClassPresident/createClassPresident.html">Create a class president profile</a>
            <a href="../classPresident/editDeleteClassPresident/editDeleteClassPresident.html">Edit or delete a profile</a>
        </div>
    </div>
    <div class="dropdown-4">
        <button>Pilot</button>
        <div class="content">
            <a href="../pilot/searchPilot/searchPilot.html">Search a pilot</a>
            <a href="../pilot/createPilot/createPilot.html">Create a pilot profile</a>
            <a href="../pilot/editDeletePilot/editDeletePilot.html">Edit or delete a profile</a>
        </div>
    </div>
    <div class="dropdown-5">
        <button>Internship offer</button>
        <div class="content">
            <a href="../internshipOffer/searchOffer/searchOffer.html">Search an offer</a>
            <a href="../internshipOffer/createOffer/createOffer.html">Create an offer</a>
            <a href="../internshipOffer/editDeleteOffer/editDeleteOffer.html">Edit or delete an offer</a>
        </div>
    </div>
    <div class="dropdown-6">
        <button>Company</button>
        <div class="content">
            <a href="../company/searchCompany/searchCompany.php">Search a company</a>
            <a href="">Evaluate a business</a>
            <a href="">Create a company</a>
            <a href="">Edit or delete a company</a>
        </div>
    </div>





        <!-- <ul>
            <li>
                <a href="">Candidacy</a>
                <ul class="hidden">
                    <li>
                        <a href="../candidacy/wish-list/wish-list.html">See wish-list</a>
                    </li>
                    <li>
                        <a href="../candidacy/jobApplied/jobApplied.html">Job you applied for</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Student</a>
                <ul class="hidden">
                    <li>
                        <a href="../student/searchStudent/searchStudent.html">Search a student</a>
                    </li>
                    <li>
                        <a href="../student/createStudent/createStudent.html">Create a student profile</a>
                    </li>
                    <li>
                        <a href="../student/editDeleteStudent/editDeleteStudent.html">Edit or delete a profile</a>
                    </li>                    
                </ul>
            </li>
            <li>
                <a href="">Class president</a>
                <ul class="hidden">
                    <li>
                        <a href="../classPresident/searchClassPresident/searchClassPresident.html">Search a class president</a>
                    </li>
                    <li>
                        <a href="../classPresident/createClassPresident/createClassPresident.html">Create a class president profile</a>
                    </li>
                    <li>
                        <a href="../classPresident/editDeleteClassPresident/editDeleteClassPresident.html">Edit or delete a profile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Pilot</a>
                <ul class="hidden">
                    <li>
                        <a href="../pilot/searchPilot/searchPilot.html">Search a pilot</a>
                    </li>
                    <li>
                        <a href="../pilot/createPilot/createPilot.html">Create a pilot profile</a>
                    </li>
                    <li>
                        <a href="../pilot/editDeletePilot/editDeletePilot.html">Edit or delete a profile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Internship offer</a>
                <ul class="hidden">
                    <li>
                        <a href="../internshipOffer/searchOffer/searchOffer.html">Search an offer</a>
                    </li>
                    <li>
                        <a href="../internshipOffer/createOffer/createOffer.html">Create an offer</a>
                    </li>
                    <li>
                        <a href="../internshipOffer/editDeleteOffer/editDeleteOffer.html">Edit or delete an offer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Company</a>
                <ul class="hidden">
                    <li>
                        <a href="../company/searchCompany/searchCompany.php">Search a company</a>
                    </li>
                    <li>
                        <a href="">Evaluate a business</a>
                    </li>
                    <li>
                        <a href="">Create a company</a>
                    </li>
                    <li>
                        <a href="">Edit or delete a company</a>
                    </li>
                </ul>
            </li>
        </ul> -->
    </section>
    <section class="lastcompany">
        <h1>Latest Internship Offer :</h1>
        <div class="alr">
            <?php foreach ($lastoffers as $lastoffer): ?>
            <div class="alc">
                <h2><?= $lastoffer['Titre'] ?></h2>
                <h2>Date : <?= $lastoffer['Date'] ?></h2>
                <h2>Sector : <?= $lastoffer['Secteur'] ?></h2>
                <h2>Duration : <?= $lastoffer['Duree'] ?></h2>
                <h2>Looking for <?= $lastoffer['Nbplaces'] ?> students</h2>
            </div>
            <div class ="alc2">
                <h2><?= $lastoffer['Competences'] ?></h2>
            </div>
        </div>
        <?php endforeach; ?> 

    </section>
    <section class="tuto">
       <div>
           <a href="https://www.youtube.com/watch?v=u75hUSShvnc"><h3>How to write your resume</h3></a>
           <a href="https://www.youtube.com/watch?v=u75hUSShvnc"><img class="imageTuto" src="../pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
       <div>
            <a href="https://www.youtube.com/watch?v=NUhDP30IRKk"><h3>How to write your cover letter</h3></a>
            <a href="https://www.youtube.com/watch?v=NUhDP30IRKk"><img class="imageTuto" src="../pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
       <div>
            <a href="https://www.youtube.com/watch?v=HG68Ymazo18&t=180s"><h3>How to successfully complete an interview</h3></a>
            <a href="https://www.youtube.com/watch?v=HG68Ymazo18&t=180s"><img class="imageTuto" src="../pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
    </section>
<!-- Page body -->

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php' ?>