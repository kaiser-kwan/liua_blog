<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/ahome_common/common/header.htm', './template/default/common/header_common.htm', 1614769932, '7', './data/template/6_7_common_header_forum_forumdisplay.tpl.php', './template/ahome_common', 'common/header_forum_forumdisplay')
|| checktplrefresh('./template/ahome_common/common/header.htm', './template/ahome_common/common/pluginsetting.htm', 1614769932, '7', './data/template/6_7_common_header_forum_forumdisplay.tpl.php', './template/ahome_common', 'common/header_forum_forumdisplay')
|| checktplrefresh('./template/ahome_common/common/header.htm', './template/ahome_common/common/pubsearchform.htm', 1614769932, '7', './data/template/6_7_common_header_forum_forumdisplay.tpl.php', './template/ahome_common', 'common/header_forum_forumdisplay')
|| checktplrefresh('./template/ahome_common/common/header.htm', './template/default/common/header_qmenu.htm', 1614769932, '7', './data/template/6_7_common_header_forum_forumdisplay.tpl.php', './template/ahome_common', 'common/header_forum_forumdisplay')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2020 Tencent Cloud." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_6_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_6_forum_forumdisplay.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? $_G['scheme'].'//'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>' />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript" ></script>
<?php if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
<script>
function tsmini_IEVersion() {
      var userAgent = navigator.userAgent; 
      var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1;
      var isEdge = userAgent.indexOf("Edge") > -1 && !isIE;
      var isIE11 = userAgent.indexOf('Trident') > -1 && userAgent.indexOf("rv:11.0") > -1;
      if(isIE) {
          var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
          reIE.test(userAgent);
          var fIEVersion = parseFloat(RegExp["$1"]);
          if(fIEVersion == 7) {
              return 7;
          } else if(fIEVersion == 8) {
              return 8;
          } else if(fIEVersion == 9) {
              return 9;
          } else if(fIEVersion == 10) {
              return 10;
          } else {
              return 6;
          }   
      } else if(isEdge) {
          return 'edge';
      } else if(isIE11) {
          return 11; 
      }else{
          return -1;
      }
  }
