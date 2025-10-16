'use strict'

// modals init
const validatorConsult = new window.JustValidate('[data-consult-form]');
const validatorCall = new window.JustValidate('[data-call-form]');

const clearFields = (form) => form.refresh();

const modal = new GraphModal({
  isOpen: (modal) => {},
  isClose: () => {
    const form = modal.modalContainer.querySelector('[data-form-reset]');
    if (form) {
      form.reset();
      clearFields(validatorConsult);
      clearFields(validatorCall)
    }
  }
});

const selector = document.querySelectorAll("input[type='tel']");
const im = new Inputmask("+7 (999)-999-99-99");
selector.forEach(input => im.mask(input))
//im.mask(selector);

validatorConsult
    .addField('[data-input-name]', [
      {
        rule: 'required',
        errorMessage: 'Введите имя!',
      },
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Введите минимум 2 буквы',
      },
      {
        rule: 'maxLength',
        value: 15,
      },
    ])
    .addField('[data-input-email]', [
      {
        rule: 'required',
        errorMessage: 'Введите корректный email!'
      },
      {
        rule: 'email',
        errorMessage: 'Введите корректный email!'
      },
    ])
    .addField('[data-input-tel]', [
      {
        rule: 'minLength',
        value: 10,
        errorMessage: 'Введите корректный телефон',
      },
      {
        validator: (value) => {
          const phone = selector.inputmask.unmaskedvalue()
          return Number(phone) && phone.length === 10;
        },
        errorMessage: 'Номер должен содержать 10 цифр',
      }
    ])
    .onSuccess((event) => {
      //event.currentTarget.submit();
      console.log('success')
      modal.modalContainer.classList.remove('graph-modal-open', 'fade', 'animate-open') // закрывает модалку с формой
      new GraphModal().open('success-consult'); // образец вызова модалки по событию
    });

validatorCall
    .addField('[data-input-name]', [
      {
        rule: 'required',
        errorMessage: 'Введите имя!',
      },
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Введите минимум 2 буквы',
      },
      {
        rule: 'maxLength',
        value: 15,
      },
    ])
    .addField('[data-input-email]', [
      {
        rule: 'required',
        errorMessage: 'Введите корректный email!'
      },
      {
        rule: 'email',
        errorMessage: 'Введите корректный email!'
      },
    ])
    .onSuccess((event) => {
      //event.currentTarget.submit();
      const currentModal = modal.modal.querySelector('[data-graph-target="call"]');
      modal.modalContainer.classList.remove('graph-modal-open', 'fade', 'animate-open') // закрывает модалку с формой
      new GraphModal().open('success-consult'); // образец вызова модалки по событию
    });
