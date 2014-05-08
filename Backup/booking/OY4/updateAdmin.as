var loadedVars = new LoadVars();
var sendVars = new LoadVars();
sendVars.adminUser = adminUser;
sendVars.adminPass = adminPass;
sendVars.newAdminUser = newAdminUser;
sendVars.newAdminPass = newAdminPass;

loadedVars.onLoad = function() {
	if (loadedVars.success eq "true") {
		AdminUserMessage = "Administrator opdateret.";
		clearUpdateAdminFields();
		}
	else if (loadedVars.success eq "false") {
		AdminUserMessage = "Forkert brugernavn/password";
		clearUpdateAdminFields();
	}
	else {
		AdminUserMessage = "Fejl ved kommunikation med database";
		clearUpdateAdminFields
	}
};

sendVars.sendAndLoad("http://www.ekgl.dk/booking/OY4/updateAdmin.php", loadedVars, "POST");
// Tænkefilm synlig.
