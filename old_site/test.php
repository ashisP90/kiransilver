<?php include ('system/configs.php'); ?>
<!DOCTYPE html> 
<html> 
  
<head> 
    <title> 
        How to add table row in jQuery? 
    </title> 
      
    
      
    <style> 
        table { 
            margin: 25px 0; 
            width: 200px; 
        } 
  
        table th, table td { 
            padding: 10px; 
            text-align: center; 
        } 
  
        table, th, td { 
            border: 1px solid; 
        } 
    </style> 
</head> 
  
<body> 
    <h1 style="color: green"> 
        GeeksForGeeks 
    </h1> 
      
    <b>How to add table row in jQuery?</b> 
      
    <p> 
        Click on the button below to 
        add a row to the table 
    </p> 
      
    <button class="add-row"> 
        Add row 
    </button> 
      
    <table> 
        <thead> 
            <tr> 
                <th>Rows</th> 
            </tr> 
        </thead> 
        <tbody> 
            <tr> 
                <td>This is row 0</td> 
            </tr> 
        </tbody> 
    </table> 
      
    <!-- Script to add table row -->
    <script> 
        let lineNo = 1; 
        $(document).ready(function () { 
            $(".add-row").click(function () { 
                markup = "<tr><td>This is row "  
                    + lineNo + "</td></tr>"; 
                tableBody = $("table tbody"); 
                tableBody.append(markup); 
                lineNo++; 
            }); 
        });  
    </script> 
</body> 
</html>                     