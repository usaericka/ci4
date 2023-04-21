
const submit = document.querySelector('#submit');
const modalContent = document.querySelector("#feedback .modal-body");

const name = document.querySelector('#name');
const email = document.querySelector('#email');
const message = document.querySelector('#message');

submit.addEventListener('click', () => {
   modalContent.innerHTML = `<p>Name: ${name.value}</p> <p>Email: ${email.value}</p> <p>Message: ${message.value}</p>`;
});

