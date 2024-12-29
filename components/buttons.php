<?php
$btn1 = get_field('button_1');
$btn2 = get_field('button_2');
$btn3 = get_field('button_3');
$btn4 = get_field('button_4');
$btn5 = get_field('button_5');

if( !empty($btn1 || $btn2 || $btn3 || $btn4 || $btn5) ) { ?>
	<div class="btns">
		<?php
		if( $btn1 ):
			$btn1_url = $btn1['url'];
			$btn1_title = $btn1['title'];
			$btn1_target = $btn1['target'] ? $btn1['target'] : '_self';
			?>
			<a class="btn btn-1" href="<?php echo esc_url( $btn1_url ); ?>" target="<?php echo esc_attr( $btn1_target ); ?>"> 
				<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"><path d="M2.00589 4.54166C1.905 3.11236 3.11531 2 4.54522 2H7.60606C8.34006 2 9.00207 2.44226 9.28438 3.1212L10.5643 6.19946C10.8761 6.94932 10.6548 7.81544 10.0218 8.32292L9.22394 8.96254C8.86788 9.24798 8.74683 9.74018 8.95794 10.1448C10.0429 12.2241 11.6464 13.9888 13.5964 15.2667C14.008 15.5364 14.5517 15.4291 14.8588 15.0445L15.6902 14.003C16.1966 13.3687 17.0609 13.147 17.8092 13.4594L20.8811 14.742C21.5587 15.0249 22 15.6883 22 16.4238V19.5C22 20.9329 20.8489 22.0955 19.4226 21.9941C10.3021 21.3452 2.65247 13.7017 2.00589 4.54166Z" fill="currentColor"></path></svg>
				<span><?php echo esc_html( $btn1_title ) ?> </span>
			</a>
		<?php endif; ?>
		<?php
		if( $btn2 ):
			$btn2_url = $btn2['url'];
			$btn2_title = $btn2['title'];
			$btn2_target = $btn2['target'] ? $btn2['target'] : '_self';
			?>
			<a class="btn btn-2" href="<?php echo esc_url( $btn2_url ); ?>" target="<?php echo esc_attr( $btn2_target ); ?>"><span><?php echo esc_html( $btn2_title ); ?></span> </a>
		<?php endif; ?>
		<?php
		if( $btn3 ):
			$btn3_url = $btn3['url'];
			$btn3_title = $btn3['title'];
			$btn3_target = $btn3['target'] ? $btn3['target'] : '_self';
			?>
			<a class="btn btn-3" href="<?php echo esc_url( $btn3_url ); ?>" target="<?php echo esc_attr( $btn3_target ); ?>"><span><?php echo esc_html( $btn3_title ); ?></span> </a>
		<?php endif; ?>
		<?php
		if( $btn4 ):
			$btn4_url = $btn4['url'];
			$btn4_title = $btn4['title'];
			$btn4_target = $btn4['target'] ? $btn4['target'] : '_self';
			?>
			<a class="btn btn-4" href="<?php echo esc_url( $btn4_url ); ?>" target="<?php echo esc_attr( $btn4_target ); ?>"><span><?php echo esc_html( $btn4_title ); ?></span> </a>
		<?php endif; ?>
		<?php
		if( $btn5 ):
			$btn5_url = $btn5['url'];
			$btn5_title = $btn5['title'];
			$btn5_target = $btn5['target'] ? $btn5['target'] : '_self';
			?>
			<a class="btn btn-5" href="<?php echo esc_url( $btn5_url ); ?>" target="<?php echo esc_attr( $btn5_target ); ?>"><span><?php echo esc_html( $btn5_title ); ?></span> </a>
		<?php endif; ?>
	</div>
<?php }
?>


