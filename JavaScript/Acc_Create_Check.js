let UserEmail = 'sdfgsdfsdf@hotmail.com' || [String]
let Password = 'sdfdsfdsfsdf*' || [String]

let AccountCreateCheck = function(myString) {
  if ((myString.includes("@gmail.com", "@yahoo.com")) && (myString.length > 6)) {

    return true
  }
  return false
}

let PasswordCheck = function(pass) {
  if ((!pass.includes("%", "*", "|", "^")) && (pass.length > 8)) {
    
    return true
  }
  return false
}