<?php
    if(!defined("__ZBXE__")) exit();

    /**
     * @addon_write_insert_media.addon.php
     * @author XENARA (kolaskks@naver.com)
     * @brief XENARA 글쓰기 미디어 삽입 애드온
     **/



    if($called_position == 'after_module_proc') {
      $module_info = Context::get('module_info');

      $oEditorModel = &getModel('editor');
      $editor_config = $oEditorModel->getEditorConfig($module_info->module_srl);

			Context::addCSSFile('./addons/addon_write_insert_media/css/addon.css');

      $insert_media = 0;
      if($addon_info->insert_media_editor=='document'){
        if(Context::get('act')=='dispBoardWrite'){
          $insert_media = 1;
        }
      } else if($addon_info->insert_media_editor=='comment'){
        if(Context::get('document_srl')){
          $insert_media = 1;
        }
      } else{
        $insert_media = 1;
      }

      if($insert_media==1){
        $addon_path = './addons/addon_write_insert_media/';

        $header_content = '';
        $header_content .= '
          <script type="text/javascript">
            function insertMedia(editorSequence,media_url,media_width,media_height) {
              // html 모드
              if(editorMode[editorSequence]=="html"){
                alert("TEXTAREA 모드에서는 사용이 불가합니다. 다른 에디터모드로 변경하세요.");

              // 위지윅 모드
              } else {
                var iframe_obj = editorGetIFrame(editorSequence);
                if(!iframe_obj) return;

                if(!media_width) var media_width = "100%";
                if(!media_height) var media_height = "315";
                var media_html = media_url;

                //YouTube
                if(media_html.match(/((http:|https:)\/\/www.youtube.com|(http:|https:)\/\/youtube.com|(http:|https:)\/\/youtu.be).+?/i)){
                  var youtube_id = media_html.replace(/((http:|https:)\/\/www.youtube.co|(http:|https:)\/\/youtube.co|(http:|https:)\/\/youtu.b).+?\//i,"");
                  youtube_id = youtube_id.replace(/(watch\?v\=)/i,"");
                  youtube_id = youtube_id.replace(/(embed\/)/i,"");
                  youtube_id = youtube_id.replace(/(\')/i,"");
                  youtube_id = youtube_id.substr(0,11);
                  media_html = "<iframe type=\"text/html\" width=\""+media_width+"\" height=\""+media_height+"\" src=\"//www.youtube.com/embed/"+youtube_id+"\" frameborder=\"0\" allowfullscreen></iframe>";
                //Vimeo
                } else if(media_html.match(/((http:|https:)\/\/player.vimeo.com\/|(http:|https:)\/\/www.vimeo.com\/|(http:|https:)\/\/vimeo.com\/)([0-9]|[v])/i)){
                  var vimeo_id = media_html.replace(/((http:|https:)\/\/vimeo.com)/i,"");
                  vimeo_id = vimeo_id.replace(/((http:|https:)\/\/player.vimeo.co|(http:|https:)\/\/www.vimeo.cm|(http:|https:)\/\/vimeo.co).+?\//i,"");
                  vimeo_id = vimeo_id.replace(/(video\/)/i,"");
                  vimeo_id = vimeo_id.replace(/(\/|\")/i,"");
                  vimeo_id = vimeo_id.substr(0,8);
                  media_html = "<iframe src=\"http://player.vimeo.com/video/"+vimeo_id+"\" width=\""+media_width+"\" height=\""+media_height+"\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
                //Mp4
                } else if(media_html.match(/(http:\/\/|https:\/\/|mms:\/\/).+?\.(mp4)/i)) {
                  var mp4_url = media_html;
                  media_html = "<video width=\""+media_width+"\" height=\""+media_height+"\" controls><source src=\""+mp4_url+"\" type=\"video/mp4\"></video>";
                //SoundCloud
                } else if(media_html.match(/(soundcloud.com\/tracks\/)([0-9]|[v])/i)){
                  var soundcloud_id = media_html.replace(/(soundcloud.com)/i,"");
                  soundcloud_id = soundcloud_id.replace(/(tracks\/)/i,"");
                  soundcloud_id = soundcloud_id.replace(/(\/|\")/i,"");
                  media_html = "<iframe width=\""+media_width+"\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/"+soundcloud_id+"&color=ff5500\"></iframe>";
                } else{
                  alert("미디어주소를 입력하지 않았거나, 입력형식이 아닙니다.");
                }
                if(media_html) editorReplaceHTML(iframe_obj, media_html);
              }
            }
          </script>
        ';
        Context::addHtmlheader($header_content);



        $media_html = '';
        $media_html .= '<div class="addon_write_insert_media">';
        $media_html .= '  <span class="media_url_area"><span class="label">미디어주소</span><input class="media_url" type="text" placeholder="ex) http://youtu.be/g3E1TPVEMos" /></span>';
        $media_html .= '  <span class="media_size_area">';
        $media_html .= '    <span class="label">미디어가로</span><input class="media_width media_size" type="text" placeholder="ex) 500" />';
        $media_html .= '    <span class="media_height_label label">미디어세로</span><input class="media_height media_size" type="text" placeholder="ex) 300" />';
        $media_html .= '  </span>';
        if($editor_config->editor_skin=='ckeditor'){
          $media_html .= '  <a class="btn_insert_media btn" href="#" onclick="insertMedia(jQuery(\\\'.xefu-container\\\').attr(\\\'data-editor-sequence\\\'),jQuery(this).parent().children(\\\'.media_url_area\\\').children(\\\'input.media_url\\\').val(),jQuery(this).parent().children(\\\'.media_size_area\\\').children(\\\'input.media_width\\\').val(),jQuery(this).parent().children(\\\'.media_size_area\\\').children(\\\'input.media_height\\\').val()); return false;">본문삽입</a>';
        } else if($editor_config->editor_skin=='xpresseditor'){
          $media_html .= '  <a class="btn_insert_media btn" href="#" onclick="insertMedia(jQuery(\\\'.xpress_xeditor_editing_area_container\\\').attr(\\\'id\\\').substr(20,10),jQuery(this).parent().children(\\\'.media_url_area\\\').children(\\\'input.media_url\\\').val(),jQuery(this).parent().children(\\\'.media_size_area\\\').children(\\\'input.media_width\\\').val(),jQuery(this).parent().children(\\\'.media_size_area\\\').children(\\\'input.media_height\\\').val()); return false;">본문삽입</a>';
        }
        $media_html .= '  <span class="howto_media">';
        $media_html .= '    <p>미디어주소는 유튜브공유주소, 비메오공유주소, MP4 URL주소를 입력하세요.</p>';
        $media_html .= '    <p>';
        $media_html .= '      유튜브공유주소 : ex) http://youtu.be/g3E1TPVEMos<br />';
        $media_html .= '      비메요공유주소 : ex) http://vimeo.com/71695621<br />';
        $media_html .= '      사운드클로우드공유주수 : ex) soundcloud.com/tracks/123068202<br />';
        $media_html .= '      MP4 URL주소 : ex) http://www.w3schools.com/html/mov_bbb.mp4';
        $media_html .= '    </p>';
        $media_html .= '  </span>';
        $media_html .= '</div>';

        $footer_content = '';
        $footer_content = $footer_content .'
          <script type="text/javascript">
            jQuery(document).ready(function(){
              jQuery(".xpress-editor").append(\''.$media_html.'\');
              jQuery(".xefu-container").parent().append(\''.$media_html.'\');
            });
          </script>
        ';
        Context::addHtmlFooter($footer_content);
      }
    }
?>
