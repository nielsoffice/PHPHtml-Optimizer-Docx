<h6>Support PHP v7.0++ higher | not work for v.7 less</h6>
<h6>PHPHtml-Optimizer is a PHP FREE library that will help PHP/Developer/Programmer beautiful and optimize codes. </h6>

<h4>Demo codes | PHP with HTML Default (Wrapping Html)/Procedural</h4>

```PHP

<?php 

$html   = ""; 
$html  .= "<ul id=\"My_id_ParentTags\" class=\"MyClass\">";
    
    $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    { 
     $datas[] = "<li class=\"col-sm-3\" id=\"MyList\">Count Number. " $i . "</li>";  
    }
    return implode('', $datas); 
    
$html  .= "</ul >";

// Loop and excuted
 print $html;

?>

```

<h4>Demo Codes | PHPHtml-Optimizer/Procedural</h4>

```PHP

<?php 

 function my_data() {     
  $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    {
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID','MyCLass',NULL); 
    }
     return implode('', $datas);  
  }
  
  // ASSOCIATED WITH FUNCTION | METHOD | CLASS it is seta s return need to perform using  PHPHtml-Optimizer  
  PERFORM ( Html::ELEMENT('UL', my_data(), NULL, 'MyID', 'MyCLass') );
  
?>

```

<h4>Demo Codes | PHP with HTML Default (IF Statement)/Procedural</h4>

```PHP

// Default HTML Procedural:
if (TRUE) {

  print "<h1>Default HTML Procedural: YES </h1> ";

} 

// Sample Code | PHPHtml-Optimizer/Procedural
// PHPHtml-Optimizer/Merge:
_xH1(DOIF( TRUE ,'PHPHtml-Optimizer/Merge: Yes', FUNC_ASSOC));

```

<h4>Demo Codes | PHP with HTML Default (IF ELSE Statement)/Procedural</h4>

```PHP

// Default HTML Procedural:
if (FLASE) {

  print "<h1> Default HTML Procedural: YES </h1>";

} else {
   
  print "<h1> Default HTML Procedural: NO </h1>";

}

// Sample Code | PHPHtml-Optimizer/Procedural
// PHPHtml-Optimizer/Merge:
_xH1(DOELSE( FALSE ,'Yes', 'PHPHtml-Optimizer/Merge: NO', FUNC_ASSOC));

```

```PHP

// Demo Codes | PHPHtml-Optimizer/Merge Using File Extension
// PHPHtml-Optimizer/Merge:
// SetExtension($argu);  

function SetExtension($src,$path,$argu) {

   $merge = $path.$extension = Html::SetFileExtension($argu);
       
    return $sets = [
        
      $attr_name = [$src],
      $attr_val  = [$merge]
       
    ];

}

Html::_ELEMENT('Profile', 'link', SetExtension('src','/../profile', __PHP__) );

```

```PHP

// Demo Codes | PHPHtml-Optimizer/Merge Using Image Extension
// PHPHtml-Optimizer/Merge:
// SetImageExtension()

function SetImgExtension($src,$path, $argu=null) {

      $merge = $path.$extension = Html::SetFileExtension($argu);
        
       return $sets = [
         
           $attr_name = [$src],
           $attr_val  = [$merge]
        
        ];

}

$name = 'fileName';

__HTML('Avatar','img',SetImgExtension('src','/../'.$name.'', __PNG__ ));

```

<h4>Demo Codes | Using Method MERGE() PHPHtml-Optimizer/Procedural</h4>

```PHP

// Method USING MERGE() 1
_xHTML('div',Html::MERGE(
  
  // Heading
  _xHTML('h1','Hello World') .
  // Content
  _xHTML('div', $object->UsersList() )

 ) // End of Merge
 
 // Begin  Div Attributes & End of . Div ParentContainer
,SetElemtAttr(['attr_name'],['attr_val']), $id='ParentContainer', $class=null ); 

// Method USING MERGE() 2
USE \PHPHtml\CodeOptimizer\merge\Html; 

// BEGIN Parent
  _div(SetElemtAttr(['id'],['ParentContainer'])); 
  
  // Begin Child
   _xdiv(Html::MERGE( 
   
     //  your code goes here...   
   
    )
 
   ,SetElemtAttr(['id'],['ChildContainer']));
  // END pf / Child Container 
 
 xdiv('END / of ParentContainer '); 
// END of / Parent Container

```

