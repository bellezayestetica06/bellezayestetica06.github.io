jQuery.fn.extend({
	runSticker: function () {
		var body = '';
		
		body = '<link href="css/main.css" rel="stylesheet" type="text/css">';
		body += '<div class="clients"><div class="recent-customers">';
		body += '<center><h3>Nuestros Ultimos Clientes</h3></center><div id="nt-example1-container">';
		body += '<ul id="nt-example1"></ul></div>';
		body += '<div class="ticker-bottom">Data provided by <img width="83" height="16" style="border:none; vertical-align:baseline; width:83px; height:16px; padding:0px; float:none;" src="images/logo.gif" alt="Verified Data">on <span id="date"></span></div>';
		body += '</div></div><script type="text/javascript"  src="js/jquery.newsTicker.js"></script>';
		
		$(this).html(body);

		var nt_example1 = $('#nt-example1').newsTicker({
			row_height: 35,
			max_rows: 7,
			duration: 1000,
			autostart: 1,
			pauseOnHover: 0
		});	
		
		var d = new Date();
		document.getElementById("date").innerHTML = d.toDateString();
	
	 	$.ajax({
			url: "items.json",
			dataType: "text",
			success: function(data) {
				var html = "<li>";
	  		var json = $.parseJSON(data);
				
				for( var i=0; i < json.items.length; i++ ) {
	
					if ( (i % 4) == 0 && i != 0 ) {
						html += "</li><li>";
					}
					
					html += "<span>" + json.items[i].name + "</span>";
				}
				$("#nt-example1").html(html);
			}
		});

  }
});
