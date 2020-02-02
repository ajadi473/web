<?php

    if (isset($_POST['upload'])) {
    	$category = $_POST['category'];
        $abstract = $_POST['abstract'];
        $topic = $_POST['title'];
        
		require 'conn.php';
		
        if (!$conn)
            alert('Could not connect to the database ' .mysqli_error());
        else
        	// move image to the directory

        	$target_dir = "uploads/imgs/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		

			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
			&& $FileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}


			// move thesis document to the directory
        	$target_dir_docs = "uploads/docs/";
			$target_file_docs = $target_dir_docs . basename($_FILES["document"]["name"]);
			$uploadOk = 1;
			$FileType = strtolower(pathinfo($target_file_docs,PATHINFO_EXTENSION));

			// // Check if image file is a actual image or fake image
			
		    // $check = get($_FILES["document"]["tmp_name"]);
		    // if($check !== false) {
		    //     echo "File is  - " . $check["mime"] . ".";
		    //     $uploadOk = 1;
		    // } else {
		    //     echo "File is not an image.";
		    //     $uploadOk = 0;
		    // }
		

			// Check if file already exists
			if (file_exists($target_file_docs)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["document"]["size"] > 50000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($FileType != "doc" && $FileType != "docx" && $FileType != "pdf"
			&& $FileType != "latex" ) {
			    echo "Sorry, only DOC, DOCX, PDF & LATEX files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file_docs)) {
			        echo "The file ". basename( $_FILES["document"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}


            // insert into the database
            // $sql = "INSERT INTO thesis (category,abstract,topic,images,document) 
			// VALUES ('$category', '$abstract','$topic', '$target_file', '$target_file_docs')";
			$sql = "INSERT INTO thesis (category,abstract,topic, images) 
			VALUES ('$category', '$abstract','$topic', '$target_file')";
            $result = mysqli_query($conn, $sql);

            if (!$result)
                echo "could not save at this time, try again ".mysqli_error();
            else
                header("Location:certificate.php");
    }

    

?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Thesis Upload</title>
    <meta name="keywords" content="Put, tags, here">
    <meta name="description" content="Your description here!">
    <meta name="author" content="Your Name">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
                <h4 id="description" class="center-align">Some description goes here.</h4>

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
                
	                <div id="portfolioTitle">
	                    <p id="portfolioText">Thesis upload</p>
	                    <!-- Type of work goes here -->
	                    
	                </div>
	                <br><br>
                    
		               	<form method="post" action="upload.php" enctype="multipart/form-data">

		               		<div class="input-field row">
							    <select name="category" style="border: 1px solid black">
							      
							      <option value="masters">Masters</option>
							      <option value="phd">PhD</option>
							    </select>
							    <label  style="color:#3a87ad; font-size:18px;">Thesis Category</label>
							  </div>
		               		
		               		<div class="row" style="margin-top: 1%">
		               			<label style="color:#3a87ad; font-size:18px;">Thesis Title</label>
								<input type="text" name="title" placeholder="Your Project Title Here" required />
		               		</div>

		               		<div class="row">
		               			<label style="color:#3a87ad; font-size:18px;">Thesis Abstract</label>
								<textarea name="abstract" rows="50" cols="80" placeholder="Your Abstract goes Here. 500 words, max"></textarea>
							
		               		</div>

							<div class="row">
								<label style="color:#3a87ad; font-size:18px;">Select your Document</label>
								<input type="file" accept="pdf" name="document" />
							</div>
							
							<div class="row">
								<label style="color:#3a87ad; font-size:18px;">Select your Image(s)</label>
								<input type="file" name="image" multiple />
							</div>

							<div class="row" align="centre">
								<button class="btn waves-effect waves-light" type="submit" name="upload">Submit
								    <i class="material-icons right">send</i>
								  </button>
							</div>
						    

						</form>
                
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript">
    	  document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('select');
		    var instances = M.FormSelect.init(elems, options);
		  });

		  // Or with jQuery

		  $(document).ready(function(){
		    $('select').formSelect();
		  });
    </script>
</body>

</html>


