<?php
/*
* Plugin name: Arioso form
* Version: 1.0
* Description: форма для расчета стоимости урока в музыкальной школе Arioso
* Author: Alexsk8888
*
*/

include "AriosoFormSend.php";

add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );

function wptuts_scripts_basic()  
{    $AriosoStyle_url = plugins_url('AriosoFormstyle.css', __FILE__ );
    $Ariosoplugins_url = plugins_url('AriosoFormApp.js', __FILE__ );

    wp_register_script( 'AriosoScript', $Ariosoplugins_url, false, null, true  );  
    wp_enqueue_script( 'AriosoScript', $Ariosoplugins_url );  
    wp_enqueue_style( 'AriosoStyle', $AriosoStyle_url ); 
}  


function ariosoEcho( $atts, $content = null ) {
	$fhn = ' 
   
  <div class="formbar">
  <form action="AriosoFormSend.php" method="POST" name="appeal" class="inp">
    <span class="sel">      
              <p>Выберите курс</p>
        <select name="kurse" class="kurse" required>
            <option value="">Выбрать</option>
            <option value="Klavier">Klavier</option>
            <option value="Gitarre">Gitarre</option>
            <option value="Gesang">Gesang</option>
            <option value="Geige">Geige</option>
            <option value="Flote">Flote</option>
        </select>
    </span>
    <span class="sel"> 
      <p>Количество</p>
      <p class="valAmount">1</p>
        <select name="amount" class="amount" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </span>
      <span class="sel"> 
          <p>Длительность</p>
          <p class="valDuration">30 min</p>
            <select name="duration" class="duration" required>
              <option value="30">30</option>
              <option value="45">45</option>
              <option value="60">60</option>
            </select>
      </span>
         <span class="price">0‎ €</span>
  <input type="text" name="nameClient" class="nameClient" placeholder="ФИО клиента" pattern="^[А-Яа-яЁё\s]+$" required >
  <input type="tel"  name="tel" class="tel" placeholder="Номер клиента начиная с нуля" pattern="0[0-9]{9}" required > 
  <input type="email" name="Email" placeholder="E-mail" required>
  <textarea name="message"  cols="30" rows="4" placeholder="сообщение" ></textarea>
    <div class="paddingForm">
        <div class="leftPaddinfForm">
           <span><input type="checkbox" name="oneLicense" class="oneLicense" required>я согласен</span>
           <span><input type="checkbox" name="twoLicense" class="twoLicense"required disabled>Я тоже</span>
        </div>
    </div>
      <div class="rigftPaddingForm">
        <input type="submit" name="sendMas" class="sendMas" value="Купить">
      </div>      
</form>
</div> 

 ';
	return $fhn;
}



add_shortcode( "SCName", "ariosoEcho" );