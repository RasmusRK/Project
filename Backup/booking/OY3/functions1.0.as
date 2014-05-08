// Lyttefunktion til kalenderen.
bookCalendarListener = new Object();
bookCalendarListener.change = function(eventObject){
	if (bookCalendar.selectedDate != null){
		_root.selectedDate = bookCalendar.selectedDate;
		tellTarget(daySchedule.loadAllWait) {play();}
		daySchedule.loadAllWait._visible = true;
		updateAll(_root.selectedDate);
	}
}

// Initialisering.
bookCalendar.addEventListener("change", bookCalendarListener);
bookBackgrounds = [daySchedule.BookBack8, daySchedule.BookBack9, daySchedule.BookBack10,daySchedule.BookBack11,daySchedule.BookBack12,daySchedule.BookBack13,daySchedule.BookBack14,daySchedule.BookBack15,daySchedule.BookBack16,daySchedule.BookBack17,daySchedule.BookBack18,daySchedule.BookBack19,daySchedule.BookBack20,daySchedule.BookBack21];
bookTextfields = [daySchedule.tekst8,daySchedule.tekst9,daySchedule.tekst10,daySchedule.tekst11,daySchedule.tekst12,daySchedule.tekst13,daySchedule.tekst14,daySchedule.tekst15,daySchedule.tekst16,daySchedule.tekst17,daySchedule.tekst18,daySchedule.tekst19,daySchedule.tekst20,daySchedule.tekst21];
bookButtons = [daySchedule.knapBook8,daySchedule.knapBook9,daySchedule.knapBook10,daySchedule.knapBook11,daySchedule.knapBook12,daySchedule.knapBook13,daySchedule.knapBook14,daySchedule.knapBook15,daySchedule.knapBook16,daySchedule.knapBook17,daySchedule.knapBook18,daySchedule.knapBook19,daySchedule.knapBook20,daySchedule.knapBook21];
bookOverButtons = [daySchedule.knapBookOver8,daySchedule.knapBookOver9,daySchedule.knapBookOver10,daySchedule.knapBookOver11,daySchedule.knapBookOver12,daySchedule.knapBookOver13,daySchedule.knapBookOver14,daySchedule.knapBookOver15,daySchedule.knapBookOver16,daySchedule.knapBookOver17,daySchedule.knapBookOver18,daySchedule.knapBookOver19,daySchedule.knapBookOver20,daySchedule.knapBookOver21];
cancelButtons = [daySchedule.knapCancel8,daySchedule.knapCancel9,daySchedule.knapCancel10,daySchedule.knapCancel11,daySchedule.knapCancel12,daySchedule.knapCancel13,daySchedule.knapCancel14,daySchedule.knapCancel15,daySchedule.knapCancel16,daySchedule.knapCancel17,daySchedule.knapCancel18,daySchedule.knapCancel19,daySchedule.knapCancel20,daySchedule.knapCancel21];
bookPassengerButtons = [daySchedule.knapPassengerBook8,daySchedule.knapPassengerBook9,daySchedule.knapPassengerBook10,daySchedule.knapPassengerBook11,daySchedule.knapPassengerBook12,daySchedule.knapPassengerBook13,daySchedule.knapPassengerBook14,daySchedule.knapPassengerBook15,daySchedule.knapPassengerBook16,daySchedule.knapPassengerBook17,daySchedule.knapPassengerBook18,daySchedule.knapPassengerBook19,daySchedule.knapPassengerBook20,daySchedule.knapPassengerBook21];
removePassengerButtons = [daySchedule.knapRemovePassenger8,daySchedule.knapRemovePassenger9,daySchedule.knapRemovePassenger10,daySchedule.knapRemovePassenger11,daySchedule.knapRemovePassenger12,daySchedule.knapRemovePassenger13,daySchedule.knapRemovePassenger14,daySchedule.knapRemovePassenger15,daySchedule.knapRemovePassenger16,daySchedule.knapRemovePassenger17,daySchedule.knapRemovePassenger18,daySchedule.knapRemovePassenger19,daySchedule.knapRemovePassenger20,daySchedule.knapRemovePassenger21];
bookWait = [daySchedule.bookWait8,daySchedule.bookWait9,daySchedule.bookWait10,daySchedule.bookWait11,daySchedule.bookWait12,daySchedule.bookWait13,daySchedule.bookWait14,daySchedule.bookWait15,daySchedule.bookWait16,daySchedule.bookWait17,daySchedule.bookWait18,daySchedule.bookWait19,daySchedule.bookWait20,daySchedule.bookWait21];

