const forms = document.querySelectorAll('form');

forms.forEach( form => form.addEventListener('click', formSubmit) );

function formSubmit (e) {
	console.log(e);
	const formData = new FormData(this.form);
	const errors = null;

	if (!errors) {
		//send(formData);
	}
}

/*
 * отправляет данные формы в файл mail.php
 * ответом приходит статус отправки
 */
async function send (formData) {
	const form = this;
	const response = await fetch('wp-content/themes/rnet/mailer/mail.php', {
		method: 'POST',
		body: formData
	});

	const result = await response.text();

	console.log(result);
}