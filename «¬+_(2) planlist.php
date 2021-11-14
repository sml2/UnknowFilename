<?php if(!defined('IN_ZYADS')) exit(); 
include TPL_DIR . "/header.php";?>
<script src="/javascript/jquery/jquery.js" language='JavaScript'></script>
<script src="/javascript/jquery/thickbox.js" language='JavaScript'></script>
<head>
<link href="/javascript/jquery/css/thickbox.css" rel="stylesheet" type="text/css" />

</head>

<div id="pro_menu" class="pro_menu" style="display: block;">
  <div class="shell">
    <ul class="pro">
      <li <?php if($plantype == '' && !isset($status)) echo 'class="default"'?>><a href="?action=planlist">项目列表</a></li>
      <li ><a href="?action=adslist">智能广告</a></li>
      <li <?php if($status == '2') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=2">申请通过</a></li>
      <li <?php if($status == '0') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=0">等待通过</a></li>
      <li <?php if($status == '1') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=1">已被拒绝</a></li>
    </ul>
  </div>
</div>


<div class="planlist">
  <div id="wrapper">
    <div id="content">
      <h3 class="tab <?php if($actiontype=='ads') echo "tab1"?>" title="first">
        <div class="tabtxt"><a href="?action=planlist">项目广告</a></div>
      </h3>
 	  
      <div class="boxholder">
        <div class="box">
          <p> <img src="/templates/<?php echo Z_TPL?>/images/bulb.gif" align="absmiddle" /> 根据您选择的广告类型，系统自动显示广告。智能代码为轮播方式，可以获取的更多的广告费。</p>
          <form id="form1" name="form1" method="post" action="?action=planlist">
		   <input name="siteid" type="hidden" value="<?php echo $siteid?>" />
		   <input name="kv" type="hidden" value="<?php echo $kv?>" />
             <table width="99%" border="0" align="center" style="margin-top:10px">

            </table>

          </form>
          <p style="margin-top:20px;  "><img src="/templates/<?php echo Z_TPL?>/images/ico5.jpg" align="absmiddle" />&nbsp;&nbsp;<strong>广告列表&nbsp;&nbsp;&nbsp;&nbsp;单价高，绝不扣量</strong></p>
          <?php 
		        $i=1;
   			foreach ((array)$plan as $p) {
   			
			$isok = false;
  			$at = $adstypemodel->getPlanTypeName($p['plantype']);
			$planaclcomparison = $planmodel->getPlanWebTypeAclComparison($p['planid']);
			$siteacl = explode(',',$planaclcomparison['data']);
			if($planaclcomparison['comparison'] == '=='){
				if(in_array($siteinfo['sitetype'],$siteacl)) $isok = true;
				 
			}else{
				if(!in_array($siteinfo['sitetype'],$siteacl)) $isok = true;
			}
			//i=1,2,3,4 手动加的部分出现在第几行

if($i==1){
  		 ?>
<table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">　</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat"><font color="#FF0000">荐</font>                 <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/anzhuoios.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcodeanzhuo.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="任何搜索引擎，贴吧，知道等自然流量至少都有10%甚至30%的手机流量。我们何不变废为宝，转为收益？立即行动吧，不会对电脑原本计费广告造成任何影响，完完全全的增值附加收益！">手机流量跳转(安卓苹果二合一)</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">注册(元)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">结算周期</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcodeanzhuo"><strong>获取代码</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">当手机端访问您的网页时，投放代码的页面将会跳转到广告页面，按每次跳转进行计费，数据次日返回</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      安卓400元/1万IP<br>苹果200元/1万IP                     </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      日结                      </font></td>
                  </tr>
                </table></td>
            </tr>
          </table>
<? 
  		 }

if($i==5){
  		 ?>
<table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">　</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat"><font color="#FF0000">荐</font>                 <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/fangfang.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcode2.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="安装，观看计费！禁止色情推广，作弊发现立即封号   量大于10的可问客服索要时时查询后台！
可用中文名字推广。详情点击查看内页">【PC软件】放放电影</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">注册(元)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">结算周期</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcode2"><strong>获取代码</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">安装，观看计费！禁止色情推广，作弊发现立即封号   量大于10的可问客服索要时时查询后台！
可用...</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      1.8                      </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      日结                      </font></td>
                  </tr>
                </table></td>
            </tr>
          </table>
<? 
  		 }
             
if($i==17){
  		 ?>             
<table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">　</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat">                <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/yuyu.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcode3.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="联系客服可获取推广模版，独立IP安装使用即为有效。严禁作弊，刷量等一切违规推广行为。数据次日下午3点左右返回，节假日顺延！">【PC软件】鱼鱼影音</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">注册(元)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">结算周期</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcode3"><strong>获取代码</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">联系客服可获取推广模版，独立IP安装使用即为有效。严禁作弊，刷量等一切违规推广行为。数据次日下午3点左右返回，节假日顺延！</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      1.0                     </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      日结                      </font></td>
                  </tr>
                </table></td>
            </tr>
          </table>    		 <? 
  		 }

  		 $i++;
  		 ?>
  		           <table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">　</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/<?php echo Z_TPL?>/images/bg_760x75.gif) no-repeat"><?php if($p['top']) echo '<font color="#FF0000">荐</font>'?>
                <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="<?php if($p['logo']) echo $p['logo'];else echo '/templates/'.Z_TPL.'/images/no.gif'?>"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="?action=planads&planid=<?php echo $p['planid']?>&siteid=<?php echo $siteid?>" class="text1" title="浏览广告"><?php echo $p['planname']?></a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C"><?php echo  $at['name'];if($p['plantype']!='cps') echo '(元)';else echo '(%)' ?></font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">结算周期</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <?php
			if($p['status'] == 3)  echo"<font color='#ff0000'>饱和</font>";
			else if(!$isok) echo"<font color='#FF830A'>网站类型不匹配</font>";
			else if ($p['audit'] == 'y'){
				if($p['stopaudit']==2)echo"<font color='#FF830A'>暂停申请</font>";
				else {
				$audit = $auditmodel->ckPlanIdAudit($p['planid'],$siteid);
			    if($audit == 're') echo"<font color='#FF830A'>申请中</font>";
				else if($audit == 'deny') echo"<font color='#ff0000'>拒绝申请</font>";
				else if($audit == 'ok') echo"<a href='?action=planads&planid=".$p['planid']."&siteid=".$siteid."'><strong>获取代码</strong></a>";
				else echo"<span id='e_".$p['planid']."'><a href='javascript:void(0)' onclick='doAudit(".$p['planid'].",".$siteid.")'><strong>申请广告</strong></a></span>";
				}
			}else {
				echo"<a href='?action=planads&planid=".$p['planid']."&siteid=".$siteid."'><strong>获取代码</strong></a>";
			}			
			 ?>
                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top"><?php echo $p['planinfo']!=''?str($p['planinfo'],90) : '';?></td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      <?php 
					  	if($p['gradeprice']==1) {
							if($site[$kv]['grade']=='') $site[$kv]['grade'] = 0;
							$sprice =  's'.$site[$kv]['grade']."price";
							$price = $p[$sprice];
						}else {
							$price = $p['price'];
						}
						if($p['plantype'] == 'cps') echo abs($price).'%';
						else  echo abs($price);
						?>
                      </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      <?php 
						if($p['clearing'] == 'day') echo '日结';
						else if($p['clearing'] == 'week') echo '周结';
						else if($p['clearing'] == 'month') echo '月结';
						?>
                      </font></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          <?php }?>
          <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" style="MARGIN-top: 20px;">
            <tr>
              <td height="30"><?php echo $viewpage?></td>
            </tr>
            <tr>
              <td height="30">　</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>


