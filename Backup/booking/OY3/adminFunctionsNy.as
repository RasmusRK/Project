

buttonLogUdListener = new Object();
buttonLogUdListener.click = function (evt){
	getURL("index.html", "_self");
}
logUdButton.addEventListener("click", buttonLogUdListener);

buttonAddUserListener = new Object();
buttonAddUserListener.click = function (evt){
	// Hvis alle felter er udfydte:
	if ( 
	!(user eq "") && 
	!(pass eq "") && 
	!(passGentag eq "") && 
	!(name eq "") &&
	!(email eq "") &&
	!(phone eq "") ) 
	{
		// Hvis så passwordet er skrevet korrekt 2 gange.
		if( pass eq passGentag ){
 			#include "addUser.as"
			clearAddUserFields();
			addUserMessage = "Tilføjer bruger..";
		}
		else {
			addUserMessage = "Fejl ved indtastelse\n af password.";
		}
	}
	// Ellers er der en eller flere informationer som ikke er udfyldt
	else {
		addUserMessage = "Ikke alle felter er udfyldte.";
	}
}
addUserButton.addEventListener("click", buttonAddUserListener);

buttonFjernBrugerListener = new Object();
buttonFjernBrugerListener.click = function (evt){
	if (userListBox.selectedItem == undefined) {
		removeUserMessage = "Markér bruger.";
	}
	else {
		#include "removeUser.as"
	}
}
fjernBrugerButton.addEventListener("click", buttonFjernBrugerListener);


buttonClearUpToDateListener = new Object();
buttonClearUpToDateListener.click = function (evt){
	#include "clearUpToDate.as"
}
clearUpToDateButton.addEventListener("click", buttonClearUpToDateListener);

buttonUserInfoListener = new Object();
buttonUserInfoListener.click = function (evt){
	#include "hentBrugerInfo.as"
}
userInfoButton.addEventListener("click", buttonUserInfoListener);


buttonUpdateUserListener = new Object();
buttonUpdateUserListener.click = function (evt){
	#include "opdaterBrugerInfo.as"
}
updateUserButton.addEventListener("click", buttonUpdateUserListener);


buttonUpdateAdminListener = new Object();
buttonUpdateAdminListener.click = function (evt){
	// Hvis alle felter er udfydte:
	if ( 
	!(adminUser eq "") && 
	!(adminPass eq "") && 
	!(newAdminUser eq "") && 
	!(newAdminPass eq "") &&
	!(newAdminPassGentag eq "") ) 
	{
		// Hvis så passwordet er skrevet korrekt 2 gange.
		if( newAdminPass eq newAdminPassGentag ){
 			#include "updateAdmin.as"
			clearUpdateAdminFields();
			AdminUserMessage = "Opdaterer administrator..";
		}
		else {
			AdminUserMessage = "Fejl ved indtastelse\n af nyt password.";
		}
	}
	// Ellers er der en eller flere informationer som ikke er udfyldt
	else {
		AdminUserMessage = "Ikke alle felter er udfyldte.";
	}
}
updateAdminButton.addEventListener("click", buttonUpdateAdminListener);

updateTextListener = new Object();
updateTextListener.click = function (evt){
	#include "opdaterText.as"
}
updateText.addEventListener("click", updateTextListener);

function clearAddUserFields() {
	user = "";
	pass = "";
	passGentag = "";
	name = "";
	email = "";
	phone = "";
}

function clearUpdateAdminFields() {
	adminUser = "";
	adminPass = "";
	newAdminUser = "";
	newAdminPass = "";
	newAdminPassGentag = "";
}


// Initialisering:
clearAddUserFields();
clearUpdateAdminFields();
#include "adminGetUsersNy.as"
#include "setInfoTextNy.as"
// NOTE SETINFOTEXT .as filen er i adminGetUsers.as !!!!!!!!!

stop();