var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.infoText = infoText;

loadedVars.onLoad = function() {
	addTextMessage = "Tekst opdateret.";
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OYXVC/addText.php", loadedVars, "POST");
addTextMessage = "Vent venligst..";