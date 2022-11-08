<?php if(!empty($files)){ foreach($files as $frow){ ?>
<div class="file-box">
    <div class="box-content">
        <h4><?php echo $frow['archivo']; ?></h4>
        <div class="preview">
            <embed src="<?php
							$imagen64 = $frow['imagen'];
							$imagen64decode = base64_decode($frow['imagen']);
							$im = new Imagick();
							$im->readImageBlob($imagen64decode);
							$im->setFormat('JPEG');
							file_put_contents('uploads/files/PruebaImagen.jpg', $im->getImageBlob());
							echo base_url().'uploads/files/PruebaImagen.jpg';
						?>" width="200" height="300">
        </div>
        <a href="<?php
					echo base_url().'uploads/files/PruebaImagen.jpg';
				 ?>" class="dwn">Download</a>
    </div>
</div>
<?php } } ?>