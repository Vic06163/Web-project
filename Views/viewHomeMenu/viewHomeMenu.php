<?php $titre = 'HomeMenu'; ?>
<?php ob_start(); ?>


<!-- Page body -->
<!-- <link rel="stylesheet" href="../css/homeMenu/reset.css"> -->
<link rel="stylesheet" href="../css/homeMenu/homeMenu.css">

<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<header>
    
  <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Company Logo</a></h1>
              <ul>
                <li class="active"><a href="index.html"><span>Home</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="colorlib-navbar-brand">
            <a class="colorlib-logo" href="index.html">Company Logo</a>
          </div>
          <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>
      </header>

      <section class="hero-wrap js-fullheight">

      </section>

    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

<!--    <div class="dropdown-1">
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





         <ul>
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
</header>
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
                <h2>Competences required : </h2>
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