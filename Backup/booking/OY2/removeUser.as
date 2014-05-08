var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.user = userListBox.selectedItem;

loadedVars.onLoad = function() {
	if (loadedVars.success eq "true") {
		removeUserMessage = "Bruger fjernet!";
		userListBox.removeItemAt(userListBox.selectedIndex);
	}
	else if (loadedVars.success eq "false") {
		removeUserMessage = "Brugernavn findes ikke!";
	}
	else {
		removeUserMessage = "Fejl ved kommunikation med database";
	}
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY2/removeUser.php", loadedVars, "POST");
// Tænkefilm synlig.
removeUserMessage = "Fjerner bruger..";
