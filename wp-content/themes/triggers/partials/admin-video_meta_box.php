<style>
	.input-wrapper-row{
		box-sizing: border-box;
		display: block;
		width: 100%;
		margin-bottom: 0;
	}

	.input-wrapper{
		box-sizing: border-box;
		display: inline-block;
		width: 45%;
		padding: 15px;
		margin-right: 2%
	}

	.input-wrapper label {
		display: block;
		font-weight: bold;
	}

	.input-wrapper input{
		display: block;
		width: 100%;
	}
</style>

<?php  $video_meta_dados = get_post_meta( get_the_ID() ); ?>

<div class="input-wrapper-row">
	<div class="input-wrapper">
		<label for="link">link do vídeo</label>
		<input name="video_link" id="link" type="text" value="<?= $video_meta_dados['video_link'][0] ?>">
	</div>
	<div class="input-wrapper">
		<label for="data">data da publicação vídeo</label>
		<input name="video_data" id="data" type="text" value="<?= $video_meta_dados['video_data'][0] ?>">
	</div>
</div>
<div class="input-wrapper-row">
	<div class="input-wrapper">
		<label for="location">locação</label>
		<input name="video_location" id="location" type="text" value="<?= $video_meta_dados['video_location'][0] ?>">
	</div>
	<div class="input-wrapper">
		<label for="director">diretor</label>
		<input name="video_director" id="director" type="text" value="<?= $video_meta_dados['video_director'][0] ?>">
	</div>
</div>