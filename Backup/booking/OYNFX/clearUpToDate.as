var loadedVars = new LoadVars();
var sendVars = new LoadVars();

_root.todayDate = new Date();

sendVars.year = _root.todayDate.getFullYear();
sendVars.month = _root.todayDate.getMonth();
sendVars.date = _root.todayDate.getDate();

loadedVars.onLoad = function() {
	if (loadedVars.success eq "true") {
		clearUpToDateMessage = "Kalenderen er tømt til dato!";
		fjernBruger = "";
	}
	else {
		clearUpToDateMessage = "Fejl ved kommunikation med database";
	}
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OYNFX/clearUpToDate.php", loadedVars, "POST");
// Tænkefilm synlig.
clearUpToDateMessage = "Tømmer til dato..";