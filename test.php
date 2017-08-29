<html>
	<head><meta charset = "UTF-8" />
		
<body>
	<center>
	<h1> Ajout medecin </h1>
	Choisir une specialite : <select name="spe">
	<?php
	@mysql_connect("localhost","root","");
		mysql_select_db("emotion");
		$req = "select distinct numero_serie from vehicule";
		$res = mysql_query($req);
		if(!$res) echo mysql_error();
		$ligne = mysql_fetch_assoc($res);
		while($ligne)
		{
			echo '<option value="'.$ligne["numero_serie"].'">'
					.$ligne["numero_serie"].'</option>';
			$ligne = mysql_fetch_assoc($res);
		}	
		?>
		</select><br /><br />
		Service : <input type="text" name="service" /><br /><br />
		<input type="submit" value="Ok" />
        </form>
        </center>
</body>
</html>
			
			
			
			
			