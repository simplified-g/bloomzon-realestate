<?php require("emslib.inc.php");
/* 
if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently To Secure Location');
    header('Location: ' . $redirect);pr
    exit();
}

Author: 		Thesent George
Company Name: 	Emiserve Technologies
Purpose:		Emiserve Code Library for Emiserve Admin Control Panel
				Designed as a  content management system for all emiserve web projects.
licence:		All rights reserved, this application may not be copied, used or
 				distributed in full or in part without explicit permission from the author or emiserve technologies.
*/

class public_lib extends emslib{
var $cat, $title, $intro, $content; var $DB_SERVER;var $DB_USER;var $DB_PWD;var $DB_NAME;var $connection;private $result;var $adminregno;

	function __construct(){$this->open_connection(); 
        $this->app_name=$this->get_this_data("var_value","app_variables","var_name","APP_NAME");
        $this->app_portal=$this->get_this_data("var_value","app_variables","var_name","APP_PORTAL");
        $this->app_mobile=$this->get_this_data("var_value","app_variables","var_name","APP_MOBILE");
        $this->app_email=$this->get_this_data("var_value","app_variables","var_name","APP_EMAIL");
        $this->official_email=$this->get_this_data("var_value","app_variables","var_name","OFFICIAL_EMAIL");
        $this->contact_address=$this->get_this_data("var_value","app_variables","var_name","CONTACT_ADDRESS");
        $this->facebook=$this->get_this_data("var_value","app_variables","var_name","FACEBOOK");
        $this->youtube=$this->get_this_data("var_value","app_variables","var_name","YOUTUBE");
        $this->instagram=$this->get_this_data("var_value","app_variables","var_name","INSTAGRAM");
        $this->cathome = $this->base(0);
        $this->adminregno = '100100';
	}

	function public_lib(){
	   $this->cat = $this->cat = $this->title = $this->intro= $this->content = "";
	}
	
