<?php

class Cltvo_SocialNet extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Contacto";
    protected $post_type = "page";


    /**
     * proiedades de esta clase
     */
    public static $redesConUrl = [
		'facebook' => 'Facebook:',
		// 'twitter' => 'Twitter:',
		// 'pinterest' => 'Pinterest:',
		'instagram' => 'Instagram:',
		// 'google' => 'Google plus:',
		// 'tumblr' => 'Tumblr:'
	];

	public static $redesSinUrl = [ 
		'mail' => 'Email:',
		'telefono' => 'Teléfono:',
		'address'  => "Dirección",
		'hours'  => "Horarios",
	];



  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("contact");
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        foreach (self::$redesSinUrl as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  "";
		}

		foreach (self::$redesConUrl as $red => $imagen) {
			$meta[$red] = isset($meta[$red]) ? $meta[$red] :  array('label'=> '', 'url'=> '');
            $meta[$red]['label'] = isset($meta[$red]['label']) ? $meta[$red]['label'] :  "";
            $meta[$red]['url'] = isset($meta[$red]['url']) ? $meta[$red]['url'] :  "";
		}

        return $meta;
	}
	

	/**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){

        ?>

			<table class="ancho_100" >
				<tr>
					<td >
						<?= __("Dirección" ,TRANSDOMAIN) ?>:
					</td>
					<td>
						<?php wp_editor($this->meta_value['address'], $this->meta_key . '_address', [
							'textarea_name' => $this->meta_key . '[address]',
							'media_buttons' => false 
						]); ?>
					</td>
				</tr>
				<tr>
					<td >
						<?= __("Teléfono" ,TRANSDOMAIN) ?>:
					</td>
					<td>
						<input type="text" placeholder="456356352  " name="<?php echo  $this->meta_key; ?>[telefono]" id="<?php echo  $this->meta_key; ?>[telefono]" value="<?php echo $this->meta_value['telefono']; ?>" class="ancho_100" />
					</td>
				</tr>
				<tr>
					<td>
						<?= __("Correo" ,TRANSDOMAIN) ?>:
					</td>
					<td>
						<input type="email" placeholder="ejemplo@ejemplo.com" name="<?php echo  $this->meta_key; ?>[mail]" id="<?php echo  $this->meta_key; ?>[mail]" value="<?php echo $this->meta_value['mail']; ?>" class="ancho_100" />
					</td>
				</tr>
				<tr>
					<td >
						<?= __("Horarios:" ,TRANSDOMAIN) ?>:
					</td>
					<td>
						
						<textarea
							rows="4"
							placeholder="LUNES–JUEVES 13:30–22:30"
							name="<?php echo  $this->meta_key; ?>[hours]" id="<?php echo  $this->meta_key; ?>[hours]" class="ancho_100"><?php echo $this->meta_value['hours']; ?></textarea>

					</td>
				</tr>
				
			</table>
        		<?php
	}



    /**
     * Imprime los input de las redes sociales
     *
     * Parametros:
     *
     * @param string $slug slug de la red social
     * @param array $meta array con los valores link y cuenta
     */

	public function social_network_url($slug) {
		?>
			<p>
				<label for="<?php echo $this->meta_key."_".$slug; ?>_label" > <?= __("Nombre" ,TRANSDOMAIN) ?>:</label><br>
				<input type="text"
						placeholder="<?= $slug ?>"
						name="<?php echo $this->meta_key."[".$slug."][label]"; ?>"
						id="<?php echo $this->meta_key."_".$slug; ?>_label"
						value="<?php echo $this->meta_value[$slug]['label']; ?>"
						class="ancho_100" />
			</p>
			<p>
				<label for="<?php echo $this->meta_key."_".$slug; ?>_url" ><?= __("Link" ,TRANSDOMAIN) ?>:</label><br>
				<input type="url"
						placeholder="http://"
						name="<?php echo $this->meta_key."[".$slug."][url]"; ?>"
						id="<?php echo $this->meta_key."_".$slug; ?>_url"
						value="<?php echo $this->meta_value[$slug]['url']; ?>"
						class="ancho_100" />
			</p>
		<?php
	}
}
