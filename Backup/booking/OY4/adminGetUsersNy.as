var loadedVars = new LoadVars();
//var sendVars = new LoadVars();

loadedVars.onLoad = function() {
	// Tænkefilm usynlig.
	userListBox.dataProvider = loadedVars.userList.split("|");
	removeUserMessage = "";
};

loadedVars.load("http://www.ekgl.dk/booking/OY4/adminGetUsers.php");
//sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY4/adminGetUsers.php", loadedVars, "POST");
// Tænkefilm synlig.
removeUserMessage = "Henter brugerliste..";
