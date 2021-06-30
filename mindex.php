<?php require ("databaseconn.php");?>
<?php
    function uploadvideo(){
    //when the upload video submit button is clicked
    if(isset($_POST["sbvid"])){
        //get data from the html form
        $skill = $_POST["skill"];
        $myvid = $_FILES["myvid"]['name'];
        $foldername = "video/";
        $videoname = $foldername.basename($_FILES['myvid']['name']);
        $keywords = $_POST["kwords"];
        //variable for type of video based on its extension
        $videotype = strtolower(pathinfo($videoname,PATHINFO_EXTENSION));

        //maximum size if video set to 5 mb
        $maxsize = 5242880;
        // check whether the file type is acceptable
        //an array of acceptable extensions
        $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
        //check
        if(in_array($videotype,$extensions_arr)){
            //if size is too small or too large
            if(($_FILES['myvid']['size'] >= $maxsize) || ($_FILES["myvid"]["size"] == 0)){
                echo "File too large. File must be less than 5MB.";
            }
            //else upload video to folder and insert into the database
            if(move_uploaded_file($_FILES['myvid']['tmp_name'],$videoname)){
                // Insert record
                //change filename to the users' pseudoname
                $conn = openConn();
                $insert = $conn->query("INSERT INTO video(name,path,keywords) VALUES('$myvid','$videoname','$keywords')");
                closeConn($conn);
                if($insert){
                    echo "Upload successfully.";
                }
                else{
                    echo "sorry, data was not added to the database";
                }
              }

        }


    }
    }
    uploadvideo();
    //THINGS TO WORK ON
    //add insertion category - will be based on session toi determine whether it is a career fair video or for interview
    //check whether video was already uploaded before adding

    //get all videos from database and display them 
    function displayallvideos(){
        $conn = openConn();
        //queary to select all rows
        $selectq = $conn->query("select name, path from video");
        closeConn($conn);
        //check whether anything was selected
        if ($selectq -> num_rows>0){
            //for each row, display using html
            while ($row=$selectq->fetch_assoc()) {
                echo '<div class="column">
	    				<div class="card">
	    					<div style="float:left; margin-right: 5px">
	    						<video controls width="320" height="240" src="'.$row['path'].'" ></video>
                                <h5>'.$row['name'].'</h5>
                                </div>
	    				</div>
	  				  </div>';  
            }
        }
    }

    displayallvideos();
?>