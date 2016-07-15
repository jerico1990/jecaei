<?php 
namespace app\components;

use Yii;
use yii\helpers\Html;

/**
* public function
*/
class Tools extends \yii\base\Object
{
    /**
      * Time format. Output as the first few seconds or a few minutes ago.
      */
    public static function formatTime($timestamp = null)
    {
        if ($timestamp == null) {
            return $timestamp;
        }
        
        //???????
        $currentTime = time();

        //????0????
        $todayZero = strtotime('today');

        //?????
        $todayDiff = $currentTime -  $todayZero;

        //?????
        $yearDiff = $currentTime - strtotime("-1 year");

        //???
        $timeDiff = $currentTime - $timestamp;

        if($timeDiff < 0)
            return Yii::t('app','Time error');

        if($timeDiff > $todayDiff) {
            if ($timeDiff > $yearDiff) {
                return date('Y-m-d H:i', $timestamp);
                    
            } else {
                return date('m-d H:i', $timestamp);
            }
        } else {
            if($timeDiff > 3600) {
                return Yii::t('app', 'Today {time}', ['time' => date('H:i', $timestamp)]);
            } elseif($timeDiff > 60) {
                $min = floor($timeDiff / 60);
                return Yii::t('app', '{min} minutes ago', ['min' => $min]);
            } else {
                return Yii::t('app', 'Just now');
            }
        }
    }

    /**
     * Example:
     *
     * ```php
     * $query = new \yii\db\Query;
     * $query->select('*')
     *   ->from('{{%post}}')
     *   ->where('user_id=:user_id', [':user_id' => $user->id]);
     * $pages = Tools::Pagination($query);
     * $posts = $pages['result'];
     * foreach($posts as $post) {
     *     echo $post['content'];
     * }
     * echo \yii\widgets\LinkPager::widget([
     *   'pagination' => $pages['pages'],
     * ]);
     * ```
     *
     * @author Shiyang <dr@shiyang.me>
     * @param $query a SELECT SQL statement
     * @return array ['result', 'pages']
     */
    public static function Pagination($query, $defaultPageSize = 20)
    {
        $pages = new \yii\data\Pagination(['totalCount' => $query->count()]);
        $pages->defaultPageSize = $defaultPageSize;
        $result = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
            
        return ['pages' => $pages, 'result' => $result];
    }

    /**
    * ============================== ???? html?????? =========================
    * @param string $str   ??????
    * @param int  $lenth  ????
    * @param string $url ??
    * @param string $anchor ???????????????????????????
    * @return string $result ???
    * @demo  $res = cut_html_str($str, 256, '...'); //??256?????????'...'??
    * -------------------------------------------------------------------------------
    * @author Wang Jian. <wj@yurendu.com>    Date: 2014/03/16
    * ===============================================================================
    */ 
    public static function htmlSubString($str, $lenth, $url=null, $anchor='<!-- break -->')
    {
        $_lenth = mb_strlen(strip_tags($str), "utf-8");    // ???????????????????
        if($_lenth <= $lenth){
            return $str;    // ???????????????????
        }
        $strlen_var = strlen($str);     // ????????UTF8???-???3????????????
        if(strpos($str, '<') === false){ 
            return mb_substr($str, 0, $lenth);    // ??? html ?? ?????
        } 
        if($e = strpos($str, $anchor)){ 
            return mb_substr($str, 0, $e);    // ?????????
        } 
        $html_tag = 0;     // html ???? 
        $result = '';     // ?????
        $html_array = array('left' => array(), 'right' => array()); //???????????? html ?????=>left,??=>right
        /*
        * ??????<h3><p><b>a</b></h3>???p?????????array('left'=>array('h3','p','b'), 'right'=>'b','h3');
        * ??? html ???<? <% ?????????????????
        */ 
        for($i = 0; $i < $strlen_var; ++$i) { 
            if(!$lenth) break;    // ???????
            $current_var = substr($str, $i, 1); // ????
            if($current_var == '<'){ // html ???? 
                $html_tag = 1; 
                $html_array_str = ''; 
            }else if($html_tag == 1){ // ?? html ???? 
                if($current_var == '>'){ 
                    $html_array_str = trim($html_array_str); //???????? <br / > < img src="" / > ?????????
                    if(substr($html_array_str, -1) != '/'){ //??????????? /??????????????
                        // ????????? /??????? right ?? 
                        $f = substr($html_array_str, 0, 1); 
                        if($f == '/'){ 
                            $html_array['right'][] = str_replace('/', '', $html_array_str); // ?? '/' 
                        }else if($f != '?'){ // ?????? PHP ?????
                            // ??????????????????? html ?????<h2 class="a"> <p class="a"> 
                            if(strpos($html_array_str, ' ') !== false){ 
                            // ???2??????????????<h2 class="" id=""> 
                            $html_array['left'][] = strtolower(current(explode(' ', $html_array_str, 2))); 
                            }else{ 
                            //???????????? html ?????<b> <p> ?????????
                            $html_array['left'][] = strtolower($html_array_str); 
                            } 
                        } 
                    } 
                    $html_array_str = ''; // ?????
                    $html_tag = 0; 
                }else{ 
                    $html_array_str .= $current_var; //?< >????????????,???? html ??
                } 
            }else{ 
                --$lenth; // ? html ?????
            } 
            $ord_var_c = ord($str{$i}); 
            switch (true) { 
                case (($ord_var_c & 0xE0) == 0xC0): // 2 ?? 
                    $result .= substr($str, $i, 2); 
                    $i += 1; break; 
                case (($ord_var_c & 0xF0) == 0xE0): // 3 ??
                    $result .= substr($str, $i, 3); 
                    $i += 2; break; 
                case (($ord_var_c & 0xF8) == 0xF0): // 4 ??
                    $result .= substr($str, $i, 4); 
                    $i += 3; break; 
                case (($ord_var_c & 0xFC) == 0xF8): // 5 ?? 
                    $result .= substr($str, $i, 5); 
                    $i += 4; break; 
                case (($ord_var_c & 0xFE) == 0xFC): // 6 ??
                    $result .= substr($str, $i, 6); 
                    $i += 5; break; 
                default: // 1 ?? 
                    $result .= $current_var; 
            } 
        } 
        if($html_array['left']){ //???? html ????????
            $html_array['left'] = array_reverse($html_array['left']); //??left?????????? html ???????
            foreach($html_array['left'] as $index => $tag){ 
                $key = array_search($tag, $html_array['right']); // ?????????? right ?
                if($key !== false){ // ???? right ??????
                    unset($html_array['right'][$key]); 
                }else{ // ????????? 
                    $result .= '</'.$tag.'>'; 
                } 
            } 
        } 
        if ($url==null) {
            return $result.'...';
        } else {
            $replace = '<br />'.Html::a('<i class="glyphicon glyphicon-hand-right"></i>'. Yii::t('app', 'Unfinished,continue reading').'>>', 
                        $url);
            return $result.'...'.$replace; 
        }
    }
}
