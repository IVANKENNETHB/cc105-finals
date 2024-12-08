const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signupForm = document.getElementById('signup');
const signinForm = document.getElementById('signin');

signUpButton.addEventListener('click', () => {
    signinForm.style.display = 'none';
    signupForm.style.display = 'block';
});

signInButton.addEventListener('click', () => {
    signupForm.style.display = 'none';
    signinForm.style.display = 'block';
});