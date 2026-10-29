<?php 
header("Content-Type:application/json");
require_once dirname(__DIR__, 2).'/config/init.php';
require_once dirname(__DIR__, 3).'/config/apiconfig.php';


// if($isvalidUser['status'] == 1) 
// {
// 	$status=0;
// 	$message=$errmsg['invalidrequest'];
	
// 	if($action=='fillcontent')   
// 	{
// 		$qry="SELECT * from tblsocialsetting ORDER BY id LIMIT 1";
			
// 			$result_ary=$DB->getmenual($qry);

// 			if(sizeof($result_ary)>0)
// 			{
// 				$row=$result_ary[0];

// 				$response['id']=$IISMethods->sanitize($row['id']);
// 				$response['facebook']=$IISMethods->sanitize($row['facebook']);
// 				$response['instagram']=$IISMethods->sanitize($row['instagram']);
// 				$response['twitter']=$IISMethods->sanitize($row['twitter']);
// 				$response['skype']=$IISMethods->sanitize($row['skype']);
// 				$response['youtube']=$IISMethods->sanitize($row['youtube']);
// 				$status=1;
// 				$message=$errmsg['datafound'];

// 			}
// 			else
// 			{
// 				$status=0;
// 				$message=$errmsg['nodatafound'];
// 			}
			
		
// 	}
	
// 	else if($action=='insertsessting')   
// 	{
// 		$facebook=$IISMethods->sanitize($_POST['facebook']);
// 		$instagram =$IISMethods->sanitize($_POST['instagram']);
// 		$twitter=$IISMethods->sanitize($_POST['twitter']);
// 		$skype=$IISMethods->sanitize($_POST['skype']);
// 		$youtube=$IISMethods->sanitize($_POST['youtube']);
		
// 		// if($contactno && $wpcontact && $meetingduration && $buffermint && $onlinefrommint && $onlinetomint && $offlinefrom && $offlineto && $lunchfrom && $lunchto)
// 		// {
// 			$qry="SELECT id FROM tblsocialsetting ORDER BY id LIMIT 1";
			
// 			$result_ary=$DB->getmenual($qry);
// 			if(sizeof($result_ary) > 0)
// 			{
// 				$row = $result_ary[0];
// 				$insdata = array(
// 					'facebook'=>$facebook,
// 					'instagram'=>$instagram,
// 					'twitter'=>$twitter,
// 					'skype'=>$skype,
// 					'youtube'=>$youtube,
// 					'update_uid'=>$uid,
// 					'update_date'=>$IISMethods->getdatetime(),
// 				);

// 				$extraparams=array(
// 					'id'=>$row['id'],
// 				);
// 				$DB->executedata('u','tblsocialsetting',$insdata,$extraparams);

// 				$status=1;
// 				$message=$errmsg['update'];	
// 			}
// 			else
// 			{
// 				$unqid = $IISMethods->generateuuid();
// 				$insdata = array(
// 					'id'=>$unqid,
// 					'facebook'=>$facebook,
// 					'instagram'=>$instagram,
// 					'twitter'=>$twitter,
// 					'skype'=>$skype,
// 					'youtube'=>$youtube,
// 					'timestamp'=>$IISMethods->getdatetime(),
// 					'entry_uid'=>$uid,
// 					'entry_date'=>$IISMethods->getdatetime(),
// 				);
// 				// print_r($insdata);
// 				$DB->executedata('i','tblsocialsetting',$insdata,'');

// 				$status=1;
// 				$message=$errmsg['insert'];
// 			}
// 		// }
// 		// else 
// 		// {
// 		// 	$status=0;
// 		// 	$message=$errmsg['reqired'];
// 		// }
// 	} 
// }

if ($isvalidUser['status'] == 1)
{
    $status = 0;
    $message = $errmsg['invalidrequest'];

    // Fetch Social Media Settings
    if ($action == 'fillcontent')
    {
        $qry = "SELECT * FROM tblsocialsetting ORDER BY id LIMIT 1";

        $result_ary = $DB->getmenual($qry);

        if (sizeof($result_ary) > 0)
        {
            $row = $result_ary[0];

            $response['id']       = $IISMethods->sanitize($row['id']);
            $response['facebook'] = $IISMethods->sanitize($row['facebook']);
            $response['instagram'] = $IISMethods->sanitize($row['instagram']);
            $response['youtube']  = $IISMethods->sanitize($row['youtube']);
            $response['pintrest'] = $IISMethods->sanitize($row['pintrest']);
            $response['reddit']   = $IISMethods->sanitize($row['reddit']);
            $response['x']        = $IISMethods->sanitize($row['x']);
            $response['linkedin'] = $IISMethods->sanitize($row['linkedin']);
            $response['tiktok']   = $IISMethods->sanitize($row['tiktok']);

            $status = 1;
            $message = $errmsg['datafound'];
        }
        else
        {
            $status = 0;
            $message = $errmsg['nodatafound'];
        }
    }

    // Insert or Update Social Media Settings
    else if ($action == 'insertsessting')
    {
        $facebook = $IISMethods->sanitize($_POST['facebook'] ?? '');
        $instagram = $IISMethods->sanitize($_POST['instagram'] ?? '');
        $youtube = $IISMethods->sanitize($_POST['youtube'] ?? '');
        $pintrest = $IISMethods->sanitize($_POST['pintrest'] ?? '');
        $reddit = $IISMethods->sanitize($_POST['reddit'] ?? '');
        $x = $IISMethods->sanitize($_POST['x'] ?? '');
        $linkedin = $IISMethods->sanitize($_POST['linkedin'] ?? '');
        $tiktok = $IISMethods->sanitize($_POST['tiktok'] ?? '');

        $qry = "SELECT id FROM tblsocialsetting ORDER BY id LIMIT 1";

        $result_ary = $DB->getmenual($qry);

        if (sizeof($result_ary) > 0)
        {
            // Update existing record
            $row = $result_ary[0];

            $insdata = array(
                'facebook'    => $facebook,
                'instagram'   => $instagram,
                'youtube'     => $youtube,
                'pintrest'    => $pintrest,
                'reddit'      => $reddit,
                'x'           => $x,
                'linkedin'    => $linkedin,
                'tiktok'      => $tiktok,
                'update_uid'  => $uid,
                'update_date' => $IISMethods->getdatetime()
            );

            $extraparams = array(
                'id' => $row['id']
            );

            $DB->executedata(
                'u',
                'tblsocialsetting',
                $insdata,
                $extraparams
            );

            $status = 1;
            $message = $errmsg['update'];
        }
        else
        {
            // Insert new record
            $unqid = $IISMethods->generateuuid();

            $insdata = array(
                'id'          => $unqid,
                'facebook'    => $facebook,
                'instagram'   => $instagram,
                'youtube'     => $youtube,
                'pintrest'    => $pintrest,
                'reddit'      => $reddit,
                'x'           => $x,
                'linkedin'    => $linkedin,
                'tiktok'      => $tiktok,
                'timestamp'   => $IISMethods->getdatetime(),
                'entry_uid'   => $uid,
                'entry_date'  => $IISMethods->getdatetime()
            );

            $DB->executedata(
                'i',
                'tblsocialsetting',
                $insdata,
                ''
            );

            $status = 1;
            $message = $errmsg['insert'];
        }
    }
}
require_once dirname(__DIR__, 3).'/config/apifoot.php';  

?>

  