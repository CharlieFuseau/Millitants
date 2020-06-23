
function searchname() 
{
   // declaration des variables
  var input, filter, table, tr, td, i, txtValue;
  // recupere le input
  input = document.getElementById("inputName");
  // gere entre les majs et mins
  filter = input.value.toUpperCase();
  //recupere la table
  table = document.getElementById("sortTable");
  //recupere les lignes de la table
  tr = table.getElementsByTagName("tr");
  // boucle sur toutes les lignes et cache celle qui ne correspondes pas a la recherche
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchfirstname() 
{
  
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputFirstname");
  filter = input.value.toUpperCase();
  table = document.getElementById("sortTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchaddress() 
{

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputAdress");
  filter = input.value.toUpperCase();
  table = document.getElementById("sortTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchall() 
{
  var input, filter, button, i, txtValue;
  input = document.getElementById("searchall");
  filter = input.value.toUpperCase();
  button = document.getElementById("sortButton");
  for (i = 0; i < button.length; i++) {
    if (button) 
	{
      txtValue = button.textContent || button.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        button[i].style.display = "";
      } else {
        button[i].style.display = "none";
      }
    }
  }
}