	public function insert_property($user_id, $user_email){		
		
		$last_id = (int)$this->generate_token("property_info","prop_id",10000);
        
		$file_name1 = $file_size1 = $file_tmp1 = $file_type1 = "";
		$file_name2 = $file_size2 = $file_tmp2 = $file_type2 = "";
		$file_name3 = $file_size3 = $file_tmp3 = $file_type3 = "";
		$file_name4 = $file_size4 = $file_tmp4 = $file_type4 = "";
		$file_name5 = $file_size5 = $file_tmp5 = $file_type5 = "";
		$file_name6 = $file_size6 = $file_tmp6 = $file_type6 = "";
		$file_name7 = $file_size7 = $file_tmp7 = $file_type7 = "";
		$file_name8 = $file_size8 = $file_tmp8 = $file_type8 = "";
		$file_name9 = $file_size9 = $file_tmp9 = $file_type9 = "";
		$file_name10 = $file_size10 = $file_tmp10 = $file_type10 = "";
		$file_name11 = $file_size11 = $file_tmp11 = $file_type11 = "";
		$file_name12 = $file_size12 = $file_tmp12 = $file_type12 = "";
		$file_name13 = $file_size13 = $file_tmp13 = $file_type13 = "";
		$file_name14 = $file_size14 = $file_tmp14 = $file_type14 = "";
		$file_name15 = $file_size15 = $file_tmp15 = $file_type15 = "";

		$file_name1 = @$_FILES['image1']['name'];
		$file_size1 = @$_FILES['image1']['size'];
		$file_tmp1 = @$_FILES['image1']['tmp_name'];
		$file_type1 = @$_FILES['image1']['type'];

		$file_name2 = @$_FILES['image2']['name'];
		$file_size2 = @$_FILES['image2']['size'];
		$file_tmp2 = @$_FILES['image2']['tmp_name'];
		$file_type2 = @$_FILES['image2']['type'];

		$file_name3 = @$_FILES['image3']['name'];
		$file_size3 = @$_FILES['image3']['size'];
		$file_tmp3 = @$_FILES['image3']['tmp_name'];
		$file_type3 = @$_FILES['image3']['type'];

		$file_name4 = @$_FILES['image4']['name'];
		$file_size4 = @$_FILES['image4']['size'];
		$file_tmp4 = @$_FILES['image4']['tmp_name'];
		$file_type4 = @$_FILES['image4']['type'];

		$file_name5 = @$_FILES['image5']['name'];
		$file_size5 = @$_FILES['image5']['size'];
		$file_tmp5 = @$_FILES['image5']['tmp_name'];
		$file_type5 = @$_FILES['image5']['type'];

		$file_name6 = @$_FILES['image6']['name'];
		$file_size6 = @$_FILES['image6']['size'];
		$file_tmp6 = @$_FILES['image6']['tmp_name'];
		$file_type6 = @$_FILES['image6']['type'];

		$file_name7 = @$_FILES['image7']['name'];
		$file_size7 = @$_FILES['image7']['size'];
		$file_tmp7 = @$_FILES['image7']['tmp_name'];
		$file_type7 = @$_FILES['image7']['type'];

		$file_name8 = @$_FILES['image8']['name'];
		$file_size8 = @$_FILES['image8']['size'];
		$file_tmp8 = @$_FILES['image8']['tmp_name'];
		$file_type8 = @$_FILES['image8']['type'];

		$file_name9 = @$_FILES['image9']['name'];
		$file_size9 = @$_FILES['image9']['size'];
		$file_tmp9 = @$_FILES['image9']['tmp_name'];
		$file_type9 = @$_FILES['image9']['type'];

		$file_name10 = @$_FILES['image10']['name'];
		$file_size10 = @$_FILES['image10']['size'];
		$file_tmp10 = @$_FILES['image10']['tmp_name'];
		$file_type10 = @$_FILES['image10']['type'];

		$file_name11 = @$_FILES['image11']['name'];
		$file_size11 = @$_FILES['image11']['size'];
		$file_tmp11 = @$_FILES['image11']['tmp_name'];
		$file_type11 = @$_FILES['image11']['type'];

		$file_name12 = @$_FILES['image12']['name'];
		$file_size12 = @$_FILES['image12']['size'];
		$file_tmp12 = @$_FILES['image12']['tmp_name'];
		$file_type12 = @$_FILES['image12']['type'];

		$file_name13 = @$_FILES['image13']['name'];
		$file_size13 = @$_FILES['image13']['size'];
		$file_tmp13 = @$_FILES['image13']['tmp_name'];
		$file_type13 = @$_FILES['image13']['type'];

		$file_name14 = @$_FILES['image14']['name'];
		$file_size14 = @$_FILES['image14']['size'];
		$file_tmp14 = @$_FILES['image14']['tmp_name'];
		$file_type14 = @$_FILES['image14']['type'];

		$file_name15 = @$_FILES['image15']['name'];
		$file_size15 = @$_FILES['image15']['size'];
		$file_tmp15 = @$_FILES['image15']['tmp_name'];
		$file_type15 = @$_FILES['image15']['type'];

		if($file_size1 > 2097152 || $file_size2 > 2097152 || $file_size3 > 2097152 || $file_size4 > 2097152 || $file_size5 > 2097152 || $file_size6 > 2097152 || $file_size7 > 2097152 || $file_size8 > 2097152 || $file_size9 > 2097152 || $file_size10 > 2097152 || $file_size11 > 2097152 || $file_size12 > 2097152 || $file_size13 > 2097152 || $file_size14 > 2097152 || $file_size15 > 2097152){
			$errors[]='File size must be excertly 2 MB';
			$this->goto_notify(1, "Image size must not exceed 2 MB.");
		}

		if(empty($errors)==true){
			if ( !is_dir( "assets/upload/".$last_id ) ) {
				mkdir("assets/upload/".$last_id);
				move_uploaded_file($file_tmp1,"assets/upload/$last_id/".$last_id."-".$file_name1);
				move_uploaded_file($file_tmp2,"assets/upload/$last_id/".$last_id."-".$file_name2);
				move_uploaded_file($file_tmp3,"assets/upload/$last_id/".$last_id."-".$file_name3);
				move_uploaded_file($file_tmp4,"assets/upload/$last_id/".$last_id."-".$file_name4);
				move_uploaded_file($file_tmp5,"assets/upload/$last_id/".$last_id."-".$file_name5);
				move_uploaded_file($file_tmp6,"assets/upload/$last_id/".$last_id."-".$file_name6);
				move_uploaded_file($file_tmp7,"assets/upload/$last_id/".$last_id."-".$file_name7);
				move_uploaded_file($file_tmp8,"assets/upload/$last_id/".$last_id."-".$file_name8);
				move_uploaded_file($file_tmp9,"assets/upload/$last_id/".$last_id."-".$file_name9);
				move_uploaded_file($file_tmp10,"assets/upload/$last_id/".$last_id."-".$file_name10);
				move_uploaded_file($file_tmp11,"assets/upload/$last_id/".$last_id."-".$file_name11);
				move_uploaded_file($file_tmp12,"assets/upload/$last_id/".$last_id."-".$file_name12);
				move_uploaded_file($file_tmp13,"assets/upload/$last_id/".$last_id."-".$file_name13);
				move_uploaded_file($file_tmp14,"assets/upload/$last_id/".$last_id."-".$file_name14);
				move_uploaded_file($file_tmp15,"assets/upload/$last_id/".$last_id."-".$file_name15);
			} else {
				move_uploaded_file($file_tmp1,"assets/upload/$last_id/".$last_id."-".$file_name1);
				move_uploaded_file($file_tmp2,"assets/upload/$last_id/".$last_id."-".$file_name2);
				move_uploaded_file($file_tmp3,"assets/upload/$last_id/".$last_id."-".$file_name3);
				move_uploaded_file($file_tmp4,"assets/upload/$last_id/".$last_id."-".$file_name4);
				move_uploaded_file($file_tmp5,"assets/upload/$last_id/".$last_id."-".$file_name5);
				move_uploaded_file($file_tmp6,"assets/upload/$last_id/".$last_id."-".$file_name6);
				move_uploaded_file($file_tmp7,"assets/upload/$last_id/".$last_id."-".$file_name7);
				move_uploaded_file($file_tmp8,"assets/upload/$last_id/".$last_id."-".$file_name8);
				move_uploaded_file($file_tmp9,"assets/upload/$last_id/".$last_id."-".$file_name9);
				move_uploaded_file($file_tmp10,"assets/upload/$last_id/".$last_id."-".$file_name10);
				move_uploaded_file($file_tmp11,"assets/upload/$last_id/".$last_id."-".$file_name11);
				move_uploaded_file($file_tmp12,"assets/upload/$last_id/".$last_id."-".$file_name12);
				move_uploaded_file($file_tmp13,"assets/upload/$last_id/".$last_id."-".$file_name13);
				move_uploaded_file($file_tmp14,"assets/upload/$last_id/".$last_id."-".$file_name14);
				move_uploaded_file($file_tmp15,"assets/upload/$last_id/".$last_id."-".$file_name15);
			}

		}else{
			$this->goto_notify(1, "Error uploading image files, make sure they correspond to the rules.");
		}

		$file_name1  = $last_id."-".$file_name1;
		$file_name2  = $last_id."-".$file_name2;
		$file_name3  = $last_id."-".$file_name3;
		$file_name4  = $last_id."-".$file_name4;
		$file_name5  = $last_id."-".$file_name5;
		$file_name6  = $last_id."-".$file_name6;
		$file_name7  = $last_id."-".$file_name7;
		$file_name8  = $last_id."-".$file_name8;
		$file_name9  = $last_id."-".$file_name9;
		$file_name10  = $last_id."-".$file_name10;
		$file_name11 = $last_id."-".$file_name11;
		$file_name12  = $last_id."-".$file_name12;
		$file_name13  = $last_id."-".$file_name13;
		$file_name14  = $last_id."-".$file_name14;
		$file_name15  = $last_id."-".$file_name15;
		
		$title	= isset($_POST['prop_title'])?$this->wordify($_POST['prop_title'],1):"";
		$prop_desc	= isset($_POST['prop_description'])?$this->wordify($_POST['prop_description'],1):"";
		$type = isset($_POST['prop_type'])?$this->wordify($_POST['prop_type'],1):"";
		$status	= isset($_POST['prop_status'])?$this->wordify($_POST['prop_status']):"";
		$bedrooms	= isset($_POST['bedrooms'])?(int)$_POST['bedrooms']:"0";
		$bathrooms  = isset($_POST['bathrooms'])?(int)$_POST['bathrooms']:"0";
		$floors  = isset($_POST['floors'])?(int)$_POST['floors']:"0";
		$garage  = isset($_POST['garage'])?$this->wordify($_POST['garage'],1):"";
		$prop_size  = isset($_POST['prop_size'])?(int)$_POST['prop_size']:"0";
		$prop_price  = isset($_POST['prop_price'])?$this->wordify($_POST['prop_price'],1):"";
		$prop_price = str_replace( ",", "", $prop_price);
		$period  = isset($_POST['period'])?$this->wordify($_POST['period'],1):"";
		$video_url  = isset($_POST['video-URL'])?$this->wordify($_POST['video-URL'],1):"";
		
		$description = nl2br($prop_desc);
		
		$feature1  = isset($_POST['cooler'])?$this->wordify($_POST['cooler'],1):"";
		$feature2  = isset($_POST['balcony'])?$this->wordify($_POST['balcony'],1):"";
		$feature3  = isset($_POST['pet'])?$this->wordify($_POST['pet'],1):"";
		$feature4  = isset($_POST['fire_alarm'])?$this->wordify($_POST['fire_alarm'],1):"";
		$feature5  = isset($_POST['storage'])?$this->wordify($_POST['storage'],1):"";
		$feature6  = isset($_POST['dryer'])?$this->wordify($_POST['dryer'],1):"";
		$feature7  = isset($_POST['heating'])?$this->wordify($_POST['heating'],1):"";
		$feature8  = isset($_POST['pool'])?$this->wordify($_POST['pool'],1):"";
		$feature9  = isset($_POST['laundry'])?$this->wordify($_POST['laundry'],1):"";
		$feature10  = isset($_POST['sauna'])?$this->wordify($_POST['sauna'],1):"";
		$feature11 = isset($_POST['gym'])?$this->wordify($_POST['gym'],1):"";
		$feature12  = isset($_POST['elevator'])?$this->wordify($_POST['elevator'],1):"";
		$feature13  = isset($_POST['dish_washer'])?$this->wordify($_POST['dish_washer'],1):"";
		$feature14  = isset($_POST['emergency_exit'])?$this->wordify($_POST['emergency_exit'],1):"";
		
		$features = $feature1.",".$feature2.",".$feature3.",".$feature4.",".$feature5.",".$feature6.",".$feature7.",".$feature8.",".$feature9.",".$feature10.",".$feature11.",".$feature12.",".$feature13.",".$feature14;
		
		//$files = isset($_POST['files'])?$this->wordify($_POST['files'],1):"";
		$address  = isset($_POST['address'])?$this->wordify($_POST['address'],1):"";
		$city  = isset($_POST['region'])?$this->wordify($_POST['region'],1):"";
		$state  = isset($_POST['state'])?$this->wordify($_POST['state'],1):"";
		$Postal_code  = isset($_POST['Postal_code'])?$this->wordify($_POST['Postal_code'],1):"";
		
		$name  = isset($_POST['name'])?$this->wordify($_POST['name'],1):"";
		$phone  = isset($_POST['phone'])?$this->wordify($_POST['phone'],1):"";
		$email  = isset($_POST['email'])?$this->wordify($_POST['email'],1):"";
		$website  = isset($_POST['website'])?$this->wordify($_POST['website'],1):"";
		
		$agent_email  = isset($_POST['email'])?$this->wordify($_POST['email'],1):$user_email;
		
		$featured = 0;
		$approved = "no";
		$offered = 0;

		//$posturl = $this->base(0)."/$last_id/$slug";
		
		$queryer = "INSERT INTO property_info(prop_id,user_id,user_email,title,description,type,status,bedrooms,bathrooms,floors,garages,size,price,video_url,features,address,region,state,postal_code,featured,offered,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,img11,img12,img13,img14,img15,approved) values(:prop_id,:user_id,:user_email,:title,:description,:type,:status,:bedrooms,:bathrooms,:floors,:garages,:size,:price,:video_url,:features,:address,:region,:state,:postal_code,:featured,:offered,:img1,:img2,:img3,:img4,:img5,:img6,:img7,:img8,:img9,:img10,:img11,:img12,:img13,:img14,:img15,:approved)";
		if($stmt = $pdo->prepare($queryer)){
			$stmt->bindParam(':prop_id', $last_id, PDO::PARAM_STR);  
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);  
            $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);  
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);  
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);  
            $stmt->bindParam(':type', $type, PDO::PARAM_STR);  
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);  
            $stmt->bindParam(':bedrooms', $bedrooms, PDO::PARAM_STR);   
            $stmt->bindParam(':bathrooms', $bathrooms, PDO::PARAM_STR);  
            $stmt->bindParam(':floors', $floors, PDO::PARAM_STR);  
            $stmt->bindParam(':garages', $garage, PDO::PARAM_STR);  
            $stmt->bindParam(':size', $prop_size, PDO::PARAM_STR);  
            $stmt->bindParam(':price', $prop_price, PDO::PARAM_STR); 
            $stmt->bindParam(':period', $period, PDO::PARAM_STR);
            $stmt->bindParam(':video_url', $video_url, PDO::PARAM_STR);  
            $stmt->bindParam(':features', $features, PDO::PARAM_STR);  
            $stmt->bindParam(':address', $address, PDO::PARAM_STR);  
            $stmt->bindParam(':region', $city, PDO::PARAM_STR);  
            $stmt->bindParam(':state', $state, PDO::PARAM_STR);  
            $stmt->bindParam(':postal_code', $Postal_code, PDO::PARAM_STR);  
            $stmt->bindParam(':featured', $featured, PDO::PARAM_STR);  
			$stmt->bindParam(':offered', $offered, PDO::PARAM_STR); 
			$stmt->bindParam(':img1', $file_name1, PDO::PARAM_STR);
			$stmt->bindParam(':img2', $file_name2, PDO::PARAM_STR);
			$stmt->bindParam(':img3', $file_name3, PDO::PARAM_STR);
			$stmt->bindParam(':img4', $file_name4, PDO::PARAM_STR);
			$stmt->bindParam(':img5', $file_name5, PDO::PARAM_STR);
			$stmt->bindParam(':img6', $file_name6, PDO::PARAM_STR);
			$stmt->bindParam(':img7', $file_name7, PDO::PARAM_STR);
			$stmt->bindParam(':img8', $file_name8, PDO::PARAM_STR);
			$stmt->bindParam(':img9', $file_name9, PDO::PARAM_STR);
			$stmt->bindParam(':img10', $file_name10, PDO::PARAM_STR);
			$stmt->bindParam(':img11', $file_name11, PDO::PARAM_STR);
			$stmt->bindParam(':img12', $file_name12, PDO::PARAM_STR);
			$stmt->bindParam(':img13', $file_name13, PDO::PARAM_STR);
			$stmt->bindParam(':img14', $file_name14, PDO::PARAM_STR);
			$stmt->bindParam(':img15', $file_name15, PDO::PARAM_STR);
            $stmt->bindParam(':approved', $approved, PDO::PARAM_STR);  
			if($stmt->execute()){
			    
			    $to = $user_email; 
    			$subject = "GoHomeNG";
    // 			$message = "Your property has been uploaded, Admin will activate it as soon as possible";
    			
    			
    			
    			
    			
    			
    			
    			
    			
    			$message = '<!doctype html>';
                $message .= '<html lang="en">';
                  $message .= '<head>';
                    $message .= '<!-- Required meta tags -->';
                    $message .= '<meta charset="utf-8">';
                    $message .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
                
                    $message .= '<title>Hello, world!</title>';
                    $message .= '<style type="text/css">';
                      $message .= '.contain{';
                        $message .= 'max-width: 80%;';
                        $message .= 'margin: auto;';
                        $message .= 'color: white;';
                      $message .= '}';
                    $message .= '</style>';
                  $message .= '</head>';
                  $message .= '<div style="background-color: rgba(220,220,220, );">';
                    $message .= '<div class="contain">';
                      $message .= '<div class="" style="background: #90EE90; padding: 40px 0px ">';
                        $message .= '<img style="display: block; margin: auto;" src="https://www.gohome.ng/assets/images/logo/logo-lights.png">';
                      $message .= '</div>';
                      $message .= '<div style="color: black; padding: 30px 0px;">';
                        $message .= '<div class="" style="text-align: center;">';
                          $message .= '<h2 style="text-align: center;">confirmation Message</h2>';
                          $message .= '<p>Your property has been uploaded, Admin will activate it as soon as possible</p>';
                          $message .= '<br>';
                        $message .= '</div>';
                      $message .= '</div>';
                
                      $message .= '<div style="text-align: center; background-color: black; padding: 20px">';
                        $message .= '<img src="https://www.gohome.ng/assets/images/logo/logo-lights.png" width="70px">';
                        $message .= '<p>30 UST Road, Port Harcourt, Rivers State 10005.</p>';
                        $message .= '<p>+2349084950302</p>';
                        $message .= '<p>contact@gohome.ng</p>';
                      $message .= '</div>';
                      
                      
                    $message .= '</div>';
                  $message .= '</div>';
                  $message .= '</body>';
                $message .= '</html>';
			
			
    			$headers  = "MIME-Version: 1.0\r\n";
    			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    			$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
    			$headers .= "Reply-To: info@gohome.ng\r\n";
    			mail($to, $subject, $message, $headers);
    			
    			//$this->dugoye($this->user_id, "Added a new Property  - $title");
    			$this->dugoye($this->user_id, "A New Property Has Been Added.");
                $this->set_server_msg("New Property Added!",1);
    			$this->goto_notify("add-property.php");	
    			$stmt->close();
    			//$stmt->$this = null;
    			//$this->set_server_msg("Property Successfully Added!",1);
    			//$this->goto_notify("add-property");
			
			}
		}else{
			/* Error */
			$this->dugoye($this->user_id,"Posting Failed for - $title","FAILED: $last_id, $user_id, $agent_email, $title, $description, $type, $status, $bedrooms, $bathrooms, $floors, $garage, $prop_size, $prop_price, $price, $video_url, $features, $address, $city, $state, $Postal_code, $featured, $file_name1, $file_name2, $file_name3, $file_name4, $file_name5, $file_name6, $file_name7, $file_name8, $file_name9, $file_name10, $file_name11, $file_name12, $file_name13, $file_name14, $file_name15. Reason: ".$this->connection->error);	
			return $this->just_notify("Error, Unable to Add Post, please retry later",2);
		}
		
		if(!empty($name)){
			if($stmt = $this->connection->prepare("INSERT INTO guest_agents(name, phone, email, website) values(?,?,?,?)")){
				$stmt->bind_param('ssss',$name, $phone, $email, $website);
				if($stmt->execute()){
				$stmt->close();
				$this->dugoye($this->user_id, "Added a new guest  - $name");	
				$this->set_server_msg("Property Successfully Added!",1);
				$this->goto_notify("add-property");
				}
			}else{
				/* Error */
				$this->dugoye($this->user_id,"Posting Failed for - $name","FAILED: $name, $phone, $email, $website. Reason: ".$this->connection->error);	
				return $this->just_notify("Error, Unable to Add Post, please retry later",2);
			}
		}
		
	}
	
	public function update_property($user_email, $desc){
		$postid	= isset($_POST['postid'])?(int)$_POST['postid']:0;
		$title	= isset($_POST['prop_title'])?$this->wordify($_POST['prop_title'],1):"";
		//$this->test_here($desc,1);
		$prop_desc  = isset($_POST['prop_description'])?$this->wordify($_POST['prop_description'],1):$desc;
		$type = isset($_POST['prop_type'])?$this->wordify($_POST['prop_type'],1):"";
		$status	= isset($_POST['prop_status'])?$this->wordify($_POST['prop_status']):"";
		$bedrooms	= isset($_POST['bedrooms'])?(int)$_POST['bedrooms']:"0";
		$bathrooms  = isset($_POST['bathrooms'])?(int)$_POST['bathrooms']:"0";
		$floors  = isset($_POST['floors'])?(int)$_POST['floors']:"0";
		$garage  = isset($_POST['garage'])?$this->wordify($_POST['garage'],1):"";
		$prop_size  = isset($_POST['prop_size'])?(int)$_POST['prop_size']:"0";
		$prop_price  = isset($_POST['prop_price'])?$this->wordify($_POST['prop_price'],1):"";
		$prop_price = str_replace( ",", "", $prop_price);
		$period  = isset($_POST['period'])?$this->wordify($_POST['period'],1):"";
		$video_url  = isset($_POST['video-URL'])?$this->wordify($_POST['video-URL'],1):"";
				
		$feature1  = isset($_POST['cooler'])?$this->wordify($_POST['cooler'],1):"";
		$feature2  = isset($_POST['balcony'])?$this->wordify($_POST['balcony'],1):"";
		$feature3  = isset($_POST['pet'])?$this->wordify($_POST['pet'],1):"";
		$feature4  = isset($_POST['fire_alarm'])?$this->wordify($_POST['fire_alarm'],1):"";
		$feature5  = isset($_POST['storage'])?$this->wordify($_POST['storage'],1):"";
		$feature6  = isset($_POST['dryer'])?$this->wordify($_POST['dryer'],1):"";
		$feature7  = isset($_POST['heating'])?$this->wordify($_POST['heating'],1):"";
		$feature8  = isset($_POST['pool'])?$this->wordify($_POST['pool'],1):"";
		$feature9  = isset($_POST['laundry'])?$this->wordify($_POST['laundry'],1):"";
		$feature10  = isset($_POST['sauna'])?$this->wordify($_POST['sauna'],1):"";
		$feature11 = isset($_POST['gym'])?$this->wordify($_POST['gym'],1):"";
		$feature12  = isset($_POST['elevator'])?$this->wordify($_POST['elevator'],1):"";
		$feature13  = isset($_POST['dish_washer'])?$this->wordify($_POST['dish_washer'],1):"";
		$feature14  = isset($_POST['emergency_exit'])?$this->wordify($_POST['emergency_exit'],1):"";
		
		$features = $feature1.",".$feature2.",".$feature3.",".$feature4.",".$feature5.",".$feature6.",".$feature7.",".$feature8.",".$feature9.",".$feature10.",".$feature11.",".$feature12.",".$feature13.",".$feature14;
		
		$address  = isset($_POST['address'])?$this->wordify($_POST['address'],1):"";
		$city  = isset($_POST['region'])?$this->wordify($_POST['region'],1):"";
		$state  = isset($_POST['state'])?$this->wordify($_POST['state'],1):"";
		$Postal_code  = isset($_POST['Postal_code'])?$this->wordify($_POST['Postal_code'],1):"";
		
		//$name  = isset($_POST['name'])?$this->wordify($_POST['name'],1):"";
		//$phone  = isset($_POST['phone'])?$this->wordify($_POST['phone'],1):"";
		//$email  = isset($_POST['email'])?$this->wordify($_POST['email'],1):"";
		//$website  = isset($_POST['website'])?$this->wordify($_POST['website'],1):"";
		
		//$agent_email  = isset($_POST['email'])?$this->wordify($_POST['email'],1):$user_email;
		
		$last_id = (int)$this->generate_token("property_info","prop_id",10000);
					
		$featured = 0;
		$approved = "no";
		
		$description = nl2br($prop_desc);

		$sql = "UPDATE property_info SET title=?, description=?, type=?, status=?, bedrooms=?, bathrooms=?, floors=?, garages=?, size=?, price=?, period=?, video_url=?, features=?, address=?, region=?,
		state=?, postal_code=?, featured=?, approved=? WHERE prop_id=?";
		if($result = $this->connection->prepare($sql)){
		$result->bind_param('ssssiiisissssssssisi', $title, $description, $type, $status, $bedrooms, $bathrooms, $floors, $garage, $prop_size, $prop_price, $period, $video_url, $features, $address, $city, $state, $Postal_code, $featured, $approved, $postid);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$this->dugoye($this->user_id, "Property Updated Successful- $title");
		$this->set_server_msg("Property Successfully Updated!",1);
		$this->goto_notify("edit-property?prop=$postid");
		}else{
		$this->dugoye($this->user_id, "Error, Post Update Failed- $title","Reason: ".$this->connection->error);
		$this->set_server_msg("Error Updating Post, Please Check The Log and Try Again",2);
		}
		
	}

	public function post_properties_all(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		// $sql = "SELECT * FROM property_info WHERE approved='yes' ORDER BY id DESC LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE approved='yes' ORDER BY id DESC LIMIT $start_from, $num_per_page";
		// $sql = "SELECT * FROM property_info WHERE approved='yes' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		//$num = $result->num_rows;
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $row['price'];
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){ echo " <section class='emptycategory'>
					No Properties Added Yet. </section";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			echo "<div class='col-xs-12 col-sm-12 col-md-4'>
						<div class='property-item'>
							<div class='property--img'>
								<a href='#'>
									<img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
									<div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
										<img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
									</div>
								</a>
								<span class='property--status'>For {$status[$i]}</span>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
									<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
									<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
								</div>
								<div class='property--features'>
									<ul class='list-unstyled mb-0'>
										<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
										<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
										<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
									</ul>
								</div>
								<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
							</div>
						</div>
					</div>";
		}
		
		$sql = "SELECT * FROM property_info WHERE approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list?page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}
	
	public function post_properties($ptype){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		// $sql = "SELECT * FROM property_info WHERE type='$ptype' AND approved='yes' LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE type='$ptype' AND approved='yes' LIMIT $start_from, $num_per_page";
		//$sql = "SELECT * FROM property_info WHERE approved='yes' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		//$num = $result->num_rows;
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){ echo " <section class='emptycategory'>
					No Properties Added Yet. </section";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			echo "<div class='col-xs-12 col-sm-12 col-md-4'>
							<div class='property-item'>
								<div class='property--img'>
									<a href='#'>
										<img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
										<div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
											<img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
										</div>
									</a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
										<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
										<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
									</div>
									<div class='property--features'>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
									</div>
									<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
								</div>
							</div>
						</div>";
		}
		
		$sql = "SELECT * FROM property_info WHERE approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list.php?page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}

	public function post_properties_search(){
		$base = $this->base(0);
        $select_state = $_GET['select-state'];
		$selected_region = $_GET['select-lga']; 
		$selected_type = $_GET['type']; 
		$selected_status = $_GET['select-status']; 
		$selected_beds = $_GET['select-beds']; 
		$selected_baths = $_GET['select-baths']; 
		$minAmt = (int)$_GET['min'];
		$maxAmt = (int)$_GET['max'];

		$selectedstate = htmlspecialchars($select_state);
        $selectedregion = htmlspecialchars($selected_region);
		$selectedtype = htmlspecialchars($selected_type);
		$selectedstatus = htmlspecialchars($selected_status);
		$selectedbeds = htmlspecialchars($selected_beds);
		$selectedbaths = htmlspecialchars($selected_baths);
		
        $selectedstate = $this->wordify($selectedstate);
		$selectedregion = $this->wordify($selectedregion);
		$selectedtype = $this->wordify($selectedtype);
		$selectedstatus = $this->wordify($selectedstatus);
		$selectedbeds = $this->wordify($selectedbeds);
		$selectedbaths = $this->wordify($selectedbaths);
		
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		
		// $sql = "SELECT * FROM property_info WHERE state LIKE '%".$selectedstate."%' AND region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE state LIKE '%".$selectedstate."%' AND region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt LIMIT $start_from, $num_per_page";

		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo "<h4>No Property Match Your Search.</h4>";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-12 col-md-4'>
							<div class='property-item'>
								<div class='property--img'>
									<a href='#'>
										<img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
										<div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
											<img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
										</div>
									</a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
										<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
										<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
									</div>
									<div class='property--features'>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
									</div>
									<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
								</div>
							</div>
						</div>";
			}
			$sql = "SELECT * FROM property_info WHERE region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt";
			if(!$result2 = $this->connection->query($sql))
			{
				$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
				return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
			}
			$num = $result2->num_rows;
				
			$totalpages = ceil($num/$num_per_page);
			$i=$page;
				//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
				$i--;
			echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
			if($i>=1){
				echo "<li><a href='search-result.php?select-state=$selectedstate&select-lga=$selectedregion&select-type=$selectedtype&select-status=$selectedstatus&select-beds=$selectedbeds&select-baths=$selectedbaths&min=$minAmt&max=$maxAmt&submit=Search&page=$i' aria-label='Prev'>
						<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
							</a>
					</li>";
			}
			$i=$page;
			if($i==$totalpages){
				echo "";
			}else{
				$i++;
				echo "<li><a href='search-result.php?select-state=$selectedstate&select-lga=$selectedregion&select-type=$selectedtype&select-status=$selectedstatus&select-beds=$selectedbeds&select-baths=$selectedbaths&min=$minAmt&max=$maxAmt&submit=Search&page=".$i."' aria-label='Next'>
					<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
					</a></li>";
			}
			/**for($i=1;$i<=$totalpages;$i++){
				echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			}**/
			echo "</ul></div>";
	}
	
    public function post_properties_dash(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		$sql = "SELECT * FROM property_info WHERE approved='yes' LIMIT 3";
//		$sql = "SELECT * FROM property_info WHERE approved='yes' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		//$num = $result->num_rows;
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){ echo " <section class='emptycategory'>
					No Properties Added Yet. </section";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			echo "<div class='col-xs-12 col-sm-12 col-md-12'>
						<div class='property-item'>
							<div class='property--img'>
								<a href='#'>
					<img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
					</a>
								<span class='property--status'>For {$status[$i]}</span>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
									<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
									<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
								</div>
								<div class='property--features'>
									<ul class='list-unstyled mb-0'>
										<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
										<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
										<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>";
		}
		
		$sql = "SELECT * FROM property_info WHERE approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list.php?page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}
	
    
	public function post_properties_by_city($location){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		// $sql = "SELECT * FROM property_info WHERE state='$location' AND approved='yes' LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE state='$location' AND approved='yes' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo "<h4>No Property For This Category</h4>";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-12 col-md-4'>
							<div class='property-item'>
								<div class='property--img'>
									<a href='#'>
                                        <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                        <div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
                                            <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                        </div>
                                    </a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
										<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
										<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
									</div>
									<div class='property--features'>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
									</div>
									<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
								</div>
							</div>
						</div>";
			}
		$sql = "SELECT * FROM property_info WHERE state='$location' AND approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?city=$location&page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list.php?city=$location&page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}
	
	public function post_properties_by_type($ptype){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
		// $sql = "SELECT * FROM property_info WHERE type='$ptype' AND approved='yes' LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE type='$ptype' AND approved='yes' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo "<h4>No Property For This Category</h4>";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-12 col-md-12'>
							<div class='property-item'>
								<div class='property--img'>
									<a href='#'>
                                        <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                        <div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
                                            <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                        </div>
                                    </a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
										<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
										<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
									</div>
									<div class='property--features'>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
									</div>
									<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
								</div>
							</div>
						</div>";
			}
		$sql = "SELECT * FROM property_info WHERE type='$ptype' AND approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?type=$ptype&page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list.php?type=$ptype&page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}
	
	public function post_properties_by_status($pstatus){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 20;
		$start_from = ($page-1)*20;
				$sql = "SELECT * FROM property_info WHERE status='$pstatus' AND approved='yes' LIMIT $start_from, $num_per_page";
		// $sql = "SELECT * FROM property_info WHERE status='$pstatus' AND approved='yes' LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo "<h4>No Property For This Category</h4>";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-12 col-md-4'>
					<div class='property-item'>
							<div class='property--img'>
								<a href='#'>
                                <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                <div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
                                    <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                </div>
                                <span style='position:relative; right: 5px; top: -220px; float:right; margin-bottom: -30px; background-color: #FFFFFF; padding: 5px; border-radius: 5px;'>
                                    <p class='property--price'>₦{$price[$i]}{$issue_type}</p>
                                </span>
                                <span class='property--status'>{$status[$i]}</span></a>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]} &nbsp;<br/><span>For {$status[$i]}</span></a></h5>
									<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
								</div>
								<div class='property--features'>
									<ul class='list-unstyled mb-0'>
										<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
										<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
										<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} plots</span></li>
									</ul>
								</div>
								<div class='row col-lg-12 text-center'>
									<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
									<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
									<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
								</div>
							</div>
						</div>
					</div>";
			}
		$sql = "SELECT * FROM property_info WHERE status='$pstatus' AND approved='yes'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
		if($i>=1){
			echo "<li><a href='properties-list.php?status=$pstatus&page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li><a href='properties-list.php?status=$pstatus&page=".$i."' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
			
	}
	
	public function count_properties_by_type(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$prop_type = array('house', 'office', 'store', 'land');
		
		foreach($prop_type as $type){
			$sql = "SELECT * FROM property_info WHERE type='$type' AND approved='yes'";
			if(!$result = $this->connection->query($sql))
			{
				$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
				return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
			}
			//$id = array();
			$num = $result->num_rows;
			
			echo "<li><a href='properties-list.php?type=$type'>{$type}s <span>({$num})</span></a></li>";
		}
	}
	
	public function count_properties_by_status(){
		$base = $this->base(0);
		
		$prop_status = array('rent', 'sale');
		
		foreach($prop_status as $status){
			$sql = "SELECT * FROM property_info WHERE status='$status' AND approved='yes'";
			if(!$result = $this->connection->query($sql))
			{
				$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
				return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
			}
			//$id = array();
			$num = $result->num_rows;
			
			echo "<li><a href='properties-list.php?status=$status'>For {$status} <span>({$num})</span></a></li>";
		}
	}
	
	public function count_properties_by_city(){
		
		$base = $this->base(0);
		
		$sql = "SELECT DISTINCT state FROM property_info WHERE approved='yes' ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$prop_city[] = $this->printify($row['state'],1);	
		}
		sort($prop_city);		
		foreach($prop_city as $state){
			$sql = "SELECT * FROM property_info WHERE state='$state' AND approved='yes'";
			if(!$result = $this->connection->query($sql))
			{
				$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
				return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
			}
			//$id = array();
			$num = $result->num_rows;
			
			echo "<li><a href='properties-list.php?city=$state'>{$state} <span>({$num})</span></a></li>";
		}
	}
	
	public function count_city_properties($city){
	
		$base = $this->base(0);
		$sql = "SELECT * FROM property_info WHERE state = '$city' AND approved='yes'";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		return $result->num_rows;
	}
	
	public function post_offered_properties(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE featured=1 AND offered=1 AND approved='yes' ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Featured Properties for rent","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Featured Properties for rent".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			//$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		$j = 0;
		if($c<=0){
			echo " <section class='emptycategory'>
					No Featured Property for Rent.
					</section";
			return;
			}
			
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
			    $title[$i] = strtolower($title[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-4 col-md-4'>
					    <div class='property-item'>
							<div class='property--img'>
								<a href='#'>
                                <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                <div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
                                    <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                </div>
                                <span style='position:relative; right: 5px; top: -220px; float:right; margin-bottom: -30px; background-color: #FFFFFF; padding: 5px; border-radius: 5px;'>
                                    <p class='property--price'>₦{$price[$i]}{$issue_type}</p>
                                </span>
                                <span class='property--status'>{$status[$i]}</span></a>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
									<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
									
								</div>
								<div class='property--features'>
									<ul class='list-unstyled mb-0'>
										<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
										<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
										<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>";
				$j++;
				if($j == 3){
				    echo "</div><div class='row'>";
				    $j=0;
				}
			}
	}
    
	public function post_offered_properties_dash(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE featured=1 AND offered=1 AND approved='yes' ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Featured Properties for rent","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Featured Properties for rent".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			//$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Featured Property for Rent.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "
					<div class='property-item' style='height: 400px;'>
							<div class='property--img'>
								<a href='#'>
                                <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' style='width: 100% !important; height: 250px !important;' class='img-responsive'>
                                <span style='position:relative; right: 5px; top: -240px; float:right; margin-bottom: -30px; background-color: #FFFFFF; padding: 5px; border-radius: 5px;'>
                                    <p class='property--price'>₦{$price[$i]}{$issue_type}</p>
                                </span>
                                <div style='position:absolute; right: 0px; bottom: 10px;'>
                                    <img src='assets/images/logo/logo-light.png'  style='width: 120px !important; height: auto !important;'>
                                </div>
                                <span class='property--status'>{$status[$i]}</span></a>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]} &nbsp;<br/><span>For {$status[$i]}</span></a></h5>
									<p class='property--location' style='height: 14px; overflow: hidden;'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
								</div>
                                <div class='property--features text-center'>
									<a href='property-details.php?prop={$prop_id[$i]}' class='btn btn--primary--dark'>View Details</a>
								</div>
							</div>
						</div>";
			}
	}
	
	public function post_featured_properties_rent(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE featured=1 AND status ='Rent' AND approved='yes' ORDER BY RAND() DESC LIMIT 4";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Featured Properties for rent","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Featured Properties for rent".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			//$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Featured Property for Rent.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				if(isset($_SESSION['role']) && $_SESSION['role'] == "Hotel"):
					$bb = '<a href="property-details.php?prop='.$prop_id[$i].'" class="pull-right" style="margin-right: 20px;">::View::</a>';
				else:
					$bb = '<a href="property-details.php?prop='.$prop_id[$i].'" class="pull-right" style="margin-right: 20px;">::View::</a>';
				endif;
				echo '<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="property-city-item">
					<div class="property--city-img">
						<a href="room-details.php?room_id='.$prop_id[$i].'">
							<img src="assets/upload/'.$prop_id[$i].'/'.$cover_img[$i].'" alt="city"
								class="img-responsive">
							<div class="property--city-overlay">
							<span class="badge badge-danger">'.$status[$i].'</span></a>
								<div class="property--item-content text-left"
									style="padding-left: 15px; bottom: 20px !important;">
									<div class="row">
									<div class="col-lg-12">
										<h5 class="property--title">
											'.substr($title[$i],0,25).'...
											</h5>
											<p class="property--numbers" style="font-weight: 400px !important; font-size: 12px; color: #ccc;">
												'.$city[$i].', '.$state[$i].'
											</p>
									</div>
									<div class="col-lg-4" style="padding: 10px;">
											<span style="padding-top: 15px !important; font-weight: 600; color: #279d34;">N'.$price[$i].'</span>
									</div>
									<div class="col-lg-8 p-2 text-right">
										<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn1" >Contact</a>
										<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn2" >Message</a>
										<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn3" >View Details</a>
									</div>
									</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>';
			}
	}


    public function all_random_properties(){
        $base = $this->base(0);
        //$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
        //$catid = (int)$this->get_this_data("id","categories","title",'blog');
        $sql = "SELECT * FROM property_info WHERE approved='yes' ORDER BY RAND() DESC LIMIT 3";
        if(!$result = $this->connection->query($sql))
        {
            $this->dugoye("100100","Unable to Load Featured Properties for rent","Reason: ".$this->connection->error);
            return $this->just_notify("Unable to Load Featured Properties for rent".$this->connection->error,2);
        }
        $id = array();
        while($row = $result->fetch_assoc()){
            $id[] = $pid = (int)$row['id'];
            $prop_id[] = (int)$row['prop_id'];
            $title[]	= $this->printify($row['title'],1);
            $address[] = $this->printify($row['address'],1);
            $city[] = $this->printify($row['region'],1);
            $state[] = $this->printify($row['state'],1);
            $postal[] = $this->printify($row['postal_code'],1);
            $status[] = $this->printify($row['status'],1);
            $type[] = $this->printify($row['type'],1);
            $price[] = $this->printify($row['price'],1);
            $period[] = $this->printify($row['period'],1);
            $bedrooms[] = $this->printify($row['bedrooms'],1);
            $bathrooms[] = $this->printify($row['bathrooms'],1);
            $size[] = $this->printify($row['size'],1);
            $cover_img[] = $this->printify($row['img1'],1);
            //$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
        }
        $c = count($id);
        if($c<=0){
            echo " <section class='emptycategory'>
					No Featured Property for Rent.
					</section";
            return;
        }
        for($i=0;$i<$c;$i++){
            $price[$i] = number_format($price[$i]);
            if($period[$i] != null){
                $issue_type = "<span class='time'>$period[$i]</span>";
            }else{
                $issue_type = "";
            }
            echo "<div class='properties properties-list'>
                        <div class='col-xs-12 col-sm-12 col-md-12' style='height: 200px; padding: 0px !important;'>
							<div class='property-item' style='background-color: #000 !important;'>
								<div class='property--img'>
									<a href='#'>
                                        <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                    </a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title text-white'><a href='#' style='color: #fff;'>".substr(str_pad($title[$i],4),0,25)."</a></h5>
										<p class='property--price text-white-50'>₦{$price[$i]}{$issue_type}</p>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
										<button class='btn--primary--small'>View Details</button>
									</div>
								</div>
							</div>
                        </div>
                    </div>";
        }
    }
	
	public function post_similar_properties($proptype, $pid){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE type='$proptype' AND approved='yes' ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Featured Properties for rent","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Featured Properties for rent".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			//$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'></section";
			return;
			}
			for($i=0;$i<$c;$i++){
				if($prop_id[$i] === $pid){
					continue;
				}
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='property-item'>
							<div class='property--img'>
								<a href='#'>
                                <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px; position: absolute;'>
                                    <img src='assets/images/logo/logo-light.png' width='30' height: 10px;>
                                </div>                                
                                <span style='position:relative; right: 5px; top: -220px; float:right; margin-bottom: -30px; background-color: #FFFFFF; padding: 5px; border-radius: 5px;'>
                                    <p class='property--price'>₦{$price[$i]}{$issue_type}</p>
                                </span>
                                <span class='property--status'>{$status[$i]}</span></a>
							</div>
							<div class='property--content'>
								<div class='property--info'>
									<h5 class='property--title'><a href='#'>{$title[$i]} &nbsp;<br/><span>For {$status[$i]}</span></a></h5>
									<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
								</div>
								<div class='property--features'>
									<ul class='list-unstyled mb-0'>
										<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
										<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
										<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
									</ul>
								</div>
							</div>
						</div>";
			}
	}
	
	public function post_featured_properties_sale(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE featured=1 AND status = 'Sale' AND approved='yes' ORDER BY RAND() DESC LIMIT 4";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Featured Properties for sale","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Featured Properties for sale".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			//$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Featured Property for Rent.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo '<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="property-city-item">
									<div class="property--city-img">
										<a href="room-details.php?room_id='.$prop_id[$i].'">
											<img src="assets/upload/'.$prop_id[$i].'/'.$cover_img[$i].'" alt="city"
												class="img-responsive">
											<div class="property--city-overlay">
											<span class="badge badge-danger">'.$status[$i].'</span></a>
												<div class="property--item-content text-left"
													style="padding-left: 15px; bottom: 20px !important;">
													<div class="row">
													<div class="col-lg-12">
													<h5 class="property--title">
															'.substr($title[$i],0,25).'...
															</h5>
															<p class="property--numbers" style="font-weight: 400px !important; font-size: 12px; color: #ccc;">
																'.$city[$i].', '.$state[$i].'
															</p>
															</div>
													<div class="col-lg-4" style="padding: 10px;">
															<span style="padding-top: 15px !important; font-weight: 600; color: #279d34;">N'.$price[$i].'</span>
													</div>
													<div class="col-lg-8 p-2 text-right">
														<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn1" >Contact</a>
														<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn2" >Message</a>
														<a href="property-details.php?prop='.$prop_id[$i].'" class="rounded-btn rounded-btn3" >View Details</a>
													</div>
													</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>';
			}
	}
	
	public function post_agents(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM agents ORDER BY id DESC LIMI 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$name[] = $this->printify($row['name'],1);	
			$phone[]	= $this->printify($row['phone'],1);	
			$email[] = $this->printify($row['email'],1);	
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Agents Has Joined Yet.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
				echo "<div class='col-xs-12 col-sm-4 col-md-4'>
                        <div class='agent agent-info'>
                            <div class='agent--info'>
                                <h5 class='agent--title'>{$name[$i]}</h5>
                                <h6 class='agent--position'>Agent</h6>
                            </div>
							<div class='agent--contact'>
								<ul class='list-unstyled'>
									<li><i class='fa fa-phone'></i>&nbsp;&nbsp;{$phone[$i]}</li>
									<li><i class='fa fa-envelope-o'></i>&nbsp;&nbsp;{$email[$i]}</li>
								</ul>
                            </div>
							<div class='agent--social-links'>
								<a href='#'><i class='fa fa-facebook'></i></a>
								<a href='#'><i class='fa fa-twitter'></i></a>
								<a href='#'><i class='fa fa-dribbble'></i></a>
								<a href='#'><i class='fa fa-linkedin'></i></a>
                            </div>
                        </div>
                    </div>";
			}
	}
	
	public function post_guest_agents(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM guest_agents ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$name[] = $this->printify($row['name'],1);	
			$phone[]	= $this->printify($row['phone'],1);	
			$email[] = $this->printify($row['email'],1);	
			$website[] = $this->printify($row['website'],1);			
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Agents Has Joined Yet.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
				echo "<div class='col-xs-12 col-sm-4 col-md-4'>
                        <div class='agent agent-info'>
                            <div class='agent--info'>
                                <h5 class='agent--title'>{$name[$i]}</h5>
                                <h6 class='agent--position'>Agent</h6>
                            </div>
							<div class='agent--contact'>
								<ul class='list-unstyled'>
									<li><i class='fa fa-phone'></i>&nbsp;&nbsp;{$phone[$i]}</li>
									<li><i class='fa fa-envelope-o'></i>&nbsp;&nbsp;{$email[$i]}</li>
									<li><i class='fa fa-link'></i>&nbsp;&nbsp;{$website[$i]}</li>
								</ul>
                            </div>
							<div class='agent--social-links'>
								<a href='#'><i class='fa fa-facebook'></i></a>
								<a href='#'><i class='fa fa-twitter'></i></a>
								<a href='#'><i class='fa fa-dribbble'></i></a>
								<a href='#'><i class='fa fa-linkedin'></i></a>
                            </div>
                        </div>
                    </div>";
			}
	}
	
	public function post_user_properties($user){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE approved='yes' AND user_email='$user' ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Properties Added Yet.
					</section";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			echo "<div class='property-item'>
					<div class='property--img'>
						<a href='#'>
                            <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>                            
                                <div style='position:relative; left: 0px; top: -40px; float:right; margin-bottom: -40px;'>
                                    <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                </div>
                            <span class='property--status'>For {$status[$i]}</span>
                        </a>
					</div>
					<div class='property--content'>
						<div class='property--info'>
							<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
							<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
							<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
						</div>
						<div class='property--features'>
							<ul>
								<li><span class='feature'>Beds:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
								<li><span class='feature'>Baths:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
								<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>

							</ul>
							<a href='edit-property.php?prop={$prop_id[$i]}' class='edit--btn'><i class='fa fa-edit'></i>Edit</a>
						</div>
					</div>
				</div>";
		}
	}
    
	public function post_user_properties_dash($user){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE approved='yes' AND user_email='$user' ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <h6>You have not added any property yet.</h6>";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			
            echo"<div class='property-item' style='width: 300px !important;'>
                        <div class='property--img'>
                            <a href='#'>
                                <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' class='img-responsive'>
                                <span style='position:relative; right: 5px; top: -210px; float:right; margin-bottom: -30px; background-color: #FFFFFF; padding: 5px; border-radius: 5px;'>
                                    <p class='property--price' style='font-size: 18px !important;'>₦{$price[$i]}{$issue_type}</p>
                                </span>
                                <div style='position:relative; left: 20px; top: -50px; float:right; margin-bottom: -40px;'>
                                    <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                </div>
                                <span class='property--status'>For {$status[$i]}</span>
                            </a>
                        </div>
                        <div class='property--content'>
                            <div class='property--info'>
                                <h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
                                <p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
                            </div>
                            <div class='property--features'>
                                <ul class='list-unstyled mb-0'>
                                    <li><span class='feature'>Beds:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
                                    <li><span class='feature'>Baths:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
                                    <li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
                                </ul>
                                <a href='edit-property?prop={$prop_id[$i]}' class='edit--btn'><i class='fa fa-edit'></i>Edit</a>
                            </div>
                        </div>
                    </div>";
		}
	}
    
	public function post_user_properties_dash_2($uid){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE approved='yes' AND user_id='$uid' ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Properties Added Yet.
					</section";
			return;
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
			
            echo"<div class='property-item'>
					<div class='property--img'>
						<a href='#'>
                            <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>                            
                                <div style='position:relative; left: 0px; top: -40px; float:right; margin-bottom: -40px;'>
                                    <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                </div>
                            <span class='property--status'>For {$status[$i]}</span>
                        </a>
					</div>
					<div class='property--content'>
						<div class='property--info'>
							<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
							<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
							<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
						</div>
						<div class='property--features'>
							<ul>
								<li><span class='feature'>Beds:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
								<li><span class='feature'>Baths:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
								<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>

							</ul>
							<a href='edit-property.php?prop={$prop_id[$i]}' class='edit--btn'><i class='fa fa-edit'></i>Edit</a>
						</div>
					</div>
				</div>";
		}
	}
    
	public function post_favourite_properties($current_user){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
        $query = "SELECT * FROM favourites WHERE Userid='$current_user' ORDER BY serial DESC LIMIT 3";
        if(!$output = $this->connection->query($query)){
            $this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);	
        }else{            
            while($rower = $output->fetch_assoc()){
                $idd[] = $pidd = (int)$rower['serial'];	                
                $Userid = $rower['Userid'];
                $PropID = $rower['PropID'];  
                
                $c = count($idd);
                if($c<=0){
                    echo " <section class='emptycategory'>
                            No Properties Added Yet.
                            </section";
                    return;
                }                
                
                $sql = "SELECT * FROM property_info WHERE approved='yes' AND user_email='$Userid' AND prop_id='$PropID' ORDER BY id DESC";
                if(!$result = $this->connection->query($sql))
                {
                    $this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
                    return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
                }
                $id = array();
                $row = $result->fetch_assoc();
                $id[] = $pid = (int)$row['id'];	
                $prop_id = (int)$row['prop_id'];	
                $title	= $this->printify($row['title'],1);	
                $address = $this->printify($row['address'],1);	
                $city = $this->printify($row['region'],1);	
                $state = $this->printify($row['state'],1);
                $postal = $this->printify($row['postal_code'],1);		
                $status = $this->printify($row['status'],1);		
                $type = $this->printify($row['type'],1);		
                $price = $this->printify($row['price'],1);
                $period = $this->printify($row['period'],1);
                $bedrooms = $this->printify($row['bedrooms'],1);		
                $bathrooms = $this->printify($row['bathrooms'],1);		
                $size = $this->printify($row['size'],1);		
                $cover_img = $this->printify($row['img1'],1);		
                $date_added =  $this->date_convert($row['date_added'], 'd-m-Y');
                
                $price = number_format((float)$price, 2);
                if($period != null){
					$issue_type = "<span class='time'>$period</span>";
				}else{
					$issue_type = "";
				}
                
                echo"<div class='property-item'>
                        <div class='property--img'>
                            <a href='#'>
                                <img src='assets/upload/{$prop_id}/{$cover_img}' class='img-responsive'>
                                <span class='property--status'>For {$status}</span>
                            </a>
                        </div>
                        <div class='property--content'>
                            <div class='property--info'>
                                <h5 class='property--title'><a href='#'>{$title}</a></h5>
                                <p class='property--location'>{$address}, {$city}, {$state} {$postal}</p>
                                <p class='property--price'>₦{$price}{$issue_type}</p>
                            </div>
                            <div class='property--features'>
                                <ul class='list-unstyled mb-0'>
                                    <li><span class='feature'>Beds:</span><span class='feature-num'>{$bedrooms}</span></li>
                                    <li><span class='feature'>Baths:</span><span class='feature-num'>{$bathrooms}</span></li>
                                    <li><span class='feature'>Area:</span><span class='feature-num'>{$size} sqm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>";
                
            }
            
            
        }
		
	}
    
    public function post_fav_properties($prop_id){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM property_info WHERE approved='yes' AND prop_id='$prop_id' ORDER BY id DESC LIMIT 3";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id = (int)$row['prop_id'];	
			$title	= $this->printify($row['title'],1);	
			$address = $this->printify($row['address'],1);	
			$city = $this->printify($row['region'],1);	
			$state = $this->printify($row['state'],1);
			$postal = $this->printify($row['postal_code'],1);		
			$status = $this->printify($row['status'],1);		
			$type = $this->printify($row['type'],1);		
			$price = $this->printify($row['price'],1);	
			$period = $this->printify($row['period'],1);
			$bedrooms = $this->printify($row['bedrooms'],1);		
			$bathrooms = $this->printify($row['bathrooms'],1);		
			$size = $this->printify($row['size'],1);		
			$cover_img = $this->printify($row['img1'],1);		
			$date_added =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c==0){
		    /** echo " <section class='emptycategory'>
					No Properties Added Yet.
					</section>";
			return; **/
		}
		for($i=0;$i<$c;$i++){
			$price[$i] = number_format($price[$i]);
			if($period != null){
					$issue_type = "<span class='time'>$period</span>";
				}else{
					$issue_type = "";
				}
			echo "<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
			<div class='property-item'>
				<div class='property--img'>
					<a href='property-details.php?prop={$prop_id}'>
						<img src='assets/upload/{$prop_id}/{$cover_img}' alt='property image' class='img-responsive'>
						<div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
							<img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
						</div>
					</a>
					<span class='property--status'>For {$status}</span>
				</div>
				<div class='property--content'>
					<div class='property--info'>
						<h5 class='property--title'><a href='property-details.php?prop={$prop_id}'>{$title}</a></h5>
						<p class='property--location'>{$address}, {$city}, {$state} {$postal}</p>
						<p class='property--price'>₦{$price}{$issue_type}</p>
					</div>
					<div class='property--features'>
						<ul class='list-unstyled mb-0'>
							<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms}</span></li>
							<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms}</span></li>
							<li><span class='feature'>Area:</span><span class='feature-num'>{$size} sqm</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>";
		}
	}
	
	public function post_search_result(){
		$base = $this->base(0);
        $select_state = isset($_GET['select-state']) ? $_GET['select-state'] : '';
		$selected_region = $_GET['select-lga']; 
		$selected_type = $_GET['select-type']; 
		$selected_status = $_GET['select-status']; 
		$selected_beds = $_GET['select-beds']; 
		$selected_baths = $_GET['select-baths']; 
		$minAmt = (int)$_GET['min'];
		$maxAmt = (int)$_GET['max'];

		$selectedstate = htmlspecialchars($select_state);
        $selectedregion = htmlspecialchars($selected_region);
		$selectedtype = htmlspecialchars($selected_type);
		$selectedstatus = htmlspecialchars($selected_status);
		$selectedbeds = htmlspecialchars($selected_beds);
		$selectedbaths = htmlspecialchars($selected_baths);
		
        $selectedstate = $this->wordify($selectedstate);
		$selectedregion = $this->wordify($selectedregion);
		$selectedtype = $this->wordify($selectedtype);
		$selectedstatus = $this->wordify($selectedstatus);
		$selectedbeds = $this->wordify($selectedbeds);
		$selectedbaths = $this->wordify($selectedbaths);
		
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 03;
		$start_from = ($page-1)*03;
		
		// $sql = "SELECT * FROM property_info WHERE state LIKE '%".$selectedstate."%' AND region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt LIMIT LIMIT 3";
		$sql = "SELECT * FROM property_info WHERE state LIKE '%".$selectedstate."%' AND region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt LIMIT $start_from, $num_per_page";

		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = $pid = (int)$row['id'];	
			$prop_id[] = (int)$row['prop_id'];	
			$title[]	= $this->printify($row['title'],1);	
			$address[] = $this->printify($row['address'],1);	
			$city[] = $this->printify($row['region'],1);	
			$state[] = $this->printify($row['state'],1);
			$postal[] = $this->printify($row['postal_code'],1);		
			$status[] = $this->printify($row['status'],1);		
			$type[] = $this->printify($row['type'],1);		
			$price[] = $this->printify($row['price'],1);
			$period[] = $this->printify($row['period'],1);
			$bedrooms[] = $this->printify($row['bedrooms'],1);		
			$bathrooms[] = $this->printify($row['bathrooms'],1);		
			$size[] = $this->printify($row['size'],1);		
			$cover_img[] = $this->printify($row['img1'],1);		
			$date_added[] =  $this->date_convert($row['date_added'], 'd-m-Y');
		}
		$c = count($id);
		if($c<=0){
			echo "<h4>No Property Match Your Search.</h4>";
			return;
			}
			for($i=0;$i<$c;$i++){
			    $price[$i] = number_format($price[$i]);
				if($period[$i] != null){
					$issue_type = "<span class='time'>$period[$i]</span>";
				}else{
					$issue_type = "";
				}
				echo "<div class='col-xs-12 col-sm-12 col-md-12'>
							<div class='property-item'>
								<div class='property--img'>
									<a href='#'>
                                        <img src='assets/upload/{$prop_id[$i]}/{$cover_img[$i]}' alt='property image' class='img-responsive'>
                                        <div style='position:relative; left: 0px; top: -30px; float:right; margin-bottom: -30px;'>
                                            <img src='assets/images/logo/logo-light.png' width='80' height: 20px;>
                                        </div>
                                    </a>
									<span class='property--status'>For {$status[$i]}</span>
								</div>
								<div class='property--content'>
									<div class='property--info'>
										<h5 class='property--title'><a href='#'>{$title[$i]}</a></h5>
										<p class='property--location'>{$address[$i]}, {$city[$i]}, {$state[$i]} {$postal[$i]}</p>
										<p class='property--price'>₦{$price[$i]}{$issue_type}</p>
									</div>
									<div class='property--features'>
										<ul class='list-unstyled mb-0'>
											<li><span class='feature'>Bedrooms:</span><span class='feature-num'>{$bedrooms[$i]}</span></li>
											<li><span class='feature'>Bathrooms:</span><span class='feature-num'>{$bathrooms[$i]}</span></li>
											<li><span class='feature'>Area:</span><span class='feature-num'>{$size[$i]} sqm</span></li>
										</ul>
									</div>
									<div class='row col-lg-12 text-center'>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn1' >Contact</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn2' >Message</a>
										<a href='property-details.php?prop={$prop_id[$i]}' class='rounded-btn rounded-btn3' >View Details</a>
									</div>
								</div>
							</div>
						</div>";
			}
			$sql = "SELECT * FROM property_info WHERE region LIKE '%".$selectedregion."%' AND type LIKE '%".$selectedtype."%' AND status LIKE '%".$selectedstatus."%' AND bedrooms LIKE '%".$selectedbeds."%' AND bathrooms LIKE '%".$selectedbaths."%' AND price >= $minAmt AND price <= $maxAmt";
			if(!$result2 = $this->connection->query($sql))
			{
				$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
				return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
			}
			$num = $result2->num_rows;
				
			$totalpages = ceil($num/$num_per_page);
			$i=$page;
				//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
				$i--;
			echo "<div class='col-xs-12 col-sm-12 col-md-12 text-center mt-50'><ul class='pagination'>";
			if($i>=1){
				echo "<li><a href='search-result.php?select-state=$selectedstate&select-lga=$selectedregion&select-type=$selectedtype&select-status=$selectedstatus&select-beds=$selectedbeds&select-baths=$selectedbaths&min=$minAmt&max=$maxAmt&submit=Search&page=$i' aria-label='Prev'>
						<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
							</a>
					</li>";
			}
			$i=$page;
			if($i==$totalpages){
				echo "";
			}else{
				$i++;
				echo "<li><a href='search-result.php?select-state=$selectedstate&select-lga=$selectedregion&select-type=$selectedtype&select-status=$selectedstatus&select-beds=$selectedbeds&select-baths=$selectedbaths&min=$minAmt&max=$maxAmt&submit=Search&page=".$i."' aria-label='Next'>
					<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
					</a></li>";
			}
			/**for($i=1;$i<=$totalpages;$i++){
				echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			}**/
			echo "</ul></div>";
	}
	
	public function insert_comments(){
		$name	= isset($_POST['name'])?$this->wordify($_POST['name'],1):"";
		$email	= isset($_POST['email'])?$this->wordify($_POST['email'],1):"";
		$comment = isset($_POST['comment'])?$this->wordify($_POST['comment'],1):"";
		$post_id = isset($_POST['sbmtComment'])?(int)$_POST['sbmtComment']:0;
		
		//$this->test_here($post_id,1);
		
		if($stmt = $this->connection->prepare("INSERT INTO post_comments(post_id, name, email, comments) values(?,?,?,?)")){
			$stmt->bind_param('isss',$post_id, $name, $email, $comment);
			if($stmt->execute()){
			$stmt->close();
			$this->dugoye($this->user_id, "New comment posted  - $name");	
			$this->set_server_msg("Property Successfully Added!",1);
			$this->goto_notify("blog-single?pid=$post_id");
			}
		}else{
			/* Error */
			$this->dugoye($this->user_id,"Posting Failed for - $name","FAILED: $post_id, $name, $email, $comment. Reason: ".$emscms->connection->error);	
			return $this->just_notify("Error, Unable to Add Post, please retry later",2);
		}
	}
	
	public function send_contact_msg(){
		$name	= isset($_POST['contact-name'])?$this->wordify($_POST['contact-name'],1):"";
		$email	= isset($_POST['contact-email'])?$this->wordify($_POST['contact-email'],1):"";
		$phone = isset($_POST['phone-number'])?$this->wordify($_POST['phone-number'],1):"";
		$message = isset($_POST['contact-message'])?$this->wordify($_POST['contact-message'],1):"";
		
		$recipient = "contact@gohome.ng";
		
		$headers  = 'MIME-Version: 1.0' . "\r\n"
		.'Content-type: text/html; charset=utf-8' . "\r\n"
		.'From: ' . $email . "\r\n";
	 
		$email_content = "<html><body>";
		$email_content .= "<tr><td style='background: #eee; padding: 10px;'>Name</td><td style='background: #fda; padding: 10px;'>$name</td></tr>";
		$email_content .= "<tr><td style='background: #eee; padding: 10px;'>Email</td><td style='background: #fda; padding: 10px;'>$email</td></tr>";
		$email_content .= "<tr><td style='background: #eee; padding: 10px;'>Phone</td><td style='background: #fda; padding: 10px;'>$phone</td></tr>";
	 
		$email_content .= "<p style='font-family: Arial; font-size: 1.25rem;'><strong>A Message from $name &mdash;</strong><i> $message</i>.</p>";
		$email_content .= '</body></html>';
		
		if(mail($recipient, "Gohome Contact Message", $email_content, $headers)) {
			$this->dugoye($this->user_id, "Message Email Sent  - $name");	
			$this->set_server_msg("Your Message Successfully Sent!",1);
			$this->goto_notify("contact");
		}else{
			$this->dugoye($this->user_id,"Mail Sending Failed for - $name","FAILED: $name, $email, $phone, $message. Reason: ".$this->connection->error);	
			return $this->just_notify("Error, Unable to Send Mail, please retry later",2);
		}
	}
	
	public function widget_mainslider(){
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","mainslider");
		if($widgid<=0)return "No Slides To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$top_caption[] = isset($row['addfield1'])?$this->printify($row['addfield1'],1):"";	
		$image[] = $this->printify($row['image'],1);	
		$excerpt[] = $this->printify($row['excerpt'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0;$i<$c;$i++){
			echo "
		<div class='mu-slider-single'>
		<div class='mu-slider-img'>
		<figure>
		<img src='gallery/{$image[$i]}'>
		</figure>
		</div>
		<div class='mu-slider-content'>
		<h4>{$top_caption[$i]}</h4>
		<span></span>
		<h2>{$title[$i]}</h2>
		<p>{$excerpt[$i]}</p>
		<a href='{$btn_url[$i]}' class='mu-read-more-btn'>{$btn_text[$i]}</a>
		</div>
		</div>
		  ";
	}
	}
	
	public function widget_pointers(){
		$subj = "pointer";$subjs = "pointers";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$icon[] = isset($row['addfield1'])?$this->printify($row['addfield1'],1):"fa fa-book";	
		$image[] = $this->printify($row['image'],1);	
		$excerpt[] = $this->printify($row['excerpt'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		}
		$c = count($id);
		if($c<=0){return;}
				
		for($i=0;$i<$c;$i++){
			echo "
			<div class='mu-service-single'>
				  <span class='fa {$icon[$i]}'></span>
				  <h3>{$title[$i]}</h3>
				  <p>{$excerpt[$i]}</p>
				</div>
			  ";
		}

	}

	public function widget_welcome(){
		$subj = "welcome";$subjs = "welcome";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","posts","slug","$subjs");
		if($widgid<=0)return "No Welcome Slides To Show";
		$sql = "SELECT * FROM posts WHERE id='$widgid' ORDER BY id DESC LIMIT 1";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = "";
		while($row = $result->fetch_assoc()){
		$id = (int)$row['id'];	
		$title = $this->printify($row['title'],1);	
		$icon = isset($row['addfield1'])?$this->printify($row['addfield1'],1):"";	
		$image = $this->printify($row['image'],1);	
		$excerpt = $this->printify($row['excerpt'],1);	
		$content = $this->printifyhtml($row['content'],1);	
		}
		if($id ==""){return;}
				
			echo "
				<div class='mu-title'>
				<h2>$title</h2>              
				</div>
				<p>$content</p>
			  ";

	}	

	public function widget_homevideo(){
		$subj = "homevideo";$subjs = "homevideo";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subj To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 1";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = "";
		while($row = $result->fetch_assoc()){
		$id = (int)$row['id'];	
		$title = $this->printify($row['title'],1);	
		$videourl = isset($row['addfield1'])?$this->printify($row['addfield1'],1):"";	
		$image = $this->printify($row['image'],1);	
		$excerpt = $this->printify($row['excerpt'],1);	
		}

		if($id==""){return;}
				
			echo "
			<div class='mu-about-us-right'>                            
			<a id='mu-abtus-video' href='{$videourl}' target='mutube-video'>
			<img src='gallery/{$image}' >
			</a>                
			</div>
		  ";

	}

	public function widget_features_head(){
		$subj = "features-head";$subjs = "features-head";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 1";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = "";
		while($row = $result->fetch_assoc()){
		$id = (int)$row['id'];	
		$title = $this->printify($row['title'],1);	
		$excerpt = $this->printify($row['excerpt'],1);	
		}
		if($id==""){return;}
			echo "
			<div class='mu-title'>
			<h2 class='white'>{$title}</h2>
			<p class='white'>{$excerpt}</p>
			</div>
		  ";

	}

	public function widget_quick_links(){
		$subj = "quick-links-menu";$subjs = "quick-links-menu";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		}
		$c = count($id);
			if($c<=0){return;}
		for($i=0;$i<$c;$i++){
			echo "
				<li><a href='{$btn_url[$i]}' target='portal'>{$btn_text[$i]}</a></li>
			  ";
		}

	}
	
	public function widget_recent_events(){
		$subj = "recent-events";$subjs = "recent-events";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$image[] = $this->printify($row['image'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		$date[] = $this->printify($row['addfield1'],1);	
		}
		$c = count($id);
			if($c<=0){return;}
			for($i=0;$i<$c;$i++){
				echo "
					<div class='media'>
							<div class='media-left'>
							<a href='gallery/{$image[$i]}'>
								<img class='media-object' src='gallery/{$image[$i]}' title='{$title[$i]}'>
							</a>
							</div>
							<div class='media-body'>
							<h4 class='media-heading'><a href='{$btn_url[$i]}'>{$title[$i]}</a></h4>                      
			<span class='popular-course-price smaller'>{$date[$i]}</span>
							</div>
						</div>
					  ";
		}

	}
	
	public function widget_features(){
		$subj = "features";$subjs = "features";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","$subjs");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Slider ","Reason: ");		
		return $this->just_notify("Unable to Load Slider",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$icon[] = isset($row['addfield1'])?$this->printify($row['addfield1'],1):"fa fa-book";	
		$excerpt[] = $this->printify($row['excerpt'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		}
		$c = count($id);
		if($c<=0){return;}
			
		for($i=0;$i<$c;$i++){
		echo "
			<div class='col-lg-4 col-md-4  col-sm-6 centered '>
			<div class='mu-single-feature pointer' >
			<span class='fa {$icon[$i]}'></span>
			<h4>{$title[$i]}</h4>
			<p>{$excerpt[$i]}</p>
			
			</div>
			</div>
		  ";
		}

	}
	
	public function widget_testimonials(){
		$subj = "testimonial";$subjs = "testimonials";
		$base = $this->base(0);
		$widgid = (int)$this->get_this_data("id","widgets","slug","testimonials");
		if($widgid<=0)return "No $subjs To Show";
		$sql = "SELECT * FROM widget_slides WHERE widgid='$widgid' ORDER BY id DESC LIMIT 10";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load $subjs ","Reason: ");		
		return $this->just_notify("Unable to Load $subjs",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$testifier[]	 = $this->printify($row['addfield1'],1);	
		$testifier_title[]	 = $this->printify($row['addfield2'],1);	
		$image[] = $this->printify($row['image'],1);	
		$excerpt[] = $this->printify($row['excerpt'],1);	
		$btn_text[] = $this->printify($row['btn_text'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		}
		$c = count($id);
		if($c<=0){return;}
			
		for($i=0;$i<$c;$i++){
		echo "
			<div class='mu-testimonial-item'>
			<div class='mu-testimonial-quote'>
			<blockquote>
			<p style='padding:0em 1em'> {$excerpt[$i]}</p>
			</blockquote>
			</div>
			<div class='mu-testimonial-img'>
			<img src='gallery/{$image[$i]}'>
			</div>
			<div class='mu-testimonial-info'>
			<h4>{$testifier[$i]}</h4>
			<span>{$testifier_title[$i]}</span>
			</div>
			</div>
		  ";
		}
	}

	public function list_cuisine_types(){
		$base = $this->base(0);
		//$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		//$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT DISTINCT food_category FROM mod_restaurant_menu ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Cuisine types ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Cuisine types".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			//$id[] = (int)$row['id'];	
			$category[] = $this->printify($row['food_category'],1);	
		}
		$c = count($category);
		if($c<=0){
			echo " <section class='emptycategory'>
					Seems no food item has been added!
					</section";
			return;
			}
		for($i=0;$i<$c;$i++){
			echo "<a href=''><li class='list-group-item'>{$category[$i]} <span class='badge'></span></li></a>";
		}
	}
	
	public function post_user_profile(){
		
	}
	
	public function posts_blogs($postlen=0){
		$base = $this->base(0);
		$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		$page = isset($_GET['page'])?(int)$_GET['page']:1;
		$num_per_page = 06;
		$start_from = ($page-1)*06;
		$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM posts WHERE catid='$catid' LIMIT $start_from, $num_per_page";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Posts ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to Load Posts".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$slug[] = $this->printify($row['slug'],1);	
		$image[] = $this->printify($row['image'],1);	
		$author[] = $this->printify($row['author'],1);	
		$excerpt[] = $this->callname($row['excerpt'],500);	
		//	$content[] = $this->printify($row['content'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		$date_updated[] =  $this->date_convert($row['date_updated']);	
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Posts On This Section Yet.
					</section";
			return;
		}
		for($i=0;$i<$c;$i++){
		echo "<div class='col-xs-12 col-sm-6 col-md-4'>
				<div class='blog-entry'>
					<div class='entry--img'>
						<a href='blog-single.php?pid=$id[$i]'>
					<img src='gallery/{$image[$i]}' alt='entry image'/>
				</a>
					</div>
					<div class='entry--content'>
						<div class='entry--meta'>
							<a href='blog-single.php?pid=$id[$i]'>June 26, 2018</a><a href='{$slug[$i]}'>4 Comments</a>
						</div>
						<div class='entry--title'>
							<h4><a href='blog-single.php?pid=$id[$i]'>{$title[$i]}</a></h4>
						</div>
						<div class='entry--bio'>
							{$excerpt[$i]}
						</div>
						<div class='entry--more'>
							<a href='blog-single.php?pid=$id[$i]'>Read More<i class='fa fa-angle-double-right'></i></a>
						</div>
					</div>
				</div>
			</div>";
		}
		$sql = "SELECT * FROM posts WHERE catid='$catid'";
		if(!$result2 = $this->connection->query($sql))
		{
			$this->dugoye("100100","Unable to Load Properties ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to Load Properties".$this->connection->error,2);		
		}
		$num = $result2->num_rows;
			
		$totalpages = ceil($num/$num_per_page);
		$i=$page;
			//echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
			$i--;
		echo "<div class='col-xs-12 col-sm-12 col-md-12 clearfix text--center'><ul class='pagination'>";
		if($i>=1){
			echo "<li class='left-arrow'><a href='blog.php?page=$i' aria-label='Prev'>
					<span aria-hidden='true'><i class='fa fa-angle-double-left'></i> Prev</span>
						</a>
				</li>";
		}
		$i=$page;
		if($i==$totalpages){
			echo "";
		}else{
			$i++;
			echo "<li class='right-arrow'><a href='blog.php?page=$i' aria-label='Next'>
				<span aria-hidden='true'>Next <i class='fa fa-angle-double-right'></i></span>
				</a></li>";
		}
		/**for($i=1;$i<=$totalpages;$i++){
			echo "<li class='active'><a style='cursor:pointer' href='properties-list?page=$i'>{$i}</a></li>";
		}**/
		echo "</ul></div>";
	}
	
	public function post_recent_blogs($postlen=0){
		$base = $this->base(0);
		$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		$catid = (int)$this->get_this_data("id","categories","title",'blog');
		$sql = "SELECT * FROM posts WHERE catid='$catid' ORDER BY id DESC $postlen";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Posts ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to Load Posts".$this->connection->error,2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$image[] = $this->printify($row['image'],1);	
		$date_updated[] =  $this->date_convert($row['date_updated'], 'M d, Y');	
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Posts On This Section Yet.
					</section";
			return;
			}
			for($i=0;$i<$c;$i++){
				echo "<div class='entry'>
						<a href='blog-single.php?pid=$id[$i]'>
						<img src='gallery/{$image[$i]}' alt='thumb' />
						</a>
						<div class='entry-desc'>
							<div class='entry-title'>
								<a href='blog-single.php?pid=$id[$i]'>{$title[$i]}</a>
							</div>
							<div class='entry-meta'>
								<a href='blog-single.php?pid=$id[$i]'>{$date_updated[$i]}</a>
							</div>
						</div>
					</div>";
		}
	}
	
	public function posts_events($postlen=0){
		$base = $this->base(0);
		$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		$catid = (int)$this->get_this_data("id","categories","title",'events');
		$sql = "SELECT * FROM posts WHERE catid='$catid' ORDER BY id DESC $postlen";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Posts ","Reason: ");		
		return $this->just_notify("Unable to Load Posts",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = strtoupper($this->printify($row['title'],1));	
		$slug[] = $this->printify($row['slug'],1);	
		$image[] = $this->printify($row['image'],1);	
		$author[] = $this->printify($row['author'],1);	
		$excerpt[] = $this->printify($row['excerpt'],1);	
		//	$content[] = $this->printify($row['content'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		$date_updated[] =  $this->date_convert($row['date_updated']);	
		}
		$c = count($id);
		if($c>=0){
			echo " <section class='emptycategory'>
					No Posts On This Section Yet.
					</section";
			return;
			}
			echo "<ssection class='cases cases-pages list-view'>
		<div class='portfolio-wrapper'>
			<div class='filter-bar'>
			<div class='container'>

			</div>
			</div>
			<div class='container'> 
			<ul class='items row'>
				
			";
		for($i=0;$i<$c;$i++){
			echo "<li class='col-sm-12 item nature food educaion'>
				<div class='col-sm-4 no-padding'>
					<section> 
					<img class='img-responsive' src='$base/gallery/{$image[$i]}' title=''> 
					</section>
				</div>
				<div class='col-sm-8 no-padding'>
					<div class='donate-detail'> 
						<a href='events/{$id[$i]}/{$slug[$i]}' class='font-lora head'>{$title[$i]}</a>
					<h6> {$author[$i]} | {$date_updated[$i]} </h6>
					<hr>
					<p class='text-justify'>{$excerpt[$i]}</p>
					<a href='events/{$id[$i]}/{$slug[$i]}' class='btn pull-right'>Read More</a> </div>
				</div>
				</li>
			";
		}
		echo "</ul>
			</div>
		</div>
		</section>>
		";
	}
	
	public function post_comments($postid){
		$sql = "SELECT * FROM post_comments WHERE post_id='$postid' ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Posts ","Reason: ");		
		return $this->just_notify("Unable to Load Posts",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = (int)$row['id'];	
			$name[] = $this->printify($row['name'],1);	
			$comment[] = $this->printify($row['comments'],1);	
			$date[] = $this->date_convert($row['date_added'],'M d, Y');		
		}
		$c = count($id);
		if($c==0){
			echo " <h4'>
					No Comments For This Blog Post Yet.
					</h4>";
		}
		for($i=0;$i<$c;$i++){
			$cname[$i] = substr($name[$i],0,1);
			echo "<li class='comment-body'>
					<div class='avatar'>
						{$cname[$i]}
					</div>
					<div class='comment'>
						<h6>{$name[$i]}</h6>
						<div class='date'>{$date[$i]}</div>
						<p>{$comment[$i]}</p>
					</div>
			</li>";
		}
	}
	
	public function count_comments($postid){
		$sql = "SELECT * FROM post_comments WHERE post_id='$postid' ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Count Posts ","Reason: ");		
		return $this->just_notify("Unable to Count Posts",2);		
		}
		return $result->num_rows;
	}
	
	public function posts_projects($postlen=0){
		$base = $this->base(0);
		$postlen = $postlen==0?"":"LIMIT ".(int)$postlen;
		$catid = (int)$this->get_this_data("id","categories","title",'projects');
		$sql = "SELECT * FROM posts WHERE catid='$catid' ORDER BY id DESC $postlen";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye("100100","Unable to Load Widget ","Reason: ");		
		return $this->just_notify("Unable to Load Widget",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$title[] = $this->printify($row['title'],1);	
		$slug[] = $this->printify($row['slug'],1);	
		$image[] = $this->printify($row['image'],1);	
		$progress[] =  (int)$row['progress'];	
		$author[] = $this->printify($row['author'],1);	
		$excerpt[] = $this->callname($row['excerpt'],150);	
		$content[] = $this->printify($row['content'],1);	
		$btn_url[] = $this->printify($row['btn_url'],1);	
		}
		$c = count($id);
		if($c<=0){
			echo " <section class='emptycategory'>
					No Posts On This Section Yet.
					</section";
			return;
			}
				echo "<section class='cases'>
		<div class='container'> 
			<div class='tittle'>
			<h2>Our  <span>Projects</span></h2>
			<p>BIAS <span class='underline'>is the foremost organization</span> committed to the deveopment of our beloved city Buguma</p>
			</div>
			<ul class='row'>
			";
		for($i=0;$i<$c;$i++){
			echo "
			<li class='col-sm-4'>
				<section> <a href='projects/{$id[$i]}/{$slug[$i]}'><img class='img-responsive' src='$base/gallery/{$image[$i]}' title='{$title[$i]}'> </a>
				<div class='progress-bars'>
					<div class='progress' data-percent='{$progress[$i]}%'>
					<div class='progress-bar progress-bar-striped'> <span class='progress-bar-tooltip'>{$progress[$i]}%</span> </div>
					</div>
				</div>
				<div class='donate-detail'> 
					<!--<h6>Donation: <span>53,458</span>/$87,609 </h6>-->
					<a href='projects/{$id[$i]}/{$slug[$i]}' class='font-lora head'>{$title[$i]}</a>
					<hr>
					<p>{$excerpt[$i]}</p>
				</div>
				<a href='projects/{$id[$i]}/{$slug[$i]}' class='btn'>Read More</a> </section>
			</li>
			";
		}
		echo "</ul>
		</div>
		</section>
		";
	}
	
	public function get_curr_user($type=0){
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		$dispuser = isset($_SESSION[$this->user])?$this->printify($_SESSION[$this->user],1):"";
		if($type==0) return $dispuser;
		$dispnameArr = $dispuser!=""?explode(" ",$dispuser):array("");
		$dispuser = $dispnameArr[0]!=""?$dispnameArr[0]:"";
		return $dispuser;		
	}		

	public function log_curr_visitor($type=0){
		$visitorip = $this->wordify($_SERVER['REMOTE_ADDR']);
		if($visitorip == "::1")return;
		$count = 0;
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		if(!isset($_SESSION['hasVisited'])){
		$_SESSION['hasVisited'] = 1;
		$count = $this->get_this_data("var_value","app_variables","var_name","SITE_HITS");
		if($count > 0){
		$count++;
		$this->update_this_data("app_variables","var_value",$count,"var_name","SITE_HITS",1);
		$this->dugoye("NewVisitor", "New Visitor From The IP Address $visitorip");		

		}

		}

		$dispuser = isset($_SESSION['not_usueboid'])?$this->printify($_SESSION['not_usueboid'],1):"";
		if($type==0) return $dispuser;
		$dispuser = $dispuser!=""?$this->get_this_data("display","tomi","email",$dispuser):"";
		$dispnameArr = $dispuser!=""?explode(" ",$dispuser):array("");
		$dispuser = $dispnameArr[0]!=""?$dispnameArr[0]:"";
		return $dispuser;		
	}
	
	public function sign_me_up(){
		$displayname = $this->wordify($_POST['displayname'],1);
		$email = $this->wordify($_POST['memberemail'],1);
		$password = $_POST['memberpass'];
		if(strlen($password)<6){
			$this->goto_notify(1,"Your Password Is Too Short");
		}		

		$password = $this->SHAM($email,$password);
		$active = 0;
		$joined = date("Y-m-d H:i:s");
		if(empty($_POST['displayname']) ||empty($_POST['memberemail'])){
		return $this->my_notifier("Registration Failed, Please Complete the Registration Form",2);
		}
		if($stmt = $this->connection->prepare("INSERT INTO tomi(display, email, passw, active,datejoined) values(?,?,?,?,?)")){
		$stmt->bind_param('sssss', $displayname, $email, $password, $active, $joined);
		if($stmt->execute()){
		$stmt->close(); 
		$confmsg = $this->send_confirmation($email);
		$this->dugoye(100100, "New Registration by $email");		
		return $this->my_notifier("Registration Successfully! A confirmation link has been sent to your email($email) inbox/spam, <br>please check it and verify your account to continue.<br>We are waiting for you!");
		}else{
		return $this->my_notifier("Registration Failed, Please Retry Later! ",2);
		}
		}else{
			/* Error */
			 $this->goto_notify(1,"Registration Failed, Please Retry Later!  ",2);return;
			}
		 $this->goto_notify(1,"Registration Failed, Please Retry Later!  " . "Try Again Later");return;
	}

	public function title(){
		$title = isset($_GET['title'])?$this->wordify($_GET['title']):"";
		return $this->app_name . $title;
	}
	
	public function post_id($table){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:0;
		$data = (int)$this->get_this_datas("id","$table","id='$pid' AND status='1'");
		if($data==0)$this->goto_notify($this->base(0)."/404");
		return $data;
	}
	
	public function post_title($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("title","$table","id",$pid);
		return $data;
	}	
	
	public function post_slug($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("slug","$table","id",$pid);

		return $data;
	}	

	public function post_author($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("author","$table","id",$pid);
		return $data;
	}
	
	public function post_excerpt($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("excerpt","$table","id",$pid);
		return $data;
	}
	
	public function post_content($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("content","$table","id",$pid);
		return $data;
	}
	
	public function post_image($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("image","$table","id",$pid);
		return $this->base(0)."/gallery/$data";
	}
	
	public function post_fullimage($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("fullimage","$table","id",$pid);
		return $this->base(0)."/gallery/$data";
	}
	
	public function post_align($table,$pid=0){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("image_align","$table","id",$pid);
		$data = $this->image_alignment($data);
		return $data;
	}
	
	public function post_date($table,$pid=0,$format=""){
		$pid = isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("date_updated","$table","id",$pid);
		return $this->date_convert($data);
	}
	
	public function post_tags($table,$pid=0){
		$pid = 	isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("tags","$table","id",$pid);
		$data	= $this->tagify($data,1);

		return $data;
	}
	
	public function post_data($table,$field,$pid=0){
		$field = $this->wordify($field,1);
		$pid = 	isset($_GET['pid'])?(int)$_GET['pid']:$pid;
		$data = $this->get_this_data("$field","$table","id",$pid);
		return $data;
	}
	
	public function image_alignment($align = "left"){
		switch($align){
			case "left": $aligned = "postimg pull-left";break;
			case "right": $aligned = "postimg pull-right";break;
			case "top": $aligned = "postimgtop";break;
			default:  $aligned = "postimg pull-left";
		}
		return $aligned;
	}
	
	public function bdirectory_join(){
		$surname  = isset($_POST['surname'])?$this->wordify($_POST['surname'],1):"";
		$othernames = isset($_POST['othernames'])?$this->wordify($_POST['othernames']):"";
		$gender = isset($_POST['gender'])?$this->wordify($_POST['gender']):"";
		$compound = isset($_POST['compound'])?$this->wordify($_POST['compound']):"";
		$company = isset($_POST['company'])?$this->wordify($_POST['company']):"";
		$business_addr  = isset($_POST['business_addr'])?$this->wordify($_POST['business_addr']):"";
		$specialization   = isset($_POST['specialization'])?$this->wordify($_POST['specialization']):"";
		$email = isset($_POST['email'])?strtolower($this->wordify($_POST['email'])):"";
		$mobile = isset($_POST['mobile'])?$this->wordify($_POST['mobile'],1):"";
		$refname  = isset($_POST['refname'])?$this->wordify($_POST['refname'],1):"";
		$refmobile = isset($_POST['refmobile'])?$this->wordify($_POST['refmobile'],1):"";
		$status=1;
		$emailexists =$this->get_this_data("othernames","mod_businessdirectory","email",$email);
		$mobileexists =$this->get_this_data("othernames","mod_businessdirectory","mobile",$mobile);
		if($emailexists !=""){
			return $this->just_notify("Your Email($email) has already been registered by $emailexists, Please contact us for more details",2);
		}
		if($mobileexists !=""){
			return $this->just_notify("Your Mobile($mobile) has already been registered by $mobileexists, Please contact us for more details",2);
		}
		if($stmt = $this->connection->prepare("INSERT INTO mod_businessdirectory(surname, othernames, gender, compound, company, business_addr,specialization, email, mobile, refname, refmobile,status) values(?,?,?,?,?,?,?,?,?,?,?,?)")){
		$stmt->bind_param('ssssssssssss',$surname, $othernames, $gender, $compound, $company, $business_addr,$specialization, $email, $mobile, $refname, $refmobile,$status);
		if($stmt->execute()){
		$stmt->close();
		$this->dugoye((int)$this->adminregno, "$surname $othernames Registered BIAS Business Directory");	
		return $this->just_notify("<h4>Thank You $surname $othernames, Your details have been submitted for approval</h4>",1);
		}
		}else{
			/* Error */
			$this->dugoye((int)$this->adminregno,"Registration Failed for - $surname $othernames", "$surname, $othernames, $gender, $compound, $company, $business_addr,$specialization; $email, $mobile, $refname, $refmobile. Reason: ");	
		return $this->just_notify("Error, registration failed, please retry later",2);
			}
	}
	
	public function bdirectory_list(){
		
	}
    
    public function getDistance($addressFrom, $addressTo, $unit = ''){
        $apiKey = 'AIzaSyCeC0dF3NORg8cI6LRYQMwEr49mCvTAFfI';
        
        $formattedAddrFrom = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo = str_replace(' ', '+', $addressTo);
        
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'$sensor=false$key='.$apiKey);
        $outputTo = json_decode($geocodeTo);
        if(!empty($outputTo->error_message)){
            return $outputTo->error_message;
        }
        
        $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
        $latitudeTo = $outputTo->results[0]->geometry->location->lat;
        $longitudeTo = $outputTo->results[0]->geometry->location->lng;
        
        
        $theta = $longitudeFrom - $longitudeTo;
        $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 *1.1515;
        
        $unit = strtoupper($unit);
        if($unit == "K"){
            return round($miles * 1.609344, 2).' km';
        }elseif($unit == 'M'){
            return round($miles * 1609.344, 2).' meters';            
        }else{
            return round($miles, 2).' miles';
        }
        
    }
}/*End of public_lib class*/
$emscms = new public_lib;
$emscms->log_curr_visitor();
$current_user = $emscms->get_curr_user();
$customername = $emscms->myname = $current_user!=""?$emscms->get_this_data("name","agents","email",$current_user):"";

?>