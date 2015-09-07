<?php
/**
 * �����������⣬������Ͷ�߱���
 *
 * @parameter $fid ���ID
 * @parameter $uid �û�ID
 * @parameter $subject ���ӱ���
 * @parameter $message ��������
 * @parameter $pics ����ͼƬ��base64�����ݣ�
 *
 * ����discuz�����������������£�
 * 1. ����$_G, "./inc.php"
 * 2. �ж�Ȩ��, "./source/post/forum_post.php"
 * 3. ��������, "./source/post/post_newthread.php"
 * 4. ������, "./source/post/post_newthread.php"
 *
 * @Author    ��ΰ�� QQ:973885303
 * @FileName  t_forum_newthread.php
 * @Date      2014-9-10 10:42:27
 *
 */
 
require("./inc.php");

// ��������
$fid      = intval(trim($_POST['fid']));
$uid      = intval(trim($_POST['uid']));
$subject  = trim($_POST['subject']);
$message  = trim($_POST['message']);
$pic      = trim($_POST['pic']);
$time     = time();

// �����ж�
if (empty($fid) || !is_numeric($fid)) showmessage2('fid��������Ϊ��', '', 44101);

if (empty($uid) || !is_numeric($uid)) showmessage2('uid��������Ϊ��', '', 44102);

if (empty($subject)) showmessage2('subject��������Ϊ��', '', 44103);

if (empty($message)) showmessage2('message��������Ϊ��', '', 44104);

global $_G;
$_G['clientip'] = $_SERVER["REMOTE_ADDR"];
$_G['setting']['threadhidethreshold'] = 1;

require './source/post/forum_post.php';