</script><?php $styleconfig = $_G['cache']['plugin']['ahome_common_setting'];?><style>
select,textarea{outline:none;padding:5px 10px;font-size:14px;border:1px solid #DDD !important;border-radius:5px;}
</style>
<?php if($styleconfig['ifopen']) { $styleconfig['topheight'] = $styleconfig['topheight'] + 60 - $styleconfig['logoheight'];?><style>
.bm_h, .tl th, .tl td { border-bottom-color: <?php echo $styleconfig['lightcolor'];?>; }
.fl .bm_h { border-color: <?php echo $styleconfig['lightcolor'];?>; background:<?php echo $styleconfig['bmhcolor'];?> url("<?php echo $styleconfig['bmhimg'];?>") left top repeat-x; }
.bm_h a{color:<?php echo $styleconfig['bmhtextcolor'];?>}
.bm_h {color:<?php echo $styleconfig['bmhtextcolor'];?>}
.bm_h h2 a{color:<?php echo $styleconfig['bmhtextcolor'];?> !important}
.bm_h .xw1 a{color:<?php echo $styleconfig['bmhtextcolor'];?> !important}
a,link {color:<?php echo $styleconfig['urlcolor'];?>}
.tbmu .pnc{background:<?php echo $styleconfig['darkcolor'];?> !important}
.pnc{background:<?php echo $styleconfig['darkcolor'];?> !important}
.pnc:hover{background:<?php echo $styleconfig['midcolor'];?> !important}
.postbtn {
padding: 10px 20px;
font-size: 16px;
background: linear-gradient(60deg, <?php echo $styleconfig['darkcolor'];?> 0%, <?php echo $styleconfig['midcolor'];?> 100%);
border-radius: 10px;
color: #FFF;
float: left;
}

.postbtn:hover {
background: <?php echo $styleconfig['darkcolor'];?>;
}
<?php if($styleconfig['sidewidth']) { $styleconfig['width'] = $styleconfig['width']?$styleconfig['width']:1080;?>.ct2 .mn {width:<?php echo $styleconfig['width']-$styleconfig['sidewidth']-10; ?>px;}
.ct2 .sd {width:<?php echo $styleconfig['sidewidth'];?>px;}
<?php } if($styleconfig['width']) { ?>
#toptb {min-width: <?php echo $styleconfig['width'];?>px;}
.wp {width: <?php echo $styleconfig['width'];?>px;}	

.ct2_a .mn {
min-height: 500px;
background: #FFF;
padding: 20px;
padding-left: 20px;
width: <?php echo (800+$styleconfig['width']-1080); ?>px;
margin-right: 0px;
}

@media (max-width: 1080px) {
.header,.ftx {
width: <?php echo $styleconfig['width'];?>px;
}
.header .hdc {margin:20px;}
.header #topnav {margin:0px 20px;}
.ftx #frt {margin:0px 20px;}
.ftx #flk {margin:0px 20px;}
#toptb .z{padding-left:20px;}
#wp {width:<?php echo ($styleconfig['width']-40); ?>px;margin:0px 20px;}
.appl {width:160px;}
#switchwidth {display:none;}
}

<?php } ?>
.header {
<?php if(!$styleconfig['topbg']) { ?>
background: linear-gradient(60deg, <?php echo $styleconfig['color1'];?> 0%, <?php echo $styleconfig['color2'];?> 100%);
<?php } else { ?>
background: url(<?php echo $styleconfig['topbg'];?>) no-repeat;
background-size: 100% auto;
<?php } if($styleconfig['topheight']) { ?>
height:<?php echo $styleconfig['topheight'] + $styleconfig['logoheight']; ?>px;
<?php } ?>
}

@media (max-width: 1080px) {
.header {margin-bottom:-110px;}
}

<?php if($styleconfig['topheight']) { ?>	
#topnav {margin-top:<?php echo $styleconfig['topheight']-220; ?>px !important;}
@media (max-width: 1080px) {
#topnav {margin-top:<?php echo $styleconfig['topheight']-260; ?>px !important;}
.waves {margin-top:5px;}
}
<?php } if($styleconfig['topheight']) { ?>

@media (max-width: 1080px) {
.ct2 .sd {width:260px;}
.waves{margin-top:50px;width:<?php echo $styleconfig['width'];?>px}
}
<?php } if($styleconfig['hideqmenu']) { ?>
#qmenu {display:none;}
<?php } ?>

#um,#um a {
color: <?php echo $styleconfig['usercolor'];?>
}

.gtc {color:<?php echo $styleconfig['usercolor'];?> !important}

#um .a {
background: #FFF;
color: #000;
border: 0px;
}

#um a {text-decoration: none}
#topnav li a{color:<?php echo $styleconfig['menucolor'];?>;}
#topnav li:hover a{color:#FFF;}
#topnav .a a{color:#FFF;font-weight:800}

#uhd, #flw_header .bar, .flw_replybox { background-color:<?php echo $styleconfig['lightcolor'];?>; }
#uhd .tb a, #flw_header .bar { border-top-color: <?php echo $styleconfig['lightcolor'];?>; }
#flw_post_extra .sec { border-color: <?php echo $styleconfig['lightcolor'];?>; background-color:<?php echo $styleconfig['lightcolor'];?> }

.ftx {
background: <?php echo $styleconfig['bottombgcolor'];?>;
color:<?php echo $styleconfig['bottomtxtcolor'];?>;
margin-top: 10px;
border-top: 1px solid #DDD;
padding-top: 30px;
font-size:14px;
}

.ftx *{
color:<?php echo $styleconfig['bottomtxtcolor'];?>;
}

.ftx a{
color:<?php echo $styleconfig['bottomtxtcolor'];?>;
}

.ftx a:hover{
color:<?php echo $styleconfig['bottomtxtcolor'];?>;
}


<?php echo $styleconfig['morecss'];?>
</style><?php } ?>

