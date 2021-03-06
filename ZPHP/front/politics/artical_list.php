<?php 
include 'function/artical_listbase.php';
?>

<!DOCTYPE html>
<html lang="zh" class="zh" slick-uniqueid="3">
<head meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Global Political Research Center">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8"/>
	<title>世界政治研究中心</title>
	<link rel="icon" href="./favicon.ico" type="/x-icon"/>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/basic.css">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/column2.css">	
		<link rel="stylesheet" type="text/css" media="screen" href="./css/latest-artical.css">	
</head>
<body data-mobile-url="/zh/mobile">
	<header>
		<div id="topline"></div>
		<div id="bar"></div>
		<div id="headcontent">
			<div id="logo"></div>
			<nav>
				<ul>
					<li>
						<a href="./home.php">首页</a>
					</li>
					<li>
						<a href="./intro.php">中心介绍</a>
					</li>
					<li>
						<a href="./artical_list.php">文章</a>
					</li>
					<li>
						<a href="./activity_list.php">沙龙</a>
					</li>
				</ul>
			</nav>
		</div>
		<!--headcontent-->
	</header>
	<div id="container" class="clearfix">
		<div id="column1">
			<div class="column-head" style="margin-top:15px;">
				<a href="#"><b>最新文章</b></a>
				<span style="font-size:13px;color:#b9b9b9;">｜</span>
				<a href="#"><b>最热文章</b></a>
			</div>
			<!--column-head-->

			<!-- paper list -->

			
		
		
<?php 
//echo "The number of articles:".count($articles);
foreach ($articles as $article)
{
?>
<div class="artical-latest">
		<?php
		include 'function/getAddToPost.php'; 
		?>
	<img class="latest-img" src="<?php echo $titleImage;?>">
	<div class="lastest-text">
		<p class="latest-head">
			<!--artial-latest-->
		
			<a href="./artical.php?<?php echo $url; ?>"><?php echo $article->Title;?></a>
		</p>
		<p class="latest-head">
			<a href="./teacher.php"><?php echo $article->Author->StaticName;?></a>
			<span style="font-size:13px;color:#b9b9b9;"> | <?php  echo $article->Time('Y年m月d日');?></span>
		</p>
		<p class="latest-abstract"><?php echo $abstract;?></p>
	</div>
	<div class="clear"></div>
</div>

	<?php 
}

?>

			<!--artial-latest-->
			 
			
			<div class="clear"></div>
			<div class="pagination">
				
			<?php
			 
			for($i = 1; $i <= $pagesize; $i++)
			{
				?>
				<a class="page-numbers" href="./artical_list.php?<?php echo "page=".$i;?>"><?php echo $i;?></a>
				<?php 
			}
			?>
			<!--     <a class="page-numbers current">1</a>
				<a class="page-numbers" href="./artical_list.html">2</a>
				<a class="page-numbers" href="./artical_list.html">3</a>
				<a class="page-numbers" href="./artical_list.html">4</a>
			 -->	
				<!--  <span class="page-numbers dots">…</span> -->
				<!-- <a class="page-numbers last-number" href="/archive/?paged=51">6</a> -->
				<a class="next page-numbers" href="./artical_list.html"></a></div>
		<!--	 -->
			<!--pagination-->
		</div>
		<!--#column1-->
		<div id="column2">
			<div class="box-border">
				<div class="box-border-content">
					<div class="column-head">
							<b>筛选文章</b>
							<span style="font-size:13px;color:#b9b9b9;">｜</span>
							<a href="./artical_list.html"><span style="font-size:13px;color:#b9b9b9;">全部 »</span></a>
					</div>
					<div class="search">
        				<form>
            				<input type="text" name="s" id="s" class="input-text" placeholder="搜索" value="">
            				<button class="search-btn"></button>
        				</form>
    				</div>
					<div id="label">
						<div class="column-head">
							<b>标签筛选</b>
						</div>
						<!--column-head-->
						<div class="clearfix">
						<?php 
						foreach ($tags as $key => $value)
						{
							?>
							<div class="label-background label-left">
								<a href="./showPaperList.php?action=cate&<?php echo 'cate_ID='.$value['cate_ID'];?>"><?php echo  $value['cate_Name'];?></a>
							</div>
							<?php 
						}
						?>
						
						</div>
						<!--clearfix-->
					</div>
					<!--label-->
					<div class="splitline"></div>
					<div id="professor-all">
						<div class="column-head">
							<b>作者筛选</b>
						</div>
						<!--column-head-->
						<div class="clearfix">
						 <?php
							foreach ($members as $key => $value)
							{
								?>
								
								<div class="label-background label-left">
								<a href="#"><?php echo $value['mem_Name'];?></a>
							</div>
								<?php 
								
							}
						 ?>
						 
						
					
						</div>
						<!--clearfix-->
					</div>
					<!--professor-->
				</div>
				<!--box-border-content-->
			</div>
			<!--box-border-->
		</div>
		<!--#column2-->
	</div>
	<!--#container-->
			<div id="bottomline"></div>
	<footer>
		<div id="footercontent">
			<div id="bottomlogo">
				<img width="300px;"height="70px;" src="./images/politic_logo.png" alt="教师1">
			</div>
			<div id="link">
				<p style="color:#b9b9b9;margin-bottom:10px;">友情链接</p>
				<div style="width:80px;float:left;">
				<a href="#">链接1</a><br>
				<a href="#">链接2</a><br>
				</div>
				<div style="width:150px;float:left;">
				<a href="#">链接4</a><br>
				<a href="#">链接5</a><br>
				</div>

			</div>
		</div>
	</footer>
</body>
</html>