```PHP

// BONUS: 

_div('','parentTagElement'); 

  Html::PERFORM( $getCons = [
         'do_print' => function ($trim, $trims) {
         
            $TrimThis  =  trim($trim);
            $TrimThis_ =  trim($trims);
            $merge   = $TrimThis . $check = $varVal = isset($TrimThis_) ? $TrimThis_ : '' ; 
            
            return $getReturn = $varSet = TRUE ?  $merge : 'Nope'; 
            
          }  // end of index
          
  ], FUNC_ASSOC);
  
 _xdiv(
    
    Html::MERGE(
  
     _xHTML('h1',$user->allUsers,'','H1_iD') .
     _xHTML('p', $getCons['do_print']('Hello','World') ) 
     
    ) // End of merge
    
  ); // End of div
  
xdiv('END of / parentTagElement'); 

```


```PHP

// ANONYMOUS CALL_BACK
function make_merge($cb, $do) {
  return $cb; 
}

Html::_PERFORM(

  make_merge('Check_cb', $cb_merge = function () {
  
   return   'Hello Merge return ';
  
  }) . $cb_merge();

);

$TrimThis = $message = 'Hello World';

Html::PERFORM(

  make_merge('Check_cb', $do_merge = function () use ($message) { return  $message; }) 
  . $do_merge() 
);

// RETURN CALL_BACK
_xdiv(Html::MERGE( 

   _xHTML('div', make_merge('CHECK_IF_TRUE_THEN', $cb_merge = function () use ($TrimThis)  { 
   
         $merge   = $TrimThis . $check = $varVal = isset($TrimThis_) ? $TrimThis_ : '' ; 
         return $getReturn = $varSet = TRUE ?  $merge : 'Nope'; 
   
   }) 
  )  
 ) . _xHTML('h1',$cb_merge()) <br />
);

```

<h5>Understanding Class Method Parameters</h5>

| PARAMETER'S    | Description |
| ---            | ---         |
| `METHOD_ASSOC` | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |
| `CLASS_ASSOC`  | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |
| `FUNC_ASSOC`   | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |


```PHP

// EXTENDING PHPHtml-Optimizer CLASSES
USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS MyProjectName;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS OptimizerCare; 

Class ProgramName extends MyProjectName {
  
  public function __construct() {
   
   $this->H1('Hello World'); 

   }

}

```

<h5>Usage: Static Method | More Samples with Parameters</h5>

```PHP

// Html Custom attributes: 
 function my_htmattr() {

    return $sets = [

      $attr_name = ['1','2'],
      $attr_val  = ['_niel_','_fernandez_']  

    ];

 }
 
PERFORM ( html::H1("Hello World",my_htmattr() ,'MyID','MyClass','MyLabel', FUNC_ASSOC) );
          Html::_xH1("Hello World",my_htmattr() ,'MyID','MyClass','MyLabel') ; 

```

<h5>Static ELEMENTS and parameters </h5>

```PHP
// Associated or simply means return function
Html::ELEMENT($element=null, $value=null, $attr=null, $id=null, $class=null, $label=null)

// Optional Associated or simply print or return if set as associated function
Html::_ELEMENT($label=null, $elem=null, $attr=null, $id=null, $class=null, $assoc=null)

// Optional Associated or simply print or return if set as associated function
Html::H1($value=null, $attr=null, $id=null, $class=null, $label=null, $assoc=null)

// None or never be Associated or simply print function
Html::_H1($attr=null, $id=null, $class=null)

... content goes here ...

Html::xH1($label=null)

```

<h5 id="element">Static Methods List HTML element supported</h5>


