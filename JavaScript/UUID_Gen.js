//document.getElementById("UUID_GEN").innerHTML =

  //UUID_GEN = Math.floor(Math.random() * 999999999999999) + 100000000000000;

//UUID_GEN.console.log(UUID_GEN)

//while

const ID_UUID_GEN = document.getElementById('UUID_GEN').innerHTML

function UUID_Check(UUID) {
  const Server_Check = xhttps.open("GET", "AJAX_TAKEN_UUID_LIST.asp", true);

  if (Server_Check === false) {
    push UUID.value
  } 
}