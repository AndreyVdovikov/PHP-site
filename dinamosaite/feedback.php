<!DOCTYPE html>
<html>
<head>
<!--Хеад-->
<?php $title = "Обратная связь";
require_once 'blocs/head.php';
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$("#done").click(function() {
			$('#messageShow').hide();
		var name = $("#name").val();
		var email = $("#Email").val();
		var subgect = $("#subgect").val();
		var massage = $("#message").val();
		var fail = "";
		if (name.length < 3) fail = "Имя не менее 3 символов";
		else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
		fail = "Вы ввели не корректный email";
		else if (subgect.length < 5)
		fail = "Тема сообщения не менее 5 символов";
		else if (massage.length < 20)
		fail = "Сообщение не менее 20 символов";
		if (fail != "") {
		$('#messageShow').html (fail + "<div class='clear'><br></div>");
		$('#messageShow').show();
		return false;
		}
		$.ajax
	});
});
</script>
</head>

<body>
<!--Хидер-->
<<?php require_once 'blocs/header.php'; ?>
<!--Статьи-->
<div id="wrapper">
	<div id="leftcol">
	<input type="text" placeholder="Имя"  id="name" name="name"><br/>
	<input type="text" placeholder="Email"  id="Email" name="Email"><br/>
	<input type="text" placeholder="Тема сообщения"  id="subgect" name="subgect"><br/>
	<textarea name="message" id="message" placeholder="Введите сообщение"></textarea>
	<div id="messageShow"></div>
	<input type="button" name="done" id="done" value="Отправить">
	</div>
	</div>

<!--Правая колонка-->
	<?php require_once 'blocs/rightcol.php'; ?>

<!--Футер-->
	<?php require_once 'blocs/footer.php'; ?>

</body>
</html>
