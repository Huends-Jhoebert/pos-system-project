
	var username = document.querySelector('.username');
	var logInResult = document.querySelector('.log-in-result');
	var password = document.querySelector('.password');

	username.addEventListener('focus', hideLogInResult);

	function hideLogInResult(event){

		logInResult.style.display = 'none';
	}
	