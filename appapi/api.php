<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>


        <title>Discuz!�ӿ�</title>
        <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
        <script src="./jquery-1.7.2.min.js"></script>
        <base target="_blank" />
        <style type="text/css">
            body,td,th
            {
                font-size:12px;
            }
            ul
            {
                font-size:14px;
            }
            tt{ font-weight:bold;}
            .pad-left-150{
                padding-left:150px;
            }
            .pad-left-100{
                padding-left:100px;
            }
            .pad-left-50{
                padding-left:50px;
            }
            .unsure{
                border:1px solid red;
            }
            div.panel,p.flip{
                margin:0px;
                padding:5px;
                text-align:center;
                background:#e5eecc;
                border:solid 1px #c3c3c3;
            }
        </style>
        <script type="text/javascript">
            function show(obj) {
                var $jquery = $(obj)
                $jquery.parent().parent().parent().parent().next(".panel").slideToggle("slow");
            }
        </script>
    </head>
    <body>
        <div>
            <tt>Discuz!�ӿ�˵��</tt>
            <ul>
                <li>����<font color="red">Discuz!_X3.1_GBK</font></li>
                <li>���нӿڲ���POST��ʽ����</li>
                <li>���صĽ����json����</li>
            </ul>
        </div>
        <hr />
        <div>
            <tt>1. ����б� ��./t_forum_list.php��POST</tt>
                <table>
                    <form action="./t_forum_list.php" method="post">
                        <tr>
                            <td width="150px">��鸸ID(gid)</td>
                            <td><input type="text" name="gid" value="" /></td>
                        </tr>
                        <!-- <tr>
                            <td width="150px">�û�ID(uid)</td>
                            <td><input type="text" name="uid" value="2" /></td>
                        </tr> -->
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
    <div class="panel" style="width:625px;display:none;">
        <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
            <tr height="60">
                <td align="right" width="40%">���������</td>
                <td width="60%">
                    <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr>
                            <td width="20%">����</td>
                            <td width="20%">�Ƿ����</td>
                            <td width="80%">����</td>
                        </tr>
                        <tr>
                            <td>gid</td>
                            <td>��</td>
                            <td>��鸸ID
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>uid</td>
                            <td>��</td>
                            <td>�û�ID
                            </td>
                        </tr> -->
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">�����ı���ʽ:</td>
                <td align="left"><textarea cols="55" rows="25" readonly="readonly">
{
    "msg": "OK",
    "data": [
        {
            "fid": "39",
            "name": "����",
            "icon": "",
            "threadtypes": {
                "required": true,
                "types": {
                    "1": "��",
                    "2": "��"
                }
            }
        },
        {
            "fid": "40",
            "name": "����",
            "icon": "",
            "threadtypes": {
                "required": null,
                "types": null
            }
        }
    ],
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="left">data</td><td>��������</td></tr>
                        <tr><td class="pad-left-50">fid</td><td>���ID��</td></tr>
                        <tr><td class="pad-left-50">name</td><td>�������</td></tr>
                        <tr><td class="pad-left-50">icon</td><td>���ͼ��</td></tr>
                        <tr><td class="pad-left-50">threadtypes</td><td>�������ɫ</td></tr>
                        <tr><td class="pad-left-100">required</td><td>�������Ƿ���룬�û�����</td></tr>
                        <tr><td class="pad-left-100">types</td><td>�����࣬��+ֵ=>����ID+��������</td></tr>
                        <tr><td align="left">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="left">code</td><td>״̬�룬20000�ɹ�</td></tr>
                    </table></td>
            </tr></table>
    </div>
        </div>
        <hr />
        <div>
            <tt>2. �����б� ��./t_forum_postlist.php��POST</tt>
                <table>
                    <form action="./t_forum_postlist.php" method="post">
                        <tr>
                            <td width="150px">���ID(fid)</td>
                            <td><input type="text" name="fid" value="" /></td>
                        </tr>
                        <tr>
                            <td width="150px">ҳ��(page)</td>
                            <td><input type="text" name="page" value="1" /></td>
                        </tr>
                        <tr>
                            <td width="150px">ÿҳ����(pagesize)</td>
                            <td><input type="text" name="pagesize" value="20" /></td>
                        </tr>
                        <!-- <tr>
                            <td width="150px">�û�ID(uid)</td>
                            <td><input type="text" name="uid" value="2" /></td>
                        </tr> -->
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
    <div class="panel" style="width:625px;display:none;">
        <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
            <tr height="60">
                <td align="right" width="40%">���������</td>
                <td width="60%">
                    <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr>
                            <td width="20%">����</td>
                            <td width="20%">�Ƿ����</td>
                            <td width="80%">����</td>
                        </tr>
                        <tr>
                            <td>fid</td>
                            <td>��</td>
                            <td>���ID
                            </td>
                        </tr>
                        <tr>
                            <td>page</td>
                            <td>��</td>
                            <td>ҳ��
                            </td>
                        </tr>
                        <tr>
                            <td>pagesize</td>
                            <td>��</td>
                            <td>ÿ��ҳ��
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>uid</td>
                            <td>��</td>
                            <td>�û�ID
                            </td>
                        </tr> -->
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">�����ı���ʽ:</td>
                <td align="left"><textarea cols="55" rows="27" readonly="readonly">
{
    "msg": "OK",
    "data": [
        {
            "tid": "133",
            "fid": "37",
            "author": "333",
            "authorid": "2",
            "subject": "�ſ�Ŵ�����������Ҳ������~",
            "dateline": "1411098219",
            "displayorder": "2",
            "special": "0",
            "views": "40",
            "replies": "8"
        },
        {
            "tid": "158",
            "fid": "39",
            "author": "admin",
            "authorid": "1",
            "subject": "�ſ�Ŵ�����������Ҳ������~",
            "dateline": "1412067654",
            "displayorder": "0"
            "special": "1",
            "views": "20",
            "replies": "5"
        },
        ...
    ],
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="left">data</td><td>��������</td></tr>
                        <tr><td class="pad-left-50">tid</td><td>����ID</td></tr>
                        <tr><td class="pad-left-50">fid</td><td>�����������ID</td></tr>
                        <tr><td class="pad-left-50">author</td><td>�����û���</td></tr>
                        <tr><td class="pad-left-50">authorid</td><td>�����û�ID</td></tr>
                        <tr><td class="pad-left-50">subject</td><td>�������</td></tr>
                        <tr><td class="pad-left-50">dateline</td><td>���ⷢ��ʱ��</td></tr>
                        <tr><td class="pad-left-50">displayorder</td><td>������ʾ˳�� ��3�����ö� 2�����ö� 1һ���ö� 0������</td></tr>
                        <tr><td class="pad-left-50">special</td><td>�������⣨0��ͨ 1ͶƱ��</td></tr>
                        <tr><td class="pad-left-50">views</td><td>����鿴��</td></tr>
                        <tr><td class="pad-left-50">replies</td><td>����ظ���</td></tr>
                        <tr><td align="left">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="left">code</td><td>״̬�룬20000�ɹ�</td></tr>
                    </table></td>
            </tr></table>
    </div>
        </div>
        <hr />
        <div>
            <tt>3. �������� ��./t_forum_viewthread.php��POST</tt>
                <table>
                    <form action="./t_forum_viewthread.php" method="post">
                        <tr>
                            <td width="150px">����ID(tid)</td>
                            <td><input type="text" name="tid" value="" /></td>
                        </tr>
                       <!--  <tr>
                            <td width="150px">�û�ID(uid)</td>
                            <td><input type="text" name="uid" value="2" /></td>
                        </tr> -->
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
    <div class="panel" style="width:625px;display:none;">
        <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
            <tr height="60">
                <td align="right" width="40%">���������</td>
                <td width="60%">
                    <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr>
                            <td width="20%">����</td>
                            <td width="20%">�Ƿ����</td>
                            <td width="80%">����</td>
                        </tr>
                        <tr>
                            <td>tid</td>
                            <td>��</td>
                            <td>���ID
                            </td>
                        </tr>
                        <tr>
                            <td>page</td>
                            <td>��</td>
                            <td>ҳ��
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>uid</td>
                            <td>��</td>
                            <td>�û�ID
                            </td>
                        </tr> -->
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">�����ı���ʽ:</td>
                <td align="left"><textarea cols="55" rows="27" readonly="readonly">
{
    "msg": "ok",
    "data": [
        {
            "pid": "64",
            "fid": "39",
            "tid": "64",
            "author": "admin",
            "authorid": "1",
            "subject": "�ſ�Ŵ�����������Ҳ������~",
            "dateline": "2014-9-18 17:41:03",
            "message": "�ſ�Ŵ�����������Ҳ������~�ſ�Ŵ�����������Ҳ������~�ſ�Ŵ�����������Ҳ������~<br />\r\n&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; "
        },
        {
            "pid": "147",
            "fid": "39",
            "tid": "64",
            "author": "admin",
            "authorid": "1",
            "subject": "",
            "dateline": "2014-9-30 15:47:49",
            "message": "&lt;a&gt;<a href=\"http://www.taizhou.com/appapi/bbbbb.com\" target=\"_blank\">bbbb</a>"
        }
    ],
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="left">data</td><td>��������</td></tr>
                        <tr><td class="pad-left-50">pid</td><td>����ID</td></tr>
                        <tr><td class="pad-left-50">tid</td><td>����ID</td></tr>
                        <tr><td class="pad-left-50">fid</td><td>�����������ID</td></tr>
                        <tr><td class="pad-left-50">author</td><td>�����û���</td></tr>
                        <tr><td class="pad-left-50">authorid</td><td>�����û�ID</td></tr>
                        <tr><td class="pad-left-50">subject</td><td>���ӱ���</td></tr>
                        <tr><td class="pad-left-50">dateline</td><td>���ӷ���ʱ��</td></tr>
                        <tr><td class="pad-left-50">message</td><td>��������</td></tr>
                        <tr><td align="left">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="left">code</td><td>״̬�룬20000�ɹ�</td></tr>
                    </table></td>
            </tr></table>
    </div>
        </div>
        <hr />
        <div>
            <tt>4. �������� ��./t_forum_newthread.php��POST</tt>
                <table>
                    <form action="./t_forum_newthread.php?action=newthread" method="post">
                        <tr>
                            <td width="150px">���ID(fid)</td>
                            <td><input type="text" name="fid" value="" /></td>
                        </tr>
                        <tr>
                            <td width="150px">�������ID(typeid)</td>
                            <td><input type="text" name="typeid" value="" /></td>

                        </tr>
                        <tr>
                            <td width="150px">�û�ID(uid)</td>
                            <td><input type="text" name="uid" value="100440" /></td>
                        </tr>
                        <tr>
                            <td width="150px">����(subject)</td>
                            <td><input type="text" name="subject" value="�ſ�Ŵ�����������Ҳ������~" /></td>
                        </tr>
                        <tr>
                            <td width="150px">����(message)</td>
                            <td><textarea name="message" rows="6" cols="44">
�ſ�Ŵ�����������Ҳ������~�ſ�Ŵ�����������Ҳ������~�ſ�Ŵ�����������Ҳ������~
                            </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px">ͼƬ(pic)</td>
                            <td><textarea name="pic" rows="6" cols="44">
/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAWAB4DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9H/iP498L/s1/AO+vPHV1D4P+GHhfTZLzU72d9qx242r5W1Q0sjPu2IifO7MkYOWUV+ZmgfF/45f8FHPEEn7Sng34la74V8HWUt0ngj4f6ZrtzpdxZi2u/slrBND/AMeN9PduN00Tl3nMyW4AhWNV94/4LL/sw+NP2s7jwn4f+3WNj4b1PxFaW9tFeSEaYMxg3F/KNwSZoYWmlGX3CCG6WOPcjGX8fdN8Q6lqvx7uR8Ib64bwzHr1zB4VsdU8prRdLjlW3he7h2tC7tDHD5wIfepCkEJivLyTB1cdU+rp2d+iu7dNNL3f+R6mYYmll9L201zK2ibsr+vkkf0mftIfEf4f/BLwD4g8YeNb7R/D/gvwzfKlzea1CZLFFluI4IZGjCszMZJIl+UEgOTwMmvE9K+JngP9pX4axeOvh3401RPC2oapNZteaVbahZQvdJGkkiRG7giaeH96SsyIUOCm9jEQPG/2Hv2Gb741aXo/ir4ofHjT/izDrFrcDUPCev6JPd2NncvPFKDEbi98tpobi3T50g2soT5QyRsv6D+HPBGrPalvEeqafrOofde4t7f7PHJjpiNmfYADgKGI64wMCuWtGjKcqMJqai2m1pqt9FezT0tcqlzzpQqVFZyV7flrpfTyPjfxv4It4/2d7O806y0nxPrPhdxqnh2z8S2ytp8VpiVWtpiBIzbog5GVfY6xAEqmK/DX4ZeP76x/aY1jVtSkhi1NtUn1e5OmWy29tHNJcebKIIQQsSZb5UHCgKowBmiiuPwMxlarJyqSu+e13vayObxAow9g7Loz7x/4Js/tZ6HD+3tqvhHQLTxBo8nijW5oNZsvNMmk6glxpl5qrXCRGUi1uYprCeLFsscFxFfJvije0V5+8+F//Bcf43/s4fGv4ifCTxFp/gn4jW3w71zUdB0/Vr+K5tdRnjsb+ey3XEiyMszFYozv8tGJLFiTySivQx2X4d8Y4uly2ThGWl1rzzV7qz2SXyRyYDEVY5JhpJ67d9OWPc//2Q==
                            </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
    <div class="panel" style="width:625px;display:none;">
        <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
            <tr height="60">
                <td align="right" width="40%">���������</td>
                <td width="60%">
                    <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr>
                            <td width="20%">����</td>
                            <td width="20%">�Ƿ����</td>
                            <td width="80%">����</td>
                        </tr>
                        <tr>
                            <td>fid</td>
                            <td>��</td>
                            <td>���ID</td>
                        </tr>
                        <tr>
                            <td>typeid</td>
                            <td>ͨ����һ���ӿڲ���fid����threadtypes[required] = true����˽ӿ�id���룬��id��Ϊthreadtypes[types]�ļ������򲻱���д</td>
                            <td>�������ID</td>
                        </tr>
                        <tr>
                            <td>uid</td>
                            <td>��</td>
                            <td>�û�ID</td>
                        </tr>
                        <tr>
                            <td>subject</td>
                            <td>��</td>
                            <td>����</td>
                        </tr>
                        <tr>
                            <td>subject</td>
                            <td>��</td>
                            <td>����</td>
                        </tr>
                        <tr>
                            <td>message</td>
                            <td>��</td>
                            <td>����</td>
                        </tr>
                        <tr>
                            <td>pics</td>
                            <td>��</td>
                            <td>ͼƬ</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">�����ı���ʽ:</td>
                <td align="left"><textarea cols="55" rows="6" readonly="readonly">
{
    "data": 78,
    "msg": "OK",
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="center">data</td><td>�������ݣ�����pid</td></tr>
                        <tr><td align="center">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="center">code</td><td>״̬�룬20000���۳ɹ�</td></tr>
                    </table></td>
            </tr></table>
    </div>
        </div>
        <hr />
        <div>
            <tt>5. �ظ����� ��./t_forum_replythread.php��POST</tt>
                <table>
                    <form action="./t_forum_replythread.php?action=reply" method="post">
                        <tr>
                            <td width="150px">����ID(tid)</td>
                            <td><input type="text" name="tid" value="" /></td>
                        </tr>
                        <tr>
                            <td width="150px">�û�ID(uid)</td>
                            <td><input type="text" name="uid" value="100440" /></td>
                        </tr>
                        <tr>
                            <td width="150px">����(message)</td>
                            <td><textarea name="message" rows="6" cols="44">
����ƭ���ֳ����У��绰������������ϴǮ������ƭ�ܺ��߷��ʼ�ð�ļ��Ժ��վ������ ���������ϵͳ����360��ȫ��ʿ���ѣ���ν���������ϵͳ����ƭ�Ӷ��Ƶ�TeamviewerԶ�̼���������װʹ�ú���Իᱻ�Է���ȫ���ƣ�ƭ���ٳû���ˢ������
                            </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px">ͼƬ(pic)</td>
                            <td><textarea name="pic" rows="6" cols="44">
/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAWAB4DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9H/iP498L/s1/AO+vPHV1D4P+GHhfTZLzU72d9qx242r5W1Q0sjPu2IifO7MkYOWUV+ZmgfF/45f8FHPEEn7Sng34la74V8HWUt0ngj4f6ZrtzpdxZi2u/slrBND/AMeN9PduN00Tl3nMyW4AhWNV94/4LL/sw+NP2s7jwn4f+3WNj4b1PxFaW9tFeSEaYMxg3F/KNwSZoYWmlGX3CCG6WOPcjGX8fdN8Q6lqvx7uR8Ib64bwzHr1zB4VsdU8prRdLjlW3he7h2tC7tDHD5wIfepCkEJivLyTB1cdU+rp2d+iu7dNNL3f+R6mYYmll9L201zK2ibsr+vkkf0mftIfEf4f/BLwD4g8YeNb7R/D/gvwzfKlzea1CZLFFluI4IZGjCszMZJIl+UEgOTwMmvE9K+JngP9pX4axeOvh3401RPC2oapNZteaVbahZQvdJGkkiRG7giaeH96SsyIUOCm9jEQPG/2Hv2Gb741aXo/ir4ofHjT/izDrFrcDUPCev6JPd2NncvPFKDEbi98tpobi3T50g2soT5QyRsv6D+HPBGrPalvEeqafrOofde4t7f7PHJjpiNmfYADgKGI64wMCuWtGjKcqMJqai2m1pqt9FezT0tcqlzzpQqVFZyV7flrpfTyPjfxv4It4/2d7O806y0nxPrPhdxqnh2z8S2ytp8VpiVWtpiBIzbog5GVfY6xAEqmK/DX4ZeP76x/aY1jVtSkhi1NtUn1e5OmWy29tHNJcebKIIQQsSZb5UHCgKowBmiiuPwMxlarJyqSu+e13vayObxAow9g7Loz7x/4Js/tZ6HD+3tqvhHQLTxBo8nijW5oNZsvNMmk6glxpl5qrXCRGUi1uYprCeLFsscFxFfJvije0V5+8+F//Bcf43/s4fGv4ifCTxFp/gn4jW3w71zUdB0/Vr+K5tdRnjsb+ey3XEiyMszFYozv8tGJLFiTySivQx2X4d8Y4uly2ThGWl1rzzV7qz2SXyRyYDEVY5JhpJ67d9OWPc//2Q==
                            </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
                <div class="panel" style="width:625px;display:none;">
                    <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr height="60">
                            <td align="right" width="40%">���������</td>
                            <td width="60%">
                                <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                                    <tr>
                                        <td width="20%">����</td>
                                        <td width="20%">�Ƿ����</td>
                                        <td width="80%">����</td>
                                    </tr>
                                    <tr>
                                        <td>tid</td>
                                        <td>��</td>
                                        <td>����ID</td>
                                    </tr>
                                    <tr>
                                        <td>uid</td>
                                        <td>��</td>
                                        <td>�û�ID</td>
                                    </tr>
                                    <tr>
                                        <td>message</td>
                                        <td>��</td>
                                        <td>�ظ�����</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">�����ı���ʽ:</td>
                            <td align="left"><textarea cols="55" rows="6" readonly="readonly">
{
    "data": 125,
    "msg": "OK",
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="center">data</td><td>�������ݣ�����pid</td></tr>
                        <tr><td align="center">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="center">code</td><td>״̬�룬20000���۳ɹ�</td></tr>
                    </table></td>
                        </tr></table>
                </div>
        </div>
        <!-- <div>
        <hr />
            <tt>6. �������ͼƬ ��./t_forum_threadimg.php��POST</tt>
                <table>
                    <form action="./t_forum_threadimg.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <td width="150px">����ID(pid)</td>
                            <td><input type="text" name="pid" value="64" /></td>
                        </tr>
                        <tr>
                            <td width="150px">�ļ�(file)</td>
                            <td><input type="file" name="file" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value=" �ύ " /></td>
                            <td><p class="flip" onclick="javascript:show(this)">Ƶ������</p></td>
                        </tr>
                    </form>
                </table>
                <div class="panel" style="width:625px;display:none;">
                    <table width="625px" border="1px" cellspacing="0px" cellpadding="0px">
                        <tr height="60">
                            <td align="right" width="40%">���������</td>
                            <td width="60%">
                                <table width="100%" border="1px" cellspacing="0px" cellpadding="0px">
                                    <tr>
                                        <td width="20%">����</td>
                                        <td width="20%">�Ƿ����</td>
                                        <td width="80%">����</td>
                                    </tr>
                                    <tr>
                                        <td>pid</td>
                                        <td>��</td>
                                        <td>����ID</td>
                                    </tr>
                                    <tr>
                                        <td>file</td>
                                        <td>��</td>
                                        <td>�ϴ��ļ�</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">�����ı���ʽ:</td>
                            <td align="left"><textarea cols="55" rows="6" readonly="readonly">
{
    "data": "",
    "msg": "����ͼƬ�ɹ�",
    "code": 20000
}
                    </textarea></td></tr>
            <tr>
                <td align="right" width="40%">���ز�����</td>
                <td align="left" width="60%">
                    <table width="100%" border="1" cellspacing="0" cellpadding="0">
                        <tr><td align="center">data</td><td>��������</td></tr>
                        <tr><td align="center">msg</td><td>��Ӧ�ظ���Ϣ</td></tr>
                        <tr><td align="center">code</td><td>״̬�룬20000���۳ɹ�</td></tr>
                    </table></td>
                        </tr></table>
                </div>
        </div>	 -->
    </body>
</html>

