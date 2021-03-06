'use strict';

/**
 * Fitxer principal de l'aplicació Angular.js. Aquí es defineix l'aplicació
 * "panellApp" i les rutes de tota la SPA (single page aplication).
 * 
 * @author: Biel <bielbcm@gmail.com>
 * 
 */
var panellApp = angular.module('panellApp', [
// angular modules
'ngRoute', 'ngResource', 'mwl.calendar', 'ui.bootstrap',
// controllers
'panellAppControllers',
// services
'panellAppServices', 'underscore' ]);

/**
 * Aquí estan definides les rutes de la SPA. Per cada regla, es defineix el
 * template html i el controller encarregat de gestionar la página.
 * 
 * @author: Biel <bielbcm@gmail.com>
 */
panellApp.config([ '$routeProvider', '$httpProvider',
		function($routeProvider, $httpProvider) {

			$routeProvider.when('/panell', {
				templateUrl : 'ng-views/panell.html',
				controller : 'PanellCtrl'
			})
			// vistes administració de centres
			.when('/centres', {
				templateUrl : 'ng-views/centres.html',
				controller : 'CentresListCtrl'
			}).when('/centres-add', {
				templateUrl : 'ng-views/centres-add.html',
				controller : 'CentresAddCtrl'
			}).when('/centres-edit/:id', {
				templateUrl : 'ng-views/centres-edit.html',
				controller : 'CentresEditCtrl'
			})
			// vistes administració d'usuaris
			.when('/usuaris', {
				templateUrl : 'ng-views/usuaris.html',
				controller : 'UsuarisListCtrl'
			}).when('/usuaris-add', {
				templateUrl : 'ng-views/usuaris-add.html',
				controller : 'UsuarisAddCtrl'
			}).when('/usuaris-edit/:id', {
				templateUrl : 'ng-views/usuaris-edit.html',
				controller : 'UsuarisEditCtrl'
			})
			// missatges
			.when('/missatges', {
				templateUrl : 'ng-views/missatges.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-professorat', {
				templateUrl : 'ng-views/missatges-professorat.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-alumnat', {
				templateUrl : 'ng-views/missatges-alumnat.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-llegits', {
				templateUrl : 'ng-views/missatges-llegits.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-enviats', {
				templateUrl : 'ng-views/missatges-enviats.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-new', {
				templateUrl : 'ng-views/missatges-new.html',
				controller : 'MissatgesListCtrl'
			}).when('/missatges-read', {
				templateUrl : 'ng-views/missatges-read.html',
				controller : 'MissatgesListCtrl'
			}).when('/calendari', {
				templateUrl : 'ng-views/calendari.html',
				controller : 'CalendariCtrl'
			}).when('/tramits', {
				templateUrl : 'ng-views/tramits.html',
				controller : 'TramitsCtrl'
			}).when('/tramit-alegacions', {
				templateUrl : 'ng-views/tramit-alegacions.html',
				controller : 'TramitsCtrl'
			}).when('/tramit-alegacions-88', {
				templateUrl : 'ng-views/tramit-alegacions-88.html',
				controller : 'TramitsCtrl'
			}).when('/tramit-anulacions', {
				templateUrl : 'ng-views/tramit-anulacions.html',
				controller : 'TramitsCtrl'
			}).when('/perfil', {
				templateUrl : 'ng-views/perfil.html',
				controller : 'PerfilCtrl'
			})

			.when('/expedient', {
				templateUrl : 'ng-views/expedient.html',
				controller : 'PanellCtrl'
			})

            //avaluacio
            .when('/avaluacio-gestor', {
                templateUrl : 'ng-views/avaluacio-gestor.html',
                controller : 'AvaluacioGestorCtrl'
            })
            .when('/avaluacio-edit/:id', {
                templateUrl : 'ng-views/avaluacio-edit.html',
                controller : 'AvaluacioEditCtrl'
            })

			.when('/avaluacio-dam-m02', {
				templateUrl : 'ng-views/avaluacio-dam-m02.html',
				controller : 'PanellCtrl'
			})

			.when('/avaluacio-dam-m03', {
				templateUrl : 'ng-views/avaluacio-dam-m03.html',
				controller : 'PanellCtrl'
			})

			.when('/avaluacio-dam-m06', {
				templateUrl : 'ng-views/avaluacio-dam-m06.html',
				controller : 'PanellCtrl'
			})

			.when('/logout', {
				templateUrl : 'ng-views/panell.html',
				controller : 'LogoutCtrl'
			}).otherwise({
				redirectTo : '/panell'
			});
		} ]);

/**
 * TODO: solucionar .metisMenu();
 * 
 * @author: Biel <bielbcm@gmail.com>
 */
$(function() {
	$('#side-menu').metisMenu();
});

/**
 * Carrega la sidebar on window load. Alhora, fa collapse del menu quan es
 * cambia el tamany de la finestra.
 * 
 * @author: Biel <bielbcm@gmail.com>
 */
$(function() {
	$(window)
			.bind(
					"load resize",
					function() {
						var topOffset = 50;
						var width = (this.window.innerWidth > 0) ? this.window.innerWidth
								: this.screen.width;
						if (width < 768) {
							$('div.navbar-collapse').addClass('collapse');
							topOffset = 100; // 2-row-menu
						} else {
							$('div.navbar-collapse').removeClass('collapse');
						}

						var height = ((this.window.innerHeight > 0) ? this.window.innerHeight
								: this.screen.height) - 1;
						height = height - topOffset;
						if (height < 1)
							height = 1;
						if (height > topOffset) {
							$("#page-wrapper").css("min-height",
									(height) + "px");
						}
					});

	/*
	 * var url = window.location; var element = $('ul.nav a').filter(function() {
	 * return this.href == url || url.href.indexOf(this.href) == 0;
	 * }).addClass('active').parent().parent().addClass('in').parent(); if
	 * (element.is('li')) { element.addClass('active'); }
	 */
});
