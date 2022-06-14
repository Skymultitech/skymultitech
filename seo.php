<?php $current_page = strtolower(str_ireplace(array('.php'), array(''), basename($_SERVER['PHP_SELF'])));$params   = $_SERVER['QUERY_STRING'];$url_p =  $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];?>
<?php if($current_page=='index'){?>        
<title>Best Web Design, Development, Digital Marketing Company in Australia | Skymultitech</title>     
<meta name="description" content="Invest in web design, development, digital marketing services with our expert team. We deliver high end solutions for your growing business. Contact Us for a free quote."/>	
  <meta name="keywords" content="website management services, ECommerce Solutions services, ECommerce Solutions services in australia, Professional Website Development Services in australia, website maintenance services in australia"/>        
  <link rel="canonical" href="http://<?php echo $url_p;?>" />		
  <meta property="og:title" content="Best Web Design, Development, Digital Marketing Company in Australia | Skymultitech">
  <meta property="og:site_name" content="Skymultitech">
  <meta property="og:url" content="http://skymultitech.com">
  <meta property="og:description" content="Invest in web design, development, digital marketing services with our expert team. We deliver high end solutions for your  growing business. Contact Us for a free quote.">
  <meta property="og:type" content="article">
  <meta property="og:image" content="http://skymultitech.com/images/slider/web-development-slider.jpg">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@skymultitech" />
  <meta name="twitter:creator" content="@skymultitech" />				

  <?php } elseif($current_page=='web-development'){?>       
  <title>Custom Web Development Services in Australia | Skymultitech</title>        
  <meta name="description" content="We, professional web development agency offer ecommerce, CMS, wordpress, custom web development services in Australia for small and large businesses. Contact us for a free quote."/>
  <meta name="keywords" content="Top Web Development Company in Australia, website builder company in australia, best web development agency in australia, ecommerce web development agency, php web development company near me, Ecommerce Website Design/Development Company "/>        
  <link rel="canonical" href="http://<?php echo $url_p;?>" />
  <meta property="og:title" content="Web Development Services in Australia | Skymultitech">
  <meta property="og:site_name" content="Skymultitech">
  <meta property="og:url" content="http://skymultitech.com/web-development.php">
  <meta property="og:description" content="We, professional web development agency offer ecommerce, CMS, wordpress, custom web development services in Australia for small and large businesses. Contact us for a free quote."/>
  <meta property="og:type" content="article">
  <meta property="og:image" content="http://skymultitech.com/images/slider/web-development-slider.jpg">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@skymultitech" />
  <meta name="twitter:creator" content="@skymultitech" />
  
  <?php }elseif($current_page=='aboutus'){?>    
  <title>About Us | Skymultitech </title>        
  <meta name="description" content="We are a digital agency, operating from Australia. Our team of creative web designers and developers work with the clients all over Australia."/>	

  <?php }elseif($current_page=='digital-marketing-services'){?>		
  <title>Best Digital Marketing Services in Australia | Skymultitech</title>   
  <meta name="description" content="We Digital Marketing Company in Australia work with you to grow your business with our Digital Marketing strategies. Contact Us for a free quote."/>	 
  <meta name="keywords" content="seo company australia, seo services in australia, best seo company in australia, top seo companies in australia, Top SEO services in Australia, Top SEO Agency in Australia, seo service provider in Australia, seo optimisation service in Australia, seo management service in Australia"/>       
  <link rel="canonical" href="http://<?php echo $url_p;?>" />
  <meta property="og:title" content="Digital Marketing Company in Australia | Skymultitech">
  <meta property="og:site_name" content="Skymultitech"><meta property="og:url" content="http://skymultitech.com/digital-marketing-services.php">
  <meta property="og:description" content="We work with you to grow your business with our Digital Marketing strategies. Contact Us for a free quote."><meta property="og:type" content="article">
  <meta property="og:image" content="http://skymultitech.com/images/page-titles/digital-marketing-banner.jpg"/>
  <meta name="twitter:card" content="summary"/><meta name="twitter:site" content="@skymultitech"/>
  <meta name="twitter:creator" content="@skymultitech" />
  <meta property="og:url" content="http://skymultitech.com/digital-marketing-services.php"/>	

  
  <?php }elseif($current_page=='ui-ux-design'){?>       
  <title>Best UI/UX Design Service in Australia | Skymultitech</title>   
  <meta name="description" content="We are best ui/ux web design & development company in Australia experts in creating amazing websites that converts clicks into leads. Call Us for a free quote."/>	 
  <meta name="keywords" content="ui/ux web design services in australia, mobile uiux design services, ui/ux consultants, best ui/ux design company, ui/ux design & agency,ui/ux consultants, ui/ux design and development services "/>   
  <link rel="canonical" href="http://<?php echo $url_p;?>" />
  <meta property="og:title" content="Best UI/UX Design & Development Service in Australia | Skymultitech">
  <meta property="og:site_name" content="Skymultitech">
  <meta property="og:url" content="http://skymultitech.com/ui-ux-design.php">
  <meta property="og:description" content="We are best ui/ux web design & development company in Australia experts in creating amazing websites that converts clicks into leads. Call Us for a free quote.">
  <meta property="og:type" content="article">
  <meta property="og:image" content="http://skymultitech.com/images/page-titles/ui-ux-banner.jpg"/>
  <meta name="twitter:card" content="summary"/><meta name="twitter:site" content="@skymultitech"/>
  <meta name="twitter:creator" content="@skymultitech" />
  <meta property="og:url" content="http://skymultitech.com/ui-ux-design.php"/>			

  <?php }elseif($current_page=='career'){?>      
  <title>Career OPEN JOB OPPORTUNITY | Skymultitech</title>    
  <meta name="description" content="Skymultitech offer best opperynity View and apply to Website Design and Web Development Openings and Digital Marketing jobs.."/>	 
  <meta name="keywords" content=""/>       
  <link rel="canonical" href="http://<?php echo $url_p;?>" />	

  <?php }elseif($current_page=='contact-us'){?>   
  <title>Contact Us</title>    
  <meta name="description" content=""/>	  
  <meta name="keywords" content=""/>       
  <link rel="canonical" href="http://<?php echo $url_p;?>" />		

  <?php }else{ ?>	
  <title>Skymultitech</title>		
  <link rel="canonical" href="http://<?php echo $url_p;?>" /><?php } ?>