<?php
/*
Plugin Name: Instant Cookie Expire
Plugin URI: http://www.brechtryckaert.com/plugins
Description: This plugin decreases the standard cookie validity period on password protected posts from 10 days back to a session based cookie
Version: 1.0.1
Author: Brecht Ryckaert
Author URI: http://www.brechtryckaert.com/
License: GPLv2
*/
/*  Copyright 2016 Brecht Ryckaert  (http://www.brechtryckaert.com/)
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_filter('post_password_expires', '__return_zero');
