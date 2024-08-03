    <?php
        require "./app/views/inc/head.php";
    ?>
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
      <div class="app-preloader-inner relative inline-block size-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak="">
      <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[26rem] p-4 sm:px-5">
          <div class="text-center">
            <img class="mx-auto size-16" src="<?php echo  URL;?>public/images/app-logo.png" alt="logo">
            <div class="mt-4">
              <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                Bienvenido
              </h2>
              <p class="text-slate-400 dark:text-navy-300">
                Inicia sesión para continuar
              </p>
            </div>
          </div>
          
          <div class="card mt-5 rounded-lg p-5 lg:p-7">
          <form action="<?php echo constant('URL'); ?>login/authenticate" method="POST">
            <label class="block">
              <span>Usuario</span>
              <span class="relative mt-1.5 flex">
                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Ingresa usuario" type="text" name="usuario" id="usuario" autocomplete="off">
                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </span>
              </span>
            </label>
            <label class="mt-4 block">
              <span>Contraseña</span>
              <span class="relative mt-1.5 flex">
                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Ingresa contraseña" type="password" name="password" id="password">
                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                  </svg>
                </span>
              </span>
            </label>
            <div class="mt-4 flex items-center justify-between space-x-2">
              <label class="inline-flex items-center space-x-2">
                <span class="line-clamp-1"><?php $this->showMessages(); ?></span>
              </label>
            </div>
            <div class="mt-4 flex items-center justify-between space-x-2">
              <label class="inline-flex items-center space-x-2">
                <span class="line-clamp-1"></span>
              </label>
              <a class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100" href="<?php echo  URL;?>app/views/login/forgetPassword.php">Olvidaste tu contraseña?</a>
            </div>
            <input class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" value="Iniciar sesión" type="submit">
          </form>
            <div class="mt-4 text-center text-xs+">
              <p class="line-clamp-1">
                <span>No tienes cuenta?</span>

                <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="<?php echo constant('URL'); ?>signup/">Registrarse</a>
              </p>
            </div>
            <div class="my-7 flex items-center space-x-3">
              <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
              <p>O</p>
              <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
            </div>
            <div class="flex space-x-4">
              <button class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                <img class="size-5.5" src="<?php echo  URL;?>public/images/logos/google.svg" alt="logo">
                <span>Google</span>
              </button>
            </div>
          </div>
          <div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <a href="#">Privacidad</a>
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <a href="#">Condiciones de servicio</a>
          </div>
        </div>
      </main>
    </div>
    <?php 
        require_once "./app/views/inc/footer.php";   
    ?>