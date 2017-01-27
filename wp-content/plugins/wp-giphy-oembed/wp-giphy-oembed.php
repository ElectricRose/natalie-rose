<?php
/*
 * Plugin name: WP Giphy oEmbed
 * Description: simple oembed with amazing giphy.com gifs
 * Version: 0.2
 * Author: Julien Maury
 * Author URI: http://dev73.tweetpress.fr
 */
/*
Copyright (C) 2016, Julien Maury - contact@tweetpress.fr
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

defined( 'ABSPATH' ) or die ( 'No direct load !' );

if ( ! class_exists( 'WP_Giphy_oEmbed' ) ) {

 final class WP_Giphy_oEmbed {

		protected static $endpoint = 'https://giphy.com/embed/';

		public static function init() {

			/**
			 * http://giphy.com/gifs/black-girls-rock-kclxoRdCys3Mk
			 */
			wp_embed_register_handler(
				'embed-giphy',
				apply_filters( 'giphy_oembed/regex', '~https?://(?|media\.giphy\.com/media/([^ /]+)/giphy\.gif|i\.giphy\.com/([^ /]+)\.gif|giphy\.com/gifs/(?:.*-)?([^ /]+))~i' ),
				array( __CLASS__, 'register_handler' )
			);
		}

		/**
		 * Handle handler ^^
		 *
		 * @param $matches
		 * @param $attr
		 *
		 * @author Julien Maury
		 * @return string
		 */
		public static function register_handler( $matches, $attr ) {

			$id = $matches[1];

			// source
			$src = sprintf( '%s%s', self::$endpoint, $id );

			/**
			 * most install would discourage usage of iframe in visual editor
			 */
			return sprintf(
				'<iframe class="giphy-embed" src=\'%s\' frameBorder="0" allowfullscreen="allowfullscreen"></iframe><p><a href="%s">via GIPHY</a></p>',
				esc_url( $src ),
				$matches[0]
			);
		}

	}

	add_action( 'plugins_loaded', array( 'WP_Giphy_oEmbed', 'init' ) );
}
