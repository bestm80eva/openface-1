<?php
/* Copyright (C) 2008 App Tsunami, Inc. */
/* 
 *  This program is free software: you can redistribute it and/or modify 
 *  it under the terms of the GNU General Public License as published by 
 *  the Free Software Foundation, either version 3 of the License, or 
 *  (at your option) any later version. 
 * 
 *  This program is distributed in the hope that it will be useful, 
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of 
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
 *  GNU General Public License for more details. 
 * 
 *  You should have received a copy of the GNU General Public License 
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */
/* OpfCanvasHelp.php */
$rDir = str_repeat('../', substr_count($_SERVER['PHP_SELF'],'/')-3);
include_once($rDir.'openface/php/views/OpfCanvas.php');

class OpfCanvasHelp extends OpfCanvas {
  const ICON = null;
  const TAG = 'help';
  const LABEL_KEY = OpfLocalization::MSG_HELP;

  public function __construct($parentUIObject) {
    parent::__construct($parentUIObject);
  } // __construct

  /* getters */
  public function getIcon() {
    return(self::ICON);
  } // getIcon

  public function getTag() {
    return(self::TAG);
  } // getTag

  public function getLabel() {
    return($this->lookUpLocale(self::LABEL_KEY));
  } // getLabel

  /* methods */
  public function render() {
$rDir = str_repeat('../', substr_count($_SERVER['PHP_SELF'],'/')-3);
require($rDir.'php/opf/OpfHelp.php');
  } // render
} // OpfCanvasHelp
?>
