<form>
<div>
Name: <input type="text" name="name" value="<?php echo $name;?>"></div>
</br>
<div>
E-mail: <input type="text" name="email" value="<?php echo $email;?>"></div>
</br>
<div>
Website: <input type="text" name="website" value="<?php echo $website;?>"></div>
</br>
<div>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></div>
</br>
<div>
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other</div>
</br>
<button type="submit" name="submit">submit</button>

</form>