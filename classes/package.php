<?php
if(isset($_POST['crystal'])){
	$package = "Crystal Packages";
    $set_date = "";
    $amount ="15000";
	$user_id = 0;
	DB::query('INSERT INTO package VALUES ( \'\',:user_id,:package,:set_date,:amount)',array(':package'=>$package,':set_date'=>$set_date,':amount'=>$amount));
        echo "success";
    }
if(isset($_POST['silver'])){
    $package = "Silver Packages";
    $set_date = "";
    $amount ="25000";
    $user_id = 0;
    DB::query('INSERT INTO package VALUES ( \'\',:user_id,:package,:set_date,:amount)',array(':package'=>$package,':set_date'=>$set_date,':amount'=>$amount));
                echo "success";
    }

if(isset($_POST['gold'])){
    $package = "Gold Packages";
    $set_date = "";
    $amount ="50000";
    $user_id = 0;
     DB::query('INSERT INTO package VALUES ( \'\',:user_id,:package,:set_date,:amount)',array(':package'=>$package,':set_date'=>$set_date,':amount'=>$amount));
                        echo "success";
    }
        
?>