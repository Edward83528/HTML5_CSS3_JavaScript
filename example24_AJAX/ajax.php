<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript">

$(document).ready(init);


function init() {
	$("#letter").change(letterChange);
}

function letterChange() {
	// var s = $("#letter option:selected").val();
	var s = $("#letter option:selected").text();
	//利用jquery的get的方法可從url撈資料
	$.get('getLetterNumber.php?letter=' + s, letterChangeDataBack)
}

function letterChangeDataBack(data) {
	$("#letterNumber").html(data);
}     </script>
        <form>
            <select  name="letter" id="letter">
                <option value="0">a</option>
                 <option value="1">b</option>
                  <option value="2">c</option>
            </select>
                <select name="letterNumber" id="letterNumber">
                <option value="0">a1</option>
                 <option value="1">a2</option>
                  <option value="2">a3</option>
            </select>
            <input type="submit" value="送出"/>
        </form>
        	<br><div id="test"></div>
    </body>
</html>