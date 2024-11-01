<?php
/**
 * The Template for displaying the personal data form.
 *
 * This template can be overridden by copying it to yourtheme/wpum/forms/personal-data-form.php
 *
 * HOWEVER, on occasion WPUM will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="wpum-template wpum-form wpum-personal-data-form">

	<h2><?php echo esc_html( $data->step_name ); ?></h2>

	<?php do_action( 'wpum_before_personal_data_form' ); ?>

		<form action="<?php echo esc_url( $data->action ); ?>" method="post" id="wpum-submit-personal-data-form" enctype="multipart/form-data">

			<?php foreach ( $data->fields as $key => $field ) : ?>
				<fieldset class="fieldset-<?php echo esc_attr( $key ); ?>">

					<?php if ( 'checkbox' == $field['type'] ) : ?>

						<label for="<?php echo esc_attr( $key ); ?>">
							<span class="field <?php echo $field['required'] ? 'required-field' : ''; ?>">
								<?php
									// Add the key to field.
									$field['key'] = $key;
									WPUM()->templates
										->set_template_data( $field )
										->get_template_part( 'form-fields/' . $field['type'], 'field' );
								?>
							</span>
							<?php echo esc_html( $field['label'] ); ?>
							<?php if ( isset( $field['required'] ) && $field['required'] ) : ?>
								<span class="wpum-required">*</span>
							<?php endif; ?>
						</label>

					<?php else : ?>

						<label for="<?php echo esc_attr( $key ); ?>">
							<?php echo esc_html( $field['label'] ); ?>
							<?php if ( isset( $field['required'] ) && $field['required'] ) : ?>
								<span class="wpum-required">*</span>
							<?php endif; ?>
						</label>
						<div class="field <?php echo $field['required'] ? 'required-field' : ''; ?>">
							<?php
								// Add the key to field.
								$field['key'] = $key;
								WPUM()->templates
									->set_template_data( $field )
									->get_template_part( 'form-fields/' . $field['type'], 'field' );
							?>
						</div>

					<?php endif; ?>

				</fieldset>
			<?php endforeach; ?>

			<input type="hidden" name="wpum_form" value="<?php echo $data->form; ?>" />
			<input type="hidden" name="step" value="<?php echo esc_attr( $data->step ); ?>" />
			<?php wp_nonce_field( 'verify_personal_data_form', 'personal_data_nonce' ); ?>
			<input type="submit" name="submit_personal_data" class="button" value="<?php echo esc_html( $data->submit_label ); ?>" />

		<?php do_action( 'wpum_after_personal_data_form' ); ?>

	</form>

</div>
