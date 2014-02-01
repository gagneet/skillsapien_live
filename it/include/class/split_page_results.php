<?php
$PHP_SELF=$_SERVER['PHP_SELF'];
 

  class splitPageResults  extends database{
    var $sql_query, $number_of_rows, $current_page_number, $number_of_pages, $number_of_rows_per_page, $page_name,$start;

/* class constructor */
    function splitPageResults($query, $max_rows, $count_key = '*', $page_holder = 'page') {
      global $_REQUEST ;
 
      $this->sql_query = $query;
      $this->page_name = $page_holder;
  
      if (isset($_REQUEST[$page_holder])) {
        $page = $_REQUEST[$page_holder];
		
      } elseif (isset($_REQUEST[$page_holder])) {
        $page = $_REQUEST[$page_holder];
      } else { 
        $page = '';
      }

      if (empty($page) || !is_numeric($page)) $page = 1;
      $this->current_page_number = $page;

      $this->number_of_rows_per_page = $max_rows;

      $pos_to = strlen($this->sql_query);
      $pos_from = strpos(strtolower($this->sql_query), ' from', 0);

      $pos_group_by = strpos($this->sql_query, ' group by', $pos_from);
      if (($pos_group_by < $pos_to) && ($pos_group_by != false)) $pos_to = $pos_group_by;

      $pos_having = strpos($this->sql_query, ' having', $pos_from);
      if (($pos_having < $pos_to) && ($pos_having != false)) $pos_to = $pos_having;

      $pos_order_by = strpos($this->sql_query, ' order by', $pos_from);
      if (($pos_order_by < $pos_to) && ($pos_order_by != false)) $pos_to = $pos_order_by;

      if (strpos($this->sql_query, 'distinct') || strpos($this->sql_query, 'group by')) {
        $count_string = 'distinct ' . ($count_key);
      } else {
        $count_string = ($count_key);
      }
       $count_query = $this->query_silent("select count(" . $count_string . ") as total " . substr($this->sql_query, $pos_from, ($pos_to - $pos_from)));
      $count = $this->fetch_array($count_query);

      $this->number_of_rows = $count['total'];

      $this->number_of_pages = ceil($this->number_of_rows / $this->number_of_rows_per_page);

      if ($this->current_page_number > $this->number_of_pages) {
        $this->current_page_number = $this->number_of_pages;
      }

             
	    $offset = ($this->number_of_rows_per_page * ($this->current_page_number - 1));
		$this->start=$offset;
        $this->sql_query .= " limit " . max($offset, 0) . ", " . $this->number_of_rows_per_page;
    }

/* class functions */

// display split-page-number-links
    function display_links($max_page_links, $parameters = '') {
      global $PHP_SELF, $request_type;

      $display_links_string = '';

      $class = 'class="pageResults"';

      if (tep_not_null($parameters) && (substr($parameters, -1) != '&')) $parameters .= '&';

// previous button - not displayed on first page
      if ($this->current_page_number > 1) $display_links_string .= '<a href="' . tep_href_link(basename($PHP_SELF), $parameters . $this->page_name . '=' . ($this->current_page_number - 1), $request_type) . '" class="pageResults" title=" ' . PREVNEXT_TITLE_PREVIOUS_PAGE . ' ">' . PREVNEXT_BUTTON_PREV . '</a>&nbsp;&nbsp;';

// check if number_of_pages > $max_page_links
      $cur_window_num = intval($this->current_page_number / $max_page_links);
      if ($this->current_page_number % $max_page_links) $cur_window_num++;

      $max_window_num = intval($this->number_of_pages / $max_page_links);
      if ($this->number_of_pages % $max_page_links) $max_window_num++;

// previous window of pages
      if ($cur_window_num > 1) $display_links_string .= '<a href="' . tep_href_link(basename($PHP_SELF), $parameters . $this->page_name . '=' . (($cur_window_num - 1) * $max_page_links), $request_type) . '" class="pageResults" title=" ' . sprintf(PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE, $max_page_links) . ' ">...</a>';

// page nn button
      for ($jump_to_page = 1 + (($cur_window_num - 1) * $max_page_links); ($jump_to_page <= ($cur_window_num * $max_page_links)) && ($jump_to_page <= $this->number_of_pages); $jump_to_page++) {
        if ($jump_to_page == $this->current_page_number) {
          $display_links_string .= '&nbsp;<strong class="current">' . $jump_to_page . '</strong>&nbsp;';
        } else {
          $display_links_string .= '&nbsp;<a href="' . tep_href_link(basename($PHP_SELF), $parameters . $this->page_name . '=' . $jump_to_page, $request_type) . '" class="pageResults" title=" ' . sprintf(PREVNEXT_TITLE_PAGE_NO, $jump_to_page) . ' ">' . $jump_to_page . '</a>&nbsp;';
        }
      }

// next window of pages
      if ($cur_window_num < $max_window_num) $display_links_string .= '<a href="' . tep_href_link(basename($PHP_SELF), $parameters . $this->page_name . '=' . (($cur_window_num) * $max_page_links + 1), $request_type) . '" class="pageResults" title=" ' . sprintf(PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE, $max_page_links) . ' ">...</a>&nbsp;';

// next button
      if (($this->current_page_number < $this->number_of_pages) && ($this->number_of_pages != 1)) $display_links_string .= '&nbsp;<a href="' . tep_href_link(basename($PHP_SELF), $parameters . 'page=' . ($this->current_page_number + 1), $request_type) . '" class="pageResults" title=" ' . PREVNEXT_TITLE_NEXT_PAGE . ' ">' . PREVNEXT_BUTTON_NEXT . '</a>&nbsp;';

      return $display_links_string;
    }

// display number of total products found
    function display_count($text_output) {
      $to_num = ($this->number_of_rows_per_page * $this->current_page_number);
      if ($to_num > $this->number_of_rows) $to_num = $this->number_of_rows;

      $from_num = ($this->number_of_rows_per_page * ($this->current_page_number - 1));

      if ($to_num == 0) {
        $from_num = 0;
      } else {
        $from_num++;
      }

      return sprintf($text_output, $from_num, $to_num, $this->number_of_rows);
    }
  }



