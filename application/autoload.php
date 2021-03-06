<?php

require __DIR__ . '/../composer/vendor/autoload.php';   //автозагрузчик composer'а

spl_autoload_register( 'my_autoload' );    //регистрируем функцию "my_autoload()" в качестве функции для автозагрузки

function my_autoload( $class )
{

	/*if( file_exists( __DIR__ . '/controllers/' . $class . '.php' ) )
	{
		require_once __DIR__ . '/controllers/' . $class . '.php';
	}
	elseif( file_exists( __DIR__ . '/models/' . $class . '.php' ) )
	{
		require __DIR__ . '/models/' . $class . '.php';
	}
	elseif( file_exists( __DIR__ . '/views/' . $class . '.php' ) )
	{
		require __DIR__ . '/views/' . $class . '.php';
	}
	elseif( file_exists( __DIR__ . '/core/' . $class . '.php' ) )
	{
		require __DIR__ . '/core/' . $class . '.php';
	}
	elseif( file_exists( __DIR__ . '/core/lib/' . $class . '.php' ) )
	{
		require __DIR__ . '/core/lib/' . $class . '.php';
	}
	else
	{*/
		$classParts = explode('\\', $class);
		$classParts[0] = __DIR__;
		$path = implode(DIRECTORY_SEPARATOR, $classParts).'.php';
		if (file_exists($path)) {
			require "$path";
		}
	//}
}