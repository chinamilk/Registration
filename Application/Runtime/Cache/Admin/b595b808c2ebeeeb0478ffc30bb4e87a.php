<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="/Registration/Public/Css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/Registration/Public/Css/admin/invalid.css" type="text/css" media="screen" />

 
<title><?php echo ($title); ?></title>

</head>

<body>
<div align="center">
	<h1><?php echo ($title); ?></h1>
	<div> 
		您好,<?php echo ($username); ?> | 
		<a href="/Registration/Admin/Admin/logout/" title="logout">退出</a> 
	</div>
	<p>下面是报名名单</p>
		<div>
			<form action="/Registration/Admin/Index/index/" method="get">
				<select name="status">
					<option value='1'>待审核人选</option>
					<option value='2'>通过审核人选</option>
					<option value='3'>没通过审核人选</option>
				</select>
				
				<select name="department">
					
					<option value='1'>移动组</option>
					<option value='2'>Web组</option>
					<option value='3'>美工组</option>
				</select>
				
				<input type="submit" value="确定" />
			</form>
		</div>
		
	<div class="content-box-content">
    	<div class="tab-content default-tab" id="tab1" style="display:block;">
            <div>下面是ABC</div>
          </div>
		
		
			<table border="2px">
            	<thead>
             	<tr>
              		<th>
                 
                	</th>
                	<th>姓名</th>
            	    <th>专业</th>
       		        <th>年级</th>
       	       	    <th>电话</th>	 
 	                <th>意向部门</th>
              	    <th>简介</th>
               		<th>操作</th>
              	</tr>
            	</thead>
              
            <!-- 表内容部分 -->
            <tbody>
              <?php if(is_array($roster_list)): $i = 0; $__LIST__ = $roster_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--ThinkPHP: Volist标签主要用于在模板中 循环输出 数据集或者多维数组 -->
              <tr>
              	<td></td>
                <td><?php echo ($vo['name']); ?></td>
                <td><?php echo ($vo['major']); ?></td>
                <td><?php echo ($vo['grade']); ?></td>
                <td><?php echo ($vo['phone']); ?></td>
                <td><?php echo ($vo['department']); ?></td>
                <td><?php echo ($vo['intro']); ?></td>
                <td>
                  <!-- Icons -->
                  <a href="/Registration/Admin/Admin/audit/id/<?php echo ($vo['id']); ?>/status/2" title="通过">通过</a> 
                  <a href="/Registration/Admin/Admin/audit/id/<?php echo ($vo['id']); ?>/status/3" title="拒绝">拒绝</a> 
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>                        
            </tbody>
            
                          <!-- 表尾 -->
            <tfoot>
              <tr>
                <td colspan="7">
                  <div class="pagination">               	  
                  	<?php echo ($page_method); ?>
                  <!--
                  	<a href="#" title="First Page">&laquo; First</a>
                  	<a href="#" title="Previous Page">&laquo; Previous</a> 
                  	<a href="#" class="number" title="1">1</a> 
                  	<a href="#" class="number" title="2">2</a> 
                  	<a href="#" class="number current" title="3">3</a> 
                  	<a href="#" class="number" title="4">4</a> 
                  	<a href="#" title="Next Page">Next &raquo;</a>
                  	<a href="#" title="Last Page">Last &raquo;</a> 
                  -->
                  </div>                 
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
          </table>
		</div>
	</div>
</div>		
</body>
</html>