///==========================
//Pagination class
  function tep_href_link($page = '', $parameters = '') {

    if (!tep_not_null($page)) {
      die('</td></tr></table></td></tr></table><br><br><font color="#ff0000"><b>Error!</b></font><br><br><b>Unable to determine the page link!<br><br>');
    }

    if (tep_not_null($parameters)) {
      $link .= $page . '?' . tep_output_string($parameters);
      $separator = '&';
    } else {
      $link .= $page;
      $separator = '?';
    }

    while ( (substr($link, -1) == '&') || (substr($link, -1) == '?') ) $link = substr($link, 0, -1);
    return $link;
  }
  
  
  
  ////
  function tep_not_null($value) {
    if (is_array($value)) {
      if (sizeof($value) > 0) {
        return true;
      } else {
        return false;
      }
    } else {
      if (($value != '') && (strtolower($value) != 'null') && (strlen(trim($value)) > 0)) {
        return true;
      } else {
        return false;
      }
    }
  }



  function tep_output_string($string, $translate = false, $protected = false) {
    if ($protected == true) {
      return htmlspecialchars($string);
    } else {
      if ($translate == false) {
        return tep_parse_input_field_data($string, array('"' => '&quot;'));
      } else {
        return tep_parse_input_field_data($string, $translate);
      }
    }
  }
  
  
  // Return all HTTP GET variables, except those passed as a parameter
  function tep_get_all_get_params($exclude_array = '') {
    global $_REQUEST;

    if (!is_array($exclude_array)) $exclude_array = array();

    $get_url = '';
    if (is_array($_REQUEST) && (sizeof($_REQUEST) > 0)) {
      reset($_REQUEST);
      while (list($key, $value) = each($_REQUEST)) {
       // if ( is_string($value) && (strlen($value) > 0) && ($key != tep_session_name()) && ($key != 'error') && (!in_array($key, $exclude_array)) && ($key != 'x') && ($key != 'y') ) {
	   if(1){
          $get_url .= $key . '=' . rawurlencode(stripslashes($value)) . '&';
        }
      }
    }

    return $get_url;
  }
// Parse the data used in the html tags to ensure the tags will not break
  function tep_parse_input_field_data($data, $parse) {
    return strtr(trim($data), $parse);
  }
?>