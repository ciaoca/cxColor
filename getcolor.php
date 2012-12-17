<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<body>
<?
if(!empty($_POST['mycolor'])){
	echo $_POST['mycolor'];
}else{
	echo "未选择颜色";
};
?>
</body>
</html>