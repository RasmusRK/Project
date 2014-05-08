var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.infoText = infoText;

loadedVars.onLoad = function() {
	addTextMessage = "Tekst opdateret.";
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY2/addText.php", loadedVars, "POST");
addTextMessage = "Vent venligst..";
