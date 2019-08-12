const email = document.getElementById('Email')
const password = document.getElementById('password')
const firstname = document.getElementById('firstname')
const surname = document.getElementById('surname')
const confirmpassword = document.getElementById('confirm_password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('Click', (e) => {
  let messages = []
  if (surname.value === '' || surname.value == null) {
    messages.push('surname is required is required')
  }
  if (firstname.value === '' || firstname.value == null) {
    messages.push('firstname is required')
  }
  if (email.value === '' || email.value == null) {
    messages.push('Email is required')
  }
  if (password.value.length <= 4) {
    messages.push('Password must be longer than 4 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})