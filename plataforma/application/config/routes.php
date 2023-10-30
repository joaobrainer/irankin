<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['consentimento'] = 'home/loadConsentimento';

$route['perguntas/3'] = 'perguntas/loadPergunta3';
$route['perguntas/4'] = 'perguntas/loadPergunta4';
$route['perguntas/5'] = 'perguntas/loadPergunta5';
$route['perguntas/6'] = 'perguntas/loadPergunta6';
$route['perguntas/8'] = 'perguntas/loadPergunta8';
$route['perguntas/9'] = 'perguntas/loadPergunta9';

$route['perguntas/11'] = 'perguntas/loadPergunta11';
$route['perguntas/12'] = 'perguntas/loadPergunta12';
$route['perguntas/13'] = 'perguntas/loadPergunta13';
$route['perguntas/14'] = 'perguntas/loadPergunta14';
$route['perguntas/15'] = 'perguntas/loadPergunta15';
$route['perguntas/16'] = 'perguntas/loadPergunta16';
$route['perguntas/17'] = 'perguntas/loadPergunta17';
$route['perguntas/18'] = 'perguntas/loadPergunta18';
$route['perguntas/19'] = 'perguntas/loadPergunta19';

$route['perguntas/20'] = 'perguntas/loadPergunta20';
$route['perguntas/21'] = 'perguntas/loadPergunta21';
$route['perguntas/22'] = 'perguntas/loadPergunta22';
$route['perguntas/23'] = 'perguntas/loadPergunta23';
$route['perguntas/24'] = 'perguntas/loadPergunta24';
$route['perguntas/25'] = 'perguntas/loadPergunta25';
$route['perguntas/26'] = 'perguntas/loadPergunta26';
$route['perguntas/27'] = 'perguntas/loadPergunta27';
$route['perguntas/28'] = 'perguntas/loadPergunta28';
$route['perguntas/29'] = 'perguntas/loadPergunta29';

$route['perguntas/30'] = 'perguntas/loadPergunta30';
$route['perguntas/31'] = 'perguntas/loadPergunta31';
$route['perguntas/32'] = 'perguntas/loadPergunta32';
$route['perguntas/33'] = 'perguntas/loadPergunta33';
$route['perguntas/34'] = 'perguntas/loadPergunta34';
$route['perguntas/35'] = 'perguntas/loadPergunta35';
$route['perguntas/36'] = 'perguntas/loadPergunta36';

$route['perguntas/41'] = 'perguntas/loadPergunta41';
$route['perguntas/42'] = 'perguntas/loadPergunta42';


$route['pontuacao'] = 'perguntas/loadPontuacao';

$route['sobre'] = 'perguntas/loadSobre';
$route['privacypolicy'] = 'home/loadPrivacyPolicy';

$route['validation'] = 'home/loadValidation';
$route['redirectValidation/(:any)'] = 'home/redirectValidation/$1';