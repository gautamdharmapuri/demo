<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
var minNum=1; var maxNum=3;
function checkListBoxSize(){
oSelect=document.getElementById("category_id");
var count=0;
for(var i=0;i<oSelect.options.length;i++){
if(oSelect.options[i].selected)
count++;
if(count>maxNum){
alert("Can't select more than 3");
return false;
}
}
if(count<1){
alert("Must select at least one item");
return false;
}
return true;
}

</script>
</head>

<body>
<form onsubmit="return checkListBoxSize()">
<select multiple="multiple" id="category_id" name="category_id" size="10" onchange="return false;">
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
<option value="e">e</option>
</select>
<input name="" type="submit"/>
</form>
</body>
</html>