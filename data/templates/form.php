<?php include dirname(__FILE__) . '/helper/header.php'; ?>
<div class="block">
    <fieldset>
	    <legend>Форма:</legend>
	    
	    <?php if (isset($errors)): ?>
		    <div class="errors">
		    <p>Во время заполнения формы Вы допустили следующие ошибки:</p>
		    <ul>
		    <?php foreach ($errors as $error): ?>
		        <li><?php echo $error; ?></li>
		    <?php endforeach; ?>
		    </ul>
		    <p>Исправьте ошибки и повторите отправку!</p>
		    </div>
	    <?php endif; ?>
	    
	    <form action="" method="post">
		    <p>
		        Ваше имя.
		        <br />
		        <input type="text" name="firstname" value="<?php echo isset($firstname) ? $firstname : ''; ?>" />
		    </p>
		    <p>
		        Ваша фамилия.
		        <br />
		        <input type="text" name="lastname" value="<?php echo isset($lastname) ? $lastname : ''; ?>" />
		    </p>
		    <p>
		        Каптча. Пожалуйста, введите символы ниже(<i>не чувствительна к регистру</i>).
		        <br />
		        <input type="text" name="word" />
		    </p>
		    
		    <div class="captcha_border">
		        <?php echo $html; ?>
		    </div>
		      
		    <p>
		        <input type="submit" value="Отправить!" />
		    </p>  
	    </form>
    </fieldset>
</div>
<?php include dirname(__FILE__) . '/helper/footer.php'; ?>