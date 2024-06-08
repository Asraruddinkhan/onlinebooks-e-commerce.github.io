document.addEventListener('DOMContentLoaded', function () {
  const subscribeForm = document.querySelector('#newsletter form');
  
  subscribeForm.addEventListener('submit', function (event) {
    event.preventDefault();
    
    const emailInput = document.querySelector('#email');
    const email = emailInput.value;
    
    alert(`Thank you for subscribing! We will send newsletters to ${email}.`);
    
 
    emailInput.value = '';
  });
});
function validateForm(event) {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  if (username.trim() === '' || email.trim() === '' || password.trim() === '') {
    alert('All fields must be filled out');
    return;
  }
  alert('Signup successful!');
  document.getElementById('signupForm').reset();
}