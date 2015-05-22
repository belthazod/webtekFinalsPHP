<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>


</head>

<body>

      <?php include 'includes/nav.php';?> 
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                   
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-md-6">
                <h2>About SLU</h2>
                <p>Saint Louis University is regarded as one of the Philippines' respected and leading educational institutions that has grown with the demands of the current and future environments for its students and faculty alike.</p>
                <p>Around two hundred fifty kilometers north of Manila lies Baguio City, known to be the "Summer Capital of the Philippines" that enjoys temperate climate all year round. From a village resort established by the Americans, Baguio has become the Northern Philippines' center of business and commerce as well as the center of education. Saint Louis University has played a pivotal role in the evolution of the City into a center for learning in the North.</p>
                <p>Today, SLU is the largest university north of Manila with more than 30,000 students from the elementary, high school and college levels. Its reputation for excellence attracts students and scholars not only from the Philippines but from other countries as well. It has sustained itself since 1911 to become one of the top centers of academic excellence in the Philippines that meet international standards in tertiary education.</p>

            </div>
        </div>       

        <hr>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="vision">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <h4> Vision and Mission </h4>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <p>"We envision Saint Louis University as an excellent missionary and transformative educational institution zealous in developing human resources imbued with the Christian Spirit and who are creative, competent and socially involved."</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="awards">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h4>Institutional Awards</h4>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <ul>
                    <li>Full Autonomy Status granted by the Commission on Higher Education (CHED)</li>
                    <li>CHED Center of Excellence and Development</li>
                    <li>Recognized as a top performing school in various licensure examinations by the Professional Regulation Commission (PRC)</li>
                    <li>Ranked 201+ in the 2010 QS Asian University Ranking</li>
                    <li>Ranked 1st Outside Metro Manila and 3rd Nationwide based on the Compilation of Statistics on the Performance of Schools in Various Licensure Examinations by the Educational Statistics Task Force (ESTF)</li>
                    <li>CHED Zonal Research Center for Region 1 and CAR</li>
                    <li>SSS Balikat ng Bayan Award</li>
                    <li>Builders of Baguio Award</li>
                    <li>CHED Regional Winner for Best Higher Education Institution Implementing Drug Education Prevention and Control Program</li>
                    <li>CHED National Winner for Best in Student Welfare and Services Program</li>
                    <li>SLU Sunflower Children's Center: DSWD Salamat Po Award</li>
                    <li>SLU-EISSIF: Presidential Citation for "Best Practices in Improving Productivity and Efficiency"</li>
                </ul>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="campuses">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h4> Campuses </h4>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="campuses">
      <div class="panel-body">
        <ul>
                    <li>Main Campus, Bonifacio St, Baguio City - housing the Schools of Computing and Information Sciences, Engineering and Architecture, Humanities, Law, Medicine, Natural Sciences and Nursing and the SLU Hospital of the Sacred Heart</li>
                    <li>Saint Aloysius de Gonzaga Campus, General Luna Road, Baguio City - housing the SLU Laboratory Elementary School</li>
                    <li>Navy Base Campus, Claro M Recto Street, Navy Road, Baguio City - housing the School of Teacher Education and SLU Laboratory High School</li>
                    <li>Maryheights Campus, Bakakeng, Baguio City - School of Accountancy and Business Management</li>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="schools">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          <h3>Schools</h3>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="campuses">
      <div class="panel-body">
        <ul>
                     
                    <li>Saint Louis University Laboratory Elementary School (SLU-LES)</li>
                    <li>Saint Louis University Laboratory High School (SLU-LHS)</li>
                    <li>School of Accountancy and Business Management (SABM) - CHED Center of Development for Accountancy and Entrepreneurship Education</li>
                    <li>School of Computing and Information Sciences (SCIS) - CHED Center of Development for Information Technology</li>
                    <li>School of Engineering and Architecture (SEA) - CHED Center of Development for Engineering Education - Chemical Engineering, Civil Engineering, Electronics Engineering and Mechanical Engineering</li>
                    <li>School of Humanities (SoH)</li>
                    <li>School of Law (SoL) - Recognized as one of the Top 20 Law Schools in the Philippines</li>
                    <li>School of Medicine (SoM) - Consistent top placer in licensure exams for Physicians</li>
                    <li>School of Natural Sciences (SNS) - Consistent top placer in licensure exams for Pharmacists, Radiologic Technologists and Medical Technologists</li>
                    <li>School of Nursing (SoN) - CHED Center of Development for Nursing Education</li>
                    <li>School of Teacher Education (STE)CHED Center of Excellence for Teacher Education</li>
                </ul>
      </div>
    </div>
  </div>
</div>

 
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> WEBKTEK 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
