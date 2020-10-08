<div class="col-md-3">
    <div class="edit--profile-area text-center"
        style="padding-bottom: 50px; box-shadow: 0px 10px 30px 0px rgba(52, 73, 94, 0.32); ">
        <?php
                        if (!file_exists('assets/images/agents/'.strtolower($email)."/".$avatar)) {   
                            echo '<img src="assets/images/avatar.png" class="output--img" style="width: 200px; height: 200px; border-radius: 100%;">';                        
                        }else{
                            echo '<img src="assets/images/agents/'.strtolower($email)."/".$avatar.'"class="output--img"  style="width: 200px; height: 200px; border-radius: 100%;">';
                        }
                    ?>

        <div class="card-body text-center">
            <h5 class="card-title" style="padding-top: 5px;"><?php echo $customername; ?></h5>
            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-phone"></i>
                <?php echo $phone; ?></p>
            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-envelope-o"></i>
                <?php echo $email; ?></p>
            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-link"></i>
                <?php echo $website; ?></p>
            <div>
                <a href="edit-profile.php" class="btn btn-info"
                    style="margin-left: 10px !important; width: 90px !important; font-size: 12px !important; font-weight: normal !important;"
                    type="button">Edit Profile</a>
                <a href="favourite-properties.php" class="btn btn-primary"
                    style="margin-left: 10px !important; width: 80px !important; font-size: 12px !important; font-weight: normal !important;"
                    type="button">Favourite</a><br>
                <a href="add-property.php" class="btn btn-success" type="button"
                    style="margin-left: 10px !important; margin-top: 10px !important; width: 100px !important; font-size: 12px !important; font-weight: normal !important;">Add
                    Property</a>
                <a href="my-properties.php" class="btn btn-warning" type="button"
                    style="margin-left: 10px !important;  margin-top: 10px !important;  width: 100px !important; font-size: 12px !important; font-weight: normal !important;">My
                    Properties</a>
                <a href="ems-incs/logout.php" class="btn btn-danger" type="button"
                    style="margin-left: 10px !important;  margin-top: 10px !important;  width: 100px !important; font-size: 12px !important; font-weight: normal !important;">Logout</a>
            </div>
        </div>
    </div>
</div>