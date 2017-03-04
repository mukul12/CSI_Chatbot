<?php
#Function to connect to the hungama database (make a connection) ends: local



function db_connect()		
{			
		$DBHOST="localhost";
		$DBUSER="root";
		$DBPASS="";
		$DBNAME="csi_chatbot";

		  $link = mysqli_connect($DBHOST, $DBUSER, $DBPASS);
			
			if (!$link)
			  {
				die('Could not connect: ');
			  }
			   
			$db_link=mysqli_select_db($link,$DBNAME);
			if(!$db_link)
			{
				die('Could not select database: ');
			}
          return $link;
 }

 function insert_user($team_name,$member1_name,$member1_email,$member1_contact,$member2_name,$member2_email,$member2_contact,$member3_name,$member3_email,$member3_contact,$member4_name,$member4_email,$member4_contact,$otp){
		
			$sql = "INSERT INTO user (team_name,member1_name,member1_email,member1_contact,member2_name,member2_email,member2_contact,member3_name,member3_email,member3_contact,member4_name,member4_email,member4_contact,otp) VALUES('$team_name','$member1_name','$member1_email','$member1_contact','$member2_name','$member2_email','$member2_contact','$member3_name','$member3_email','$member3_contact','$member4_name','$member4_email','$member4_contact','$otp') ";	
			

			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

/*	function insert_hotel($id,$hotel_name,$hotel_city,$hotel_nights,$hotel_category){
		
			$sql = "INSERT INTO hotel (package_id,name,city,nights,category) VALUES('$id','$hotel_name','$hotel_city','$hotel_nights','$hotel_category')";	
			

			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

 
	
	function insert_theme($name,$image,$description){
		
			$sql = "INSERT INTO theme (name,image,description,creationdate) VALUES('".addslashes($name)."','".addslashes($image)."','".addslashes($description)."',NOW())";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

	function delete_theme($id){
		
			$sql = "DELETE FROM theme Where id=$id ";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

	function update_theme($id,$name,$image,$description){
		
			$sql = "UPDATE theme SET name = '$name', image = '$image', description ='$description', updatedate = NOW() Where id=$id ";	
					

			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

	function edit_theme($id){
		
			$sql = "SELECT * FROM theme Where id=$id ";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['name'][$i] = $data['name'];
				$dtls['image'][$i] = $data['image'];
				$dtls['description'][$i] = $data['description'];
				$i++;
			}
		}
		return $dtls;
	}

	function get_last_images(){
		
			$sql = "SELECT * FROM `theme` order by creationdate DESC LIMIT 8";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['creationdate'][$i] = $data['creationdate'];
				$dtls['updatedate'][$i] = $data['updatedate'];
				$dtls['name'][$i] = $data['name'];
				$dtls['image'][$i] = $data['image'];
				$dtls['description'][$i] = $data['description'];
				$i++;
			}
		}
		return $dtls;
	}

	
	function get_last_package_images(){
		
			$sql = "SELECT * FROM package where type='Private Group' order by id DESC LIMIT 4";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['package_home_image'][$i] = $data['package_home_image'];
				
				$i++;
			}
		}
		return $dtls;
	}

	function get_theme(){
		
			$sql = "SELECT * FROM theme";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['creationdate'][$i] = $data['creationdate'];
				$dtls['updatedate'][$i] = $data['updatedate'];
				$dtls['name'][$i] = $data['name'];
				$dtls['image'][$i] = $data['image'];
				$dtls['description'][$i] = $data['description'];
				$i++;
			}
		}
		return $dtls;
	}

	function retrieve_itenary($id){
		
		
			$sql = "SELECT * FROM itenary where package_id= $id";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['ite_city'][$i] = $data['ite_city'];
				$dtls['ite_date'][$i] = $data['ite_date'];
				$dtls['ite_details'][$i] = $data['ite_details'];
				$dtls['ite_description'][$i] = $data['ite_description'];
				
				$i++;
			}
		}
		return $dtls;
	}



	function retrieve_package($id){
		
		
			$sql = "SELECT * FROM package where id= $id";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['type'][$i] = $data['type'];
				$dtls['name'][$i] = $data['name'];
				$dtls['experience'][$i] = $data['experience'];
				$dtls['tags'][$i] = $data['tags'];
				$dtls['city'][$i] = $data['city'];
				$dtls['country'][$i] = $data['country'];
				$dtls['price'][$i] = $data['price'];
				$dtls['highlights'][$i] = $data['highlights'];
				$dtls['overview'][$i] = $data['overview'];
				$dtls['type_of_room'][$i] = $data['type_of_room'];
				$dtls['inclusion'][$i] = $data['inclusion'];
				$dtls['ite_city'][$i] = $data['ite_city'];
				$dtls['ite_date'][$i] = $data['ite_date'];
				$dtls['ite_details'][$i] = $data['ite_details'];
				$dtls['ite_inclusion'][$i] = $data['ite_inclusion'];
				$dtls['ite_exclusion'][$i] = $data['ite_exclusion'];

				$dtls['slider1'][$i] = $data['slider1'];
				$dtls['slider2'][$i] = $data['slider2'];
				$dtls['slider3'][$i] = $data['slider3'];
				$dtls['slider4'][$i] = $data['slider4'];
				$dtls['slider5'][$i] = $data['slider5'];

				$i++;
			}
		}
		return $dtls;
	}

	function retrieve_hotel($id){
		
		
			$sql = "SELECT * FROM hotel where 	package_id= $id";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;


		if($ret){
			while($data =mysqli_fetch_array($ret)){
					

				$dtls['id'][$i] = $data['id'];
				$dtls['name'][$i] = $data['name'];
				$dtls['city'][$i] = $data['city'];
				$dtls['nights'][$i] = $data['nights'];
				$dtls['category'][$i] = $data['category'];
				$dtls['package_id'][$i] = $data['package_id'];
				$dtls['itenary_id'][$i] = $data['itenary_id'];
				$i++;
			}
		}
		return $dtls;
	}


	function get_package(){
		
		
			$sql = "SELECT * FROM package";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['type'][$i] = $data['type'];
				$dtls['name'][$i] = $data['name'];
				$dtls['experience'][$i] = $data['experience'];
				$dtls['tags'][$i] = $data['tags'];
				$dtls['city'][$i] = $data['city'];
				$dtls['country'][$i] = $data['country'];
				$dtls['price'][$i] = $data['price'];
				$dtls['overview'][$i] = $data['overview'];
				$dtls['inclusion'][$i] = $data['inclusion'];
				$dtls['ite_city'][$i] = $data['ite_city'];
				$dtls['ite_date'][$i] = $data['ite_date'];
				$dtls['ite_details'][$i] = $data['ite_details'];
				$dtls['ite_inclusion'][$i] = $data['ite_inclusion'];
				$dtls['ite_exclusion'][$i] = $data['ite_exclusion'];

				$i++;
			}
		}
		return $dtls;
	}

	
	function insert_package($type,$name,$image,$slider1,$slider2,$slider3,$slider4,$slider5,$experience,$tags,$city,$country,$price,$highlights,$overview,$type_of_room,$inclusion,$ite_inclusion,$ite_exclusion){
		
			$sql = "INSERT INTO package (type,name,package_home_image,slider1,slider2,slider3,slider4,slider5,experience,tags,city,country,price,highlights,overview,type_of_room,inclusion,ite_inclusion,ite_exclusion) VALUES('$type','$name','$image','$slider1','$slider2','$slider3','$slider4','$slider5','$experience','$tags','$city','$country','$price','$highlights','$overview','$type_of_room','$inclusion','$ite_inclusion','$ite_exclusion')";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));

			$last_id = mysqli_insert_id($link);
			return $last_id;
	}


	function delete_package($id){
		
			$sql = "DELETE FROM package Where id=$id ";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}

	function edit_package($id){
		
			$sql = "SELECT * FROM package Where id=$id ";	
					
			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			$i = 0;

		if($ret){
			while($data =mysqli_fetch_array($ret)){
				$dtls['id'][$i] = $data['id'];
				$dtls['type'][$i] = $data['type'];
				$dtls['name'][$i] = $data['name'];
				$dtls['experience'][$i] = $data['experience'];
				$dtls['tags'][$i] = $data['tags'];
				$dtls['city'][$i] = $data['city'];
				$dtls['country'][$i] = $data['country'];
				$dtls['price'][$i] = $data['price'];
				$dtls['overview'][$i] = $data['overview'];
				$dtls['inclusion'][$i] = $data['inclusion'];
				$dtls['ite_city'][$i] = $data['ite_city'];
				$dtls['ite_date'][$i] = $data['ite_date'];
				$dtls['ite_details'][$i] = $data['ite_details'];
				$dtls['ite_inclusion'][$i] = $data['ite_inclusion'];
				$dtls['ite_exclusion'][$i] = $data['ite_exclusion'];

				$i++;
			}
		}
		return $dtls;
	}

	function update_package($id,$type,$name,$experience,$tags,$city,$country,$price,$overview,$inclusion,$ite_city,$ite_date,$ite_details,$ite_inclusion,$ite_exclusion){
		
			$sql = "UPDATE package SET type = '$type', name = '$name', experience = '$experience', tags ='$tags', city = '$city', country = '$country', price = '$price', overview ='$overview', inclusion = '$inclusion', ite_city = '$ite_city', ite_date = '$ite_date', ite_details ='$ite_details', ite_inclusion = '$ite_inclusion', ite_exclusion ='$ite_exclusion' Where id=$id ";	
					

			$link = db_connect();
			$ret = mysqli_query($link,$sql) or die(mysqli_error($link));
			return $ret;
	}
	*/
	?>
