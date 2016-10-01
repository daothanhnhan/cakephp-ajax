<h2>Ajax Update</h2>

<div class="box">
    <button id="time-button">Time</button>
    <div id="time" style="height:20px;width:180px;box-shadow: 0 0 5px #888;margin: 10px;"></div> <!-- div to use for ajax response-->
    <?php
    //on button click sands request to controller and displays response data in chosen field
    echo '<script>';
	echo $this->Js->get('#time-button')->event(
            'click', $this->Js->request(
                    array('controller' => 'pages', 'action' => 'home'), array(
                'update' => '#time',
                'async' => true,
                    )
            ),
			false
    );
	echo '</script>';
    ?>
	
	<?php 
		//echo $this->Js->get('#time-button')->event('click', 'alert("whoa!");', false);		
	?>
	
</div>