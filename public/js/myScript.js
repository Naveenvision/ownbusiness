
function calculate(){

  let boal = document.getElementById("customIdBoal").value;
  document.getElementById("customIdCoal").value = boal * 50;
  let coal = document.getElementById("customIdCoal").value;
  let rate = document.getElementById("customIdRate").value;
  document.getElementById("CustomIdAmount").value = rate * coal;

}