</head>


<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>

<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
<div class="header">
<?php if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>

</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } ?>
<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<div style="float:right;"><?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td" style="display:none;"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" style="outline:none;background:url('template/ahome_common/src/default/search.png') no-repeat;margin-top:8px;height:22px;width:22px;background-size:100%;" value="true"><strong class="xi2">搜索</strong></button></td>

</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?></div>			
<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});" style="margin-top:9px;">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>

<?php if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>
<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>
<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } if($_G['uid']) { ?>
<ul id="myitem_menu" class="p_pop" style="display: none;">
<li><a href="forum.php?mod=guide&amp;view=my">帖子</a></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a></li>
<li><a href="home.php?mod=space&amp;do=friend">好友</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<?php } ?><div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><?php if(!$styleconfig['ifopen']) { ?>
<h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?><?php echo $_G['scheme'];?>://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><img id="toplogo" src="template/ahome_common/src/default/logo.png"></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>
<?php } else { if(!$styleconfig['hidelogo']) { if($styleconfig['logo']) { ?>
<h2><a href="<?php if($_G['setting']['domain']['app']['default']) { ?><?php echo $_G['scheme'];?>://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" style="float:left;margin-top:15px;max-" title="<?php echo $_G['setting']['bbname'];?>"><img id="toplogo" src="<?php echo $styleconfig['logo'];?>" <?php if($styleconfig['logoheight']) { ?>style="max-width:300px;height:<?php echo $styleconfig['logoheight'];?>px"<?php } ?>></a></h2>
<?php } else { ?>
<h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?><?php echo $_G['scheme'];?>://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" style="float:left;margin-top:15px;" title="<?php echo $_G['setting']['bbname'];?>"><img id="toplogo" <?php if($styleconfig['logoheight']) { ?>style="max-width:300px;height:<?php echo $styleconfig['logoheight'];?>px"<?php } ?> src="template/ahome_common/src/default/logo.png"></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>
<?php } } else { ?>
<a href="<?php if($_G['setting']['domain']['app']['default']) { ?><?php echo $_G['scheme'];?>://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>" style="float:left;margin-bottom:10px;"><img id="toplogo" <?php if($styleconfig['logoheight']) { ?>style="height:<?php echo $styleconfig['logoheight'];?>px;max-width:300px;"<?php } ?> src="template/ahome_common/src/default/blanklogo.png"></a>
<?php } } ?>
<div <?php if($styleconfig['ifopen']) { ?>style="<?php echo $styleconfig['userinfocss'];?>}"<?php } ?>><?php include template('common/header_userstatus'); ?></div>

</div>
                <div style="clear:both"></div>
<div id="topnav" <?php if($styleconfig['ifopen']) { ?>style="<?php echo $styleconfig['menucss'];?>}"<?php } ?>>
<a href="javascript:;" id="qmenu" onmouseover="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu(<?php echo $_G['fid'];?>);})">快捷导航</a>
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</div>

<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?></div>
</div>		



</div>	
<?php if(!$styleconfig['ifopen']) { ?>
<style>
#showwave {margin-top:0px;}
@media (max-width: 1080px) {
.header{padding-bottom:70px;}	
#showwave {margin-top:30px;width:1080px;}	
}
</style>
<?php } ?>
<div id="showwave" style="margin-top:-70px;">
<div style="height:10px;clear:both"></div>
<!--Waves Container-->
<div>
<svg class="waves" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->
</div>
<div id="hidewave" style="display:none;">
<div style="clear:both"></div>
</div>



<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>
</div>

<script>
  if(tsmini_IEVersion()>0){
    document.getElementById('showwave').style.display = 'none';
document.getElementById('hidewave').style.display = 'block';
  }
</script>

<?php if($styleconfig['ifopen'] && $styleconfig['waves']==1) { ?>
<script>
    document.getElementById('showwave').style.display = 'none';
document.getElementById('hidewave').style.display = 'block';
</script>
<?php } ?>

<div id="wp" class="wp">
