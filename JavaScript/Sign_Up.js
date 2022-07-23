const Username = document.getElementById('signupUsername');
const SignUp = document.getElementById('createAccount');
const Email = document.getElementById('Email');
const Password = document.getElementById('Pass');
const ConfirmPassword = document.getElementById('ConfPass');

SignUp.addEventListener('submit', e => {
  e.preventDefault();
  
  CheckInput();
});

const setError = (element, message) => {
  const InputControl = element.parentElement;
  const ErrDisplay = InputControl.querySelector('.error')

  ErrDisplay.innerText = message;
  InputControl.classList.add('error');
  InputControl.classList.remove('success');
};

const setSuccess = element => {
  const InputControl = element.parentElement;
  const ErrDisplay = InputControl.querySelector('.error')

  ErrDisplay.innerText = '';
  InputControl.classList.add('success');
  InputControl.classList.remove('error');
};


// Email Validate
const ValidEmail = Email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(Email).toLowerCase());
}

const CheckInput = () => {

  const Username_VAL = Username.value.trim();
  const Email_VAL = Email.value.trim();
  const Password_VAL = Password.value.trim();
  const ConfirmPassword_VAL = ConfirmPassword.value.trim();

  // Username 
  if (Username_VAL === '') {
    setError(Username, 'A Username is needed!');
  } else {
    setSuccess(Username);
  }

  // Email
  if (Email_VAL === '') {
    setError(Email, 'A Email is Needed!');
  } else if (!ValidEmail(Email_VAL)) {
    setError(Email, 'Please use a VALID Email address!');
  } else {
    setSuccess(Email);
  }

  // Password
  if (Password_VAL === '') {
    setError(Password, 'Please make a STRONG Password!');
  } else if (Password_VAL.length < 8) {
    setError(Password, 'Password needs to be at LEAST 8 Characters!');
  } else if (Password_VAL.length > 25) {
    setError(Password, 'Your Password is to Long! Please create a smaller Password!');
  } else if (Password_VAL === 'password') {
    setError(Password, 'Did you really tried to make your password "Password?"')
  } else {
    setSuccess(Password);
  }

  // Pass Confirm
  if (ConfirmPassword_VAL === '') {
    setError(ConfirmPassword, 'You need to confirm your Password!');
  } else if (ConfirmPassword_VAL !== Password_VAL) {
    setError(ConfirmPassword, 'Passwords do not match!')
  } else if (ConfirmPassword_VAL === 'password') {
    setError(ConfirmPassword, 'Bruh')
  } else {
    setSuccess(ConfirmPassword);
  }
};

if (CheckInput === true) {
  console.log('User Signed Up!')
} else {
  SignUp.addEventListener('submit', e => {    
    CheckInput();
  });
}