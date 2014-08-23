<div class="aside">
	<?php // 如果没有使用 Widget 才显示以下内容, 否则会显示 Widget 定义的内容
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
		?>
	


	<h2>分类目录· · · · · · </h2>
	<div id="side-categories"><ul> 
		<?php wp_list_cats('sort_column=ID&sort_order=asc&optioncount=1&depth=2&hierarchical=0&exclude=1'); ?> </ul> 		

	</div></br>
<h2>米苏标签· · · · · · </h2>
<div class="author-tags visible">
            <div class="people_tags">
<?php wp_tag_cloud();?></div></div>

<?php get_archives('postbypost', 10); ?>

	<div class="notify-mod">
		<wb:follow-button uid="5029232392" type="red_2" width="136" height="24";></wb:follow-button>

		<iframe id=review height=24 marginheight=0 src="http://follow.v.t.qq.com/index.php?		c=follow&a=quick&name=shenghuozh5595&style=5&t=1323696990718&f=1" frameborder=0 width=178 allowtransparency marginwidth=0>				</iframe>
		<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?									idkey=9d1dd048f3171b6c67aeae1e168d0ac04e9188e05b36f1c6a772f028db3d9c29"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="米苏生活点滴missulife" title="米苏生活点滴missulife"></a>


</div>



        


    



<div id="fp-sites" class="mod">
    
    <h2>
        我管理的小站
            &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
    </h2>

    <div class="site-list">
       
    </div>
    <p><a href="http://site.douban.com/new_site/">&gt;&nbsp;申请创建小站</a></p>
</div><div class="mod" id="events">
    
    <h2>
        正在发生
            &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
            <span class="pl">&nbsp;(
                
                    <a href="http://www.douban.com/online/" target="_self">换一个</a>
                ) </span>
    </h2>

    <ul id="event-list"></ul>
    <p><a href="http://www.douban.com/online/">&gt;&nbsp;更多线上活动</a></p>
</div><div id="dale_homepage_online_activity_promo"></div><div class="mobile-app-entrance block5 app-main">

    <a id="" class="entrance-link first-link" href="http://www.douban.com/mobile/">
        <span class="app-icon icon-main"></span>
        <span class="main-title">豆瓣系列应用</span>
        <span class="sub-title">点击下载</span>
    </a>
</div><div id="dale_homepage_login_bottom_middle_right"></div><div id="dale_homepage_login_bottom_right"></div><div class="fixed-fields" style="position: fixed; padding-top: 10px; width: 250px; top: 0px;"></div>
<!-- UYAN NEW COMMENT BEGIN -->
<div id="uyan_newcmt_unit"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1892631"></script> <!-- 如果已经过加载此行JS，即可不用重复加载 -->
<!-- UYAN NEW COMMENT END -->
<?php endif; ?>
        </div>