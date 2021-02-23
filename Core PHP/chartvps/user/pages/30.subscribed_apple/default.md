---
title: 'Subscribed'
body_classes: 'title-center title-h1h2 centered subscribed'
visible: false
---

	
<script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").ready(function(event){
               $.getJSON('https://simfin.com/api/v1/companies/id/111052/ratios?indicators=4-0&api-key=XW3uhMVV7XnlQt80JaMIHLO6UwhmGy0Q', function(jd) {
                  $('#stage').html('<p> Indicator ID: ' + jd[0].indicatorId + '</p>');
                  $('#stage').append('<p>Item: ' + jd[0].indicatorName+ '</p>');
                  $('#stage').append('<p> Value: ' + jd[0].value+ '</p>');
                  console.log(jd);
               });
            });
				
         });

      </script>

<h3>Apple, Inc.</h3>

 <div id = "stage" style = "background-color:#efefef;">
         STAGE
      </div>
 <div id = "driver"></div>
