var loadedVars = new LoadVars();
//var sendVars = new LoadVars();

loadedVars.onLoad = function() {
	// Tænkefilm usynlig.
	userListBox.dataProvider = loadedVars.userList.split("|");
	removeUserMessage = "";
};

loadedVars.load("http://www.ekgl.dk/booking/OYNFX/adminGetUsers.php");
//sendVars.sendAndLoad("http://www.ekgl.dk/booking/OYNFX/adminGetUsers.php", loadedVars, "POST");
// Tænkefilm synlig.
removeUserMessage = "Henter brugerliste..";