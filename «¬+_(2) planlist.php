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
      <li <?php if($plantype == '' && !isset($status)) echo 'class="default"'?>><a href="?action=planlist">��Ŀ�б�</a></li>
      <li ><a href="?action=adslist">���ܹ��</a></li>
      <li <?php if($status == '2') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=2">����ͨ��</a></li>
      <li <?php if($status == '0') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=0">�ȴ�ͨ��</a></li>
      <li <?php if($status == '1') echo 'class="default"'?>><a href="?action=planlist&actiontype=audit&status=1">�ѱ��ܾ�</a></li>
    </ul>
  </div>
</div>


<div class="planlist">
  <div id="wrapper">
    <div id="content">
      <h3 class="tab <?php if($actiontype=='ads') echo "tab1"?>" title="first">
        <div class="tabtxt"><a href="?action=planlist">��Ŀ���</a></div>
      </h3>
 	  
      <div class="boxholder">
        <div class="box">
          <p> <img src="/templates/<?php echo Z_TPL?>/images/bulb.gif" align="absmiddle" /> ������ѡ��Ĺ�����ͣ�ϵͳ�Զ���ʾ��档���ܴ���Ϊ�ֲ���ʽ�����Ի�ȡ�ĸ���Ĺ��ѡ�</p>
          <form id="form1" name="form1" method="post" action="?action=planlist">
		   <input name="siteid" type="hidden" value="<?php echo $siteid?>" />
		   <input name="kv" type="hidden" value="<?php echo $kv?>" />
             <table width="99%" border="0" align="center" style="margin-top:10px">

            </table>

          </form>
          <p style="margin-top:20px;  "><img src="/templates/<?php echo Z_TPL?>/images/ico5.jpg" align="absmiddle" />&nbsp;&nbsp;<strong>����б�&nbsp;&nbsp;&nbsp;&nbsp;���۸ߣ���������</strong></p>
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
			//i=1,2,3,4 �ֶ��ӵĲ��ֳ����ڵڼ���

