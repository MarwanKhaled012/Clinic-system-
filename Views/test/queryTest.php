<html>
    <body>
        <form action="query.php" method="POST" onsubmit="validInputs()">
            <Label> From </Label>
                <input type="text" name="text" id = "text" placeholder='test'>
            <Label> To </Label>
                <input type="number" name="number" id = "number" placeholder="3">
            <input type="submit" value="reserve" name="reserve">
        </form>
    </body>
<script>
    function validInputs(){
    var text = document.getElementById('text');
    var number = document.getElementById('number');
    if (text.value == ''){
        text.value = text.placeholder;
    } 
    if (number.value == ''){
        number.value = number.placeholder;
    }
}

</script>
</html> 