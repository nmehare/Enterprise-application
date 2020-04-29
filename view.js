      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  

function searchResult() {
  var input, filter, table, tr, td, i, fnameValue, lnameValue;
  var matchFound = false;
  
  input = document.getElementById("livesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("employee_table");
  tr = table.getElementsByTagName("tr");
  
  $("#employee_table").show();
  $("h3").show();	 
  $("#nodata").text("Match Found."); 
  
  for (i = 0; i < tr.length; i++) {
    fname = tr[i].getElementsByTagName("td")[2];
	lname = tr[i].getElementsByTagName("td")[3];
    if (fname || lname) {
      fnameValue = fname.textContent || fname.innerText;
	  lnameValue = lname.textContent || lname.innerText;
      if (fnameValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		matchFound = true;
      } 
	  else if (lnameValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		matchFound = true;
      }
	  else {
        tr[i].style.display = "none";
      }
    }       
  }
  
   if (!matchFound) {
     $("#employee_table").hide();
	 $("h3").hide(); 
	 $("#nodata").text("No Match Found.");
   }

}