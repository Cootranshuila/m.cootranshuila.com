"use strict";
var routes = [

  {
    path: '/',
    Url: './assets/index.html',
  },

  {
    path: '/room-single/',
    url: './assets/room-single.html',
  },

  {
    path: '/about-us/',
    url: './assets/about-us.html',
  },

   {
    path: '/blog/',
    url: './assets/blog.html',
  },

   {
    path: '/blog-single/',
    url: './assets/blog-single.html',
  },

  {
    path: '/contact-us/',
    url: './assets/contact-us.html',
  },

  {
    path: '/sign-in/',
    url: './assets/sign-in.html',
  },

  {
    path: '/sign-up/',
    url: './assets/sign-up.html',
  },

  {
    path: '/compra/',
    url: './assets/compra.html',
  },

  {
    path: '/nuestra-flota/',
    url: './assets/nuestra-flota.html',
    routes: [
      {
        path: 'condiciones/',
        url: './assets/condiciones.html',
      },
    ],
  },

  {
    path: '/page-not-found/',
    url: './assets/page-not-found.html',
  },

  {
    path: '/profile/',
    popup: {
      content: `
        <div class="popup">
          <div class="view">
            <div class="page" id="content-profile">

            </div>
          </div>
        </div>
      `,
      on: {
        open: function () {
          perfil()
        }
      }
    }
  },

  {
    path: '(.*)',
    url: './assets/page-not-found.html',
  },

];