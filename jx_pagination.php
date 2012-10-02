<?php

	// Data For Test!
	$testdata=array(
		'test1'=>'test1_value',
		'test2'=>'test2_value',
		'test3'=>'test3_value',
		'test4'=>'test4_value',
		'test5'=>'test5_value',
		'test6'=>'test6_value',
		'test7'=>'test7_value',
		'test8'=>'test8_value',
		'test9'=>'test9_value',
		'test10'=>'test10_value',
		'test11'=>'test11_value',
		'test12'=>'test12_value',
	
		);

	
	$pagesize=5; //每页显示条目数
	$page=$_GET['count']; //从url中获取要显示的页数
	//显示当前页数据
	for($i=($page-1)*$pagesize;$i<($page-1)*$pagesize+$pagesize;$i++)
	{
		if($i>=count($testdata))
		{
			break;
		}
		echo '这个数据是数组中的第'.($i+1).'个！<br>';
	}
	
	echo '<br>';
	
	//输出上下页链接
	if($page==1)
	{
		echo "<<&nbsp;&nbsp;";
	}
	else
	{
		echo "<a href=http://localhost/jx_pagination.php?count=".($page-1)."><<</a>&nbsp;&nbsp;";
	}
	
	for($i=0;$i<ceil(count($testdata)/$pagesize);$i++)
	{
		$j=$i+1;
		if($i==$page-1)
		{
			echo '<span>'.$page.'&nbsp;&nbsp;</span>';
		}
		else
		{
			echo "<a href=http://localhost/jx_pagination.php?count=$j>".($i+1)."&nbsp;&nbsp;</a>";
		}
	}
	
	if($page==ceil(count($testdata)/$pagesize))
	{
		echo ">>&nbsp;&nbsp;";
	}
	else
	{
		echo "<a href=http://localhost/jx_pagination.php?count=".($page+1).">>></a>&nbsp;&nbsp;";
	}

	
?>