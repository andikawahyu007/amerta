<div class="<?php echo esc_attr(implode( ' ', $data->item_classes )) ?>"<?php echo Modula_Helper::generate_attributes( $data->item_attributes ) ?> >
	<div class="modula-item-overlay"></div>

	<div class="modula-item-content">

		<?php do_action( 'modula_item_before_link', $data ); ?>
		
		<?php if ( 'no-link' != $data->lightbox ): ?>
			<a<?php echo Modula_Helper::generate_attributes( $data->link_attributes ) ?> class="<?php echo esc_attr(implode( ' ', $data->link_classes )) ?>"></a>
		<?php endif ?>

		<?php do_action( 'modula_item_after_link', $data ); ?>
		<?php

		$image = '<img class="'.esc_attr(implode( ' ', $data->img_classes )).'" '. Modula_Helper::generate_attributes( $data->img_attributes ).'/>';

		$image_meta                    = wp_get_attachment_metadata( $data->link_attributes['data-image-id'] );

		if( ! empty( $data->image_info ) ){
			$image_meta['sizes']['custom'] = array(
					'file'      => $data->image_info['name'] . '-' . $data->image_info['suffix'] .'.' . $data->image_info['ext'],
					'width'     => $data->img_attributes['width'],
					'height'    => $data->img_attributes['height'],
					'mime-type' => $image_meta['sizes']['thumbnail']['mime-type']
			);
		}


		echo wp_image_add_srcset_and_sizes( $image, $image_meta, $data->link_attributes['data-image-id'] );
		?>

		<?php do_action( 'modula_item_after_image', $data ); ?>

		<div class="figc<?php echo '' == $data->title ? ' no-title' : '' ?><?php echo '' == $data->description ? ' no-description' : '' ?>">
			<div class="figc-inner">
				<?php if ( ! $data->hide_title ): ?>
					<h2 class='jtg-title'><?php echo wp_kses_post( $data->title ); ?></h2>
				<?php endif ?>
				<?php if ( ! $data->hide_description && '' != $data->description): ?>
					<p class="description"><?php echo wp_kses_post( $data->description ); ?></p>
				<?php endif ?>
				<?php if ( ! $data->hide_socials ): ?>
					<div class="jtg-social">
						<?php if ( $data->enableTwitter ): ?>
							<a class="modula-icon-twitter"
							   href="#"><?php echo Modula_Helper::get_icon( 'twitter' ) ?></a>
						<?php endif ?>
						<?php if ( $data->enableFacebook ): ?>
							<a class="modula-icon-facebook"
							   href="#"><?php echo Modula_Helper::get_icon( 'facebook' ) ?></a>
						<?php endif ?>
						<?php if ( $data->enableWhatsapp ): ?>
							<a class="modula-icon-whatsapp"
							   href="#"><?php echo Modula_Helper::get_icon( 'whatsapp' ) ?></a>
						<?php endif ?>
						<?php if ( $data->enablePinterest ): ?>
							<a class="modula-icon-pinterest"
							   href="#"><?php echo Modula_Helper::get_icon( 'pinterest' ) ?></a>
						<?php endif ?>
						<?php if ( $data->enableLinkedin ): ?>
							<a class="modula-icon-linkedin"
							   href="#"><?php echo Modula_Helper::get_icon( 'linkedin' ) ?></a>
						<?php endif ?>
						<?php if ( $data->enableEmail ): ?>
							<a class="modula-icon-email" href="#"><?php echo Modula_Helper::get_icon( 'email' ) ?></a>
						<?php endif ?>
						<?php do_action('modula_extra_socials',$data); ?>
					</div>
				<?php endif ?>
			</div>
		</div>

	</div>

</div>