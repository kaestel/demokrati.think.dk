<div class="scene upload i:upload">

	<h1>Upload vælgererklæring</h1>

	<p>
		Når du får din vælgererklæring tilbage fra kommunen, kan du scanne eller tage et billede af den <strong>på langs</strong>, 
		og sende den til os digitalt her.
	</p>

	<form name="declaration" action="/upload/send" method="post" enctype="multipart/form-data">
		<fieldset>

			<div class="field select required">
				<label for="slug">Vælg dit parti:</label>
				<select name="slug" id="slug">
					<option value="">-</option>
					<option value="alternativet">Alternativet</option>
					<option value="dukkepartiet">Dukkepartiet</option>
					<option value="retsforbundet">Retsforbundet</option>
					<option value="blank">BLANK</option>
				</select>
			</div>

			<div class="field files required">
				<label for="declaration">Din godkendte vælgererklæring:</label>
				<input type="file" name="declaration" id="declaration" />
			</div>

		</fieldset>

		<ul class="actions">
			<li class="send"><input type="submit" value="Upload" name="send" /></li>
		</ul>
	</form>

	<p>
		Det er vigtigt, at billedet svarer til den trykte vælgererklæring så godt som muligt. 
		Det vil sige, at alt information skal være læseligt.
	</p>
</div>

