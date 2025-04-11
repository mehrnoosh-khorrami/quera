<?php



function getPaginationButtons($total_items, $per_page, $current_page)
{
    $total_page = ceil($total_items / $per_page);
    $buttons = [];

    if ($current_page != 1) {
        $buttons[] = ["text"=> "prev","number"=> (int)($current_page - 1)];
    }

    $p_page = [];
    $p_page[] = 1;

    for ($i = $current_page - 2; $i <= $current_page + 2; $i++) {
        if ($i > 1 && $i < $total_page) {
            $p_page[] = $i;
        }
    }

    if ($total_page > 1) {
        $p_page[] = $total_page;
    }

    $p_page = array_unique($p_page);
    sort($p_page);

    $last = null;
    foreach ($p_page as $page) {
        if(!is_null($last) && ($page - $last) > 1){
            if ($page - $last == 2) {
                $buttons[] = ["text"=> (string)($last + 1),"number"=> (int)($last + 1)];
            } else {
                $buttons[] = ["text"=> "..."];
            }
        }
        $buttons[] = ["text"=> (string)$page,"number"=> (int)($page)];
        $last = $page;
    }

    if($current_page < $total_page) {
        $buttons[] = ["text"=> "next","number"=> (int)($current_page + 1)];
    }
    return $buttons;
}


function renderPagination($pagination_template, $total_items, $per_page, $current_page, $base_url)
{
    $pages = getPaginationButtons($total_items, $per_page, $current_page);
    $html = '';
    foreach ($pages as $page) {
        $page['text'] = str_replace(['prev', 'next'], ['&laquo;', '&raquo;'], $page['text']);
        if (in_array($page['text'], ['&laquo;', '...', '&raquo;'])) {
            $html .= '<li class="page-item">
                <a class="page-link" href="' . (isset($page['number']) ? $base_url . $page['number'] : '#') . '">
                    <span aria-hidden="true">' . $page['text'] . '</span>
                </a>
            </li>';
        } else {
            $html .= '<li class="page-item' . ($page['number'] == $current_page ? ' active' : '') . '"><a class="page-link" href="' . $base_url . $page['number'] . '">' . $page['number'] . '</a></li>';
        }
    }

    return str_replace('{{ @pages }}', $html, $pagination_template);
}
