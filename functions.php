<?php
//获得读者墙
function getFriendWall()
{
    $db = Typecho_Db::get();
    $sql = $db->select('COUNT(author) AS cnt', 'author', 'url', 'mail')
              ->from('table.comments')
              ->where('status = ?', 'approved')
              ->where('type = ?', 'comment')
              ->where('authorId = ?', '0')
              ->where('mail != ?', 'admin@ben-lab.com')   //排除自己上墙
              ->group('author')
              ->order('cnt', Typecho_Db::SORT_DESC)
              ->limit('15');    //读取几位用户的信息
    $result = $db->fetchAll($sql);
 
    if (count($result) > 0) {
        $maxNum = $result[0]['cnt'];
        foreach ($result as $value) {
            $mostactive .= '<li><a target="_blank" rel="nofollow" href="' . $value['url'] . '"><span class="pic" style="background: url(http://1.gravatar.com/avatar/'.md5(strtolower($value['mail'])).'?s=36&d=&r=G) no-repeat; "></span><em>' . $value['author'] . '</em><strong>+' . $value['cnt'] . '</strong><br />' . $value['url'] . '</a></li>';    
        }
        echo $mostactive;
    }
}
?>