function updateSchedule() {
	for (i = 0; i < bookingsText.length; i++) {
		bookButtons[i]._visible = false;
		cancelButtons[i]._visible = false;
		bookOverButtons[i]._visible = false;
		bookPassengerButtons[i]._visible = false;
		removePassengerButtons[i]._visible = false;
		bookWait[i]._visible = false;
		
		
		var bookingsInfo:Array = bookingsText[i].split("\n");
		
		// Sætter tekstfeltet i skemaet.
		// Nulstiller først.
		bookTextfields[i].text = "";
		switch (Number(bookingsInfo[1])) {
  			case 0:
				bookTextfields[i].text = "Flychef";
    			break;
  			case 1:
    			bookTextfields[i].text = "Instruktør: " + bookingsInfo[0];
				// Tilføjer evt. passager.
				if (!(bookingsInfo[4] eq "undefined")) bookTextfields[i].text += "\nElev: " + bookingsInfo[4];
				break;
  			case 2:
    			bookTextfields[i].text = "Pilot: " + bookingsInfo[0];
    			break;
		}
		

		// Hvis tiden er booked
		if (!(bookingsText[i] eq "")) {
			
			
			
			// Indstiller korrekt farve alt efter hvilket accessID som har booked.
			if (bookingsInfo[1] eq "0") {
				bookBackgrounds[i].gotoAndStop("FlychefBooked");
			}
			else if (bookingsInfo[1] eq "1") {
				// Skal undersøge om en passager er booked
				if (!(bookingsInfo[4] eq "undefined")) bookBackgrounds[i].gotoAndStop("PassengerBooked");
				// Hvis ingen passager er booked.
				else bookBackgrounds[i].gotoAndStop("InstruktorBooked");
			}
			else if (bookingsInfo[1] eq "2") {
				bookBackgrounds[i].gotoAndStop("PrivatBooked");
			}
			// Hvis det er for sent at gøre noget.
			if (_root.selectedDate.getTime() - _root.currentDate.getTime() <= 86400000 & _root.accessID != 0) {
				bookBackgrounds[i].gotoAndStop("FlychefBooked");
			}
			
			
			// Hvis det er brugeren selv som har reserveret:
			if (_root.user eq bookingsInfo[3] && !(_root.user eq "undefined")) {
				
				// Hvis man ikke har en passager:
				if (bookingsInfo[4] eq "undefined") cancelButtons[i]._visible = true;
				// Hvis man har en passager:
				else removePassengerButtons[i]._visible = true;
			}
			// Hvis brugeren har reserveret sig som elev:
			else if (bookingsInfo[6] eq _root.user && !(_root.user eq "undefined") && _root.selectedDate.getTime() - _root.currentDate.getTime() > 86400000) {
				removePassengerButtons[i]._visible = true;
			}
			// Hvis personen har lavere accessID, dermed højere prioritet:
			else if (_root.accessID < Number(bookingsInfo[1]) && (_root.selectedDate.getTime() - _root.currentDate.getTime() > 86400000 || _root.accessID == 0)) {
				bookOverButtons[i]._visible = true;
			}
			// Hvis det er en instruktør som har booked, og det er en pilot som er logget ind, og der ikke er booked nogen passager:
			else if (bookingsInfo[1] eq "1" && _root.accessID >= 2 && bookingsInfo[4] eq "undefined" && !(_root.user eq "undefined") && _root.selectedDate.getTime() - _root.currentDate.getTime() > 86400000) {
				bookPassengerButtons[i]._visible = true;
			}
		}
		// Ellers hvis tiden er fri.
		else {
			bookBackgrounds[i].gotoAndStop("NotBooked");
			if (!(_root.user eq undefined) && _root.accessID < 3) {
				bookButtons[i]._visible = true;
			}
		}
	}
	tellTarget(daySchedule.loadAllWait) {stop();}
	daySchedule.loadAllWait._visible = false;
}
function setTodaysSchedule (selectedDate) {
	#include "getSchedule.as"
}

function setViewDate(selectedDate) {
	daySchedule.ViewDate.text = _root.bookCalendar.dayNames[selectedDate.getDay()] + " d. " + selectedDate.getDate() + " " + _root.bookCalendar.monthNames[selectedDate.getMonth()] + " " + selectedDate.getFullYear();
}

function updateAll (selectedDate) {
	setViewDate(selectedDate);
	setTodaysSchedule(selectedDate);
}

function bookTime (time) {
	#include "bookTime.as"
}

function cancelTime (time) {
	#include "cancelTime.as"
}

function bookOverTime (time) {
	#include "bookOverTime.as"
}

function bookPassengerTime (time) {
	#include "bookPassengerTime1.0.as"
}

function removePassengerTime (time) {
	#include "removePassengerTime.as"
}

function setBookText (accessID) {
	// ALTSÅ : [0] : name , [1] : accessID, [2] : email, [3] : username, [4] : passager (undefined som standard), [5] : passenger email (undefined som standard), [6] : passenger username
	_root.info = _root.name + "\n" + accessID + "\n" + _root.email + "\n" + _root.user;
}

function setInfoText() {
	#include "setInfoTextNy.as"
}

_root.currentDate = new Date();
_root.selectedDate = new Date();
setInfoText();
updateAll (selectedDate);