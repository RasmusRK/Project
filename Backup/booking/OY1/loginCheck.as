var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.user = user;
sendVars.pass = pass;

loadedVars.onLoad = function() {
	if (loadedVars.loginCorrect eq "true") {
		_root.user = loadedVars.user;
		_root.name = loadedVars.name;
		_root.email = loadedVars.email;
		_root.phone = loadedVars.phone;
		_root.accessID = loadedVars.accessID;
		_root.pass = pass;
		
		// Informationerne som man skriver i bookingFeltet.
		_root.setBookText(_root.accessID);
		//_root.info = _root.name + "\n" + _root.accessID + "\n" + _root.email;
		
		
		gotoAndStop("LoggedIn");
		_root.updateSchedule();
		clearFields();
		message._visible = false;
	}
	// Ellers hvis forkert bruger el password:
	else {
		clearFields();
		message._visible = true;
	}
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY1/loginCheck.php", loadedVars, "POST");
// Tænkefilm synlig.
