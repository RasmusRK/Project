var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.user = user;
sendVars.pass = pass;
sendVars.name = name;
sendVars.email = email;
sendVars.phone = phone;
sendVars.accessID = opretType.selectedItem.data;


loadedVars.onLoad = function() {
	if (loadedVars.success eq "true") {
		addUserMessage = "Bruger tilføjet!";
		temp = new Array();
		temp = userListBox.dataProvider;
		temp.push(sendVars.user);
		userListBox.dataProvider = temp;
	}
	else if (loadedVars.success eq "false") {
		addUserMessage = "Brugernavn findes allerede!";
	}
	else {
		addUserMessage = "Fejl ved kommunikation med database";
	}
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY3/addUser.php", loadedVars, "POST");
// Tænkefilm synlig.
