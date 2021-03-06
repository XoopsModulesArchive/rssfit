<?php
###############################################################################
##                RSSFit - Extendable XML news feed generator                ##
##                Copyright (c) 2004 - 2006 NS Tai (aka tuff)                ##
##                       <http://www.brandycoke.com/>                        ##
###############################################################################
##                    XOOPS - PHP Content Management System                  ##
##                       Copyright (c) 2000 XOOPS.org                        ##
##                          <http://www.xoops.org/>                          ##
###############################################################################
##  This program is free software; you can redistribute it and/or modify     ##
##  it under the terms of the GNU General Public License as published by     ##
##  the Free Software Foundation; either version 2 of the License, or        ##
##  (at your option) any later version.                                      ##
##                                                                           ##
##  You may not change or alter any portion of this comment or credits       ##
##  of supporting developers from this source code or any supporting         ##
##  source code which is considered copyrighted (c) material of the          ##
##  original comment or credit authors.                                      ##
##                                                                           ##
##  This program is distributed in the hope that it will be useful,          ##
##  but WITHOUT ANY WARRANTY; without even the implied warranty of           ##
##  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            ##
##  GNU General Public License for more details.                             ##
##                                                                           ##
##  You should have received a copy of the GNU General Public License        ##
##  along with this program; if not, write to the Free Software              ##
##  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA ##
###############################################################################
##  Author of this file: NS Tai (aka tuff)                                   ##
##  URL: http://www.brandycoke.com/                                          ##
##  Project: RSSFit                                                          ##
###############################################################################

function sortTimestamp($a, $b)
{
    if ($a['timestamp'] == $b['timestamp']) {
        return 0;
    }
    return ($a['timestamp'] > $b['timestamp']) ? -1 : 1;
}

function genSpecMoreInfo($spec=0, &$rss)
{
    return rssfGenAnchor($rss->specUrl($spec), _AM_EDIT_CHANNEL_QMARK, 'spec', _AM_EDIT_CHANNEL_MOREINFO);
}

function rssfGenAnchor($url='', $text='', $target="", $title='', $class='', $id='')
{
    if (!empty($url)) {
        $ret = '';
        $ret .= '<a href="'.$url.'"';
        $ret .= !empty($target) ? ' target="'.$target.'"' : '';
        $ret .= !empty($class) ? ' class="'.$class.'"' : '';
        $ret .= !empty($id) ? ' id="'.$id.'"' : '';
        $ret .= !empty($title) ? ' title="'.$title.'"' : '';
        $ret .= '>'.$text.'</a>';
        return $ret;
    }
    return $text;
}
