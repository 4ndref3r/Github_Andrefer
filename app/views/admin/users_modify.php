<?php  
    $user = $this->d['user'];
    $usuario = $user->getUsuario();
    $editar = $this->d['editar'];
?>
<?php  require_once "./app/views/inc/head.php"; ?>
<?php  require_once "./app/views/inc/admin.php"; ?>

    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
      <div
        class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex items-center justify-between space-x-2">
            <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
              Bienvenido <?php echo  $usuario; ?>
            </h2>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-8">
          <div class="col-span-12 sm:col-span-8">
            <form action="<?php echo constant('URL'); ?>admin/update_adm" method="post">
            <div class="card p-4 sm:p-5">
              <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                Modificar usuario
              </p>
              <div class="mt-4 space-y-4">
                <label class="block">
                  <span>Correo/Usuario:</span>
                  <span class="relative mt-1.5 flex">
                    <input name="id" type="hidden" value="<?php echo $editar->getId(); ?>">
                    <input name="usuario" value="<?php echo $editar->getUsuario(); ?>" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Nombre de usuario" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa-regular fa-building text-base"></i>
                    </span>
                  </span>
                </label>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Nombre:</span>
                    <span class="relative mt-1.5 flex">
                      <input name="nombre" value="<?php echo $editar->getNombre(); ?>" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your Name" type="text">
                      <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                        <i class="far fa-user text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Rol</span>
                        <select name="rol" value="<?php echo $editar->getRol(); ?>" class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" type="text">
                            <option value="Docente">Docente</option>
                            <option value="Admin">Administrador</option>
                        </select> 
                  </label>
                </div>
                <div class="flex justify-end space-x-2">
                  <a href="<?php echo constant('URL'); ?>admin/adm_users" class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewbox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Cancelar</span>
                  </a>
                    <input type="submit" class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" value="Modificar">
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
    </main>                   
<?php   require_once "./app/views/inc/footer.php"; ?>