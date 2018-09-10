<?php

class PhoneNumberWidget extends WP_Widget {

    public function __construct() {
        $widget_ops = array( 
            'classname' => 'phone_number_widget',
            'description' => 'Phone Number Widget',
        );
        parent::__construct( 'phone_number_widget', 'Phone Number Widget', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        echo '<a class="phone-number-widget" href="tel:'.$instance['phone-number-compact'].'">'.$instance['phone-number-display-friendly'].'</a>';
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        $phoneNumberCompact = ! empty( $instance['phone-number-compact'] ) ? $instance['phone-number-compact'] : "";//esc_html__( 'Eg: +40732123123', 'text_domain' );
        $phoneNumberDisplayFriendly = ! empty( $instance['phone-number-display-friendly'] ) ? $instance['phone-number-display-friendly'] : "";//esc_html__( 'Eg: +40 (732) 123 123', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone-number-compact' ) ); ?>"><?php esc_attr_e( 'Phone Number Compact:', 'text_domain' ); ?></label> 
        <input 
            class="widefat"
            id="<?php echo esc_attr( $this->get_field_id( 'phone-number-compact' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'phone-number-compact' ) ); ?>"
            type="text"
            value="<?php echo esc_attr( $phoneNumberCompact );?>"
            placeholder="Eg: +40732123123"
        >
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone-number-display-friendly' ) ); ?>"><?php esc_attr_e( 'Phone Number Friendly:', 'text_domain' ); ?></label> 
        <input
            class="widefat"
            id="<?php echo esc_attr( $this->get_field_id( 'phone-number-display-friendly' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'phone-number-display-friendly' ) ); ?>"
            type="text"
            value="<?php echo esc_attr( $phoneNumberDisplayFriendly ); ?>"
            placeholder="Eg: +40 (732) 123 123"
        >
		</p>
		<?php
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance = array();
		$instance['phone-number-compact'] = ( ! empty( $new_instance['phone-number-compact'] ) ) ? sanitize_text_field( $new_instance['phone-number-compact'] ) : '';
        $instance['phone-number-display-friendly'] = ( ! empty( $new_instance['phone-number-display-friendly'] ) ) ? sanitize_text_field( $new_instance['phone-number-display-friendly'] ) : '';

		return $instance;
    }
}