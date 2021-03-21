

// light mode script
var buttonSwitch = document.querySelector('.btn-switch').addEventListener('click', lightMode);

var buttonPress = 0;

function lightMode(){

   buttonPress+=1;
   
	  if (buttonPress % 2 != 0){
	  navBar = document.querySelector('.navbar-light');
	  navLink = document.querySelector('.nav-fas');
	  buttonLogoutLogo = document.querySelector('.power-off-logo');
	  buttonLogout = document.querySelector('.btn-log-out');
	  mainPageContent = document.querySelector('.page-content');
	  dashboardName = document.querySelector('.dashboard-main');
	  footer = document.querySelector('.light-footer');
	  bulb = document.querySelector('.bulb');

	  navBar.style.backgroundColor = '#fff';

	  navLink.style.color = '#7F7F7F';

	  buttonLogoutLogo.style.color = 'red';

	  buttonLogout.classList.add('bg-light');

	  mainPageContent.style.backgroundColor = '#F4F6F9';

	  dashboardName.style.color = '#083E52';

	  footer.style.backgroundColor = '#fff';

	  bulb.style.color = "black";


   }

   else if (buttonPress % 2 == 0){
	  navBar = document.querySelector('.navbar-light');
	  navLink = document.querySelector('.nav-fas');
	  buttonLogoutLogo = document.querySelector('.power-off-logo');
	  buttonLogout = document.querySelector('.btn-log-out');
	  mainPageContent = document.querySelector('.page-content');
	  dashboardName = document.querySelector('.dashboard-main');
	  footer = document.querySelector('.light-footer');
	  bulb = document.querySelector('.bulb');

	  navBar.style.backgroundColor = '#083E52';

	  navLink.style.color = '#fff';

	  buttonLogoutLogo.style.color = '#fff';

	  buttonLogout.classList.remove('bg-light');

	  mainPageContent.style.backgroundColor = '#073546';

	  dashboardName.style.color = '#fff';

	  footer.style.backgroundColor = '#083E52';

	  bulb.style.color = "#fff";

   }
}
