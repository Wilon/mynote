<?php
/**
 * ��ȡ����б���Ͷ�߱��ϲ��Ű��
 *
 * @parameter $fup ��鸸ID
 *
 * @Author    ��ΰ�� QQ:973885303
 * @FileName  t_forum.php
 * @Date      2014-9-9 14:20:18  
 */

// ׼��
require("./inc.php");  // $_G�����û���Ϣ

require_once libfile('function/forumlist');

$gid = intval(getgpc('gid'));  // ��ȡ����gid


if(!$_G['uid'] && !$gid && $_G['setting']['cacheindexlife'] && !defined('IN_ARCHIVER') && !defined('IN_MOBILE')) {
	get_index_page_guest_cache();
}

$newthreads = round((TIMESTAMP - $_G['member']['lastvisit'] + 600) / 1000) * 1000;
$rsshead = $_G['setting']['rssstatus'] ? ('<link rel="alternate" type="application/rss+xml" title="'.$_G['setting']['bbname'].'" href="'.$_G['siteurl'].'forum.php?mod=rss&auth='.$_G['rssauth']."\" />\n") : '';

$catlist = $forumlist = $sublist = $forumname = $collapseimg = $collapse = array();
$threads = $posts = $todayposts = $fids = $announcepm = 0;
$postdata = $_G['cache']['historyposts'] ? explode("\t", $_G['cache']['historyposts']) : array(0,0);
$postdata[0] = intval($postdata[0]);
$postdata[1] = intval($postdata[1]);

list($navtitle, $metadescription, $metakeywords) = get_seosetting('forum');
if(!$navtitle) {
	$navtitle = $_G['setting']['navs'][2]['navname'];
	$nobbname = false;
} else {
	$nobbname = true;
}
if(!$metadescription) {
	$metadescription = $navtitle;
}
if(!$metakeywords) {
	$metakeywords = $navtitle;
}

if($_G['setting']['indexhot']['status'] && $_G['cache']['heats']['expiration'] < TIMESTAMP) {
	require_once libfile('function/cache');
	updatecache('heats');
}
if(defined('IN_MOBILE')) {
	@include DISCUZ_ROOT.'./source/module/forum/forum_index_mobile.php';
}



// ��ȡ�����Ϣ
$sql = "SELECT f.fid, f.fup, f.type, f.name, f.threads, f.posts, f.todayposts, f.lastpost, f.inheritedmod, f.domain,
		f.forumcolumns, f.simple, ff.description, ff.moderators, ff.icon, ff.viewperm, ff.redirect, ff.extra
		FROM ".DB::table('forum_forum')." f
		LEFT JOIN ".DB::table('forum_forumfield')." ff USING(fid)
		WHERE f.status='1' ORDER BY f.type, f.displayorder";

$query = DB::query($sql);

while($forum = DB::fetch($query)) {  // ��һ������

	// �ҳ�fup��gid��ֵ
	if ($forum['fup'] == $gid) {
		$icon = !$forum['icon'] ? '' : $_G['setting']['discuzurl'] . '/data/attachment/common/' . $forum['icon'];
		$forumlist[] = array(
				'fid' => $forum['fid'],
				'type' => $forum['type'],
				'name' => $forum['name'],
				'icon' => $icon,
			);

	}
}

// ���
if (empty($forumlist)) {
	showmessage2('��鲻���ڣ�', '', 41001);
} else {
	showmessage2('OK', $forumlist, 20000);
}
