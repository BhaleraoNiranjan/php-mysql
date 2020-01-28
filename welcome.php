<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Welcome to Unnati's DevOps Event!!

Unnati Computers is now Unnati Development and Training Centre Pvt Ltd. (UDTCP)

UDTCP is a computer training organization specialized in hands-on learning for Linux training and Red Hat certifications lovsyrf in Aurangabad (MS).  Growing for more than 15 years.

UDTCP is affiliated by Red Hat India Pvt Ltd, DOEACC Society New Delhi, National Institute of Computer Academy, & YCMOU Nasik.

     Our Mission statement is to provide a quality product / service that exceeds the expectations of our students, no exceptions.  We teach a range of classes that start with the very basic computer user and extends to the very advanced courses like RHCE, RHCVA, Cloud Computing, Storage, Ansible, JBoss, Docker,  and many more.

At UDTCP, each student learns using their own state of the art computer with no more than 15 students in a class.  Our well experienced / certified trainers “lead” the students through the classes without the use of in class manuals.  We use the manual as a post-training tool, not as a training substitute!

All classes are 100% guaranteed and, as usual at UDTCP, all of our students receive post-training telephone support at no charge . . . forever.
</p>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>
