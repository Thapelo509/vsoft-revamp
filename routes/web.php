<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function (){
    return view('services.services');
 });

 //Services / Web services /
 Route::get('/services/web-services', function (){
    return view('services.web_services');
 });
// ----------------------------------------------------------------
 Route::get('/services/web-services/website-design', function (){
    return view('services.web_services.website_design');
 });
// ----------------------------------------------------------------
//  Route::get('/services/web-services/website-design', function (){
//     return view('services.web_services.website_design');
//  });

 Route::get('/services/web-services/web-maintenance', function (){
    return view('services.web_services.web_maintenance');
 });

 Route::get('/services/web-services/web-development', function (){
    return view('services.web_services.web_development');
 });

 Route::get('/services/web-services/graphic-design-&-logo-service', function (){
    return view('services.web_services.graphic_design_&_logo_service');
 });

 Route::get('/services/web-services/search-engine-optimization', function (){
    return view('services.web_services.search_engine_optimization');
 });

 Route::get('/services/web-services/(PPC)-Pay-Per-Click', function (){
    return view('services.web_services.(PPC)_Pay-Per-Click');
 });

 Route::get('/services/web-services/internet-marketing-(SEM)', function (){
    return view('services.web_services.internet_marketing_(SEM)');
 });

 Route::get('/services/web-services/website-design', function (){
    return view('services.web_services.website_design');
 });

 Route::get('/services/web-services/SEO-copywriting', function (){
    return view('services.web_services.SEO_copywriting');
 });

 //Services / Cyber Security /
Route::get('/services/cyber-security', function (){
    return view('services.cyber_and_intelligence_security');
});

Route::get('/services/cyber-security/analytical-analysis', function (){
    return view('services.cyber_and_intelligence_security.analytical_analysis');
});

Route::get('/services/cyber-security/biometric-solutions', function (){
    return view('services.cyber_and_intelligence_security.biometric_solutions');
});

Route::get('/services/cyber-security/digital-forensics', function (){
    return view('services.cyber_and_intelligence_security.digital_forensics_analytics');
});

Route::get('/services/cyber-security/extract-physical-data', function (){
    return view('services.cyber_and_intelligence_security.extract_physical_data');
});

Route::get('/services/cyber-security/hacker-detect', function (){
    return view('services.cyber_and_intelligence_security.hacker_detect');
});

Route::get('/services/cyber-security/information-security', function (){
    return view('services.cyber_and_intelligence_security.information_security');
});

Route::get('/services/cyber-security/lbs-tracker', function (){
    return view('services.cyber_and_intelligence_security.lbs_tracker');
});

Route::get('/services/cyber-security/risk_advisory', function (){
    return view('services.cyber_and_intelligence_security.risk_advisory');
});

Route::get('/services/cyber-security/security-integration', function (){
    return view('services.cyber_and_intelligence_security.security_integration');
});

Route::get('/services/cyber-security/smart-city-solutions', function (){
    return view('services.cyber_and_intelligence_security.smart_city_solutions');
});

Route::get('/services/cyber-security/smart-geo-fencing', function (){
    return view('services.cyber_and_intelligence_security.smart_geo_fencing');
});

Route::get('/services/cyber-security/ufed', function (){
    return view('services.cyber_and_intelligence_security.ufed');
});

Route::get('/services/software-dev', function (){
    return view('services.software_development');
});

