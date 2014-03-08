<?php
$error = null;
$success = null;
$name = '';
$email = '';
$comments = '';
$subject = 'Contact form from website';
try {
  if (isset($_POST) && isset($_POST['submitted'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    if (empty($name)) {
      throw new Exception('Name cannot be blank.');
    }
    if (empty($email)) {
      throw new Exception('Email address cannot be blank.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception('You entered an invalid email address.');
    }
    if (empty($comments)) {
      throw new Exception('Please add a comment.');
    }
    $message = 'Name: '.$name."\nEmail: ".$email."\nComments:\n".$comments;
    if (!mail('sesctinfo@gmail.com', $subject, $message)) {
      throw new Exception('There was an error sending your comment. Please call us.');
    } else {
      $success = 'Contact form was successfully submitted. We will respond as soon as possible.';
      $name = '';
      $email = '';
      $comments = '';
    }
  }
} catch(Exception $e) {
  $error = $e->getMessage();
}
// echo '<pre>';
// var_dump($_POST);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Southeastern Employment Services: Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ses-logo-ico.png" alt="SES favicon" />
    <!-- Bootstrap -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/site.css">
    <link href='http://fonts.googleapis.com/css?family=Judson|Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header>
        <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Home</a>
          </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav dropdown">
              
              <li><a href="#" data-toggle="dropdown">SES</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="home-1.html">Who We Are</a></li>
                  <li><a href="home-2.html">What We Do</a></li>
                  <li><a href="roles.html">Our Roles</a></li>
                </ul>
              </li>

              <li class="active"><a href="#" data-toggle="dropdown">About Us</a>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="executive.html">Executive Director</a></li>
                  <li><a href="team.html">Meet The Team</a></li>
                  <li><a href="values.html">Vision, Mission &amp; Core Values</a></li>
                  <li><a href="principles.html">Service Principles</a></li>
                  <li><a href="commitment.html">Commitment</a></li>
                  <li><a href="careers.html">Careers</a></li>
                  <li><a href="contact.html">Conatct Us &amp; Directions</a></li> 
                </ul>
              </li>

              <li><a href="#" data-toggle="dropdown">Services</a>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="interview-prep.html">Individualized Interview Preparations</a></li>
                  <li><a href="working-eval.html">Work Evaluations</a></li>
                  <li><a href="working-int.html">Working Interviews</a></li>
                  <li><a href="placement.html">Placement</a></li>
                  <li><a href="OTB-training.html">On-The-Job Training</a></li>
                  <li><a href="school.html">School-To-Work Transition Program</a></li>
                  <li><a href="college.html">College Transition Program</a></li>
                  <li><a href="ticket.html">Ticket-To-Work Program</a></li> 
                </ul>
              </li>

              <li><a href="#" data-toggle="dropdown">Partners</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="partners.html">Partner Agencies</a></li>
                  <li><a href="http://www.ct.gov/brs/site/default.asp" target="_blank">Bureau of Rehabilitation Services</a></li>
                  <li><a href="http://www.ct.gov/dds/site/default.asp" target="_blank">Department of Developmental Services</a></li>
                  <li><a href="http://www.ct.gov/dss/site/default.asp" target="_blank">Department of Social Services</a></li>
                </ul>
              </li>

              <li><a href="#" data-toggle="dropdown">Employers</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="employers.html">Employers</a></li>
                  <li><a href="staff-solutions.html">Staffing Solutions</a></li>
                </ul>
              </li>

              <li><a href="testimonials.html">Testimonials</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
       
        
        <div class="row">
          <div class="col-sm-6 col-md-6" id="container_logo">
            <div class="col-md-6 col-lg-6">
              <a href="index.html"><img src="img/ses-logo-1.png" alt="Southeastern Employment Services logo"  id="logo" width="182" height="189" /></a>
            </div>
            <div class="col-md-6 col-lg-6" id="titleName">
              <h1><span class="firstLetter">S</span>outheastern <br><span class="firstLetter">E</span>mployment <br><span class="firstLetter">S</span>ervices</h1>
            </div>
          </div>
            
          <div class="col-sm-6 col-md-6 hidden-phone">
            <blockquote>
              "We are committed to bringing   quality employment services to Southeastern CT because we envision all people working and living healthy, fulfilled lives."
            </blockquote>
          </div>
        </div>
      </header><hr>
      
      <div class="row">
        <div class="col-sm-6 col-md-6" id="contactBlock">
          <h2 class="pageHead">Contact Us</h2>
          <h4>Street Address:</h4>
          <address>
            7 Halls Road, Unit C, Old Lyme, CT 06371
          </address>
          <h4>Phone:</h4>
          <p class="num">(860)434-0544</p>
          <h4>Fax:</h4>
          <p class="num">(860)434-1270</p>
          <h3>Contact us by Email</h3>
          <p id="cap">Please let us know your thoughts and give us a chance to answer any questions you might have. We would love to hear from you!</p>
          <?php
            if (null !== $error) {
              echo '<div class="bg-danger"><p class="text-danger">'.$error.'</p></div>';
            }
            if (null !== $success) {
              echo '<div class="bg-success"><p class="text-success">'.$success.'</p></div>';
            }
          ?>
          <form class="form-horizontal" role="form" action="contact.php" method="post">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Name" value="<?php echo $name; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo $email; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="comments" class="col-sm-2 control-label">Comments</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="comments" placeholder="Comments"><?php echo $comments; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="submitted">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-6 col-md-6">
          <h3>MapQuest</h3>
          <iframe style="height: 270px; width: 450px;" src="http://www.mapquest.com/embed?hk=1bz7BrI" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
          <h4><a href="http://www.mapquest.com/" target="_blank">Get Directions</a></h4>
        </div>
      </div>


      <hr>
      <footer>
        <div class="row">
          <div class="col-sm-6 col-md-6" id="footer1">
            <p id="copy">
              <span id="sesfoot"> SOUTHEASTERN<br> EMPLOYMENT<br> SERVICES, LLC </span><span id="datefoot"> - &copy;2014</span>
            </p>
          </div>
          <div class="col-sm-6 col-md-6" id="footer2">
            <address>
              7 Halls Road, Unit C, Old Lyme, CT 06371
            </address>
            <p id="numbers">
              Phone: (860)434-0544<br>
              Fax: (860)434-1270
            </p>
          </div>
        </div>
      </footer>
    </div> 
  </body>
</html>