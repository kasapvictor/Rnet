const body = document.querySelector('body');
/* меняем информацию в модальных окнах */
const openModal = document.querySelectorAll('[data-modal]');

openModal.forEach( item => item.addEventListener('click', changeModalContent));

function changeModalContent () {
	if (this.dataset.modal !== 'close') {

		const modalName = this.dataset.modal;
		const modal = document.querySelector(`.modal-${modalName}`);
		const modalTitle = modal.querySelector('.modal-title');
		const modalSubTitle = modal.querySelector('.modal-subtitle');
		const modalFormName = modal.querySelector('form[data-name]');

		body.style.overflow = 'hidden';

		/* меняет контент внутри маленькой формы */
		if (modalName === 'small-form') {
			modalTitle.innerHTML = this.dataset.modalTitle;
			modalSubTitle.innerHTML = this.dataset.modalSubtitle;
			modalFormName.dataset.name = `${this.dataset.modalTitle} ${this.dataset.modalSubtitle}`;
		}

		/* меняет контент внутри большой формы */
		if (modalName === 'big-form') {
			modalTitle.innerHTML = this.dataset.modalTitle;
			modalSubTitle.innerHTML = this.dataset.modalSubtitle;
			modalFormName.dataset.name = `${this.dataset.modalTitle} ${this.dataset.modalSubtitle}`;
		}

		/* меняет контент внутри простого попап */
		if (modalName === 'some-content') {
			const content = this.dataset.modalContent;
			const modalBody = modal.querySelector('.modal-body');

			modalTitle.innerHTML = this.dataset.modalTitle;
			modalSubTitle.innerHTML = this.dataset.modalSubtitle;
			modalBody.innerHTML = content;
		}

	} else {
		body.style.overflow = 'auto';
	}
}