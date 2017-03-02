	<div class="col-md-3">
		<?php if( !dynamic_sidebar( 'sidebar' )): ?>
		
		<?php endif; ?>
		
		<div class="mail_us">
			<form id="callback" class="pop_form"> 
				<ul>
					<h4>Приєднатися до розсилки</h4>
					<span class="form_name_mail">Ім'я:</span>
					<input type="text" name="name" placeholder="Ваше ім'я..."/>
					<span class="form_name_mail">e-mail:</span>
					<input type="text" name="mail" placeholder="Ваш e-mail..." required/>
					<br />
					<button class="button" type="submit">приєднатися</button>
				</ul>
			</form>			
		</div>
	</div>