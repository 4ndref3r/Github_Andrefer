    <!-- Page Wrapper -->
<div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak="">
    <!-- Sidebar -->
    <div class="sidebar print:hidden">
      <!-- Main Sidebar -->
      <div class="main-sidebar">
        <div
          class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
          <!-- Application Logo -->
          <div class="flex pt-4">
            <a href="index.htm.html">
              <img class="size-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                src="<?php echo  URL;?>public/images/app-logo.png" alt="logo">
            </a>
          </div>

          <!-- Main Sections Links -->
          <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
            <!-- Inicio -->
            <a href="<?php echo constant('URL').'admin'; ?>"
              class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              x-tooltip.placement.right="'Inicio'">
              <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24">
                <path fill="currentColor" fill-opacity=".3"
                  d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z">
                </path>
                <path fill="currentColor"
                  d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z">
                </path>
                <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path>
                <path fill="currentColor"
                  d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"></path>
              </svg>
            </a>

            <!-- Usuarios -->
            <a href="<?php echo constant('URL').'admin/adm_users'; ?>"
              class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              x-tooltip.placement.right="'Usuarios'">
              <svg class="h-7 w-7" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5 8H19V16C19 17.8856 19 18.8284 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5 18.8284 5 17.8856 5 16V8Z"
                  fill="currentColor" fill-opacity="0.3"></path>
                <path
                  d="M12 8L11.7608 5.84709C11.6123 4.51089 10.4672 3.5 9.12282 3.5V3.5C7.68381 3.5 6.5 4.66655 6.5 6.10555V6.10555C6.5 6.97673 6.93539 7.79026 7.66025 8.2735L9.5 9.5"
                  stroke="currentColor" stroke-linecap="round"></path>
                <path
                  d="M12 8L12.2392 5.84709C12.3877 4.51089 13.5328 3.5 14.8772 3.5V3.5C16.3162 3.5 17.5 4.66655 17.5 6.10555V6.10555C17.5 6.97673 17.0646 7.79026 16.3397 8.2735L14.5 9.5"
                  stroke="currentColor" stroke-linecap="round"></path>
                <rect x="4" y="8" width="16" height="3" rx="1" fill="currentColor"></rect>
                <path d="M12 11V15" stroke="currentColor" stroke-linecap="round"></path>
              </svg>
            </a>

            <!-- Académico -->
            <a href="<?php echo constant('URL').'admin/adm_acad'; ?>"
              class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              x-tooltip.placement.right="'Académico'">
              <svg class="h-7 w-7" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.85714 3H4.14286C3.51167 3 3 3.51167 3 4.14286V9.85714C3 10.4883 3.51167 11 4.14286 11H9.85714C10.4883 11 11 10.4883 11 9.85714V4.14286C11 3.51167 10.4883 3 9.85714 3Z"
                  fill="currentColor"></path>
                <path
                  d="M9.85714 12.8999H4.14286C3.51167 12.8999 3 13.4116 3 14.0428V19.757C3 20.3882 3.51167 20.8999 4.14286 20.8999H9.85714C10.4883 20.8999 11 20.3882 11 19.757V14.0428C11 13.4116 10.4883 12.8999 9.85714 12.8999Z"
                  fill="currentColor" fill-opacity="0.3"></path>
                <path
                  d="M19.757 3H14.0428C13.4116 3 12.8999 3.51167 12.8999 4.14286V9.85714C12.8999 10.4883 13.4116 11 14.0428 11H19.757C20.3882 11 20.8999 10.4883 20.8999 9.85714V4.14286C20.8999 3.51167 20.3882 3 19.757 3Z"
                  fill="currentColor" fill-opacity="0.3"></path>
                <path
                  d="M19.757 12.8999H14.0428C13.4116 12.8999 12.8999 13.4116 12.8999 14.0428V19.757C12.8999 20.3882 13.4116 20.8999 14.0428 20.8999H19.757C20.3882 20.8999 20.8999 20.3882 20.8999 19.757V14.0428C20.8999 13.4116 20.3882 12.8999 19.757 12.8999Z"
                  fill="currentColor" fill-opacity="0.3"></path>
              </svg>
            </a>

            <!-- Horarios -->
            <a href="<?php echo constant('URL').'admin/adm_horarios'; ?>"
              class="flex size-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
              x-tooltip.placement.right="'Horarios'">
              <svg class="h-7 w-7" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-opacity="0.25"
                  d="M21.0001 16.05V18.75C21.0001 20.1 20.1001 21 18.7501 21H6.6001C6.9691 21 7.3471 20.946 7.6981 20.829C7.7971 20.793 7.89609 20.757 7.99509 20.712C8.31009 20.586 8.61611 20.406 8.88611 20.172C8.96711 20.109 9.05711 20.028 9.13811 19.947L9.17409 19.911L15.2941 13.8H18.7501C20.1001 13.8 21.0001 14.7 21.0001 16.05Z"
                  fill="currentColor"></path>
                <path fill-opacity="0.5"
                  d="M17.7324 11.361L15.2934 13.8L9.17334 19.9111C9.80333 19.2631 10.1993 18.372 10.1993 17.4V8.70601L12.6384 6.26701C13.5924 5.31301 14.8704 5.31301 15.8244 6.26701L17.7324 8.17501C18.6864 9.12901 18.6864 10.407 17.7324 11.361Z"
                  fill="currentColor"></path>
                <path
                  d="M7.95 3H5.25C3.9 3 3 3.9 3 5.25V17.4C3 17.643 3.02699 17.886 3.07199 18.12C3.09899 18.237 3.12599 18.354 3.16199 18.471C3.20699 18.606 3.252 18.741 3.306 18.867C3.315 18.876 3.31501 18.885 3.31501 18.885C3.32401 18.885 3.32401 18.885 3.31501 18.894C3.44101 19.146 3.585 19.389 3.756 19.614C3.855 19.731 3.95401 19.839 4.05301 19.947C4.15201 20.055 4.26 20.145 4.377 20.235L4.38601 20.244C4.61101 20.415 4.854 20.559 5.106 20.685C5.115 20.676 5.11501 20.676 5.11501 20.685C5.25001 20.748 5.385 20.793 5.529 20.838C5.646 20.874 5.76301 20.901 5.88001 20.928C6.11401 20.973 6.357 21 6.6 21C6.969 21 7.347 20.946 7.698 20.829C7.797 20.793 7.89599 20.757 7.99499 20.712C8.30999 20.586 8.61601 20.406 8.88601 20.172C8.96701 20.109 9.05701 20.028 9.13801 19.947L9.17399 19.911C9.80399 19.263 10.2 18.372 10.2 17.4V5.25C10.2 3.9 9.3 3 7.95 3ZM6.6 18.75C5.853 18.75 5.25 18.147 5.25 17.4C5.25 16.653 5.853 16.05 6.6 16.05C7.347 16.05 7.95 16.653 7.95 17.4C7.95 18.147 7.347 18.75 6.6 18.75Z"
                  fill="currentColor"></path>
              </svg>
            </a>


 
          </div>

          <!-- Bottom Links -->
          <div class="flex flex-col items-center space-y-3 py-3">
            <!-- Profile -->
            <div x-data="usePopper({placement:'right-end',offset:12})"
              @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
              <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar size-12">
                <img class="rounded-full" src="<?php echo  URL;?>public/images/avatar/avatar-12.jpg" alt="avatar">
                <span
                  class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
              </button>

              <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                <div
                  class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                  <div class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800">
                    <div class="avatar size-14">
                      <img class="rounded-full" src="<?php echo  URL;?>public/images/avatar/avatar-12.jpg" alt="avatar">
                    </div>
                    <div>
                      <a href="#"
                        class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                        Andre Ajno
                      </a>
                      <p class="text-xs text-slate-400 dark:text-navy-300">
                        Administrador
                      </p>
                    </div>
                  </div>
                  <div class="flex flex-col pt-2 pb-5">
                    <a href="#"
                      class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                      <div class="flex size-8 items-center justify-center rounded-lg bg-warning text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewbox="0 0 24 24"
                          stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                      </div>

                      <div>
                        <h2
                          class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                          Perfil
                        </h2>
                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                          Modifica tus datos
                        </div>
                      </div>
                    </a>
                    <div class="mt-3 px-4">
                      <a href="<?php echo constant('URL');?>logout"
                        class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewbox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                          </path>
                        </svg>
                        <span>Cerrar sesión</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar Panel -->
      <div class="sidebar-panel">
        <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
          <!-- Sidebar Panel Header -->
          <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
            <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">
              Academico
            </p>
            <button @click="$store.global.isSidebarExpanded = false"
              class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewbox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
          </div>

          <!-- Sidebar Panel Body -->
          <div x-data="{expandedItem:null}" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
            x-init="$el._x_simplebar = new SimpleBar($el);">
            <ul class="flex flex-1 flex-col px-4 font-inter">
            <li>
                <a x-data="navLink" href="index.htm.html"
                  :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                  class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                  Asignaturas
                </a>
              </li>
              <li>
                <a x-data="navLink" href="index.htm.html"
                  :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                  class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                  Aulas
                </a>
              </li>
              <li>
                <a x-data="navLink" href="index.htm.html"
                  :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                  class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                  Institución
                </a>
              </li>
              <li>
                <a x-data="navLink" href="index.htm.html"
                  :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                  class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                  Docentes
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- App Header Wrapper-->
    <nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
      <!-- App Header  -->
      <div class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden">
        <!-- Header Items -->
        <div class="flex w-full items-center justify-between">
          <!-- Left: Sidebar Toggle Button -->
          <div class="h-7 w-7">
            <button
              class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
              :class="$store.global.isSidebarExpanded && 'active'"
              @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>

          <!-- Right: Header buttons -->
          <div class="-mr-1.5 flex items-center space-x-2">
            <!-- Dark Mode Toggle -->
            <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
              class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
              <svg x-show="$store.global.isDarkModeEnabled"
                x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                class="size-6 text-amber-400" fill="currentColor" viewbox="0 0 24 24">
                <path
                  d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z">
                </path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" x-show="!$store.global.isDarkModeEnabled"
                x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                class="size-6 text-amber-400" viewbox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Monochrome Mode Toggle -->
            <button @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled"
              class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
              <i
                class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
            </button>
            <!-- Notification-->
            <div x-effect="if($store.global.isSearchbarActive) isShowPopper = false"
              x-data="usePopper({placement:'bottom-end',offset:12})"
              @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
              <button @click="isShowPopper = !isShowPopper" x-ref="popperRef"
                class="btn relative size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-500 dark:text-navy-100"
                  stroke="currentColor" fill="none" viewbox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z">
                  </path>
                </svg>

                <span class="absolute -top-px -right-px flex size-3 items-center justify-center">
                  <span
                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"></span>
                  <span class="inline-flex size-2 rounded-full bg-secondary"></span>
                </span>
              </button>
              <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">
                <div x-data="{activeTab:'tabAll'}"
                  class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark sm:m-0 sm:w-80">
                  <div class="rounded-t-lg bg-slate-100 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                    <div class="flex items-center justify-between px-4 pt-2">
                      <div class="flex items-center space-x-2">
                        <h3 class="font-medium text-slate-700 dark:text-navy-100">
                          Notifications
                        </h3>
                        <div
                          class="badge h-5 rounded-full bg-primary/10 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                          26
                        </div>
                      </div>

                      <button
                        class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewbox="0 0 24 24"
                          stroke="currentColor" stroke-width="1.5">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                          </path>
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                          </path>
                        </svg>
                      </button>
                    </div>

                    <div class="is-scrollbar-hidden flex shrink-0 overflow-x-auto px-3">
                      <button @click="activeTab = 'tabAll'"
                        :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        <span>All</span>
                      </button>
                      <button @click="activeTab = 'tabAlerts'"
                        :class="activeTab === 'tabAlerts' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        <span>Alerts</span>
                      </button>
                      <button @click="activeTab = 'tabEvents'"
                        :class="activeTab === 'tabEvents' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        <span>Events</span>
                      </button>
                      <button @click="activeTab = 'tabLogs'"
                        :class="activeTab === 'tabLogs' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        <span>Logs</span>
                      </button>
                    </div>
                  </div>

                  <div class="tab-content flex flex-col overflow-hidden">
                    <div x-show="activeTab === 'tabAll'" x-transition:enter="transition-all duration-300 easy-in-out"
                      x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                      x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                      class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                          <i class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            User Photo Changed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            John Doe changed his avatar photo
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, June 14, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">08:00 - 09:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Frontend Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                          <i class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Images Added
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Mores Clarke added new image gallery
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                          <i class="fa fa-leaf text-success"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Design Completed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Robert Nolan completed the design of the CRM
                            application
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, June 21, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">16:00 - 20:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">UI/UX Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <i class="fa fa-project-diagram text-warning"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            ER Diagram
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Team completed the ER diagram app
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            THU, May 11, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">10:00 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Konnor Guzman
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                          <i class="fa fa-history text-error"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Weekly Report
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            The weekly report was uploaded
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabAlerts'" x-transition:enter="transition-all duration-300 easy-in-out"
                      x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                      x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                      class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                          <i class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            User Photo Changed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            John Doe changed his avatar photo
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                          <i class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Images Added
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Mores Clarke added new image gallery
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                          <i class="fa fa-leaf text-success"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Design Completed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Robert Nolan completed the design of the CRM
                            application
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <i class="fa fa-project-diagram text-warning"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            ER Diagram
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Team completed the ER diagram app
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                          <i class="fa fa-history text-error"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Weekly Report
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            The weekly report was uploaded
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabEvents'" x-transition:enter="transition-all duration-300 easy-in-out"
                      x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                      x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                      class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, June 14, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">08:00 - 09:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Frontend Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, June 21, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">16:00 - 20:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">UI/UX Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            THU, May 11, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">10:00 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Konnor Guzman
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, Jul 16, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">06:00 - 16:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Laravel Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, Jun 16, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">15:30 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Jonh Doe
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabLogs'" x-transition:enter="transition-all duration-300 easy-in-out"
                      x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                      x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                      class="is-scrollbar-hidden overflow-y-auto px-4">
                      <div class="mt-8 pb-8 text-center">
                        <img class="mx-auto w-36" src="<?php echo  URL;?>public/images/illustrations/empty-girl-box.svg" alt="image">
                        <div class="mt-5">
                          <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                            No any logs
                          </p>
                          <p class="text-slate-400 dark:text-navy-300">
                            There are no unread logs yet
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
