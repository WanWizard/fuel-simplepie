<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

Autoloader::add_classes(array(
	'Simplepie\\Factory'			   				=> __DIR__.'/classes/factory.php',
	'Simplepie\\SimplePie_Author'   				=> __DIR__.'/classes/simplepie/author.php',
	'Simplepie\\SimplePie_Cache'   					=> __DIR__.'/classes/simplepie/cache.php',
	'Simplepie\\SimplePie_Cache_Base'   			=> __DIR__.'/classes/simplepie/cache/base.php',
	'Simplepie\\SimplePie_Cache_DB'   				=> __DIR__.'/classes/simplepie/cache/db.php',
	'Simplepie\\SimplePie_Cache_File' 				=> __DIR__.'/classes/simplepie/cache/file.php',
	'Simplepie\\SimplePie_Cache_MySQL'				=> __DIR__.'/classes/simplepie/cache/mysql.php',
	'Simplepie\\SimplePie_Content_Type_Sniffer'		=> __DIR__.'/classes/simplepie/content/type/sniffer.php',
	'Simplepie\\SimplePie_Caption'   				=> __DIR__.'/classes/simplepie/caption.php',
	'Simplepie\\SimplePie_Category'   				=> __DIR__.'/classes/simplepie/category.php',
	'Simplepie\\SimplePie_Copyright'   				=> __DIR__.'/classes/simplepie/copyright.php',
	'Simplepie\\SimplePie_Core'   					=> __DIR__.'/classes/simplepie/core.php',
	'Simplepie\\SimplePie_Credit'   				=> __DIR__.'/classes/simplepie/credit.php',
	'Simplepie\\SimplePie_Decode_HTML_Entities'		=> __DIR__.'/classes/simplepie/decode/html/entities.php',
	'Simplepie\\SimplePie_Enclosure'   				=> __DIR__.'/classes/simplepie/enclosure.php',
	'Simplepie\\SimplePie_File'   					=> __DIR__.'/classes/simplepie/file.php',
	'Simplepie\\SimplePie_gzdecode'   				=> __DIR__.'/classes/simplepie/gzdecode.php',
	'Simplepie\\SimplePie_HTTP_Parser' 				=> __DIR__.'/classes/simplepie/http/parser.php',
	'Simplepie\\SimplePie_IRI'   					=> __DIR__.'/classes/simplepie/iri.php',
	'Simplepie\\SimplePie_Item'   					=> __DIR__.'/classes/simplepie/item.php',
	'Simplepie\\SimplePie_Locator'   				=> __DIR__.'/classes/simplepie/locator.php',
	'Simplepie\\SimplePie_Misc'   					=> __DIR__.'/classes/simplepie/misc.php',
	'Simplepie\\SimplePie_Net_IPv6' 				=> __DIR__.'/classes/simplepie/net/ipv6.php',
	'Simplepie\\SimplePie_Parser'   				=> __DIR__.'/classes/simplepie/parser.php',
	'Simplepie\\SimplePie_Parse_Date'   			=> __DIR__.'/classes/simplepie/parse/date.php',
	'Simplepie\\SimplePie_Rating'   				=> __DIR__.'/classes/simplepie/rating.php',
	'Simplepie\\SimplePie_Restriction'   			=> __DIR__.'/classes/simplepie/restriction.php',
	'Simplepie\\SimplePie_Sanitize'   				=> __DIR__.'/classes/simplepie/sanitize.php',
	'Simplepie\\SimplePie_Source'   				=> __DIR__.'/classes/simplepie/source.php',
	'Simplepie\\SimplePie_XML_Declaration_Parser'	=> __DIR__.'/classes/simplepie/xml/declaration/parser.php',
));

/* End of file bootstrap.php */
