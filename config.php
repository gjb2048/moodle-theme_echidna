<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Echidna theme.
 *
 * @package    theme_echidna
 * @copyright  &copy; 2020-onwards G J Barnard.
 * @author     G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

defined('MOODLE_INTERNAL') || die;

$THEME->doctype = 'html5';
$THEME->name = 'echidna';
$THEME->parents = array('boost');
$THEME->sheets = array('custom');
$THEME->editor_sheets = [];
$THEME->usefallback = true;
$THEME->precompiledcsscallback = 'theme_boost_get_precompiled_css';
$THEME->enable_dock = false;

$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->prescsscallback = 'theme_echidna_get_pre_scss';
$THEME->scss = function(theme_config $theme) {
    return theme_echidna_get_main_scss_content($theme);
};
$THEME->extrascsscallback = 'theme_echidna_get_extra_scss';
$THEME->csspostprocess = 'theme_echidna_process_css';

$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;

$THEME->layouts = [
    // The pagelayout used for reports.
    'report' => array(
        'file' => 'echidnacolumns1.php',
        'regions' => array()
    ),
    // Main course page.
    'course' => array(
        'file' => 'echidnacourse.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    )
];