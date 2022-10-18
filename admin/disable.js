let val = document.querySelector("#check");
function exemple() {
  if (document.getElementById("demo5").checked == false) {
    val.sub.disabled = true;
  } else {
    val.sub.disabled = false;
  }
}