|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED     | Opt.ASSOCIATED/Inline noneClosing tag |  None ASSOCIATED _H1(begin)/xH1(end) |
|:---            |:---            |:---            |:---                           |:---              |
| `Html::BREAK()`  | Break          | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_input','INPUT')`|`Html::_H1()`/`Html::xH1()`|
| `Html::LINE()`   | Line           | `Html::ELEMENT('H2')`    |`Html::_ELEMENT('my_track','track')`|`Html::_H2()`/`Html::xH2()`|
| `Html::STRING()` | wout/Element   | `Html::ELEMENT('H3')`    |`Html::_ELEMENT('my_circle','circle')`|`Html::_H3()`/`Html::xH3()`|
| `Html::H1()`     | Heading 1      | `Html::ELEMENT('H4')`    |`Html::_ELEMENT('my_param','param')`|`Html::_H4()`/`Html::xH4()`|
| `Html::H2()`     | Heading 2      | `Html::ELEMENT('H5')`    |`Html::_ELEMENT('my_meta','meta')`|`Html::_H5()`/`Html::xH5()`|
| `Html::H3()`     | Heading 3      | `Html::ELEMENT('H6')`    |`Html::_ELEMENT('my_link','link')`|`Html::_H6()`/`Html::xH6()`|
| `Html::H4()`     | Heading 4      | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_img','img')`|`Html::_DIV()`/`Html::xDIV()`|
| `Html::H5()`     | Heading 5      | `Html::ELEMENT('BUTTON')` | `Html::_ELEMENT('my_embed','embed')`|`Html::_P()`/`Html::xP()`|
| `Html::H6()`     | Heading 6      | `Html::ELEMENT('A')`     | `Html::_ELEMENT('my_option','option')`|`Html::_BUTTON()`/`Html::xBUTTON()`|
| `Html::DIV()`    | Element        | `Html::ELEMENT('IFRAME')`| `Html::_ELEMENT('my_col','col')`| `Html::_A()`/`Html::xA()`|
| `Html::P()`      | Paragraph      | `Html::ELEMENT('MAIN')`    | `Html::_ELEMENT('my_base','base')`| `Html::_IFRAME()`/`Html::xIFRAME()`|
| `Html::BUTTON()` | Element        | `Html::ELEMENT('NAV')`    | `Html::_ELEMENT('my_aside','aside')`|`Html::_MAIN()`/`Html::xMAIN()`|
| `Html::A()`      | Link Element   | `Html::ELEMENT('SELECT')`    | `Html::_ELEMENT('my_area','area')`| `Html::_NAV()`/`Html::xNAV()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('FORM')` |  `Html::_ELEMENT('my_DOCTYPE','DOCTYPE')`| `Html::_SELECT()`/`Html::xSELECT()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('PICTURE')`    |   | `Html::_FORM()`/`Html::xFORM()`|
| `Html::MAIN()`   | Element        | `Html::ELEMENT('SECTION')`    |   | `Html::_PICTURE()`/`Html::xPICTURE()`|
| `Html::NAV()`    | Element        | `Html::ELEMENT('TEXTAREA')`    |  | `Html::_SECTION()`/`Html::xSECTION()`|
| `Html::SELECT()` | Element        | `Html::ELEMENT('AUDIO')`    |   | `Html::_TEXTAREA()`/`Html::xTEXTAREA()`|
| `Html::FORM()`   | Element        | `Html::ELEMENT('VIDEO')`    |   | `Html::_AUDIO()`/`Html::xAUDIO()`|
| `Html::PICTURE()`| Element        | `Html::ELEMENT('ADDRESS')`    |  | `Html::_VIDEO()`/`Html::xVIDEO()`|
| `Html::SECTION()`| Element        | `Html::ELEMENT('COLGROUP')`    |  | `Html::_ADDRESS()`/`Html::xADDRESS()`|
| `Html::TEXTAREA()`| Element        | `Html::ELEMENT('BDI')`    | | `Html::_COLGROUP()`/`Html::xCOLGROUP()`|
| `Html::AUDIO()`| Element        | `Html::ELEMENT('BDO')`    |  | `Html::_BDI()`/`Html::xBDI()`|
| `Html::VIDEO()`| Element        | `Html::ELEMENT('CAPTION')` |  | `Html::_BDO()`/`Html::xBDO()`|
| `Html::ADDRESS()`| Element        | `Html::ELEMENT('LABEL')`    |  | `Html::_BLOCKQUOTE()`/`Html::xBLOCKQUOTE()`|
| `Html::COLGROUP()`| Element        | `Html::ELEMENT('DATALIST')`    |  | `Html::_CAPTION()`/`Html::xCAPTION()`|
| `Html::BDI()`| Element        | `Html::ELEMENT('DETAILS')`    |  | `Html::_LABEL()`/`Html::xLABEL()`|
| `Html::BDO()`| Element        | `Html::ELEMENT('SUMMARY')` |   | `Html::_DATALIST()`/`Html::xDATALIST()`|
| `Html::BLOCKQUOTE()`| Element        | `Html::ELEMENT('DIALOG')` |  | `Html::_DETAILS()`/`Html::xDETAILS()`|
| `Html::CAPTION()`| Element        | `Html::ELEMENT('OPTION')` |   | `Html::_SUMMARY()`/`Html::xSUMMARY()`|
| `Html::LABEL()`| Element        | `Html::ELEMENT('FIGURE')` |   | `Html::_DIALOG()`/`Html::xDIALOG()`|
| `Html::DATALIST()`| Element        | `Html::ELEMENT('FIGCAPTION')` |  | `Html::_OPTION()`/`Html::xOPTION()`|
| `Html::DETAILS()`| Element        | `Html::ELEMENT('METER')` | | `Html::_FIGURE()`/`Html::xFIGURE()`|
| `Html::SUMMARY()`| Element        | `Html::ELEMENT('OBJECT')`    |  | `Html::_FIGCAPTION()`/`Html::xFIGCAPTION()`|
| `Html::DIALOG()`| Element        | `Html::ELEMENT('OPTGROUP')`    | | `Html::_METER()`/`Html::xMETER()`|
| `Html::OPTION()`| Element        | `Html::ELEMENT('OUTPUT')`    |  | `Html::_OBJECT()`/`Html::xOBJECT()`|
| `Html::FIGURE()`| Element        | `Html::ELEMENT('PROGRESS')`    | | `Html::_OPTGROUP()`/`Html::xOPTGROUP()`|
| `Html::FIGCAPTION()`| Element        | `Html::ELEMENT('SVG')`    | | `Html::_OUTPUT()`/`Html::xOUTPUT()`|
| `Html::METER()`| Element        | `Html::ELEMENT('TEMPLATE')` | | `Html::_PROGRESS()`/`Html::xPROGRESS()`|
| `Html::OBJECT()`| Element        | `Html::ELEMENT('TIME')` |  | `Html::_SVG()`/`Html::xSVG()`|
| `Html::OPTGROUP()`| Element        | `Html::ELEMENT('VAR')` |  | `Html::_TEMPLATE()`/`Html::xTEMPLATE()`|
| `Html::OUTPUT()`| Element        | `Html::ELEMENT('UL')` |  | `Html::_TIME()`/`Html::xTIME()`|
| `Html::PROGRESS()`| Element        | `Html::ELEMENT('OL')` |  | `Html::_VAR()`/`Html::xVAR()`|
| `Html::SVG()`| Element        | `Html::ELEMENT('LI')` |   | `Html::_UL()`/`Html::xUL()`|
| `Html::TEMPLATE()`| Element        | `Html::ELEMENT('TABLE')` | | `Html::_OL()`/`Html::xOL()`|
| `Html::TIME()`| Element        | `Html::ELEMENT('TR')`    | | `Html::_LI()`/`Html::xLI()`|
| `Html::VAR()`| Element        | `Html::ELEMENT('TD')`    |  | `Html::_TABLE()`/`Html::xTABLE()`|
| `Html::UL()`| Element        | `Html::ELEMENT('TH')`|  | `Html::_TR()`/`Html::xTR()`|
| `Html::OL()`| Element        | `Html::ELEMENT('LEGEND')`    |  | `Html::_TD()`/`Html::xTD()`|
| `Html::LI()`| Element        | `Html::ELEMENT('FIELDSET')`    |  | `Html::_TH()`/`Html::xTH()`|
| `Html::TABLE()`| Element        | `Html::ELEMENT('TBODY')`    |  | `Html::_LEGEND()`/`Html::xLEGEND()`|
| `Html::TR()`| Element        | `Html::ELEMENT('TFOOT')` |   | `Html::_FIELDSET()`/`Html::xFIELDSET()`|
| `Html::TD()`| Element        | `Html::ELEMENT('THEAD')` |  | `Html::_TBODY()`/`Html::xTBODY()`|
| `Html::TH()`| Element        | `Html::ELEMENT('SPAN')` |  | `Html::_TFOOT()`/`Html::xTFOOT()`|
| `Html::LEGEND()`| Element        | `Html::ELEMENT('EM')` |  | `Html::_THEAD()`/`Html::xTHEAD()`|
| `Html::FIELDSET()`| Element        | `Html::ELEMENT('B')` |  | `Html::_SPAN()`/`Html::xSPAN()`|  
| `Html::TBODY()`| Element        | `Html::ELEMENT('I')` |    | `Html::_EM()`/`Html::xEM()`|
| `Html::TFOOT()`| Element        | `Html::ELEMENT('SMALL')` |  | `Html::_B()`/`Html::xB()`|
| `Html::THEAD()`| Element        | `Html::ELEMENT('MARQUEE')`    | | `Html::_I()`/`Html::xI()`|
| `Html::SPAN()`| Element        | `Html::ELEMENT('CENTER')` |  | `Html::_SMALL()`/`Html::xSMALL()`|
| `Html::EM()`| Element        | `Html::ELEMENT('CODE')` |   | `Html::_STRIKE()`/`Html::xSTRIKE()`|
| `Html::B()`| Element        | `Html::ELEMENT('ABBR')` |  | `Html::_MARQUEE()`/`Html::xMARQUEE()`|
| `Html::I()`| Element        | `Html::ELEMENT('MAP')` |   | `Html::_CENTER()`/`Html::xCENTER()`|
| `Html::SMALL()`| Element        | `Html::ELEMENT('CANVAS')` |  | `Html::_ABBR()`/`Html::xABBR()`|
| `Html::MARQUEE()`| Element        | `Html::ELEMENT('CITE')` |  | `Html::_MAP()`/`Html::xMAP()`|
| `Html::CENTER()`| Element        | `Html::ELEMENT('DATA')` |  | `Html::_CANVAS()`/`Html::xCANVAS()`|
| `Html::CODE()`| Element        | `Html::ELEMENT('DL')` |    | `Html::_CITE()`/`Html::xCITE()`|
| `Html::ABBR()`| Element        | `Html::ELEMENT('DT')` |   |`Html::_DATA()`/`Html::xDATA()`|
| `Html::MAP()`| Element        | `Html::ELEMENT('DD')` |   |`Html::_DL()`/`Html::xDL()`|
| `Html::CANVAS()`| Element        | `Html::ELEMENT('INS')`|  |`Html::_DT()`/`Html::xDT()`|
| `Html::CITE()`| Element        | `Html::ELEMENT('DEL')` |  |`Html::_DD()`/`Html::xDD()`|
| `Html::DATA()`| Element        | `Html::ELEMENT('KBD')` |  |`Html::_DFN()`/`Html::xDFN()`|
| `Html::DL()`| Element        | `Html::ELEMENT('MARK')` |  |`Html::_INS()`/`Html::xINS()`|
| `Html::DT()`| Element        | `Html::ELEMENT('PRE')` |   |`Html::_DEL()`/`Html::xDEL()`|
| `Html::DD()`| Element        | `Html::ELEMENT('RT')`    |  |`Html::_KBD()`/`Html::xKBD()`|
| `Html::DFN()`| Element        | `Html::ELEMENT('RP')` |   |`Html::_MARK()`/`Html::xMARK()`|
| `Html::INS()`| Element        | `Html::ELEMENT('S')` |   |`Html::_PRE()`/`Html::xPRE()`|
| `Html::DEL()`| Element        | `Html::ELEMENT('SAMP')` |  |`Html::_RT()`/`Html::xRT()`|
| `Html::KBD()`| Element        | `Html::ELEMENT('STRONG')` |  |`Html::_RP()`/`Html::xRP()`|
| `Html::MARK()`| Element        | `Html::ELEMENT('SUB')`    |   |`Html::_S()`/`Html::xS()`|
| `Html::PRE()`| Element        | `Html::ELEMENT('SUP')` |   |`Html::_SAMP()`/`Html::xSAMP()`|
| `Html::RT()`| Element        | `Html::ELEMENT('WBR')`    |  |`Html::_STRONG()`/`Html::xSTRONG()`|
| `Html::RP()`| Element        | `Html::ELEMENT('Q')` |   |`Html::_SUB()`/`Html::xSUB()`|
| `Html::S()`| Element        | `Html::ELEMENT('HEAD')` |  |`Html::_SUP()`/`Html::xSUP()`|
| `Html::SAMP()`| Element        | `Html::ELEMENT('TITLE')`  |  |`Html::_WBR()`/`Html::xWBR()`|
| `Html::STRONG()`| Element        | `Html::ELEMENT('BODY')` |  |`Html::_Q()`/`Html::xQ()`|
| `Html::SUB()`| Element        | `Html::ELEMENT('HTML')`    |  |`Html::_HEAD()`/`Html::xHEAD()`|
| `Html::SUP()`| Element        | `Html::ELEMENT('BLOCKQUOTE')`    |  |`Html::_TITLE()`/`Html::xTITLE()`|
| `Html::WBR()`| Element        |       |  |`Html::_BODY()`/`Html::xBODY()`|
| `Html::Q()`| Element          |       |  |`Html::_noHTML()`/`Html::xnoHTML()`|
| `Html::HEAD()`| Element        |      |  |
| `Html::TITLE()`| Element       |      |  |
| `Html::BODY()`| Element        |      |  |
| `Html::noHTML()`| Element      |      |  |

