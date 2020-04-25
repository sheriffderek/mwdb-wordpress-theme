<?php
// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

/**
 * Disable comments
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 *
 * @copyright (c) 2018 Webraftic Ltd
 */
class WHLP_Plugin {

	/**
	 * @see self::app()
	 * @var \WBCR\Titan\Plugin
	 */
	private static $app;

	/**
	 * Конструктор
	 *
	 * Применяет конструктор родительского класса и записывает экземпляр текущего класса в свойство $app.
	 * Подробнее о свойстве $app см. self::app()
	 *
	 * @param string $plugin_path
	 * @param array $data
	 *
	 * @throws Exception
	 */
	public function __construct(Wbcr_Factory426_Plugin $plugin)
	{
		/*if( !class_exists('\WBCR\Titan\Plugin') ) {
			throw new Exception('Plugin Titan is not installed!');
		}*/

		self::$app = $plugin;

		$this->global_scripts();

		if( is_admin() ) {
			require(WHLP_PLUGIN_DIR . '/admin/boot.php');
		}

		add_action('plugins_loaded', [$this, 'plugins_loaded']);
	}

	/**
	 * Статический метод для быстрого доступа к интерфейсу плагина.
	 *
	 * Позволяет разработчику глобально получить доступ к экземпляру класса плагина в любом месте
	 * плагина, но при этом разработчик не может вносить изменения в основной класс плагина.
	 *
	 * Используется для получения настроек плагина, информации о плагине, для доступа к вспомогательным
	 * классам.
	 *
	 * @return \WBCR\Titan\Plugin
	 */
	public static function app()
	{
		return self::$app;
	}

	/**
	 * @throws \Exception
	 */
	public function plugins_loaded()
	{
		if( is_admin() ) {
			$this->register_pages();
		}
	}

	/**
	 * Регистрирует классы страниц в плагине
	 *
	 * Мы указываем плагину, где найти файлы страниц и какое имя у их класса. Чтобы плагин
	 * выполнил подключение классов страниц. После регистрации, страницы будут доступные по url
	 * и в меню боковой панели администратора. Регистрируемые страницы будут связаны с текущим плагином
	 * все операции выполняемые внутри классов страниц, имеют отношение только текущему плагину.
	 *
	 * @throws \Exception
	 * @author Alexander Kovalev <alex.kovalevv@gmail.com>
	 */
	private function register_pages()
	{
		self::app()->registerPage('WHLP_HideLoginPage', WHLP_PLUGIN_DIR . '/admin/pages/hide-login.php');
	}

	/**
	 * @author Alexander Kovalev <alex.kovalevv@gmail.com>
	 * @since  1.1.0
	 */
	private function global_scripts()
	{
		require_once(WHLP_PLUGIN_DIR . '/includes/classes/class.configurate-hide-login-page.php');
		new WHLP_ConfigHideLoginPage(self::app());
	}
}