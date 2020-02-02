<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>
    <meta name="keywords" content="Put, tags, here">
    <meta name="description" content="Your description here!">
    <meta name="author" content="Your Name">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    
    <!-- Put your favicon here! (I highly suggest realfavicongenerator.net) -->
    
    <meta name="theme-color" content="#f5f6fa">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:500,600,700" rel="stylesheet">
    <!-- If you want Google Analytics, do some Google searching, and pop it here. -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background-color: #f5f6fa">
    <div>
        <div class="row">
            <div id="profileColumn" class="col s12 l4 center">
                <img id="profileImage" src="./images/profile.jpg" class="z-depth-3 circle responsive-img" />
                
                <h2 id="heroName" class="center-align">Your Name</h2>
                <div id="socialLinkSection">
                    <section class="tab">
                        <div id="socialLinkContent">
                            <!-- Your social links are dynamically generated from links.json! -->
                        </div>
                    </section>
                </div>
                
                <!-- Replace the email address below with your own -->
                <a id="contactButton" class="waves-effect waves-grey btn-flat" href="mailto:example@example.com"><p>Contact Me</p></a>
                
            </div>
            
            <div id="portfolioColumn" class="col s12 m12 l8">
                
                <div class="row" id="">
                    <div class="col s12 m6 l6">
                        
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/image1.jpg">
                            </div>

                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Upload Thesis<i class="material-icons right">keyboard_arrow_up</i>
                                </span>
                            </div>

                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Thesis Upload<i class="material-icons right">close</i>
                                <hr>
                                </span><p>Click here to upload a new thesis.</p>

                            <hr>
                            <p><a href="upload.php" target="_blank">Proceed</a></p>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col s12 m6 l6">
                        
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/image1.jpg">
                            </div>

                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Edit Thesis<i class="material-icons right">keyboard_arrow_up</i>
                                </span>
                            </div>

                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Thesis Editing<i class="material-icons right">close</i>
                                <hr>
                                </span><p>Click here to edit your existing thesis.</p>

                            <hr>
                            <p><a href="edit.php" target="_blank">Proceed</a></p>
                            </div>

                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>