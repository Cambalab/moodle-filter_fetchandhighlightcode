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
 * English language strings.
 *
 * @package   filter_fetchandhighlightcode
 * @author    Camba Coop <info@camba.coop>
 * @copyright 2020 Camba Coop {@link https://www.camba.coop}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Fetch and Highlight Code';
$string['filtername'] = 'Fetch and Highlight Code';
$string['privacy:metadata'] = 'El plugin filter_fetchandhighlightcode no guarda ninguna información personal.';
$string['style'] = 'Highlighting style';
$string['style_desc'] = 'El nombre de la hoja de estilos para usar en el resaltado del código.<p>Ejemplo de estilo (Guardar cambios para actualizar)</p>
<pre><code>function multiply($a, $b) {
    return $a * $b;
}
echo multiply(10, 15);</code></pre>';
$string['cdn'] = 'Utilizar CDN';
$string['cdn_desc'] = 'Usa CDN library para importar las hojas de estilo. Esto puede ser mas rápido que importar los estilos de forma local,
                        pero podes preferir cargar los estilos localmente por varias razones.';
$string['allowexternalsource'] = 'Usar fuentes externas';
$string['allowexternalsource_desc'] = 'Permite utilizar fuentes externas (URLs), si esta deshabilitada esta opción, solo se puede utilizar Github y Gitlab.';
