var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.year = _root.selectedDate.getFullYear();
sendVars.month = _root.selectedDate.getMonth();
sendVars.date = _root.selectedDate.getDate()
sendVars.time = "time" + time;
sendVars.pilot = _root.name;
sendVars.email = _root.email;
sendVars.pilotUser = _root.user;

loadedVars.onLoad = function() {
	updateAll(_root.selectedDate);
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY2/bookPassengerTime.php", loadedVars,"POST");
// Tænkefilm synlig.
bookWait[time-1]._visible = true;
