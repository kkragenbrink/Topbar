<?php
/**
 * __          __   _ _   _                  _
 * \ \        / /  (_) | | |                | |
 *  \ \  /\  / / __ _| |_| |__    _ __   ___| |_
 *   \ \/  \/ / '__| | __| '_ \  | '_ \ / _ \ __|
 *    \  /\  /| |  | | |_| | | |_| | | |  __/ |_
 *     \/  \/ |_|  |_|\__|_| |_(_)_| |_|\___|\__|
 *
 * @author      Kevin Kragenbrink <kevin@writh.net>
 * @created     18th January 2012
 * @edited      19th January 2012
 * @version     1.0.0
 */


// Validate entrypoint.
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

// Autoload classes.
define('WRITH_TOPBAR_ROOT', dirname(__FILE__));
$wgAutoloadClasses['TopbarHooks']                           = WRITH_TOPBAR_ROOT . '/Topbar.hooks.php';

// Setup credits.
$wgExtensionCredits['Other'][] = array(
    'path'                                                  => __FILE__,
    'name'                                                  => "Topbar",
    'description'                                           => "Adds Topbar navigation to Mediawiki.  A part of a suite of extensions by [http://github.com/Writh Writh.net] aimed at combining the beauty of Wikidot with the power of MediaWiki.",
    'version'                                               => '0.1.0',
    'author'                                                => "[http://en.wikipedia.org/wiki/User:Kkragenbrink Kevin Kragenbrink]",
    'url'                                                   => "http://www.mediawiki.org/wiki/Extension:Topbar",
);

// Bootstrap.
$wgTopbar                                                   = new TopbarHooks();