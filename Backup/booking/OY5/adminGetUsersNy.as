var loadedVars = new LoadVars();
//var sendVars = new LoadVars();

loadedVars.onLoad = function() {
	// Tænkefilm usynlig.
	userListBox.dataProvider = loadedVars.userList.split("|");
	removeUserMessage = "";
};

loadedVars.load("http://www.ekgl.dk/booking/OY5/adminGetUsers.php");
//sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY5/adminGetUsers.php", loadedVars, "POST");
// Tænkefilm synlig.
removeUserMessage = "Henter brugerliste..";
