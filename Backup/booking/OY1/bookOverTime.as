var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.year = _root.selectedDate.getFullYear();
sendVars.month = _root.selectedDate.getMonth();
sendVars.date = _root.selectedDate.getDate()
sendVars.time = "time" + time;
sendVars.info = _root.info;
sendVars.email = bookingsText[time-1].split("\n")[2];
sendVars.bookedTime = time;

loadedVars.onLoad = function() {
	updateAll(_root.selectedDate);
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY1/bookOverTime.php", loadedVars,"POST");
// Tænkefilm synlig.
bookWait[time-1]._visible = true;
