<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action ="calc.php" method="POST">
            <input type="number" name ="num1">          
            <select name="cal">
                <option value="add">Add</option>
                <option value="sub">Substract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
            </select>
            <input type="number" name ="num2">
            <button type="submit">Calculate</button>
        </form>
    </body>
</html>