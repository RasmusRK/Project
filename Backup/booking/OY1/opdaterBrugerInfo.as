var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.user = userInfo;
sendVars.pass = passInfo;
sendVars.name = nameInfo;
sendVars.email = emailInfo;
sendVars.phone = phoneInfo;
if (brugerRettighed.selectedIndex == 0) {
	sendVars.accessID = 3;
}
else if (brugerRettighed.selectedIndex == 1) {
	sendVars.accessID = 2; 
}
else if (brugerRettighed.selectedIndex == 2) {
	sendVars.accessID = 1; 
}

loadedVars.onLoad = function() {
	if (loadedVars.success eq "true") {
		removeUserMessage = "Informationer opdateret.";
	}
	else if (loadedVars.success eq "false") {
		removeUserMessage = "Fejl ved brugervalg!";
	}
	else {
		removeUserMessage = "Fejl ved kommunikation med database!";
	}
};
userInfo = "";
passInfo = "";
nameInfo = "";
emailInfo = "";
phoneInfo = "";
removeUserMessage = "Opdaterer bruger information..";
sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY1/opdaterBrugerInfo.php", loadedVars, "POST");
// Tænkefilm synlig.
