const firstName = document.getElementById('input-first-name');
const lastName = document.getElementById('input-last-name');
const emailInput = document.getElementById('input-email');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    let name = firstName.value + " " + lastName.value;
    let email = emailInput.value;

    alert("Hi " + name +  ", a message has been sent to " + email);
})