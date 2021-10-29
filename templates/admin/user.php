<?php
namespace EWA\RestrictPaymentMethod;
?>
	<table class="form-table">
	<tr>
		<th><label for="Payment Method"><?php _e( 'Restrict Payment Method', 'rpm-customization' ); ?></label></th>
		<td>
			<?php
				$user_id       = ( isset( $_GET['user_id'] ) ) ? $_GET['user_id'] : '';
				$name          = 'geny_restrict_payment_method';
				$user_selected = get_user_meta( $user_id, $name, true );

				$selected = ( isset( $_GET[ $name ] ) ) ? $_GET[ $name ] : $user_selected;
				echo Helper::form_dropdown( $name, $select_options, $selected );
			?>
		</td>
	</tr>
	</table>
