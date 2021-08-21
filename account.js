	in_dtls = '';
	in_type = '';
	in_typee = '';
	numb = 0;
	st=1;
	pid = '';
	j_ttl="";
	function handleHttpResponse()
	{
		if (http.readyState == 4)
		{
			if (in_dtls != '')
			{
			switch (in_dtls){
              	
				case 'sfdtls':
					document.getElementById(in_dtls).innerHTML = http.responseText;
				break;
				default : 
					document.getElementById(in_dtls).innerHTML = http.responseText;
			  }
			

			}
		}
	}
	function getHTTPObject()
	{
		var xmlhttp;
		/*@cc_on
		@if (@_jscript_version >= 5)
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
				}
			}
		@else
		xmlhttp = false;
		@end @*/
		if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
		{
			try
			{
				xmlhttp = new XMLHttpRequest();
			}
			catch (e)
			{
				xmlhttp = false;
			}
		}
		return xmlhttp;
	}
	var http = getHTTPObject(); // We create the HTTP Object

	function checkS(e){
// capture the mouse position
				    var posx = 0;
					var posy = 0;
    if (!e) var e = window.event;
    if (e.pageX || e.pageY)
    {
        posx = e.pageX;
        posy = e.pageY;
    }
    
	
	
				document.getElementById('sfdtl').style.left = -450+posx+"px";
				document.getElementById('sfdtl').style.top = posy+"px";
				document.getElementById('sfdtl').style.display='block';
				
			}
			
	
function sfdtl(sl,e)
	{	
		checkS(e);
		in_dtls = 'sfdtl';
		
		
		time =  new Date();
		timestamp = time.getTime()+time.getSeconds();
		url = "?sl="+sl+"&timestamp="+timestamp;
		http.open("GET", "form_det.php"+url, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
	}
	

function clr()
	{	
		document.getElementById('sfdtl').style.display='None';
				
	}

