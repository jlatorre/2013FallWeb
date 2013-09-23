<?

$pages = array(
    array(
    'url' => 'index.php',
    'section' => 'home',
    'title' => 'Home'
    ),
    array(
    'url' => 'links.php',
    'section' => 'links',
    'title' => 'links'
    
    ),
    array(
    'url' => 'contacts.php',
    'section' => 'contact',
    'title' => 'Contact Us'
    ),
    
    $pages[] = array(
    'url' => 'contacts.php',
    'section' => 'contact',
    'title' => 'Buy Our Stuff'
    
    );
    
    $name = $pages($location);
    $msg = "Hello $name[title]";
    
?>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
         <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Playground</a>
      </div>
      

      <div class="collapse navbar-collapse nav-c">
        <u1 class="nav navbar-nav">
          
          
            <? foreach($pages as $name => $data): ?>
        <li class="<?=$data ['section']?> <? if($location == $data['section']) echo "active"; ?>
          <a href"<?=$data['url']?>";  <?=$data['title']?></a>
        </li>  
        
      <? endforeach; ?>
      
      
      ?>


<? echo json_encode($pages,null, 1); ?>
          
        </u1>
        
        
      </div>
      
      
        
     <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src = "scripts/main.js"text/javascript">
      $(function(){
        $(".nav .contact").addclass("active").fadeout().fadein();
      });      
    </script>
