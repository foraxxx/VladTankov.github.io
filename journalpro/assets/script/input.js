document.getElementById('autotization').addEventListener("submit", checkForm);

function checkForm(event) {

	event.preventDefault();
	var e = document.getElementById('autotization');

	var login = e.login.value;
	var pass = e.pass.value;

	var error = "";
	if(login == "" || pass == "") {
		error = "Заполните все поля";
	} else if(login == "student" && pass == "student") {
		window.location = 'student/StudentMain.html';
	} else if(login == "teacher" && pass == "teacher") {
		window.location = 'teacher/timetable.html';
	} else {
		error = "Неправильный логин или пароль";
	}

	if(error != "") {
		document.getElementById('error').innerHTML = error;
	}

}