if($i==1){
  		 ?>
<table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">��</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat"><font color="#FF0000">��</font>                 <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/anzhuoios.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcodeanzhuo.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="�κ��������棬���ɣ�֪������Ȼ�������ٶ���10%����30%���ֻ����������Ǻβ����Ϊ����תΪ���棿�����ж��ɣ�����Ե���ԭ���Ʒѹ������κ�Ӱ�죬����ȫȫ����ֵ�������棡">�ֻ�������ת(��׿ƻ������һ)</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">ע��(Ԫ)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">��������</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcodeanzhuo"><strong>��ȡ����</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">���ֻ��˷���������ҳʱ��Ͷ�Ŵ����ҳ�潫����ת�����ҳ�棬��ÿ����ת���мƷѣ����ݴ��շ���</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      ��׿400Ԫ/1��IP<br>ƻ��200Ԫ/1��IP                     </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      �ս�                      </font></td>
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
              <td width="647" height="19">��</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat"><font color="#FF0000">��</font>                 <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/fangfang.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcode2.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="��װ���ۿ��Ʒѣ���ֹɫ���ƹ㣬���׷����������   ������10�Ŀ��ʿͷ���Ҫʱʱ��ѯ��̨��
�������������ƹ㡣�������鿴��ҳ">��PC������ŷŵ�Ӱ</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">ע��(Ԫ)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">��������</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcode2"><strong>��ȡ����</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">��װ���ۿ��Ʒѣ���ֹɫ���ƹ㣬���׷����������   ������10�Ŀ��ʿͷ���Ҫʱʱ��ѯ��̨��
����...</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      1.8                      </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      �ս�                      </font></td>
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
              <td width="647" height="19">��</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/affiliate/images/bg_760x75.gif) no-repeat">                <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="http://www.ttunion.com/templates/logo/yuyu.jpg"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="../templates/affiliate/getcode3.php?uid=<?php echo $_SESSION['uid'];?>" class="text1" title="��ϵ�ͷ��ɻ�ȡ�ƹ�ģ�棬����IP��װʹ�ü�Ϊ��Ч���Ͻ����ף�ˢ����һ��Υ���ƹ���Ϊ�����ݴ�������3�����ҷ��أ��ڼ���˳�ӣ�">��PC���������Ӱ��</a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C">ע��(Ԫ)</font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">��������</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <a href="?action=zonelist&advtype=getcode3"><strong>��ȡ����</strong></a>                      </div></td>
                  </tr>
                  <tr>
                    <td height="30" valign="top">��ϵ�ͷ��ɻ�ȡ�ƹ�ģ�棬����IP��װʹ�ü�Ϊ��Ч���Ͻ����ף�ˢ����һ��Υ���ƹ���Ϊ�����ݴ�������3�����ҷ��أ��ڼ���˳�ӣ�</td>
                    <td width="120" align="center" valign="top"><font color="#FF7E00">
                      1.0                     </font></td>
                    <td align="center" valign="top"><font color="#FF7E00">
                      �ս�                      </font></td>
                  </tr>
                </table></td>
            </tr>
          </table>    		 <? 
  		 }

  		 $i++;
  		 ?>
  		           <table width="780" height="94" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="647" height="19">��</td>
            </tr>
            <tr>
              <td height="75" style="background:transparent url(/templates/<?php echo Z_TPL?>/images/bg_760x75.gif) no-repeat"><?php if($p['top']) echo '<font color="#FF0000">��</font>'?>
                <table width="777" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="160" rowspan="2" align="center" ><img width="140" height="65" src="<?php if($p['logo']) echo $p['logo'];else echo '/templates/'.Z_TPL.'/images/no.gif'?>"  ></img></td>
                    <td height="26"><span class="font02"><strong><a href="?action=planads&planid=<?php echo $p['planid']?>&siteid=<?php echo $siteid?>" class="text1" title="������"><?php echo $p['planname']?></a></strong></span></td>
                    <td width="120" align="center"><span class="font02"><strong><font color="#07679C"><?php echo  $at['name'];if($p['plantype']!='cps') echo '(Ԫ)';else echo '(%)' ?></font></strong></span></td>
                    <td width="102" align="center"><strong><font color="#07679C">��������</font></strong></td>
                    <td width="102" rowspan="2" align="center"><div class="b0">
            <?php
			if($p['status'] == 3)  echo"<font color='#ff0000'>����</font>";
			else if(!$isok) echo"<font color='#FF830A'>��վ���Ͳ�ƥ��</font>";
			else if ($p['audit'] == 'y'){
				if($p['stopaudit']==2)echo"<font color='#FF830A'>��ͣ����</font>";
				else {
				$audit = $auditmodel->ckPlanIdAudit($p['planid'],$siteid);
			    if($audit == 're') echo"<font color='#FF830A'>������</font>";
				else if($audit == 'deny') echo"<font color='#ff0000'>�ܾ�����</font>";
				else if($audit == 'ok') echo"<a href='?action=planads&planid=".$p['planid']."&siteid=".$siteid."'><strong>��ȡ����</strong></a>";
				else echo"<span id='e_".$p['planid']."'><a href='javascript:void(0)' onclick='doAudit(".$p['planid'].",".$siteid.")'><strong>������</strong></a></span>";
				}
			}else {
				echo"<a href='?action=planads&planid=".$p['planid']."&siteid=".$siteid."'><strong>��ȡ����</strong></a>";
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
						if($p['clearing'] == 'day') echo '�ս�';
						else if($p['clearing'] == 'week') echo '�ܽ�';
						else if($p['clearing'] == 'month') echo '�½�';
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
              <td height="30">��</td>
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
<font color=black>�뽫����ֱ��Ͷ�ŵ�������ҳ�У����ֻ��ն˷���������ҳʱ�����뽫���Զ�ʶ����ת����Ӧ�Ĺ��ҳ��<br>�ⲿ����ת�����������������档</font><br><font color=red>����Ը�JS�������κ��޸ģ�������ܵ��¹�治չʾ��</font>

</p>
 

</div>

<div id="aContent" style="display:none;">
  <table width="270" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td height="120" align="center"><b><font color="#0000FF">�뼰ʱ��ϵ��վ�����ͷ�������˿�ͨ</font></b><br><br><img border="0" src="youshangjiao.jpg">
</td>
    </tr>
  </table>
</div>
<div id="sContent" style="display:none;">
  <table width="450" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td height="80" align="center"><div class="info">�����ύ����һ����վ�����ɻ�ȡ�����룬׬ȡӶ��</div></td>
    </tr>
    <tr>
      <td height="30" align="center"><div class="submit-x" style="float:none"><a href="?action=createsite"><font color="#FFFFFF">�ύ��վ</font></a></div></td>
    </tr>
  </table>
</div>
<script language="JavaScript" type="text/javascript">
function doAudit(pid,sid){
	if(!sid){ 
		alert("��վδѡ��");
		return false;
	}
	$.get("?action=postaudit&actiontype=audit&planid="+pid+"&siteid="+sid+"");
	$i("e_"+pid).innerHTML = "<font color='#FF830A'>������</font>";
	setTimeout("tb_show('������','#TB_inline?height=160&width=400&inlineId=aContent')",500);
}
function doCreateSite(){
	t = setTimeout("tb_show('�޷���ȡ����','#TB_inline?height=150&width=500&inlineId=sContent')",1000);
}
 
$(function(){
<?php if(!$siteid){?>
	setTimeout("tb_show('�޷���ȡ����','#TB_inline?height=150&width=500&inlineId=sContent')",50);
<?php }?>
});

</script>




<?php include TPL_DIR . "/footer.php";?>