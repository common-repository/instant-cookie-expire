=== Instant Cookie Expire ===
Contributors: brechtryckaert
Donate link: https://www.paypal.me/brechtryckaert
Tags: password, protected, post, session, cookie, expire, pass
Requires at least: 3.7.0
Tested up to: 4.7.1
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin turns the cookie for a password-protected post into a session-based cookie.

== Description ==

Limiting the cookie expire time of password protected posts. By default the cookie set when entering a password to access a password-protected post will be active for 10 days. This plugin turns this cookie into a session-based cookie. This means your visitor will need to re-enter the password if the browser was closed prior to revisiting the post.

== Installation ==

By following these instruction, you'll be able to install Instant Cookie Expire.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/instant-cookie-expire` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.


== Frequently Asked Questions ==

= I closed the browsertab and opened a new one, but your plugin does not work? =

This is expected behaviour. Since the cookie works session-based, a password won't be requested again unless the user closes the browser entirely. 

== Changelog ==

= 1.0.1 =
* Altered the plugin code. Thanks to the suggestions of pjherrel.
* Updated the description for WordPress 4.6

= 1.0 =
* First release.
