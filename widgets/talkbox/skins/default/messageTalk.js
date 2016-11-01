function messageTalk(path) {
    if (path == '/') path = '';
    window.open(path + "/messageTalk/talk/index.php","personal","width=400,height=600,scrollbars=yes");
}
function messageTalkSend(path, member_srl, nick_name) {
	if (path == '/') path = '';
	window.open(path + "/messageTalk/talk/detail.php?target_srl=" + member_srl + "&nick_name=" + nick_name,"personal","width=400,height=600,scrollbars=yes");
}
function messageTalkFriends(path) {
    if (path == '/') path = '';
    window.open(path + "/messageTalk/talk/findFriends.php","personal","width=400,height=600,scrollbars=yes");
}