| Extra Methods    |  Description  |
| ---            | ---         |
| `SetElemAttr()`    | __Usage:__  Html::_ELEMENT('A', SetElementAttributes(['href'],['mysite.com'])); |
| `SetFileExtension()`       | __Usage:__ $extension = Html::SetExtension(PARAM) - use this to assign extension or format to the file such as.. <br /> __Parameters:__ `__PHP__`,  `__HTML__`, `__CSS__`,  `__JS__`,   `__JPG__`, `__JPEG__`, `__PNG__`,  `__GIF__`,  `__BMP__`, `__TEX__`, `__XLS__`,  `__XLSX__`, `__DOCX__`, `__DOCX__`, `__PPT__`, `__PPTX__`, `__ODT__`,  `__TXT__`,  `__RTF__` |
| `MERGE()`       | __Usage:__ Html::_MERGE(Html::Function1().Html::Function2()); - use this to print two methods or function one at the time ex. heading and content <br /> __Parameter:__ Any PHPHtml-Optimizer Pre-defined Associated Function(); |
| `__magicELSE()`  | __Usage:__ H1(Html::__magicELSE( FALSE ,'Yes','PHPHtml-Optimizer/Merge: NO', FUNC_ASSOC)) - use to append within methods <br /> (*Not support GLOBAL VARIABLE ! ) / alternative ternary |
| `__magicIF()`    | __Usage:__ H1(Html::__magicIF( TRUE ,'PHPHtml-Optimizer/Merge: Yes', FUNC_ASSOC)); - With multiple condition <br /> (*Not support GLOBAL VARIABLE ! ) / alternative ternary |


