var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.user = userListBox.getItemAt(userListBox.selectedIndex);

loadedVars.onLoad = function() {
	if (loadedVars.loginCorrect eq "true") {
		removeUserMessage = "Informationer hentet.";
		userInfo = loadedVars.user;
		passInfo = loadedVars.pass;
		nameInfo = loadedVars.name;
		emailInfo = loadedVars.email;
		phoneInfo = loadedVars.phone;
		// Hvis det er privat:
		if (loadedVars.accessID eq "2") {
			brugerRettighed.selectedIndex = 1;
		} 
		// Hvis det er instruktør:
		else if (loadedVars.accessID eq "1") {
			brugerRettighed.selectedIndex = 2;
		}
		// Hvis det er elev
		else if (loadedVars.accessID eq "3") {
			brugerRettighed.selectedIndex = 0;
		}
	}
	else if (loadedVars.loginCorrect eq "false") {
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
removeUserMessage = "Henter bruger information..";
sendVars.sendAndLoad("http://www.ekgl.dk/booking/OYNFX/hentBrugerInfo.php", loadedVars, "POST");
// Tænkefilm synlig.