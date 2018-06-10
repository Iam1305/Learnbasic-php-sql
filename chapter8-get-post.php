<html>
<head>

</head>
<body>
        <form action = "sendform.php" method ="POST">
            <input type = "text" name = "id[]" size = "30px" />
            <br>
            <input type = "text" name = "id[]" size = "30px">
            <br>
            <select name = "oo[]" size="3" multiple="true">
                <option value="case1">case1</option>
                <option value="case2">case2</option>
                <option value="case3">case3</option>
            </select>
            <br>
            <input type="submit">

        </form>
</body>
</html>