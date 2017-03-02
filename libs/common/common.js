jQuery(document).ready(function() {

	jQuery('.button_menu').click(function(){
		jQuery(this).next().slideToggle();
	});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	jQuery(".fancybox").fancybox();

	jQuery(".mail_harmoniy").fancybox();
	jQuery(".mail_iniciativa").fancybox();
	jQuery(".mail_inicjatywapl").fancybox();


	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/

	mail("subscribe.php", "#callback", "Дякуємо що приєдналися!");
	mail("mail_harmoniy.php", "#mail_harmoniy", "Дякуємо за Ваш лист!");
	mail("mail_iniciativa.php", "#mail_iniciativa", "Дякуємо за Ваш лист!");
	mail("mail_inicjatywapl.php", "#mail_inicjatywapl", "Дякуємо за Ваш лист!");


	//Функция отправки письма с помощью mail.php
	//mail = фаил mail.php
	//id = id формы для отправки
	//message = alert после отправки
	function mail (mail, id, message){
		return jQuery(id).submit(function() {
		jQuery.ajax({
			type: "GET",
			url: "http://eurofest.pl/mail/" + mail,
			data: jQuery("form").serialize()
		}).done(function() {
			alert(message);
			setTimeout(function() {
				jQuery.fancybox.close();
			}, 1000);
		});
		return false;
	});
	};




	//animateCss function

	jQuery.fn.extend({
		animateCss: function (animationName) {
			var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			this.addClass('animated ' + animationName).one(animationEnd, function() {
				jQuery(this).removeClass('animated ' + animationName);
			});
		}
	});

});