"use strict";

var burger = document.querySelector('.burger');
var navlist = document.querySelector('.nav-list');
var rightnav = document.querySelector('.rightnav');
var navbar = document.querySelector('.navbar');
console.log(burger);
burger.addEventListener('click', function () {
  rightnav.classList.toggle('v-class');
  navlist.classList.toggle('v-class');
  navbar.classList.toggle('h-nav');
});