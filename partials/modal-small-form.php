<div class="modal-small-form">
	<div class="form-block w-form">
		<div class="form-header">
			<h3 class="heading modal-title"></h3>
			<div class="form-subtitle modal-subtitle"></div>
		</div>
		<form data-name="Заявка из слайдера" class="form">
			<div class="form-body">
				<div class="form-row">
					<input
							type="text"
							class="field w-input"
							autofocus="true"
							maxlength="256"
							name="name"
					        data-name="Имя"
							placeholder="Иванов Иван * (обязательное поле)"
							id="small-form-name"
					>
					<!-- required="" -->
				</div>
				<div class="form-row">
					<input
							type="tel"
							class="field w-input"
							maxlength="256"
							name="phone"
							data-name="Телефон"
							placeholder="+79012034050 * (обязательное поле)"
							id="small-form-phone"
					>
					<!-- required="" -->
				</div>
				<div class="form-row">
					<label class="w-checkbox checkbox-field">
						<input
								type="checkbox"
								id="small-form-agree-policy"
								name="checkbox"
								data-name="Согласие на обработку персональных данных"
								required=""
								class="w-checkbox-input checkbox">
						<span class="checkbox-label w-form-label">
							Согласен на <a
									href="privacy-policy"
									target="_blank"
									class="link-text">обработку персональных данных
							</a>
						</span>
					</label>
				</div>
				<div class="form-row">
					<div class="wrap-white-button">
						<input
								type="submit"
								value="Отправить" data-wait="..."
								class="white-button-text w-button">
					</div>
				</div>
			</div>
		</form>
		<div class="success-message w-form-done">
			<div>Ваше сообщение отправлено!</div>
		</div>
		<div class="error-message w-form-fail">
			<div>Ошибка отправки сообщения!</div>
		</div>
		<div data-modal="close" data-w-id="ff99efb7-5721-7015-64ab-774305d20648" class="form-close-button">×</div>
	</div>
	<div data-modal="close" data-w-id="ff99efb7-5721-7015-64ab-774305d2064a" class="modal-close-background"></div>
</div>