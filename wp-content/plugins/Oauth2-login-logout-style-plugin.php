<?php
/**
 * @package Oauth2-login-logout-style-plugin
 * @version 1.0.0
 */
/*
Plugin Name: Oauth2-login-logout-style-plugin
Description: In order to modify the login style of the ortur page
Version: 1.0.0
*/


function login_and_logout_style(){
    printf(

	'<script type="text/javascript">
		window.onload=function(){
		var logged_in_user=document.getElementById("logged_in_user");
		
		if(logged_in_user != null){
			document.getElementById("logged_in_user").children[0].innerHTML=document.getElementById("logged_in_user").children[0].innerHTML.toString().split("|")[1];
			var a = document.getElementById("logged_in_user").children[0].children[0];
			a.setAttribute("class","menu-link");
			logged_in_user.innerHTML="";
			var ul=document.getElementById("ast-hf-menu-1");
			var li =document.createElement("li");
			li.setAttribute("class","menu-item menu-item-type-post_type menu-item-object-page");
			li.appendChild(a);
			ul.appendChild(li);
			}else{
			var login_a =document.getElementsByClassName("mo_oauth_login_button_widget")[0].parentElement;
			login_a.innerText="Login";
				}

		var ddd=document.getElementsByClassName("login_wid")[1];
		if(ddd != null){
			var ul =document.getElementsByClassName("main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile")[1];
			var a=ddd.children[0].children[0];
			var li =document.createElement("li");
			li.setAttribute("class","menu-item menu-item-type-post_type menu-item-object-page");
			a.setAttribute("class","menu-link");
			li.appendChild(a);
			ul.appendChild(li);
			ddd.innerHTML="";
		}else{
			var login_a =document.getElementsByClassName("mo_oauth_login_button_widget")[0].parentElement;
			login_a.innerText="Login";
		}
		}
	</script>'
	);
}
// 这个钩子出现在前台的 <head> 里面。 
//WordPress 和插件经常用这个钩子来添加 meta 信息，样式表，和 js 脚本。
add_action('wp_print_scripts','login_and_logout_style');