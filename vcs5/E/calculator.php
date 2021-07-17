<!DOCTYPE html>
<html>
 <head>
 <title>E</title>
  </head>
    <body>
    
    
    <?php
    
    if(($_POST['submit']))
    {
    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))
    {
    if($_POST['operasi'] == 'tambah')
    {
    $total = $_POST['num1'] + $_POST['num2']; 
    }
    if($_POST['operasi'] == 'kurang')
    {
    $total = $_POST['num1'] - $_POST['num2']; 
    }
    if($_POST['operasi'] == 'kali'){
        $total = $_POST['num1'] * $_POST['num2']; 
    }
    if($_POST['operasi'] == 'bagi'){
        $total = $_POST['num1'] / $_POST['num2']; 
    }
    }else {
        $total = "Error";
    }}
    ?>
        
        <form method="post" action="calculator.php">
            <input name="num1" type="text" style="width: 200px; display:inline-block;"/>
            <select name="operasi">
            <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input name="num2" type="text"style="width : 200px; display:inline-block;"/>
            <input name="submit" type="submit" value="Calculate"/>
        </form>

    <?php echo "The result is : $total"; ?>
        
 
 </body>
</html>