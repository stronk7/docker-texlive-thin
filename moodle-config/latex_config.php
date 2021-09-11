<?php
// Include this file before including lib/setup.php in config.php
// This provides auto-configuration to get LaTeX working on any
// testing environment of Moodle without isntalling anything.
// Note it's highly hacky so any change in the way LaTeX and
// converters are called, will require changes to this tool.

global $CFG;

// Verify if forced_plugin_settings has been set.
if (!isset($CFG->forced_plugin_settings)) {
    $CFG->forced_plugin_settings = [];
}

// LaTeX binaries (pointing to wrapper that uses docker image stronk7/docker-texlive-thin.
$CFG->forced_plugin_settings['filter_tex']['pathlatex']     = dirname(__FILE__) . '/latex';
$CFG->forced_plugin_settings['filter_tex']['pathdvips']     = dirname(__FILE__) . '/dvips';
$CFG->forced_plugin_settings['filter_tex']['pathconvert']   = dirname(__FILE__) . '/convert';
$CFG->forced_plugin_settings['filter_tex']['pathdvisvgm']   = dirname(__FILE__) . '/dvisvgm';

// Command wrappers need to know where the temp latex directory is, let's inform it via env var
// (note that if the site is using custom $CFG->tempdir this won't work, but that's not the default).
$latextmp = "$CFG->dataroot/temp/latex";
@mkdir($latextmp, $CFG->directorypermissions ?? 00777);
@chmod($latextmp, $CFG->directorypermissions ?? 00777);
putenv("LATEXTMP=$latextmp");
