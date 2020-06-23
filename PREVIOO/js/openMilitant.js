function openMilitants(evt, id_electeur) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(id_electeur).style.display = " block";
  evt.currentTarget.className += " active";
}

// Get the element with id="id_electeur" and click on it
document.getElementById("id_electeur").click();