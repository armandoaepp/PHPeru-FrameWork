<?php
class Serialize {

	public function __construct() { }

	static public function unSerializeLang($string, $lang)
	{
			if($this->is_serialized($string))
			{
					$value = unserialize($string);

					if(isset($value[$lang]))
					{
							$value = $value[$lang];
					}
					else
					{
							$value = '';
					}
			return $value;

			}
	}

	public function is_serialized( $data ) {
			// if it isn't a string, it isn't serialized
			if ( !is_string( $data ) )
					return false;
			$data = trim( $data );
			if ( 'N;' == $data )
					return true;
			if ( !preg_match( '/^([adObis]):/', $data, $badions ) )
					return false;
			switch ( $badions[1] ) {
					case 'a' :
					case 'O' :
					case 's' :
							if ( preg_match( "/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data ) )
									return true;
							break;
					case 'b' :
					case 'i' :
					case 'd' :
							if ( preg_match( "/^{$badions[1]}:[0-9.E-]+;\$/", $data ) )
									return true;
							break;
			}
			return false;
	}

}



?>