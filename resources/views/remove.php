<html>
    <head>
        <title>
            admin-elimination
        </title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png">
        <link rel="stylesheet" href="<?php echo asset('css/elimination.css')?>" type="text/css">
    </head>

    <body>
        <br><br>
        <a href="welcome.html" title="Go to home" class="site_logo" rel="home">
                <img class="logo" src="http://news.vellorecity.com/wp-content/uploads/2013/07/NCC-Logo.jpg">
            <div class="logo_text">
                 <h1 class="h1-logo">National Cadet Corps</h1>
                 <strong lang="hi">राष्ट्रीय कैडेट कोर</strong>
            </div>
        </a>
        <ul id="taskbar">
          <li><a class="active" href="welcome.html">HOME</a></li>
          <li><a class="active" href="login.html">LOGIN</a></li>
          <li><a class="active" href="register.html">REGISTER</a></li>
          <div class="dropdown">
            <button class="dropbtn">ACTIVITY</button>
            <div class="dropdown-content">
                <a class="active" href="activity.html">ADD ACTIVITY</a>
            <a href="#">REMOVE ACTIVITY</a>
            <a href="#">Link 3</a>
            </div>
            </div>
        </ul>
<center>
        <h2>NCC DATA FILTERATION</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for name.." title="Type in a name"><br><br>

    <form action="elimination" method="post">

    <table id="database" cellpadding="0" cellspacing="0">
      <tr>
          <th></th>
          <th>name</th>
          <th>regno</th>
          <th>profilepic</th>
          <th>address</th>
          <th>contact_no</th>
          <th>email</th>
          <th>dob</th>
          <th>age</th>
          <th>gender</th>
          <th>fathersname</th>
          <th>mothersname</th>
          <th>nationality</th>
          <th>bloodgroup</th>
          <th>identification</th>
          <th>education</th>
          <th>marks</th>
        </tr>
        <?php


foreach($records as $data)
{
?>
  <tr>
  <td> <input type="checkbox" id="<?php echo htmlspecialchars($data['regno'])?>" name="selections[]" value="<?php echo htmlspecialchars($data['regno'])?>"></td>
  <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['regno']; ?></td>
    <td><?php echo $data['profilepic']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['contact_no']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['dob']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['fathersname']; ?></td>
    <td><?php echo $data['mothersname']; ?></td>
    <td><?php echo $data['nationality']; ?></td>
    <td><?php echo $data['bloodgroup']; ?></td>
    <td><?php echo $data['identification']; ?></td>
    <td><?php echo $data['education']; ?></td>
    <td><?php echo $data['marks']; ?></td>
  </tr>
<?php
}
?>
</table>



<br><br>

     <input type="button" id="download" value="print" onclick="exportData()" class ="btn">

     <input type='submit' value='remove' class="btn">
</center>
      </form>
        <script>
         function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("database");
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
        rows = [[column1,column2,column3,column4,column5,column6,column7,column8,column9,column10,column11,column12,column13,column14,column15,column16],
        [column1,column2,column3,column4,column5,column6,column7,column8,column9,column10,column11,column12,column13,column14,column15,column16]]
        function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("database");

    /* Declaring array variable */
    var rows =[];

      //iterate through rows of table
      for(var i=0,row; row = table.rows[i];i++){

column1 = row.cells[0].innerText;
column2 = row.cells[1].innerText;
column3 = row.cells[2].innerText;
column4 = row.cells[3].innerText;
column5 = row.cells[4].innerText;
column6 = row.cells[5].innerText;
column7 = row.cells[6].innerText;
column8 = row.cells[7].innerText;
column9 = row.cells[8].innerText;
column10 = row.cells[9].innerText;
column11 = row.cells[10].innerText;
column12 = row.cells[11].innerText;
column13 = row.cells[12].innerText;
column14 = row.cells[13].innerText;
column15 = row.cells[14].innerText;
column16 = row.cells[15].innerText;


rows.push(
    [
    column1,column2,column3,column4,column5,column6,column7,column8,column9,column10,column11,column12,column13,column14,column15,column16
    ]
);

        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });

        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "ncc_students_list.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
function removeData() {
            var x = document.getElementById("selectNow");
            x.remove(x.selectedIndex);
         }
        </script>
    </body>
</html>

