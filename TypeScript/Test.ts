/*
function JumpScare(max) {
  return Math.floor(Math.random() * 1000)
}

if (JumpScare.value === 666) {

} else {

}
*/

const JumpScare = (100, 999) => Math.floor(Math.random() * (100 - 999)) + 100;