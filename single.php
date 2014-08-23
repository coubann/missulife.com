<?php get_header(); ?>

<title><?php the_title(); ?></title>
<!-- 正文+sidebar -->
    <div id="wrapper">
        

        
<div id="content">
    

    <div class="grid-16-8 clearfix">
        
      <!-- 文章开始 -->  
        <div class="article">
               
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="statuses">
    


<div class="stream-items ">
  


<div class="status-item" data-sid="1330093680" data-action="0" data-target-type="editor" data-object-kind="3090" data-object-id="1340148">
<div class="mod" data-status-id="1330093680">
  <div class="hd">
     

  <div class="title">
     <span style="font-size:25px;color: #494949;font-weight: bold"> <?php the_title(); ?></span>
  </div>
<span class="created_at"> <?php the_time('Y-m-d') ?><span class="ghost">&nbsp;&nbsp;&nbsp;来自 <?php the_category(', ') ?></span>

  </div>
  <div class="bd">
    



<div class="block commodity-block">
   
  <div class="content">
   <?php the_content(); ?>
 </div>
</div>
<div class="author-tags visible">
            <div class="people_tags">
<?php the_tags();?>

</div>
</div>


<div id="wumiiDisplayDiv"></div>
    <div class="actions">
        
       
       
    </div>
  </div>
</div>
</div>

<!-- JiaThis Button BEGIN -->
<div class="jiathis_style">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_renren"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->


<!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1892631"></script>
<!-- UY END -->

<!-- 文章结束 -->




      
  
      
      






      
</div>



        

    
        

 </div> <?php endwhile; endif; ?>
    </div>

       
<?php get_sidebar(); ?>
        <div class="extra">
            
        </div>
    </div>
</div>

        


<?php get_footer(); ?>