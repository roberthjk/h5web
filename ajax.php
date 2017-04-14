<?
//数据库配置文件
include("conn.php");

//每页显示信息
$pagesize=15;

//最大加载次数
$maxnum = $_POST["maxnum"]-1;

//从哪里开始
$page=$_POST["page"];
$nextpagestart = $page*$pagesize;



$sql = "select `cover`,`id` from `user` where `user_type` = 5 limit $nextpagestart,$pagesize";
$query =mysql_query($sql);
while($row = mysql_fetch_array($query)){
	//内容
?>
<li class="pr no-select loading" style="float: left;width: 300px;height: 348px;margin: 0 10px 16px 0;
overflow: hidden;list-style: none;">
	<div id="w" class="content-l-video pr cp" style="width: 300px;height: 300px;overflow: hidden;background: url(about:blank);cursor: pointer;position: relative;z-index: 2;">
    <a href="/details.php?id=<?=$row["id"];?>">
	<img src="<?=$row["cover"];?>" alt="" width="300" height="auto" style="vertical-align:middle;" class="db pa pai"></a>
	</div>
</li>
<?
}




?>