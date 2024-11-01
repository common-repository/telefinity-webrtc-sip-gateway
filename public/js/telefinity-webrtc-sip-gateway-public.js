

const javaScript = document.createElement( 'script' );
javaScript.src  = 'https://embed.webrtc.tele-finity.com/Script?Token=' + tfw_object.token;
document.body.appendChild(javaScript);
jQuery(javaScript).on('load', function () {
	// setTimeout(()=> {
		var pTFRTCSIP = new Window.TFRTCSIP();
		pTFRTCSIP.Init();
		// }
	// , 1000);
	
	});
