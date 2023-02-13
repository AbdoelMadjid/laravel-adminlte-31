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
    return view('pages.dashboard.dashboardv1',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Dashboard",
        ]
    );
});

//dashboard
Route::prefix('/dashboard')->group(function () {
    Route::get('/dashboardv2', function () {
        return view('pages.dashboard.dashboardv2',
            [
                "setting_content"=>"dark-mode",
                "setting_navbar"=>"navbar-dark",
                "title_content"=>"Dashboard V2",
            ]
        );
    });
    Route::get('/dashboardv3', function () {
        return view('pages.dashboard.dashboardv3',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Dashboard V3",
        ]
    );
    });
});

//widgets
Route::get('/widgets', function () {
    return view('pages.widgets',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Widgets",
        ]
    );
});

//charts
Route::prefix('/charts')->group(function () {
    Route::get('/chartjs', function () {
        return view('pages.charts.chartjs',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"ChartJS",
            ]
        );
    });
    Route::get('/flot', function () {
        return view('pages.charts.flot',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Flot",
        ]
    );
    });
    Route::get('/inline', function () {
        return view('pages.charts.inline',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"InLine",
        ]
    );
    });
    Route::get('/uplot', function () {
        return view('pages.charts.uplot',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"uPlot",
        ]
    );
    });
});

//tabel
Route::prefix('/tables')->group(function () {
    Route::get('/datatable', function () {
        return view('pages.tables.datatable',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"Data Tables",
            ]
        );
    });
    Route::get('/jsgrid', function () {
        return view('pages.tables.jdgrid',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"JDGrid Tables",
        ]
    );
    });
    Route::get('/simple', function () {
        return view('pages.tables.simple',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Simple Tables",
        ]
    );
    });
});

//form
Route::prefix('/forms')->group(function () {
    Route::get('/general', function () {
        return view('pages.forms.general',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"General Form",
            ]
        );
    });
    Route::get('/advanced', function () {
        return view('pages.forms.advanced',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Advanced Form",
        ]
    );
    });
    Route::get('/editors', function () {
        return view('pages.forms.editors',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Editors Form",
        ]
    );
    });
    Route::get('/validation', function () {
        return view('pages.forms.validation',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Validation Form",
        ]
    );
    });
});

//UI ELement
Route::prefix('/elements')->group(function () {
    Route::get('/general', function () {
        return view('pages.elements.general',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"General UI Elements",
            ]
        );
    });
    Route::get('/icons', function () {
        return view('pages.elements.icons',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Icons",
        ]
    );
    });
    Route::get('/buttons', function () {
        return view('pages.elements.buttons',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Buttons",
        ]
    );
    });
    Route::get('/sliders', function () {
        return view('pages.elements.sliders',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Sliders",
        ]
    );
    });
    Route::get('/modals', function () {
        return view('pages.elements.modals',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Modals & Alerts",
        ]
    );
    });
    Route::get('/navbar', function () {
        return view('pages.elements.navbar',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Navbar & Tabs",
        ]
    );
    });
    Route::get('/timeline', function () {
        return view('pages.elements.timeline',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Timeline",
        ]
    );
    });
    Route::get('/ribbons', function () {
        return view('pages.elements.ribbons',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Ribbons",
        ]
    );
    });
});


Route::get('/calendar', function () {
    return view('pages.calendar',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Calendar",
        ]
    );
});

Route::get('/gallery', function () {
    return view('pages.gallery',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Gallery",
        ]
    );
});

Route::get('/kanban', function () {
    return view('pages.kanban',
        [
            "setting_content"=>"layout-fixed",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Kanban Board",
        ]
    );
});

//project
Route::prefix('/projects')->group(function () {
    Route::get('/projects', function () {
        return view('pages.projects.projects',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"Projects",
            ]
        );
    });
    Route::get('/project-add', function () {
        return view('pages.projects.project-add',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Projects Add",
        ]
    );
    });
    Route::get('/project-edit', function () {
        return view('pages.projects.project-edit',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Projects Edit",
        ]
    );
    });
    Route::get('/project-detail', function () {
        return view('pages.projects.project-detail',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Projects Detail",
        ]
    );
    });
});

//example
Route::prefix('/examples')->group(function () {
    Route::get('/invoice', function () {
        return view('pages.examples.invoice',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"Invoice",
            ]
        );
    });
    Route::get('/profile', function () {
        return view('pages.examples.profile',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Profile",
        ]
    );
    });
    Route::get('/e-commerce', function () {
        return view('pages.examples.e-commerce',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"E-Commerce",
        ]
    );
    });
    Route::get('/contacts', function () {
        return view('pages.examples.contacts',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Contacts",
        ]
    );
    });
    Route::get('/faq', function () {
        return view('pages.examples.faq',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Faq",
        ]
    );
    });
    Route::get('/contact-us', function () {
        return view('pages.examples.contact-us',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Contact Us",
        ]
    );
    });
    Route::get('/invoice-print', function () {
        return view('pages.examples.invoice-print',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Contact Us",
        ]
    );
    });
});

//search
Route::prefix('/search')->group(function () {
    Route::get('/simple', function () {
        return view('pages.search.simple',
            [
                "setting_content"=>"",
                "setting_navbar"=>"navbar-white navbar-light",
                "title_content"=>"Search Simple",
            ]
        );
    });
    Route::get('/simple-results', function () {
        return view('pages.search.simple-results',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Simple Results",
        ]
    );
    });
    Route::get('/enhanced', function () {
        return view('pages.search.enhanced',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Search Enhanced",
        ]
    );
    });
    Route::get('/enhanced-results', function () {
        return view('pages.search.enhanced-results',
        [
            "setting_content"=>"",
            "setting_navbar"=>"navbar-white navbar-light",
            "title_content"=>"Enhanced Results",
        ]
    );
    });
});
