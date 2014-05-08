var lVars = new LoadVars();
//var sendVars = new LoadVars();

lVars.onLoad = function() {
	// Tænkefilm usynlig.
	_root.infoText = lVars.infoText;
};
lVars.load("http://www.ekgl.dk/booking/OYNFX/getText.php");
//sendVars.Load("http://www.ekgl.dk/booking/OYNFX/getText.php", loadedVars, "POST");
// Tænkefilm synlig.