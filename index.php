<?php get_header(); ?>

 <title><?php bloginfo('name'); ?></title>
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
     <span style="font-size:14px";> <a href=<?php the_permalink() ?> target="_blank"><?php the_title(); ?></a></span>
  </div>


  </div>
  <div class="bd">
    



<div class="block commodity-block">
   
  <div class="content">
   <?php the_content('<p>阅读完整全文+</p>'); ?>
 </div>
</div>




    <div class="actions">
        
        <span class="created_at" title="2014-02-09 14:44:05">
            
            <?php the_time('Y-m-d') ?><span class="ghost">，来自 <?php the_category(', ') ?>，<!-- UYAN COUNT BEGIN -->
<a href="<?php the_permalink() ?>#respond" id="uyan_count_unit">0条评论</a>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1892631"></script> <!-- 如果已经过加载此行JS，即可不用重复加载 -->
<!-- UYAN COUNT END --></span>
        </span>
    </div>
  </div>
</div>
</div>


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