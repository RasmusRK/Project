var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.year = _root.selectedDate.getFullYear();
sendVars.month = _root.selectedDate.getMonth();
sendVars.date = _root.selectedDate.getDate();

loadedVars.onLoad = function() {
	// Tænkefilm usynlig.
	bookingsText = loadedVars.times.split("|");
	updateSchedule();
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY3/getShedule.php", loadedVars, "POST");
// Tænkefilm synlig.
