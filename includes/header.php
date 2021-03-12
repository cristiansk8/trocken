<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
 <script async type="text/javascript" src="https://smart-home.com.co/JavaScript/LeadControlAPIV2.js"></script>
    <script language="javascript" type="text/javascript">
		
        var _ccode = "0d84b6ac";
        var _pcode = "1012";
        var _locationSourceId = "84881d77-d3c7-4c23-b9f6-5d632273aae1";  //Web
        var _ownerId = "cfdd426c-9de9-4f5d-b9b7-0b13793925e1";
        var _projectId = "1012";
        var _documentId = null;
        var _actionId = "0e45af94-8296-49ed-ab64-2ab75346f46b";
        var _prospectId = null;
        var _prospectModuleId = null;
        var _eventComment = "Cita programada para visitar sala de ventas.";
        var _eventSubject = "Cita Visita Proyecto Abadia de la Sierra";
		
        document.addEventListener('click', function (e) {
             if (e.target && e.target.id == 'btn-enviar') {
                getEvents();
				 //submitLeadForm(e, "u25UtVxwzeMG27a2g7oCBnJKle5eSUY4cF9lGADSQgXpA26SnFaRZ775cwU93J8C");
            }   
        });
		
		function getEvents()
		{
			    getData("https://api.smart-home.com.co/api/v1/getEvents/" + _ccode + "/" + _pcode + "/"
                + _ownerId + "/" + _actionId + "/" + "2020-07-01" + "/" + "2020-08-20" + "/", getCalendarEvents);
		}
		
		function getCalendarEvents(calendarEvents) {
            var monthlyCalendarEvents = JSON.parse(calendarEvents);
        }
		
        function getData(endpoint, callback) {

            try {
                var req = new XMLHttpRequest();
                req.open('GET', endpoint, true);
                req.onreadystatechange = function (aEvt) {
                    if (req.readyState == 4) {
                        if (req.status == 200)
                            if (callback) {
                                callback(req.responseText);
                            }
                            else
                                alert("🤖 Algo ha pasado. ");
                    }
                };

                req.send(null);
            }
            catch (err) {
                alert("🤖 Algo ha pasado. " + err.message);
            }
        }	
		
        async function postData(endpoint, jsonData, callback) {

            try {
                var data = JSON.stringify(jsonData);

                var url = endpoint;

                var xhr = new XMLHttpRequest();

                if ("withCredentials" in xhr) {
                    xhr.open('POST', url, true);
                } else if (typeof XDomainRequest != "undefined") {
                    xhr = new XDomainRequest();
                    xhr.open('POST', url);
                } else {
                    xhr = null;
                }

                xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
                xhr.setRequestHeader("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

                xhr.onload = function () {
                    if (xhr.status == 200) {
                        if (callback) {
                            return callback(xhr.response);
                        }
                    }
                    else if (xhr.status != 200) {
                        alert("Error al crear registro. " + xhr.statusText + " " + xhr.response);
                    }
                }

                xhr.send(data);
            }
            catch (err) {
                alert("🤖 Algo ha pasado. " + err.message);
            }
        }

    </script>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->


<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
