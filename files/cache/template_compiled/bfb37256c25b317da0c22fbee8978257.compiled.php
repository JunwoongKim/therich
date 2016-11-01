<?php if(!defined("__XE__"))exit;?><!-- 목록 출력 -->
<form action="./" method="get" <?php if(!$__Context->module_info->comment){ ?>style="margin-top:10px;"<?php } ?>><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
  <?php if(Context::get('search_target')=='regdate'){ ?>
    <?php  $__Context->regdate = Context::get('search_keyword') ?>
    <?php if($__Context->regdate){ ?>
      <?php  $__Context->regdate = zdate($__Context->regdate, 'Ym') ?>
    <?php } ?>
  <?php } ?>
  <?php if(!$__Context->regdate){ ?>
    <?php  $__Context->regdate = zdate(date('YmdHis'), 'Ym') ?>
  <?php } ?>
  <?php  $__Context->cur_date = $__Context->regdate ?>
  <?php  $__Context->last_day = date('t', ztime($__Context->regdate)) ?>
  <?php  $__Context->start_week = date('w', ztime($__Context->regdate)) ?>
  <?php  $__Context->prev_month = date('Ym', mktime(1,0,0,zdate($__Context->regdate,'m'),1,zdate($__Context->regdate,'Y'))-60*60*24) ?>
  <?php  $__Context->prev_year = date('Y', mktime(1,0,0,1,1,zdate($__Context->regdate,'Y'))-60*60*24) ?>
  <?php  $__Context->next_month = date('Ym', mktime(1,0,0,zdate($__Context->regdate,'m'),$__Context->last_day,zdate($__Context->regdate,'Y'))+60*60*24) ?>
  <?php  $__Context->next_year = date('Y', mktime(1,0,0,12,$__Context->last_day,zdate($__Context->regdate,'Y'))+60*60*24) ?>
  <div class="calendar_navi_area">
    <button type="button" class="prevYear" onclick="location.href='<?php echo getUrl('search_target','regdate','search_keyword',$__Context->prev_year) ?>'"><span>&lt;&lt;</span></button>
    <button type="button" class="prevMonth" onclick="location.href='<?php echo getUrl('search_target','regdate','search_keyword',$__Context->prev_month) ?>'"><span>&lt;</span></button>
    <span class="current_ym"><?php echo zdate($__Context->cur_date,"Y.m") ?></span>
    <button type="button" class="nextMonth" onclick="location.href='<?php echo getUrl('search_target','regdate','search_keyword',$__Context->next_month) ?>'"><span>&gt;</span></button>
    <button type="button" class="nextYear" onclick="location.href='<?php echo getUrl('search_target','regdate','search_keyword',$__Context->next_year) ?>'"><span>&gt;&gt;</span></button>
  </div>
  <div class="calendar_area">
    <table cellspacing="0">
      <thead>
        <tr>
          <th scope="col" class="sunday"><?php echo $__Context->lang->unit_week['Sunday'] ?></th>
          <th scope="col"><?php echo $__Context->lang->unit_week['Monday'] ?></th>
          <th scope="col"><?php echo $__Context->lang->unit_week['Tuesday'] ?></th>
          <th scope="col"><?php echo $__Context->lang->unit_week['Wednesday'] ?></th>
          <th scope="col"><?php echo $__Context->lang->unit_week['Thursday'] ?></th>
          <th scope="col"><?php echo $__Context->lang->unit_week['Friday'] ?></th>
          <th scope="col" class="saturday"><?php echo $__Context->lang->unit_week['Saturday'] ?></th>
        </tr>
      </thead>
      <tbody>
       
       <?php  $__Context->oDocumentModel = &getModel('document') ?>
       <?php  $__Context->obj->module_srl = $__Context->oDocument->get('module_srl') ?>
       <?php  $__Context->obj->sort_index = 'list_order' ?>
       <?php  $__Context->obj->order_type = 'asc' ?>
       <?php  $__Context->obj->list_count = $__Context->module_info->plan_count ?>
       <?php  $__Context->output = $__Context->oDocumentModel->getDocumentList($__Context->obj, false) ?>
       <?php  $__Context->document_list = $__Context->output->data ?>
       
       <?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key => $__Context->val){ ?>
         <?php if($__Context->val->type=='date'){ ?>
           <?php  $__Context->exist_edate = 1 ?>
           <?php  $__Context->edate_eid[] = $__Context->val->eid ?>
         <?php } ?>
       <?php } ?>
        <?php for($__Context->i=0;$__Context->i<6;$__Context->i++){ ?>
          <?php if($__Context->day < $__Context->last_day){ ?>
            <tr>
              <?php for($__Context->j=0;$__Context->j<7;$__Context->j++){ ?>
                <?php  $__Context->num = $__Context->i*7 + $__Context->j ?>
                <?php if(!$__Context->started && $__Context->num >= $__Context->start_week){ ?>
                  <?php  $__Context->started = true ?>
                  <?php  $__Context->day = 1 ?>
                  <?php  $__Context->cur_date = $__Context->regdate ?>
                  <?php  $__Context->cur_date = $__Context->cur_date.sprintf('%02d',$__Context->day) ?>
                <?php }elseif($__Context->started){ ?>
                  <?php  $__Context->day++ ?>
                  <?php  $__Context->cur_date = $__Context->regdate ?>
                  <?php  $__Context->cur_date = $__Context->cur_date.sprintf('%02d',$__Context->day) ?>
                <?php } ?>
                <?php if($__Context->cur_date == date("Ymd")){;
$__Context->today_class = "today";
}else{;
$__Context->today_class = "";
} ?>
                <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
                  <?php if($__Context->exist_edate==1 && $__Context->document->getExtraEidValue($__Context->edate_eid[0])==$__Context->cur_date || $__Context->document->getExtraEidValue($__Context->edate_eid[1])==$__Context->cur_date || $__Context->document->getExtraEidValue($__Context->edate_eid[2])==$__Context->cur_date){ ?>
                    <?php  $__Context->plan_class_names[$__Context->cur_date] = 'plan' ?>
                  <?php }else if($__Context->exist_edate!=1 && $__Context->document->getRegdate('Ymd')==$__Context->cur_date){ ?>
                    <?php  $__Context->plan_class_names[$__Context->cur_date] = 'plan' ?>
                  <?php } ?>
                <?php } ?>
                <td class="<?php if($__Context->j==0){ ?>sunday<?php }else if($__Context->j==6){ ?>saturday<?php } ?> <?php echo $__Context->today_class ?>" align="left" valign="top">
                  <?php  $__Context->evar_date = zdate($__Context->cur_date, 'Y-m-d') ?>
                  <div class="day_area day_area<?php echo $__Context->cur_date ?>" style="height:<?php echo $__Context->module_info->day_cell_height ?>px">
                    <?php if($__Context->day <= $__Context->last_day){ ?>
                      <?php if($__Context->plan_class_names[$__Context->cur_date]){ ?>
                        <span class="day day_plan"><a href="<?php echo getUrl('act','dispBoardWrite','evar_date',$__Context->evar_date) ?>"><?php echo $__Context->day ?></a></span>
                        <span class="title_area">
                          <?php  $__Context->p_count = 1 ?>
                          <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
                            <?php if($__Context->exist_edate==1 && $__Context->document->getExtraEidValue($__Context->edate_eid[0])==$__Context->cur_date || $__Context->document->getExtraEidValue($__Context->edate_eid[1])==$__Context->cur_date || $__Context->document->getExtraEidValue($__Context->edate_eid[2])==$__Context->cur_date){ ?>
                              <span class="plan plan<?php echo $__Context->p_count ?>">
                                <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>"><span class="new_icon"><?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?></span><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                              </span>
                              <?php  $__Context->p_count++ ?>
                            <?php }else if($__Context->exist_edate!=1 && $__Context->document->getRegdate('Ymd')==$__Context->cur_date){ ?>
                              <span class="plan plan<?php echo $__Context->p_count ?>">
                                <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                              </span>
                              <?php  $__Context->p_count++ ?>
                            <?php } ?>
                          <?php } ?>
                        </span>
                      <?php }else{ ?>
                        <span class="day day_noplan"><a href="<?php echo getUrl('act','dispBoardWrite','evar_date',$__Context->evar_date) ?>"><?php echo $__Context->day ?></a></span>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <span style="position:absolute; bottom:0px; right:0px; width:1px; height:1px; overflow:hidden; display:block; z-index:30;">&nbsp;</span> 
                </td>
              <?php } ?>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</form>
<script language="javascript">
jQuery(window).load(function(){
  var day_width = jQuery('.calendar_area div.day_area').width();
  var plan_height = jQuery('.calendar_area span.plan').children('a').outerHeight();
  jQuery('.calendar_area span.plan').css('width',day_width);
  jQuery('.calendar_area span.plan').css('height',plan_height);
  jQuery('.calendar_area span.plan').hover(function(){
    jQuery(this).parent().parent().parent().css('z-index','31');
    jQuery(this).css('z-index','301');
    jQuery(this).css('overflow','visible');
    jQuery(this).children('a').css('padding','5px');
    jQuery(this).children('a').css('background','#fff');
    jQuery(this).children('a').css('border','1px solid #000');
  }, function(){
    jQuery(this).parent().parent().parent().css('z-index','30');
    jQuery(this).css('z-index','300');
    jQuery(this).css('overflow','hidden');
    jQuery(this).children('a').css('padding','0px');
    jQuery(this).children('a').css('background','none');
    jQuery(this).children('a').css('border','0px');
  });
  jQuery('.calendar_area span.new_icon').children('img').css('display','none');
  jQuery('.calendar_area span.new_icon').each(function() {
    var icon_title = jQuery(this).children('img').eq(0).attr('title');
    if(icon_title=='new' || icon_title=='update') {
      jQuery(this).children('img').eq(0).css('display','inline');
    }
  });
});
</script>
