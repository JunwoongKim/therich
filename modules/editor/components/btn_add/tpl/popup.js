/**
 * popup으로 열렸을 경우 부모창의 위지윅에디터에 select된 block이 있는지 체크하여
 * 있으면 가져와서 원하는 곳에 삽입
 **/
function getText() {
    var node = opener.editorPrevNode;
    if(!node) {
        var fo_obj = xGetElementById("fo_component");
        var text = opener.editorGetSelectedHtml(opener.editorPrevSrl);
        if(text==undefined) text = "";
        text = text.replace(/<([^>]*)>/ig,'').replace(/&lt;/ig,'<').replace(/&gt;/ig,'>').replace(/&amp;/ig,'&');
        fo_obj.text.value = text;
        return;
    }

    if(node.nodeName == "A") {
        var url = node.getAttribute("HREF");
        var text = node.innerHTML.replace(/&lt;/ig,'<').replace(/&gt;/ig,'>').replace(/&amp;/ig,'&');

        var open_window = false;
        var color = "";
        var className = node.className;
		var bg_color  = $node.attr('bg_color');
		var width  = $node.attr('width');
		var height  = $node.attr('height') || 30;
		var font_size  = $node.attr('font_size') || 14;
		
        var selectedHtml = opener.editorGetSelectedHtml(opener.editorPrevSrl);
        if(selectedHtml.indexOf("window.open")>0) open_window = true;
        
        if(className) {
          if(className.indexOf("style2")>0) color = "color_style2";
           else if(className.indexOf("style3")>0) color = "color_style3";
        }
        var fo_obj = xGetElementById("fo_component");

        fo_obj.text.value = text;
        fo_obj.url.value = url.replace('&amp;','&');
        if(open_window) fo_obj.open_window.checked = true;
        if(color) xGetElementById(color).checked = true;

        return;
    } else if(node.nodeName == "IMG") {
    } else {
        var fo_obj = xGetElementById("fo_component");
        var text = opener.editorGetSelectedHtml(opener.editorPrevSrl);
        fo_obj.text.value = text.replace(/<([^>]*)>/ig,'').replace(/&lt;/ig,'<').replace(/&gt;/ig,'>').replace(/&amp;/ig,'&');
    }
}

/**
 * 부모창의 위지윅에디터에 데이터를 삽입
 **/
function setText() {
    if(typeof(opener)=="undefined") return;

    var fo_obj = xGetElementById("fo_component");

    var text = fo_obj.text.value;
    text.replace(/&/ig,'&amp;').replace(/</ig,'&lt;').replace(/>/ig,'&gt;');
    var url = fo_obj.url.value;
    url = url.replace(/&/ig,'&amp;');
    var open_window = false;
    var link_class = "";
    var link = "";
	var bg_color = get_by_id("bg_color_input").value;
	var width = get_by_id("width_input").value;
	var height = get_by_id("height_input").value || 30;
	var font_size = get_by_id("font_size_input").value || 14;
	
    if(xGetElementById("color_style2").checked) link_class = "display:inline-block; border-radius:6px;text-align:center;font-weight:500;color:#fff;padding:0 15px;text-decoration:none; border: 1px solid; border-color: #CCC #C6C6C6 #C3C3C3 #CCC;-webkit-box-shadow: 0 0 1px 1px #E3E3E3;box-shadow: 0 0 1px 1px #E3E3E3; margin:5px;";
    
	else if(xGetElementById("color_style3").checked) link_class = "display:inline-block; text-align:center;-moz-border-radius:30px;-webkit-border-radius:30px;border-radius:30px;color:#ffffff;padding:0 15px;text-decoration:none;box-shadow: 0 2px 0 0 #ccc; margin:5px;";
	
    else link_class = "display:inline-block; border-radius:6px;text-align:center;font-weight:500;color:#333;padding:0 15px;text-decoration:none; margin:5px;";
	
    if(!text) {
        window.close();
        return;
    }

    
    if(url) {

        if(fo_obj.open_window.checked) open_window = true;

        link = "<a href=\""+url+"\" ";
        if(open_window) link += "target=\"_blank\" ";
        
        ///////////////////////////////////
        
        if(link_class) link += "style=\" "+link_class+" "; //버튼 스타일
           
        if(width) link += " width:"+width+"px; "; //가로 사이즈
        
        if(height) link += " height:"+height+"px; line-height:"+height+"px; "; //세로 사이즈
        
        if(font_size) link += " font-size:"+font_size+"px; "; //폰트 사이즈
        
        if(bg_color) link += " background-color:"+bg_color+"; "; //버튼색
        
        ///////////////////////////////////

        link += " \" > "+text+"</a>";
    } else {

        link = "<span ";
        
        ///////////////////////////////////
        
        if(link_class) link += "style=\" "+link_class+" "; //버튼 스타일
           
        if(width) link += " width:"+width+"px; "; //가로 사이즈
        
        if(height) link += " height:"+height+"px; line-height:"+height+"px; "; //세로 사이즈
        
        if(font_size) link += " font-size:"+font_size+"px; "; //폰트 사이즈
        
        if(bg_color) link += " background-color:"+bg_color+"; "; //버튼색
        
        ///////////////////////////////////

        link += " \" > "+text+"</span><br/>";
    }

    var iframe_obj = opener.editorGetIFrame(opener.editorPrevSrl)
    opener.editorReplaceHTML(iframe_obj, link);

    opener.focus();
    window.close();
}

xAddEventListener(window, "load", getText);
