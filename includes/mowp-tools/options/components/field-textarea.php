<?php
namespace Learndash_Boost\MOWP_Tools\Options\Components;

use Learndash_Boost\MOWP_Tools\Utils\Security;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Field_Textarea extends Component {
	public function __construct( $field_name, $field_label, $rows, $id = null, $class = [ 'field' ] ) {
		parent::__construct( 'div', false, $id, $class );

		$this->add_style_bulk( [
			'margin-bottom' => '1rem',
			'width' => '100%'
		] );

		$field_id = 'field-' . Security::create_guid();
		
		$this->append_child( new Label( $field_label, $field_id ) );
		$this->append_child( new Textarea( $field_name, $rows, $field_id ) );
	}
}
