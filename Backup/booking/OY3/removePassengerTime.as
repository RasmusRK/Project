var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.year = _root.selectedDate.getFullYear();
sendVars.month = _root.selectedDate.getMonth();
sendVars.date = _root.selectedDate.getDate()
sendVars.time = "time" + time;

sendVars.email = bookingsText[time-1].split("\n")[5];
sendVars.bookedTime = time;

loadedVars.onLoad = function() {
	// Tænkefilm usynlig.
	updateAll(_root.selectedDate);
};
// Hvis det er instruktøren som afbestiller, så kaldes den hvor der sendes brev til elev.
if (_root.accessID == 1) {
	sendVars.info = _root.info;
	sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY3/removePassengerTime.php", loadedVars, "POST");
}
	// Ellers er det eleven selv som afbestiller.
else {
	bInfo = bookingsText[time-1].split("\n");
	sendVars.info = bInfo[0] + "\n" + bInfo[1] + "\n" + bInfo[2] + "\n" + bInfo[3];
	sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY3/removePassengerTimeByPassenger.php", loadedVars, "POST");	
}
	// Tænkefilm synlig.
bookWait[time-1]._visible = true;