<h6>PHPHtml-Optimizer Merge Version</h6>
<p>PHPHtml-Merge version is more shorthand and simplier than PHPHTML-Optimizer in terms of functionality Both Optimizer is absolutely the same, The difference is the way you call the function and the way you use it.</p>

<h5>ELEMENTS and parameters </h5>

```PHP

// Merge version Associated or simply means return function
_xHTML($elem=null, $value=null, $attr=null, $id=null, $class=null, $label=null);

// Merge version Optional Associated or simply print or return if set as associated function
__HTML($label=null, $elem=null,  $attr=null, $id=null, $class=null, $assoc=null);

// Merge version Optional Associated or simply print or return if set as associated function
_xH1( $value=null,  $attr=null, $id=null, $class=null, $label=null, $assoc=null ); 

// Merge version None or never be Associated or simply print function
_H1($attr=null, $id=null, $class=null) 

... content goes here ...

xH1($label = NULL)

//Merge version Associated or simply return function
_MERGE($elem=null,  $attr=null, $id=null, $class=null);

... content goes here ...

xMERGE($elem=null);

```

<h5>Functions List HTML supported</h5>

|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED | Opt.ASSOCIATED/Inline noneClosing tag |  None ASSOCIATED _H1(begin)/xH1(end) | ASSOCIATED/Merge Version _(begin)/x(End) |
|:---            |:---            |:---            |:---                           |:---                                  |:--- |
| `_xH1()`         | Heading 1      | `_xHTML('H1')` |`__HTML('my_input','INPUT')`   |`_H1()`/`xH1()`                       |`_MERGE('H1')`/`xMERGE('H1')` |
| `_xH2()`         | Heading 2      | `_xHTML('H2')` |`__HTML('my_track','track')`   |`_H2()`/`xH2()`                       |`_MERGE('H2')`/`xMERGE('H2')` |
| ...            | ...            | ...            |...                            |...                                   | <a href="#element">loading...</a>                   |


*Merge not support HTML : _I(italic)/xI(italic), _B(bold)/xB(bold), _Q(Q)/xQ(Q), _a(a link)/xa(a link);
<br />
__*NOTE ! For Updates use new version for new project Migrate version not supported.

For installation <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Installations"> Process link here </a><br /> 
To Request Download File <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer"> PHPHtml-Optimizer link here </a><br /> 
For File Enhancers and <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Enhancers"> Documentation/Reference link here </a><br /> 
For Developer <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer/issues"> Support link here </a><br /> 
This Library is 100% secured and fully free ready to use, If you see vulnerability you can email me: @ nieldigitalsolution@gmail.com

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHPHtml-Optimizer PHP Library to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
w3school : HTML Elements reference</h5>

__For Suggestion and Donation/Sponsorship You can send via GCash : +639650332900__ <br />
__Also You can send via Paypal account: syncdevprojects@gmail.com__ <br />
Thanks and good luck! 





































































