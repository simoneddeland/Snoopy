<?php
class CNavigation {
    /**
     * Generates an HTML menu (with support for 1 submenulevel) from the specified array
     * @param none $items An array with information about the menu
     */
  public static function GenerateMenu($items) {
    $html = "<nav class='{$items['class']}'>\n";
    foreach($items['items'] as $key => $item) {
      // Check if item is a menu item or a submenu
      if (isset($item['submenuname'])) {

          // Generate the menu for the submenuitems
          $submenuHtml = "";
          $submenuClass ="submenu";
          foreach ($item['submenuitems'] as $key => $submenuitem) {
             $selected = basename($_SERVER['SCRIPT_FILENAME']) == $submenuitem['url'] ? 'selected' : null;
             $submenuClass = is_null($selected) ? $submenuClass : $submenuClass . ' selected';
             $submenuHtml .= "<a href='{$submenuitem['url']}' class='{$selected}'>{$submenuitem['text']}</a>\n";
          }

          // Generate the HTML of the enclosing div for the submenu
          $parentHtml = "<div class='{$submenuClass}'>{$item['submenuname']}<div class='submenulist'>";
          $submenuCloseHtml = "</div></div>";

          // Put it all together
          $html .= $parentHtml . $submenuHtml . $submenuCloseHtml;
      } else {
          $selected = basename($_SERVER['SCRIPT_FILENAME']) == $item['url'] ? 'selected' : null;
          $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>";
      }
    }
    $html .= "</nav>\n";
    return $html;
  }
};
