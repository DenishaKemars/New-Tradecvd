<?php 
// require_once dirname(__DIR__, 1).'/config/config.php';
// $config = new config();

require_once dirname(__DIR__, 1).'/config/init.php';


?>
	<div class="layout-px-spacing">
		<!-- CONTENT AREA -->
		<div class="row layout-top-spacing">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-12 mb-3">
                    <div class="widget">
                        <div class="widget-content">
                            <form class="row text-left validate-form" id="socialmediasettingForm" method="post" action="socialmediasetting" enctype="multipart/form-data">
                                <!-- add contact no -->
                                <div class="col-12 col-md-2 col-lg-2 col-xl-8 offset-2">
                                    <h6 class="inv-main-title mb-3">Social Media Links</h6>
                                </div>
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Facebook </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Enter Facebook Link" />
                                    </div>
                                </div>
                               
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Instagram </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                            <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Enter Instagram Link" />
                                    </div>
                                </div>
                                
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Youtube </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Enter Youtube link" />
                                    </div>
                                </div>
                                
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Pintrest </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="pintrest" name="pintrest" class="form-control" placeholder="Enter Pintrest link" />
                                    </div>
                                </div>
                                
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Reddit </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="reddit" name="reddit" class="form-control" placeholder="Enter Reddit link" />
                                    </div>
                                </div>
                                
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">X </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="x" name="x" class="form-control" placeholder="Enter X link" />
                                    </div>
                                </div>

                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Linkedin </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Enter Linkedin Link" />
                                    </div>
                                </div>
                               
                                <div class="col-8 offset-2">
                                    <div class="input-group">
                                        <label class="mb-1">Tiktok </label>
                                        <label class="ml-auto "></label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" id="tiktok" name="tiktok" class="form-control" placeholder="Enter Tiktok link" />
                                    </div>
                                </div>
                                
                                <?php 
                                    if(($rightstotalcount>0 ? $Pagerights->getAddright():0)==1 || $IISMethods->checkutypeexist($config->getAdminutype(),$LoginInfo->getUtypeid())==1) //rights check admin and right person
                                    {
                                        ?>
                                        <div class="row col-8 offset-2">
                                            <div class="text-left">
                                                <div class="input-group my-3">
                                                    <button type="submit" class="btn btn-primary m-0" id="btnsubmit"><?php echo $config->getSaveSidebar(); ?></button>
                                                    <button type="button" class="btn btn-secondary m-0 ml-2" id="btnReset" onclick="resetdata()"><?php echo $config->getResetSidebar(); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>

	<!--<script>-->
 <!--       $(document).ready(function () {-->
 <!--           fillcontent();-->
 <!--       });-->

	<!--	function resetdata()-->
 <!--       {-->
 <!--           $("#socialmediasettingForm").validate().resetForm();-->
 <!--           $('#socialmediasettingForm').trigger("reset");-->
 <!--           fillcontent();-->
 <!--           Edittimeformnamechange(2);   -->
 <!--       }-->


	<!--	function fillcontent()-->
 <!--       {-->
 <!--           var pagename=getpagename();-->
 <!--           var headersdata= {Accept: 'application/json',platform: 1,userpagename:pagename,useraction:'viewright',masterlisting:true};-->

 <!--           formdata = new FormData();-->
 <!--           formdata.append("action", "fillcontent");-->

 <!--           ajaxrequest("POST",'<?php echo $config->getEndpointurl(); ?>'+pagename,formdata,headersdata,Onsuccessfillcontent,OnErrorfillcontent);-->
 <!--       }-->
 <!--       function Onsuccessfillcontent(content)-->
 <!--       {-->
 <!--           var JsonData = JSON.stringify(content);-->
 <!--           var resultdata = jQuery.parseJSON(JsonData);-->
 <!--           $('#facebook').val(resultdata.facebook);-->
 <!--           $('#instagram').val(resultdata.instagram);-->
 <!--           $('#twitter').val(resultdata.twitter);-->
 <!--           $('#skype').val(resultdata.skype);-->
 <!--           $('#youtube').val(resultdata.youtube);-->
 <!--       }-->

	<!--	function OnErrorfillcontent(content)-->
 <!--       { -->
 <!--           ajaxrequest("POST","'<?php echo $config->getPage404url(); ?>'",'','',OnsuccessRender,OnErrorRender);-->
 <!--       }-->

	

 <!--       if($('#socialmediasettingForm').length){		-->
 <!--           $('#socialmediasettingForm').validate({-->
 <!--               rules:{-->
 <!--                   facebook:{-->
 <!--                       url:true-->
 <!--                   },-->
 <!--                   instagram:{-->
 <!--                       url:true-->
 <!--                   },-->
 <!--                   twitter:{-->
 <!--                       url:true-->
 <!--                   },-->
 <!--                   skype:{-->
 <!--                       url:true-->
 <!--                   },-->
 <!--                   youtube:{-->
 <!--                       url:true-->
 <!--                   },-->
 <!--               },messages:{-->
                   
 <!--               },-->
 <!--               submitHandler: function(form){-->
 <!--                   $('#loaderprogress').show();-->
 <!--                   var pagename=getpagename();-->
 <!--                   var useraction=$('#formevent').val();-->
 <!--                   formdata = new FormData(form);-->
 <!--                   formdata.append("action", "insertsessting");-->
 <!--                   var headersdata= {'Accept': 'application/json',platform: 1,userpagename:pagename,useraction:useraction,masterlisting:false};-->
 <!--                   ajaxrequest("POST",'<?php echo $config->getEndpointurl(); ?>'+pagename,formdata,headersdata,OnsuccesssocialmediasettingDataSubmit,OnErrorsocialmediasettingDataSubmit)-->

	<!--		    },-->
 <!--           });-->
 <!--       }-->

 <!--       function OnsuccesssocialmediasettingDataSubmit(data)-->
 <!--       {-->
 <!--           var JsonData = JSON.stringify(data);-->
 <!--           var resultdata = jQuery.parseJSON(JsonData);-->
 <!--           $('#loaderprogress').hide();	-->
 <!--           if(resultdata.status==0)-->
 <!--           {-->
 <!--               alertify(resultdata.message, '0');-->
 <!--           }-->
 <!--           else if(resultdata.status==1)-->
 <!--           {-->
 <!--               alertify(resultdata.message, '1');-->
 <!--               fillcontent();-->
 <!--           }-->
 <!--       }-->

 <!--       function OnErrorsocialmediasettingDataSubmit(data)-->
 <!--       {-->
 <!--           ajaxrequest("POST","'<?php echo $config->getPage404url(); ?>'",'','',OnsuccessRender,OnErrorRender);-->
 <!--       }-->

       
	<!--</script>	-->
	
	<script>
	    
$(document).ready(function () {
    initializeSocialMediaForm();
});

function initializeSocialMediaForm() {
    fillcontent();

    if ($('#socialmediasettingForm').length) {
        $('#socialmediasettingForm').validate({
            rules: {
                facebook: { url: true },
                instagram: { url: true },
                youtube: { url: true },
                pintrest: { url: true },
                reddit: { url: true },
                x: { url: true },
                linkedin: { url: true },
                // tiktok: { url: true }
            },
            messages: {
                facebook: {
                    url: "Please enter a valid Facebook URL."
                },
                instagram: {
                    url: "Please enter a valid Instagram URL."
                },
                youtube: {
                    url: "Please enter a valid YouTube URL."
                },
                pintrest: {
                    url: "Please enter a valid Pinterest URL."
                },
                reddit: {
                    url: "Please enter a valid Reddit URL."
                },
                x: {
                    url: "Please enter a valid X URL."
                },
                linkedin: {
                    url: "Please enter a valid LinkedIn URL."
                },
                // tiktok: {
                //     url: "Please enter a valid TikTok URL."
                // }
            },
            submitHandler: function (form) {
                $('#loaderprogress').show();

                var pagename = getpagename();
                var useraction = $('#formevent').val() || 'add';

                var formdata = new FormData(form);
                formdata.append('action', 'insertsessting');

                var headersdata = {
                    Accept: 'application/json',
                    platform: 1,
                    userpagename: pagename,
                    useraction: useraction,
                    masterlisting: false
                };

                ajaxrequest(
                    "POST",
                    '<?php echo $config->getEndpointurl(); ?>' + pagename,
                    formdata,
                    headersdata,
                    OnsuccesssocialmediasettingDataSubmit,
                    OnErrorsocialmediasettingDataSubmit
                );

                return false;
            }
        });
    }
}

function resetdata() {
    var form = $('#socialmediasettingForm');

    if (form.length) {
        form.validate().resetForm();
        form[0].reset();

        form.find('.is-invalid').removeClass('is-invalid');
        form.find('.error').removeClass('error');
    }

    fillcontent();

    if (typeof Edittimeformnamechange === 'function') {
        Edittimeformnamechange(2);
    }
}

function fillcontent() {
    var pagename = getpagename();

    var headersdata = {
        Accept: 'application/json',
        platform: 1,
        userpagename: pagename,
        useraction: 'viewright',
        masterlisting: true
    };

    var formdata = new FormData();
    formdata.append('action', 'fillcontent');

    ajaxrequest(
        "POST",
        '<?php echo $config->getEndpointurl(); ?>' + pagename,
        formdata,
        headersdata,
        Onsuccessfillcontent,
        OnErrorfillcontent
    );
}

function Onsuccessfillcontent(content) {
    var resultdata = content;

    if (typeof content === 'string') {
        try {
            resultdata = JSON.parse(content);
        } catch (error) {
            console.error('Invalid social media response:', error);
            return;
        }
    }

    if (!resultdata || typeof resultdata !== 'object') {
        return;
    }

    $('#facebook').val(resultdata.facebook || '');
    $('#instagram').val(resultdata.instagram || '');
    $('#youtube').val(resultdata.youtube || '');
    $('#pintrest').val(resultdata.pintrest || '');
    $('#reddit').val(resultdata.reddit || '');
    $('#x').val(resultdata.x || resultdata.twitter || '');
    $('#linkedin').val(resultdata.linkedin || '');
    $('#tiktok').val(resultdata.tiktok || '');
}

function OnErrorfillcontent(error) {
    console.error('Unable to load social media settings:', error);

    ajaxrequest(
        "POST",
        '<?php echo $config->getPage404url(); ?>',
        '',
        '',
        OnsuccessRender,
        OnErrorRender
    );
}

function OnsuccesssocialmediasettingDataSubmit(data) {
    $('#loaderprogress').hide();

    var resultdata = data;

    if (typeof data === 'string') {
        try {
            resultdata = JSON.parse(data);
        } catch (error) {
            console.error('Invalid save response:', error);
            alertify('Invalid server response.', '0');
            return;
        }
    }

    if (!resultdata || typeof resultdata !== 'object') {
        alertify('Invalid server response.', '0');
        return;
    }

    if (Number(resultdata.status) === 0) {
        alertify(resultdata.message || 'Unable to save social media settings.', '0');
    } else if (Number(resultdata.status) === 1) {
        alertify(resultdata.message || 'Social media settings saved successfully.', '1');
        fillcontent();
    } else {
        alertify(resultdata.message || 'Unexpected server response.', '0');
    }
}

function OnErrorsocialmediasettingDataSubmit(error) {
    $('#loaderprogress').hide();

    console.error('Unable to save social media settings:', error);

    ajaxrequest(
        "POST",
        '<?php echo $config->getPage404url(); ?>',
        '',
        '',
        OnsuccessRender,
        OnErrorRender
    );
}

	</script>