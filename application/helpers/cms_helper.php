<?php

/**
 * Prepent a meta title
 * @param unknown $string
 */
function add_meta_title($string)
{
    // Codeigniter super object
    $CI =& get_instance();
    $CI->data['meta_title'] = e($string).' - '.$CI->data['meta_title'];
    
}





function btn_edit($uri){
    return anchor($uri, '<i class="icon-edit"></i>');    
}





function btn_delete($uri){
    return anchor($uri, '<i class="icon-remove"></i>', array('onclick'  =>  "return confirm('Are you sure you want to delete this record?')"));
}




/**
 * Article link
 * @param unknown $article
 * @return string
 */
function article_link($article){
    return $url = 'article/'. intval($article->id) .'/'. e($article->slug);
}




/**
 * Sidebar articles
 * @param unknown $articles
 */
function article_links($articles){
	$string = '<ul>';
	foreach ($articles as $article) {
		$url = article_link($article);
		$string .= '<li class="sidebar">';
		$string .= '<h3>' . anchor($url, e($article->title)) .  ' &#x2192;</h3>';
		$string .= '<p class="pubdate">Posted On: <b>' . e($article->pubdate) . '</b></p>';
		$string .= '</li>';
	}
	$string .= '</ul>';
	return $string;
}




/**
 * Number of words will be shown in the articles
 * @param unknown $article
 * @param number $numwords
 * @return string
 */ 
function get_excerpt($article, $numwords = 50){
    $string = '';
    $url = article_link($article);
    
               
    $string .= '<h2>'. anchor($url, e($article->title)) .'</h2>';
    $string .= '<p class="pubdate">Date Posted: <b>'. e($article->pubdate) .'</b></p>';
    $string .= '<p>'. e(limit_to_numwords(strip_tags($article->body),$numwords)) .'</p>';
    $string .= '<p>'. anchor($url, 'Read more >', array('title' => e($article->title))) .'</p>';
        
    return $string;
}




/**
 * Limit words
 * @param unknown $string
 * @param unknown $numwords
 * @return string
 */
function limit_to_numwords($string , $numwords){
    $excerpt = explode(' ', $string, $numwords + 1);
    if(count($excerpt) >= $numwords){
        array_pop($excerpt);
    } 
    $excerpt = implode(' ', $excerpt);
    return $excerpt;
}





/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner. 
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';
        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}
if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}



// Escape the output from the database
function e($string){
    return htmlentities($string);   
}




function get_menu($array, $child = FALSE)
{
    //codeigniter super object
    $CI =& get_instance();
    
    $str = '';

    if (count($array)) {
        $str .= $child == FALSE? '<ul class="nav">'. PHP_EOL : '<ul class="dropdown-menu">'. PHP_EOL;

        foreach ($array as $item){
            
            $active = $CI->uri->segment(1) == $item['slug']? TRUE : FALSE;
            
            if (isset($item['children']) && count($item['children'])) {
                $str .= $active ? '<li class="dropdown active">' : '<li class="dropdown">';
                $str .= '<a class="dropdown-toggle" data-toggle="dropdown" href="'. site_url(e($item['slug'])) .'">'.e($item['title']);
                $str .= '<b class="caret"></b></a>'. PHP_EOL;
                $str .= get_menu($item['children'], TRUE);
                
            } else {
                $str .= $active ? '<li class="active">' : '<li>';
                $str .= '<a href="'. site_url($item['slug']) .'">'. e($item['title']).'</a>';
            }
            
            $str .= '</li>'. PHP_EOL;
        }

        $str .= '</ul>'. PHP_EOL;
    }
    return $str;
}



