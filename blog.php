<?php require_once( 'update/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1'>
	<cms:editable name='blog_content' type='richtext' />


    <cms:editable name='blog_image'
	    crop='1'
	    width='1200'
	    height='300'
	    type='image'
    />

    <cms:editable
        name='author'
        label='Author'
        opt_values='list_authors.htm'
        opt_selected = 'current_author.htm'
        dynamic='opt_values | opt_selected'
        type='dropdown'
    />

    <cms:folder name="ideas" title="Ideas" />
    <cms:folder name="discussion" title="Discussion" />
    <cms:folder name="featured" title="Featured Game" />
    <cms:folder name="magic" title="Magic: The Gathering" />
  
</cms:template>

<cms:if k_is_page >

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no"> 
<meta name="keywords" content="tabletop, games, board, boardgames, gaming, events, durham, ontario, canada, education, learn, learning, play, community, store, environment">
<meta name="description" content="Events and tournaments showcasing the latest and greatest in tabletop gaming.">
<meta name="author" content="Stephen McMahon">

<title>Leeroy &amp; Coco - Blog</title>
<link rel="icon" type="image/png" href="https://www.leeroyandcoco.com/images/favicon.png">

<link href="https://www.leeroyandcoco.com/css/normalize.css" rel="stylesheet">

<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style.css" rel="stylesheet">
<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style-responsive.css" rel="stylesheet">

<link href="https://www.leeroyandcoco.com/css/bootstrap.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet"> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119605895-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119605895-1');
</script>


</head>


<body>


<?php include 'includes/header.php';?>



<section class="banner-blog hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			</div>
		</div>
	</div>
</section>


<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				
				<h1><cms:show k_page_title /></h1>
				<cms:if k_page_foldertitle >
		          <cms:set my_category=k_page_foldertitle />
		        <cms:else />
		          <cms:set my_category='Uncatagorised' />
		        </cms:if>
				<h3><cms:show author /> &bull; <cms:show my_category /> &bull; <cms:date k_page_date format='M j, Y'/> &bull; <cms:show k_comments_count /> Comments</h3>

				<img class="img-responsive" src="<cms:show blog_image />" alt="Tabletop blog image">


				<p><cms:show blog_content /></p>
				<p><cms:editable name='video' type='textarea' no_xss_check='1' /></p>
				<br /><br />
				<!-- Comment's List -->
		        <h3>Comments</h3>
		        <cms:if k_comments_count >
		        <ol class="commentlist">
		          <cms:comments page_id=k_page_id order='asc' limit='5' paginate='1' >
		          <li class="comment"> 
		            <div class="gravatar"> 
		              <cms:gravatar email="<cms:show k_comment_author_email />" size="60" />
		              <a name="<cms:show k_comment_anchor />">
		            </div> 
		            <div class="comment_content"> 
		              <div class="clearfix">
		                <cite class="author_name"><a href=""><cms:show k_comment_author /></a></cite>       
		                <div class="comment-meta commentmetadata"><cms:date k_comment_date format='M j, Y'/> at <cms:date k_comment_date format='h:ia'/></a></div> 
		              </div>
		              <div class="comment_text"> 
		                <p><cms:show k_comment /></p> 
		              </div> 
		            </div> 
		          </li> 
		          <cms:paginator />
		          </cms:comments>
		        </ol> 
		        <cms:else />
		          No comments.
		        </cms:if>

		        <cms:embed 'comments_form.html' />

				<a href="<cms:link masterpage='blog.php' />" class="small-btn" style="margin:50px 0px;">&#8920; Back to Blog</a>

			</div>
			<div class="col-sm-1 sidebar">
			</div>
			<div class="col-sm-3 sidebar">
				<cms:embed 'blog_sidebar.html' />
			</div>
		</div>
	</div>
</section>



<?php include 'includes/footer.php';?>



<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.leeroyandcoco.com/js/jquery.js" type="text/javascript"></script>
    <script src="https://www.leeroyandcoco.com/js/bootstrap.js" type="text/javascript"></script>
    <script src="https://www.leeroyandcoco.com/js/mobile-nav.js" type="text/javascript"></script>
    
    <script language="Javascript">
      function validate(){
      var allok = true;
        if(htmlphpformgenerator1.First_Name.value == ""){
          alert('Please enter your First Name');
          return false;
        }
        if(htmlphpformgenerator1.Last_Name.value == ""){
          alert('Please enter your Last Name');
          return false;
        }
        if(htmlphpformgenerator1.Email_Address.value.indexOf("@") == -1){
          alert('Invalid input for Email Address, this must include "@" character(s)');
          return false;
        }
      document.htmlphpformgenerator1.Submit.disabled="disabled";
      return true;
      }
    </script>

</body>
</html>

<cms:else />
	<cms:embed 'blog.html' />
 </cms:if>

<?php COUCH::invoke(); ?>
