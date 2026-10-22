/**
 * Category sidebar switching for the "Other Solutions" admin tab.
 *
 * @package Wt_Smart_Coupon
 * @since   2.3.1
 */
( function ( $ ) {
	'use strict';

	$( function () {
		var $links    = $( '.wt-sc-os-cat-link' );
		var $panels   = $( '.wt-sc-os-category-panel' );
		var $title    = $( '#wt-sc-os-cat-title' );
		var $subtitle = $( '#wt-sc-os-cat-subtitle' );

		if ( ! $links.length ) {
			return;
		}

		/**
		 * Mirror the active settings tab onto the tab container.
		 *
		 * The stylesheet keys the full-width layout off this attribute. The
		 * Free vs Pro module sets it too; writing the same value here keeps
		 * this tab working on its own.
		 *
		 * @param {string} href Hash of the active header nav link.
		 */
		function syncActiveTab( href ) {
			if ( ! href ) {
				return;
			}

			$( '.wt-sc-tab-container' ).attr( 'data-tab', href.replace( '#', '' ) );
		}

		syncActiveTab( $( '.wbte_sc_header_nav a.active' ).attr( 'href' ) );

		$( '.wbte_sc_header_nav a' ).on( 'click', function () {
			syncActiveTab( $( this ).attr( 'href' ) );
		} );

		$links.on( 'click', function ( e ) {
			e.preventDefault();

			var $link  = $( this );
			var $panel = $( '#wt-sc-os-panel-' + $link.data( 'category' ) );

			if ( ! $panel.length ) {
				return;
			}

			$links.removeClass( 'active' ).attr( 'aria-selected', 'false' );
			$link.addClass( 'active' ).attr( 'aria-selected', 'true' );

			$panels.removeClass( 'active' );
			$panel.addClass( 'active' );

			$title.text( $panel.data( 'title' ) );
			$subtitle.text( $panel.data( 'subtitle' ) );
		} );
	} );
}( jQuery ) );