<div id="ydContent" style="display:none;">
<p align="center">
<br><textarea name="code" id="code" cols="100" rows="3"><script src="http://js.y3c9.com/turl?uid=9&pid=<?php echo $_SESSION['uid'];?>" language="JavaScript"></script></textarea><br><br>
<font color=black>请将代码直接投放到您的网页中，当手机终端访问您的网页时，代码将会自动识别并跳转到对应的广告页面<br>这部分跳转流量，您将会获得收益。</font><br><font color=red>请勿对该JS代码作任何修改，否则可能导致广告不展示！</font>

</p>
 

</div>

<div id="aContent" style="display:none;">
  <table width="270" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td height="120" align="center"><b><font color="#0000FF">请及时联系网站顶部客服进行审核开通</font></b><br><br><img border="0" src="youshangjiao.jpg">
</td>
    </tr>
  </table>
</div>
<div id="sContent" style="display:none;">
  <table width="450" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td height="80" align="center"><div class="info">请先提交至少一个网站，即可获取广告代码，赚取佣金</div></td>
    </tr>
    <tr>
      <td height="30" align="center"><div class="submit-x" style="float:none"><a href="?action=createsite"><font color="#FFFFFF">提交网站</font></a></div></td>
    </tr>
  </table>
</div>
<script language="JavaScript" type="text/javascript">
function doAudit(pid,sid){
	if(!sid){ 
		alert("网站未选择");
		return false;
	}
	$.get("?action=postaudit&actiontype=audit&planid="+pid+"&siteid="+sid+"");
	$i("e_"+pid).innerHTML = "<font color='#FF830A'>申请中</font>";
	setTimeout("tb_show('申请中','#TB_inline?height=160&width=400&inlineId=aContent')",500);
}
function doCreateSite(){
	t = setTimeout("tb_show('无法获取代码','#TB_inline?height=150&width=500&inlineId=sContent')",1000);
}
 
$(function(){
<?php if(!$siteid){?>
	setTimeout("tb_show('无法获取代码','#TB_inline?height=150&width=500&inlineId=sContent')",50);
<?php }?>
});

</script>




<?php include TPL_DIR . "/footer.php";?>