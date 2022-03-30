<?php session_start(); ?>
<?php require '../controllers/controllerHome.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stage Sensor | Home</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ><img src="pictures/Logo_company.png" width="100px" height="25px"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a id="home" href="viewHome.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Candidacy</a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="#">See wish-list</a></li>
                            <li><a href="#">See offers</a></li>                                                          
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Internship offer</a>
                        <ul class="dropdown-menu multi-level"><?php
                            if($_SESSION['role'] === 'Admin' or $_SESSION['role'] === 'Pilot'){?>
                                <li><a href="#">Create or modify</a></li><?php
                            }?>
                            <li><a href="#">Search</a></li>                                                       
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Company</a>
                        <ul class="dropdown-menu multi-level"><?php
                            if($_SESSION['role'] === 'Admin' or $_SESSION['role'] === 'Pilot'){?>
                                <li><a href="../controllers/controllerCreateModifyEditCompany.php">Create or edit</a></li><?php
                            }?>
                            <li><a href="../controllers/controllerSearchCompany.php">Search</a></li>
                            <li><a href="#">Evaluate</a></li>
                        </ul>
                    </li> 
                    <?php
                    if($_SESSION['role'] === 'Admin' or $_SESSION['role'] === 'Pilot' or $_SESSION['role'] === 'Class president'){?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Student</a>
                            <ul class="dropdown-menu multi-level"><?php
                                if($_SESSION['role'] === 'Admin' or $_SESSION['role'] === 'Pilot'){?>
                                    <li><a href="../controllers/controllerCreateModifyEditCompany.php">Create or modify</a></li><?php
                                }?>
                                <li><a href="../controllers/controllerSearchStudent.php">Search</a></li>                                                          
                            </ul>
                        </li><?php
                    }
                    if($_SESSION['role'] === 'Admin' or $_SESSION['role'] === 'Pilot') {?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Class president</a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="#">Create or modify</a></li>
                                <li><a href="../controllers/controllerSearchCP.php">Search</a></li>                                                       
                            </ul>
                        </li><?php
                    }
                    if($_SESSION['role'] === 'Admin') {?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle"><b class="caret"></b> Pilot</a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="#">Create or modify</a></li>                                                       
                            </ul>
                        </li><?php
                    }?>
                </ul>        
            </div>
        </div>
    </nav>
    <div class="mainbody">
        <div class="Elements">
            <h3 class="welcome">Welcome <?php echo($_SESSION['first_name']) ?> <?php echo($_SESSION['last_name']) ?> !</h3>
            <h3><?php echo($_SESSION['role']) ?></h3>
            <div class="logout">
                <a href="../controllers/controllerLogout.php">Logout</a>
            </div>
        </div>
    </div>
    <section class="lastcompany">
        <?php 
        $lastoffer = Offer();
        $company = Company();
        foreach ($lastoffer as $offer):?>
        <h1>Latest Internship Offer: <?= $offer['Titre'] ?></h1>
        <div class="alr">
            <div class="alc">
                <?php foreach ($company as $name):?>
                <h2>Company: <?= $name['Nom'] ?></h2>
                <?php endforeach; ?> 
                <h2>Date: <?= $offer['Date'] ?></h2>
                <h2>Sector: <?= $offer['Secteur'] ?></h2>
                <h2>Duration: <?= $offer['Duree'] ?></h2>
                <h2>Looking for <?= $offer['Nbplaces'] ?> students</h2>
            </div>
            <div class ="alc2">
                <h2>Description: </h2>
                <h2><?= $offer['Competences'] ?></h2>
            </div>
        </div>
        <?php endforeach; ?> 
    </section>
    <section class="tuto">
       <div>
           <h3>How to write your resume</h3>
           <a href="https://www.youtube.com/watch?v=u75hUSShvnc"><img class="imageTuto" src="pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
       <div>
            <h3>How to write your cover letter</h3>
            <a href="https://www.youtube.com/watch?v=NUhDP30IRKk"><img class="imageTuto" src="pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
       <div>
            <h3>How to complete an interview</h3>
            <a href="https://www.youtube.com/watch?v=HG68Ymazo18&t=180s"><img class="imageTuto" src="pictures/tutoButtonPurple.png" width="70px" height="70px"></a>
       </div>
    </section>
    <footer>
        <div class="footertop">
            <div class="texttop">
                <p>Find the best internship with Stage sensor !</p>
            </div>
            <div class="footersocials">
                <p class="footersocialsstuff">Find us on social media:</p>
                <a class="footersocialsstuff" href="https://www.linkedin.com/in/stage-sensor/"><img src="pictures/logo_linkedin.png" height="30px" width="30px"></a>
                <a class="footersocialsstuff" href="https://www.instagram.com/stagesensor/"><img src="pictures/logo_instagram.png" height="30px" width="30px"></a>
            </div>
            <div class="footerbottom">
                <a class="footerbottomtext" href="footerLinks/gethelp.php">Get help</a>
                <a class="footerbottomtext" href="footerLinks/termsofuse.php">Terms of Use</a>
                <a class="footerbottomtext" href="footerLinks/privacypolicy.php">Privacy policy</a>
                <a class="footerbottomtext" href="footerLinks/legalmentions.php">Legal mentions</a>
            </div>
        </div>
    </footer>
</body>
</html>