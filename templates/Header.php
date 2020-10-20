<?php 

function SetElementHeaderAttributes($attr_name,$attr_val) {

    return $sets = [

      $attr_name = $attr_name,
      $attr_val  = $attr_val  

    ];

}

// assets function / program files
USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS PHPHtmlOptimizer;
use \PHPHtml\CodeOptimizer\saver\abstract_\Program AS SystemInformation;

$Get_andaliGPS_info = NEW SystemInformation();

Html::_ELEMENT('my_DOCTYPE','DOCTYPE');
Html::_noHTML(SetElementHeaderAttributes(['lang'],['en']));

Html::_HEAD();

Html::_ELEMENT('GPS-Site','meta', SetElementHeaderAttributes(['charset'],['utf-8']));
Html::_ELEMENT('http-equiv','meta', SetElementHeaderAttributes(['http-equiv','content'],['X-UA-Compatible','IE=edge']));

Html::TITLE($Get_andaliGPS_info->andali_SetProjectTitle('Andali-GPSTracking'));

Html::_ELEMENT('GPS-Viewport','meta', SetElementHeaderAttributes(['name','content'],['description',''])); 
Html::_ELEMENT('viewport','meta', SetElementHeaderAttributes(['name','content'],['viewport','width=device-width, initial-scale=1']));

// Begin Bootstrap
Html::_ELEMENT('bootstrap-grid.min','link',get_FileCSS('css/bootstrap.min'));

Html::_ELEMENT('Main-CSS','link',get_FileCSS());

Html::xHEAD();
Html::_BODY(); ?>

<!--[if lte IE 9]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php 
 
 // The body content will be next goes below 
 


