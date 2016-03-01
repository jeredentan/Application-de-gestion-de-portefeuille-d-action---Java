<?php
/**
 * Plugin Name: Plugin widget pour affichage des packages de meubles
 * Plugin URI: http://jeremiedentan.space
 * Description: Widget d'affichage des packages de meubles du site
 * Version: 1.0
 * Author: Dentan Jeremie
 * Author URI: http://jeremiedentan.space
 */

add_action('widgets_init','exemple_init');


function exemple_init(){
    register_widget("widget_packages");
}


class widget_packages extends WP_widget{

    function widget_packages(){
        $options = array(
            "classname" => "widget_packages",
            "description" => "Un widget qui sert à rien, mais qui est pratique pour débuter"
        );
        $this->WP_widget("widget-packages","Widget packages",$options);
    }

    function widget($args,$d){
        extract($args);
        echo $before_widget;
       
?>
<html>
<head>
    <meta charset="utf-8">
    <link href="http://prometheearchimonde.net/wordpress/wp-content/plugins/widgetPackageMeuble/css/style_widgetpackage.css" rel="stylesheet">
    <link href="http://prometheearchimonde.net/wordpress/wp-content/plugins/widgetPackageMeuble/css/bootstrap.css" rel="stylesheet">
    </head>
<div  class="col-md-4" id="cadre"><div class="pricing-price"><div class="title"><?php echo $d["titre"]; ?></div><div class="prix_widget"> <span> à partir de</span><span id="prix"> <?php echo $d["prix"]; ?>€</span> <span> / mois </span></div></div> 
    
    
    //Afficher l'image s
    <?php 
    if( !empty($d['image_uri']) ):
   echo '<div class="client-image hidden-xs">';

					echo '<img src="' . esc_url($d['image_uri']) . '" alt="image_package" />';

					echo '</div>';
    endif;
     ?>
    
    <p><br> Etudiant, stagiaire ou jeune actif, meublez votre studio ou votre chambre avec l’essentiel à prix mini. <br> <br></p><ul class="check"><li>1 Banquette-lit</li><li>1 Table basse</li><li>1 Table à manger</li><li>2 Chaises</li><li>1 Micro-ondes</li> <br> <br> <br></ul>
  
<a href="#" class="btn btn-primary btn-md active" id="bouton" role="button" ><?php echo $d["textebouton"]; ?></a>
      
    <br>
    
    
    
    </div>
    
    </html>

<?php
        echo $after_widget;
    }

    function update($new,$old){
        return $new;
    }

    function form( $d ){
        $defaut = array(
            "titre" => "Package etudiant",
            "image_uri"=>"IMAGE",
            "meuble1"=>"meuble1",
            "meuble2"=>"meuble2",
            "meuble3"=>"etc..."
            
        );
        $d = wp_parse_args($d,$defaut)
?>
<html>

    <p>
        <label for="<?php echo $this->get_field_id("titre"); ?>">Titre : </label>
        <input value="<?php echo $d["titre"]; ?>" name="<?php echo $this->get_field_name("titre"); ?>" id="<?php echo $this->get_field_id("titre"); ?>"type="text"/>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id("prix"); ?>">Prix minimum du pack (en euros) : </label>
        <input value="<?php echo $d["prix"]; ?>" name="<?php echo $this->get_field_name("prix"); ?>" id="<?php echo $this->get_field_id("prix"); ?>"type="text"/>
    </p>

   
    <p>
         <label for="<?php echo $this->get_field_id("meuble1"); ?>">Meubles (indiquez le nombre) : </label>
       <label for="<?php echo $this->get_field_id("meuble1"); ?>">Meuble 1 : </label>
        <input value="<?php echo $d["meuble1"]; ?>" name="<?php echo $this->get_field_name("meuble1"); ?>" id="<?php echo $this->get_field_id("meuble1"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble2"); ?>">Meuble 2 : </label>
        <input value="<?php echo $d["meuble2"]; ?>" name="<?php echo $this->get_field_name("meuble2"); ?>" id="<?php echo $this->get_field_id("meuble2"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble3"); ?>">Meuble 3 : </label>
        <input value="<?php echo $d["meuble3"]; ?>" name="<?php echo $this->get_field_name("meuble3"); ?>" id="<?php echo $this->get_field_id("meuble3"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble4"); ?>">Meuble 4 : </label>
        <input value="<?php echo $d["meuble4"]; ?>" name="<?php echo $this->get_field_name("meuble4"); ?>" id="<?php echo $this->get_field_id("meuble4"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble5"); ?>">Meuble 5 : </label>
        <input value="<?php echo $d["meuble5"]; ?>" name="<?php echo $this->get_field_name("meuble5"); ?>" id="<?php echo $this->get_field_id("meuble5"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble6"); ?>">Meuble 6 : </label>
        <input value="<?php echo $d["meuble6"]; ?>" name="<?php echo $this->get_field_name("meuble6"); ?>" id="<?php echo $this->get_field_id("meuble6"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble7"); ?>">Meuble 7 : </label>
        <input value="<?php echo $d["meuble7"]; ?>" name="<?php echo $this->get_field_name("meuble7"); ?>" id="<?php echo $this->get_field_id("meuble7"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble8"); ?>">Meuble 8 : </label>
        <input value="<?php echo $d["meuble8"]; ?>" name="<?php echo $this->get_field_name("meuble8"); ?>" id="<?php echo $this->get_field_id("meuble8"); ?>"type="text"/>

    </p>
    
    <p>

       <label for="<?php echo $this->get_field_id("meuble9"); ?>">Meuble 9 : </label>
        <input value="<?php echo $d["meuble9"]; ?>" name="<?php echo $this->get_field_name("meuble9"); ?>" id="<?php echo $this->get_field_id("meuble9"); ?>"type="text"/>

    </p>

    <p>
        <label for="<?php echo $this->get_field_id("textebouton"); ?>">Texte du bouton : </label>
        <input value="<?php echo $d["textebouton"]; ?>" name="<?php echo $this->get_field_name("textebouton"); ?>" id="<?php echo $this->get_field_id("textebouton"); ?>"type="text"/>
    </p>
    
    <p><label for="<?php echo $this->get_field_id("image_uri"); ?>">Photo Package: </label>
        <input type="text" class="widefat custom_media_url_testimonial" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php if( !empty($d['image_uri']) ): echo $d['image_uri']; endif; ?>" style="margin-top:5px;">
        <input type="button" class="button button-primary custom_media_button_testimonial" id="custom_media_button_testimonial" name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php _e('Upload Image','zerif-lite'); ?>" style="margin-top:5px;">
       
    </p>

</html>
<?php
    }

}
?>