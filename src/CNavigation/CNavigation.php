<?php
class CNavigation {
  public static function GenerateMenu($items) {
    $html = "<nav class='{$items['class']}'>\n";
    foreach($items['items'] as $key => $item) {
      $selected = basename($_SERVER['SCRIPT_FILENAME']) == $item['url'] ? 'selected' : null;
      $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};
